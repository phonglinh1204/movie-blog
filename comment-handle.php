<?php
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$email_from="thecinemates@gmail.com";
$email_subject="New Comment Submission";
$email_body="User Name: $name\n".
            "User Email: $email\n".
            "User Comment: $comment\n";
$header="From: $email_from \r\n";
$header.="Reply To: $email \r\n";
mail($email,$email_subject,$email_body,$header);
header("Location: about us.html");
?>