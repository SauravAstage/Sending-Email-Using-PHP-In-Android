<html>
   
   <head>
      <title>Sending email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = $_GET['to'];
         $subject = $_GET['subject'];
         
         $message = $_GET['message'];
         
         $header = "From:".$_GET['from']." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>