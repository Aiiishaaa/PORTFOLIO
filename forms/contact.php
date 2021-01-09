<?php

if(isset($_POST['submit'])){
    
  include("./sendemail.php");
  $receiving_email_address ='aicha.hamida06@yahoo.fr';
           

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->message = $_POST['message'];


  echo '<script type="text/javascript">';
  echo 'alert ("Votre message est bien envoyé !")';
  echo '</script>';

  echo $contact->send();
}
  ?>               