<?php 
    session_start();
    include "C:/wamp64/www/web/core/loginOps.php";
    $db = config::getConnexion();


    if(isset($_SESSION['unique_id'])){

        $outgoing_id = $_SESSION['unique_id'];
        
        $incoming_id =$_POST['incoming_id'];
        
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
$liste_m=$db->query($sql);
if($liste_m->rowCount()> 0){
            foreach($liste_m as $row_m)
            {
                if($row_m['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                    <div class="details">
                        <p>'. $row_m['msg'] .'</p>
                    </div>
                    </div>';
                                
                }else{
                    $output .= '<div class="chat incoming">
                    <div class="details">
                        <p>'. $row_m['msg'] .'</p>
                    </div>
                    </div>';
                    
                }

            }
        }else{
            $output .= "<div class=text>No messages are available. Once you send message they will appear here.</div>";
        }
    }
    echo $output;

?>