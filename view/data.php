<?php
   
foreach($liste as $row)
{
    $outgoing_id = $_SESSION['unique_id'];
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
    OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
$db = config::getConnexion();
$liste_1=$db->query($sql2);
foreach($liste_1 as $row2)
{
($liste_1->rowCount() > 0) ? $result = $row2['msg'] : $result ="No message available";
(strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
if(isset($row2['outgoing_msg_id'])){
($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
}else{
$you = "";
}
}

($row['statut'] == "offline") ? $offline = "offline" : $offline = "";

        $output .= '
        <a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'. $you . $msg .'</p>

                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>
                ';
}
?>