<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_GET['email'])) {
        $name = "tunitaste";
        $email = $_GET['email'];
        $subject = "Confirmation de réservation";
        $body = "Votre livraison est en cours";
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "tunitaste123@gmail.com"; //enter you email address
        $mail->Password = 'pxitdtkbtsxknyms'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("$email"); //enter you email address
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
            header('Location:afficher_livraison.php'); 

        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>