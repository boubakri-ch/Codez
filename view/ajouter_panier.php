<?php
include ("../core/panierOps.php");

 session_start();

 if(!isset($_SESSION['unique_id'])){
     
         

          header("location:account/page_login.php");
         
         
   }
   
       
   

   if(isset($_SESSION['fname'])&& isset( $_SESSION['lname']) && isset($_SESSION['unique_id']))
  
   {
       $nom=$_SESSION['fname'];
       $prenom=$_SESSION['lname'];
       $unique_id=$_SESSION['unique_id'];
   }
   $sql2 = "select prix from produit where code_produits=".$_GET['id_p'];

$db = config::getConnexion();
$liste_1=$db->query($sql2);
 
$row  = $liste_1->fetch(PDO::FETCH_ASSOC);
$p=new panier (null,$_GET['id_p'],1,$_SESSION['unique_id'],$row['prix']);


$panier= new panierOps();
$panier->ajouterpanier($p);
header("location:../view/products/detail.php?id=".$_GET['id_p']);


 ?>
