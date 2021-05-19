<?php
	
	
	require 'C:/wamp64/www/web/view/pdf/fpdf.php';
//	include 'ligne_commande.php';
	$pdf= new FPDF();
	$pdf->AddPage();
	include ("../core/panierOps.php");
	 
	 $db = config::getConnexion();
	 $sql="SELECT code_commande,id_client,adresse,date_c from entete_commande";
	 $liste=$db->query($sql );
 
	 $pdf->image("C:/wamp64/www/web/view/assets/tuni.png",25,25,25,13,'PNG');
	$pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"BINVENNUE",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(44,8,'code commande',1);
	$pdf->Cell(44,8,'ID Client ',1);
	$pdf->Cell(44,8,'Adresse',1);
	$pdf->Cell(44,8,'Date',1);
	$pdf->Cell(44,8,'Total',1);

	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	//$req->execute(array($x));
	
	foreach($liste as $livraison)
		{
			$sql2="select SUM(commande.prix)as total from commande where commande.code_commande=".$livraison['code_commande'];
                    $liste_1=$db->query($sql2);
			$pdf->Cell(44,8,$livraison['code_commande'],1);
			$pdf->Cell(44,8,$livraison['id_client'],1);
			$pdf->Cell(44,8,$livraison['adresse'],1);
			$pdf->Cell(44,8,$livraison['date_c'],1);
			foreach($liste_1 as $row)
			{
			$pdf->Cell(40,8,$row['total'],1);
			}

			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>