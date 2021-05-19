<?PHP
    include ("C:/wamp64/www/web/core/reservationOps.php");
   
    //$db = config::getConnexion();

	$reservation=new reservationOps();
	$liste_reservation=$reservation->afficher_reservation();	
    
?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<body>
  

        <div class="content">
        <a class="Export" href="Excel.php">Export</a>
        <form enctype="multipart/form-data" id="myForm">
		<hr>
        
		<table class="table" border=1 align = 'center'>
        
			<tr>

				<th>code_reservation</th>
				<th>nom</th>
				<th>num_pers</th>
                <th>date_reservation</th>
                <th>numero_tel</th>
                <th>E-mail</th>


				
				


			</tr>

			<?PHP
				foreach($liste_reservation as $reservation){
                

			?>

				<tr>
					
					<td><?PHP echo $reservation['code_reservation']; ?></td>
                    <td><?PHP echo $reservation['nom']; ?></td>
					<td><?PHP echo $reservation['num_pers']; ?></td>
                    <td><?PHP echo $reservation['date_reservation']; ?></td>
                    <td><?PHP echo $reservation['numero_tel']; ?></td>
                    <td><?PHP echo $reservation['email_c']; ?></td>



               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_reservation.php?id=<?PHP echo $reservation['code_reservation'];?>">Supprimer</a>
                     <a class="modifier" href="modifier_reservation.php?id=<?PHP echo $reservation['code_reservation'];?> ">Modifier</a>
                     <a class="mail" href="sendEmail.php?email=<?PHP echo $reservation['email_c'];?> ">Confirmer réservation</a>
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
