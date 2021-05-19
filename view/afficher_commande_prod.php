<?PHP
    include ("C:/wamp64/www/web/core/panierOps.php");
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
    $id=$_GET['id'];
	$panier=new panierOps();
	$liste=$panier->afficher_commande_produit($start,$perpage,$id);	
    $sql_1="select count(code_commande) as nb from commande where code_commande=".$id;
    $count=$db->query($sql_1);
    

 ?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <div class="content">
        <form enctype="multipart/form-data">

 

		<hr>
		<table class="table" border=1 align = 'center' id="tab_admin">
        
			<tr>

				<th>Code produit  </th>
				<th>nom</th>
				<th>quantite</th>
                <th>prix</th>
                




				
				


			</tr>

			<?PHP
				foreach($liste as $com){
                    

			?>
				<tr>
					
					<td><?PHP echo $com['code_produits']; ?></td>
					<td><?PHP echo $com['nom']; ?></td>
                    <td><?PHP echo $com['quantite']; ?></td>
                    <td>
                    
                    <?PHP echo $com['prix']; ?>
                    </td>

                 





               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_commande.php?id=<?PHP echo $com['code'];?>">Supprimer</a>
 



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
</div><!-- .content -->
    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>


</div><!-- /#right-panel -->

<!-- Right Panel -->
 

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'recherche_admin.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_admin").html(response);
}
});
});
});
    </script>
</body>
</html>
