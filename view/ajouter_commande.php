<?php 
include ("../core/panierOps.php");
$id=$_GET['id'];
$panier=new panierOps(); 

$liste_1=$panier->selectadresse($id);
$row2 = $liste_1->fetch(PDO::FETCH_ASSOC);
$adresse=$row2['adresse'];
$panier->ajouter_entete($id,$adresse);
$liste=$panier->selectcodecommande($id);

foreach($liste as $l)
{
$code_commande=$l['code'];

$panier->ajouter_commande($id,$code_commande);
$panier->vider_panier($id);
}

header('Location:cart.php'); 
?>