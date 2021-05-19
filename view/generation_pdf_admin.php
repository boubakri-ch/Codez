<?php
	
	
	require 'C:/wamp64/www/web/view/pdf/fpdf.php';
//	include 'ligne_commande.php';
	$pdf= new FPDF();
	$pdf->AddPage();
	include ("../core/loginOps.php");
	 
	 $db = config::getConnexion();
	 $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`etat`  FROM `users` where `type_c`='admin' ";
	 $liste=$db->query($sql );
 //
 $pdf->image("C:/wamp64/www/web/view/assets/tuni.png",25,25,25,13,'PNG');
 $pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"BINVENNUE",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(30,8,'user_id',1);
	$pdf->Cell(40,8,'unique_id ',1);
	$pdf->Cell(40,8,'nom',1);
	$pdf->Cell(40,8,'prenom',1);
	$pdf->Cell(40,8,'email',1);
	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	//$req->execute(array($x));
	
	foreach($liste as $admin)
		{
			$pdf->Cell(30,8,$admin['user_id'],1);
			$pdf->Cell(40,8,$admin['unique_id'],1);
			$pdf->Cell(40,8,$admin['fname'],1);
			$pdf->Cell(40,8,$admin['lname'],1);
			$pdf->Cell(40,8,$admin['email'],1);
			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>
