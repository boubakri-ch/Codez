<?php
	require 'C:/wamp64/www/web/view/pdf/fpdf.php';
//	include 'ligne_commande.php';
	$pdf= new FPDF();
	$pdf->AddPage();
	include ("../core/livraisonOps.php");
	 
	 $db = config::getConnexion();
	 $sql="SELECT id,id_client,adresse,num_commande,date_l from livraison";
	 $liste=$db->query($sql );
 
	 $pdf->image("C:/wamp64/www/web/view/assets/tuni.png",25,25,25,13,'PNG');
	$pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"BINVENNUE",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(30,8,'ID',1);
	$pdf->Cell(40,8,'ID Client ',1);
	$pdf->Cell(40,8,'Adresse',1);
	$pdf->Cell(40,8,'Num Commande',1);
	$pdf->Cell(40,8,'Date',1);
	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	//$req->execute(array($x));
	
	foreach($liste as $livraison)
		{
			$pdf->Cell(30,8,$livraison['id'],1);
			$pdf->Cell(40,8,$livraison['id_client'],1);
			$pdf->Cell(40,8,$livraison['adresse'],1);
			$pdf->Cell(40,8,$livraison['num_commande'],1);
			$pdf->Cell(40,8,$livraison['date_l'],1);
			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>
