<?php
   
   while($row =$liste->fetch(PDO::FETCH_ASSOC))
    {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
    OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $sql3="select * from users ,messages where users.unique_id=messages.incoming_msg_id";
$db = config::getConnexion();
$liste_1=$db->query($sql2);
$liste_2=$db->query($sql3);

$row2 = $liste_1->fetch(PDO::FETCH_ASSOC);
$row3 = $liste_2->fetch(PDO::FETCH_ASSOC);

($liste_1->rowCount() > 0) ? $result = $row2['msg'] : $result ="No message available";
(strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
if(isset($row2['outgoing_msg_id'])){
($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you =$row3['lname'].":";
}else{
$you ="";
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