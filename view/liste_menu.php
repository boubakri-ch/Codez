<?PHP
   require "C:/wamp64/www/web/core/menuOps.php";
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

	$menu=new menuOps();
	$liste_menu=$menu->affichermenu($start,$perpage);
  $sql_2="select count(menu.id) as nb from menu";
  $db = config::getConnexion();
  $count=$db->query($sql_2);	
    
?>

<!doctype html>
< <?php include_once "header.php"; ?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
 

        <td>
        <a class="supprimer" href="pdf_menu.php">PDF</a>
        <a class="Excel" href="excel_menu.php">EXCEL</a>
        
        </td>	
        <div class="content">
        <form enctype="multipart/form-data">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
</nav>
<style>
table {
border-collapse: collapse;
width: 100%;
}
a:link {
color: green;
background-color: transparent;
text-decoration: none;
}
a:visited {

background-color: transparent;
text-decoration: none;
}
a:hover {
color: red;
background-color: transparent;
text-decoration: underline;
}
a:active {
color: yellow;
background-color: transparent;
text-decoration: underline;
}

a{
text-decoration: none;
}

th, td {
text-align: left;
padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
background-color: #4CAF50;
color: white;
}
</style>
<hr>
		<table class="table" border=1 align = 'center' id="tab_menu">
        
			<tr>

				<th>ID</th>
				<th>Nom</th>
				<th>Prix</th>
				<th>Ingredient</th>
				


			</tr>

			<?PHP
				foreach($liste_menu as $menu){
                   


			?>
				<tr>
					<td><?PHP echo $menu['id']; ?></td>
					<td><?PHP echo $menu['nom']; ?></td>
					<td><?PHP echo $menu['prix']; ?></td>
                    <td><?PHP echo $menu['ingredient']; ?></td>
					<td>
					 <a href="supprimer_menu.php?id=<?PHP echo $menu['id'];?>">Supprimer</a>
                     <a class="modifier" href="modifier_menu.php?id_modif=<?PHP echo $menu['id'];?>">Modifier</a>
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
                echo "<a   href='?page=$i'>$i</a>";
            }
            ?>
        </form>
        <script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'rechercher_menu.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_menu").html(response);
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
                     </div>
                   
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->
 


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
