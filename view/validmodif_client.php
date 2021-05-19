<?php   
     require "C:/wamp64/www/web/core/clientOps.php";
 
 session_start();


    $password=$_POST['password'];
    $id=$_SESSION['unique_id'];


    if($password!=null)
{
    $c1=new client1(null,$id,$_POST['nom'],$_POST['prenom'],$_POST['mail'],md5($password),null,$_POST['adresse']);

 

    $client = new clientOps();
    $client->modifier_client_pass($c1);
     header("location:collections/all.php");
}
else
{
  
    $c1=new client1(null,$id,$_POST['nom'],$_POST['prenom'],$_POST['mail'],null,null,$_POST['adresse']);


    $client = new clientOps();
    $client->modifier_client_pass_null($c1);
    header("location:collections/all.php");


}

?>