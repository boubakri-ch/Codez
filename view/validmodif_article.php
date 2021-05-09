<?php   
     require "C:/wamp64/www/web/core/produitOps.php";
 
 
        
    $img_name=$_FILES['image']['name'];
    $img_type=$_FILES['image']['type'];
    $image_blob=file_get_contents($_FILES['image']['tmp_name']);
    
if($image_blob!=null)
{
 
$p=new produit ($_POST['id_produit'],$image_blob,$_POST['desc'],$_POST['liste_cat'],$_POST['prix'],$_POST['nom']);


    $produit = new produitOps();
    $produit->modifierproduit($p);
    header("location:liste_articles.php");
}
else
{
    $p=new produit ($_POST['id_produit'],null,$_POST['desc'],$_POST['liste_cat'],$_POST['prix'],$_POST['nom']);


    $produit = new produitOps();
    $produit->modifier_produit($p);
    header("location:liste_articles.php");
}

?>