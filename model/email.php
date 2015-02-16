<?php

include '../controller/email.php';


  $email = $_POST['email'];
  $subiect = $_POST['subiect'];
  $description = $_POST['description'];
  $prioritate = $_POST['prioritate'];

  
  Email::Send($email,$subiect,$description,$prioritate);


  ?>
