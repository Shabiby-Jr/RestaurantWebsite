<?php
      $name = $_POST['name'];
      $customer_email = $_POST['email'];
      $message = $_POST['message'];

      $email_from = 'Bon Appetit Contact Form';

      $email_subject = 'New Form Submission';

      $email_body = "Customer Name: $name.\n".
                    "Customer Email: $customer_email.\n". 
                    "Customer Message: $message.\n";

      $to = "omarkhalidshabiby@gmail.com";
      
      $headers = "From: $email_from \r\n";

      $headers = "Reply-To: $customer_email \r\n";

      mail($to,$email_subject,$email_body,$headers);

      header("Location: ContactUs.html");
?>
