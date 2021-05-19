<?PHP
    include ("../core/livreurOps.php");
    
    $db = config::getConnexion();
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
	$livreur=new livreurOps();
    $liste_livreur=$livreur->afficher_livreur($start,$perpage);		
    $sql_1="select count(livreur.code_livreur) as nb from livreur";
    $count=$db->query($sql_1)
	
    
?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
 
<body>
    <!-- Left Panel -->
 

        <div class="content">
        <form enctype="multipart/form-data">
      
		<hr>
        


        <a class="Export" href="ExportExcel.php">Export</a>
        <a class="Export" href="generation_pdf.php">Pdf</a>
		<table class="table" border=1 align = 'center'>
        
			<tr>

				<th>code_livreur </th>
				<th>nom</th>
				<th>prenom</th>
                <th>mail</th>
                <th>num_tel</th>


				
				


			</tr>

			<?PHP
            
				foreach($liste_livreur as $livreur){

                

			?>
				<tr>
                
					<td><?PHP echo $livreur['code_livreur']; ?></td>
					<td><?PHP echo $livreur['nom']; ?></td>
                    <td><?PHP echo $livreur['Prenom']; ?></td>
                    <td><?PHP echo $livreur['mail']; ?></td>
                    <td><?PHP echo $livreur['num_tel']; ?></td>
                   


               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_livreur.php?id=<?PHP echo $livreur['code_livreur'];?>">Supprimer</a>
                     <a class="modifier" href="modifier_livreur.php?id=<?PHP echo $livreur['code_livreur'];?> ">Modifier</a>
                     <a class="Afficher" href="Afficher_livraison_livreur.php?id=<?PHP echo $livreur['code_livreur'];?> ">Afficher livarison</a>
                     
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
                echo "<a  href='?page=$i'>$i</a>";
            
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
                    Designed by <a href="https://colorlib.com">Boubakri Chiheb</a>
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

</body>
</html>
