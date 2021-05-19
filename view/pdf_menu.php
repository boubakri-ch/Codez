<?php
	
	
	require 'C:/wamp64/www/web/view/pdf/fpdf.php';
//	include 'ligne_commande.php';
	$pdf= new FPDF();
	$pdf->AddPage();
	include ("../core/menuOps.php");
	 
	 $db = config::getConnexion();
	 $sql="SELECT id,nom ,prix,ingredient from menu";
	 $liste=$db->query($sql );
 
	 $pdf->image("C:/wamp64/www/web/view/assets/tuni.png",25,25,25,13,'PNG');
	$pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"BINVENNUE",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(30,8,'ID',1);
	$pdf->Cell(40,8,'Nom ',1);
 	$pdf->Cell(40,8,'prix',1);
	$pdf->Cell(40,8,'ingredinet',1);
	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	//$req->execute(array($x));
	
	foreach($liste as $menu)
		{
			$pdf->Cell(40,8,$menu['id'],1);
			$pdf->Cell(40,8,$menu['nom'],1);
 			$pdf->Cell(40,8,$menu['prix'],1);
			$pdf->Cell(40,8,$menu['ingredient'],1);
			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>
