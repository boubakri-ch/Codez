<?PHP
   require "C:/wamp64/www/web/core/produitOps.php";
  
   $perpage=3;
   if(isset($_GET['page']))
   {
       $page=$_GET['page'];
   }else
   {
       $page=1;
   }

   if($page>1)
   {
       $start=($page*$perpage) - $perpage;
   }else
   {
       $start=0;
   }
    $db = config::getConnexion();

	$produit=new produitOps();
	$liste_produit=$produit->afficherproduit($start,$perpage);	
    $sql_1="select count(produit.code_produits) as nb from produit";
    $count=$db->query($sql_1);
    
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="eng"> <!--<![endif]-->
<?php include_once "header.php"; ?>

<head>
    

   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->

<!-- Latest compiled JavaScript -->
    
<style type="text/css">


.content .table{
    overflow-y: auto;
    display: block;
    height: 400px;
}
</Style>
</head>
<body>
    <!-- Left Panel -->

    

        <div class="content" >
        <form enctype="multipart/form-data">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
</nav>
		<hr>
        <a class="Export" href="excel_produit.php">Export</a>

		<table class="" border=1 align = 'center' id="tab_produit">
        
			<tr>

				<th>Code produit</th>
				<th>Image</th>
				<th>nom</th>
				<th>description</th>
				<th>Catégorie</th>
                <th>Prix</th>


			</tr>
            <?php 
          
            ?>

			<?PHP
				foreach($liste_produit as $product){
                    $sql_1="select distinct categorie.libelle  from categorie,produit where categorie.code_categorie=".$product['code_categorie'];
                    $liblle=$db->query($sql_1);

			?>
				<tr>
					<td><?PHP echo $product['code_produits']; ?></td>
					<td width="200" height="200"><?PHP echo '<img src="data:image/;base64,'.base64_encode($product['image_produit']).'"height="200px" width="200px" >'; ?></td>
					<td><?PHP echo $product['nom']; ?></td>
					<td><?PHP echo $product['description']; ?></td>
               

                    <td> 
                        <?php foreach($liblle as $lib){?>
                        <?PHP echo $lib['libelle']; ?>   <?php } ?>
                    </td>
                 
                    <td><?PHP echo $product['prix']; ?>TND</td>


					<td>
					 <a class="supprimer" href="supprimer_produit.php?id=<?PHP echo $product['code_produits'];?>">Supprimer</a>
					 <a class="modifier" href="modifier_article.php?id_modif=<?PHP echo $product['code_produits'];?>">Modifier</a>
					</td>	
				</tr>
             
			<?PHP
				}
			?>
		</table>
        <?php
            foreach($count  as $c) {
              
           
            $halman=ceil(($c['nb']/$perpage)+1); 
           
            }
            for($i=1;$i<$halman;$i++)
            {
                echo "<a href='?page=$i'>$i</a>";
            
            }
            
           ?>     
        </form>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'recherche_prod.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_produit").html(response);
}
});
});
});
    </script>
        </div><!-- .content -->
  
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2021E Moatez Borgi
                    </div>
                    
                </div>
            </div>
        </footer>


    </div><!-- /#right-panel -->

   

</body>
</html>
