<?php
if(isset($_POST['envoyer'])) {
   if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['subject']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From: '.$_POST['email']."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';

      $subject = $_POST['subject'];
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
               <br />
               '.nl2br($_POST['message']).'
          
            </div>
         </body>
      </html>
      ';
      mail("yamina.jouille@gmail.com", $subject, $message, $header);
      $msg="Votre message a bien été envoyé !";
      echo "<script type=\"text/javascript\">";
      // echo "alert(\"toto\")";
      // echo "document.getElementById('sent').style.display = \"block\"";
      echo "</script>";
      

      // echo($msg);
      header("Refresh: 5; https://yaminaj.promo-93.codeur.online/portfolio/");
      
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>
