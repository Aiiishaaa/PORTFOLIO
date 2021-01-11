<?php
  
   session_start();
   include("sendemail.php");

if(isset($_POST['submit'])){

      $name = htmlspecialchars($_POST["name"]);
      $isValidname = !empty($name);

      $email = htmlspecialchars($_POST["email"]);
      $isValidemail = !empty($email);

      $subject = htmlspecialchars($_POST["subject"]);
      $isValidsubject = !empty($subject);

      $message = htmlspecialchars($_POST["message"]);
      $isValidmessage = !empty($message); 

      if ($isValidemail && $isValidname && $isValidsubject && $isValidmessage){ 

        
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
    else {
          echo '<script type="text/javascript">';
          echo 'alert("Tous les champs sont obligatoires !")';
          echo  '</script>';
        }
}
  ?>               