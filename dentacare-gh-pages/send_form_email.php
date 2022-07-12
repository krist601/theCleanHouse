<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name']; // required
  $email_from = $_POST['email']; // required
  $telephone = $_POST['telephone']; // not required
  $comments = $_POST['comments']; // required

  $mailTo = "contato@thecleanhouse.cl";
  $headers = "from ".$email_from;
  $txt = "Recibiste un email de ".$name." diciendo: ".$comments

  mail('nadie@example.com', 'El título', 'El mensaje', null, 
  '-fwebmaster@example.com');
  //mail($mailTo,"subject",$text,$headers);
  headers("Location: index.php?mailsend");
}
?>