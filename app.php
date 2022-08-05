<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendMail()
{

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $num = $_POST['num'];
    $email = $_POST['email'];
    $btn = ['submit'];

    $name = $_POST['nom'];
    $from = "oznov@banianeboue.space";
    $to = "oznov@banianeboue.space";
    $subject = "Réservation Banian Eboue - Via Formulaire (banianeboue.space)";
    $body = "
    <h1>Réservation Banian Eboue</h1>

    <h2>Informations du Client</h2>

    <h4>Nom & Prénoms :</h4> $nom $prenom
    <h4> Numéro de téléphone :</h4> $num
    <h4>Adresse email  :</h4> $email ";


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/Exception.php";
    require_once "PHPMailer/SMTP.php";
    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->SMTPDebug = 3;
    $mail->Host = "smtp.titan.email";
    $mail->SMTPAuth = true;
    $mail->Username = "oznov@banianeboue.space";
    $mail->Password = "3fu5lQ3JqB";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ]
    ]);

    //Email Settings
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->setFrom($from, $name);
    $mail->addAddress($to);
    $mail->Encoding = 'base64';
    $mail->Subject = ("$subject");
    $mail->Body = $body;
    if ($mail->send()) {
        header("Location: https://banianeboue.space/visit.html");
        exit();
    } else {
        echo 'Somewhere went wrong : <br /><br />' . $mail->ErrorInfo;
    }
}

if (isset($_POST['submit'])) {
    sendMail();
}
