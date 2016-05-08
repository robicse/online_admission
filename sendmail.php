<?php
   $to 			= 	"rejuancse.bd@gmail.com";
   $subject 	= 	"This is subject";
   $body 		= 	"This is simple text message.";
   $header  	= 	"From: rejuancse@gmail.com \r\n";
   $retval  	=	 mail($to, $subject, $body, $header);
   if($retval = true ){
      echo "Message sent successfully...";
   }else{
      echo "Message could not be sent...";
   }
?>