<?php   
    include "C:/wamp64/www/web/core/fournisseurOps.php";
 
 
        

    $img_name=$_FILES['image']['name'];
    $img_type=$_FILES['image']['type'];
    $image_blob=file_get_contents($_FILES['image']['tmp_name']);
   
if($image_blob!=null)
{
 
$f=new fournisseur ($_POST['id'],$_POST['adresse'],$_POST['numero'],$image_blob,$_POST['nom']);


    $fournisseur = new fournisseurOps();
    $fournisseur->modifierfournisseur($f);
    header("location:afficher_fournisseur.php");
}
else
{
   $f=new fournisseur ($_POST['id'],$_POST['adresse'],$_POST['numero'],null,$_POST['nom']);


    $fournisseur = new fournisseurOps();
    $fournisseur->modifier_fournisseur($f);
    header("location:afficher_fournisseur.php");
}


?>