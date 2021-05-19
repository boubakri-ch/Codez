<?PHP
   require "C:/wamp64/www/web/core/chefOps.php";
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

	$chef=new chefOps();
	$liste_chef=$chef->afficher_chef($start,$perpage);
  $sql_2="select count(chef.id) as nb from chef";
  $db = config::getConnexion();
  $count=$db->query($sql_2);	
    
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
< <?php include_once "header.php"; ?>


        <td>
        <a class="supprimer" href="pdf_chef.php">PDF</a>
        <a class="Excel" href="excel_chef.php">EXCEL</a>
        
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
		<table  border=1 align = 'center' id="tab_chef" >
			<tr>

            <th>ID</th>
				<th>Nom</th>
				<th>prenom</th>
				<th>Ingredient</th>

			</tr>

			<?PHP
				foreach($liste_chef as $chef){
			?>
				<tr>
                <td><?PHP echo $chef['id']; ?></td>
					<td><?PHP echo $chef['nom']; ?></td>
					<td><?PHP echo $chef['prenom']; ?></td>
                    <td><?PHP echo $chef['fonction']; ?></td>
					
					<td>
					 <a href="supprimer_chef.php?id=<?PHP echo $chef['id'];?>">Supprimer</a>
                     <a class="modifier" href="modifier_chef.php?id_modif=<?PHP echo $chef['id'];?>">Modifier</a>
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
                echo "<a class=pagination  href='?page=$i'>$i</a>";
            }
            ?>
        </form>
        <script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'rechercher_chef.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_chef").html(response);
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
                        Copyright &copy; ridha
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
