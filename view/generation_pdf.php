<?php
	
	
	require 'C:/wamp64/www/web/view/pdf/fpdf.php';
//	include 'ligne_commande.php';
	$pdf= new FPDF();
	$pdf->AddPage();
	include ("../core/livreurOps.php");
	 
	 $db = config::getConnexion();
	 $sql="SELECT code_livreur,nom,prenom,mail,num_tel from livreur";
	 $liste=$db->query($sql );
	 $pdf->image("C:/wamp64/www/web/view/assets/tuni.png",25,25,25,13,'PNG');

	$pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"BINVENNUE",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(30,8,'code livreur',1);
	$pdf->Cell(40,8,'Nom ',1);
	$pdf->Cell(40,8,'prenom',1);
	$pdf->Cell(40,8,'Email',1);
	$pdf->Cell(40,8,'numero telephone',1);
	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	//$req->execute(array($x));
	
	foreach($liste as $livreur)
		{
			$pdf->Cell(30,8,$livreur['code_livreur'],1);
			$pdf->Cell(40,8,$livreur['nom'],1);
			$pdf->Cell(40,8,$livreur['prenom'],1);
			$pdf->Cell(40,8,$livreur['mail'],1);
			$pdf->Cell(40,8,$livreur['num_tel'],1);
			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>
