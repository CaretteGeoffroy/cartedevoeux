<?php

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('assets');
$twig = new Twig_Environment($loader);

$sender = $_POST['sender'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$submit = $_POST['submit'];
$global = $twig;

$to = $mail;
$subject = "Quelqu'un vous a envoyé une carte de voeux";
$message = $twig->render('mail.twig', array('sender' => $sender, 'name' => $name));
$headers = 'From: bonne@annee.com' . "\r\n" .
'Reply-To: noreply.bonne@annee.com' . "\r\n" .
'MIME-Version: 1.0' . "\n" .
'Content-Type: text/html; charset=UTF-8' . "\n" .
'X-Mailer: PHP/' . phpversion();

if (isset($submit)){
  if(mail($to, $subject, $message, $headers)){
    echo $twig->render('success.twig');
  }else{
    echo $twig->render('error.twig');
  }
}

?>