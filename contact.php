<?php

   $name=$_POST["name"];
   $email=$_POST["email"];
   $message=$_POST["message"];
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';
   require 'PHPMailer/src/Exception.php';
   
   if($name!="" && $email!="" && $message!="")
   {
        $mail = new PHPMailer(true);
        try {
             $mail->SMTPDebug = 2;     
             $mail->isSMTP();            
             $mail->Host       = 'localhost';      
             $mail->SMTPAuth   = false;                                  
             $mail->setFrom('rodrigo_sjc_sp31000@outlook.com' , 'rodrigo_sjc_sp31000@outlook.com');
             $mail->addAddress("rodrigo_sjc_sp31000@outlook.com");     // Add a recipient
                // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
             $mail->isHTML(false);   
             $mail->Subject = "Contato Via Website";
             $mail->Body    = $name.' - '.$email.' - '.$message;
                //$mail->AltBody =;
             $mail->send();

        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    else
    {
        echo "Permission denied to my server , try again later babe";  
        
    }
       
    
   
 ?>