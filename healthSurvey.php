<?php
     $to = "KevinL622@gmail.com";
     $name = $_POST['name'];
     $subject = "Health Survey From" + $name;
     $email = $_POST['email'];

     $age = $_POST['age'];
     $ethnicity = $_POST['ethnicity'];
     $compliance = $_POST['compliance'];
     $concern = $_POST['concern'];
     $pain = $_POST['pain'];
     $onset = $_POST['onset'];
     $comments = $_POST['comments'];

     $email_message .= "Name: "$name" \n";
     $email_message .= "Email: "$email" \n";
     $email_message .= "Age: "$age" \n";
     $email_message .= "Ethnicity: "$ethnicity" \n";
     $email_message .= "Compliance Status: "$compliance" \n";
     $email_message .= "Chief Complaint: "$concern" \n";
     $email_message .= "Character: "$pain" \n";
     $email_message .= "Onset: "$onset" \n";
     $email_message .= "Comments: "$comments" \n";

     $headers = 'From: '$email' \r\n';

     mail($to, $subject, $email_message, $headers)
?>
