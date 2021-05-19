<?PHP
    include ("C:/wamp64/www/web/core/clientOps.php");
   
    $db = config::getConnexion();

	$client=new clientOps();
    if(isset($_GET['ASC'])){
        
        $liste_client= $client->afficher_clientasc();
    
    
    } else
    if(isset($_GET['desc'])){
        
        $liste_client= $client->afficher_clientdesc();
    
    
    }
    else

    {
	$liste_client=$client->afficher_client();	}
    
?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
 

        <div class="content">
        <form enctype="multipart/form-data">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
    <input class="tri" type="submit" name="ASC" value="Ascending">
    <input class="tri" type="submit" name="desc" value="descending">
</nav>
		<hr>
		<table class="table" border=1 align = 'center' id="tab_client">
        
			<tr>

				<th>id utilisateur  </th>
				<th>id unique</th>
				<th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>statut</th>
                <th>etat</th>
                <th>adresse</th>




				
				


			</tr>

			<?PHP
				foreach($liste_client as $client){
                

			?>
				<tr>
					
					<td><?PHP echo $client['user_id']; ?></td>
					<td><?PHP echo $client['unique_id']; ?></td>
                    <td><?PHP echo $client['fname']; ?></td>
                    <td><?PHP echo $client['lname']; ?></td>
                    <td><?PHP echo $client['email']; ?></td>
                    <td><?PHP echo $client['statut']; ?></td>
                    <td><?PHP echo $client['etat']; ?></td>
                    <td><?PHP echo $client['adresse']; ?></td>

					<td>
					 <a class="supprimer" href="supprimer_client.php?id=<?PHP echo $client['user_id'];?>">Supprimer</a>
                     <a class="bloquer" href="bloquer.php?id=<?PHP echo $client['user_id'];?> ">Bloquer</a>
                     <a class="activer" href="activer.php?id=<?PHP echo $client['user_id'];?> ">activer</a>
                     <a class="mail" href="indexmail.php?email=<?PHP echo $client['email'];?> ">Mailing</a>
					</td>	
				</tr>
             
			<?PHP
                    
				}
			?>
		</table>
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

<!-- Scripts -->
 

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
url:'recherche_client.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_client").html(response);
}
});
});
});
    </script>
</body>
</html>
