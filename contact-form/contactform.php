<?php

if (issset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $comment = $_POST['comment'];

  $mailTo = "sogoba3@gmail.com";
  $headers = "From: ";$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$comment;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
 ?>
