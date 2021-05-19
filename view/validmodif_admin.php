<?php   
     require "C:/wamp64/www/web/core/loginOps.php";
 session_start();


    $password=$_POST['pwd'];
        
   $id=$_SESSION['unique_id'];
if($password!=null)
{
 
    $a=new login (null,$id,$_POST['nom'],$_POST['prenom'],$_POST['mail'],md5($password),null);


    $login = new loginOps();
    $login->modifier_compte_pass($a);
    header("location:modifier_admin.php");
}
else
{
  
    $a=new login (null,$id,$_POST['nom'],$_POST['prenom'],$_POST['mail'],null,null);


    $login = new loginOps();
    $login->modifier_compte_pass_null($a);
    header("location:modifier_admin.php");


}

?>