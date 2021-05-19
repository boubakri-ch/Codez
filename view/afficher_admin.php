<?PHP
    include ("C:/wamp64/www/web/core/loginOps.php");
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

	$admin=new loginOps();
	$liste_admin=$admin->afficher_admin($start,$perpage);	
    $sql_1="select count(users.user_id) as nb from users where type_c='admin'";
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
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
</nav>
<a class="Export" href="exceladmin.php">Export</a>
<a class="Export" href="generation_pdf_admin.php">Pdf</a>

		<hr>
		<table class="table" border=1 align = 'center' id="tab_admin">
        
			<tr>

				<th>id utilisateur  </th>
				<th>id unique</th>
				<th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>statut</th>
                <th>etat</th>




				
				


			</tr>

			<?PHP
				foreach($liste_admin as $admint){
                

			?>
				<tr>
					
					<td><?PHP echo $admint['user_id']; ?></td>
					<td><?PHP echo $admint['unique_id']; ?></td>
                    <td><?PHP echo $admint['fname']; ?></td>
                    <td><?PHP echo $admint['lname']; ?></td>
                    <td><?PHP echo $admint['email']; ?></td>
                    <td><?PHP echo $admint['etat']; ?></td>





               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_admin.php?id=<?PHP echo $admint['user_id'];?>">Supprimer</a>
                  



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
