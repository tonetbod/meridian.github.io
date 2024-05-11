<?php
$name = $_POST{'name'};
$lastname = $_POST{'lastname'};
$Other_Names = $_POST{'Other_Names'};
$email = $_POST{'email'};
$phone = $_POST{'phone'};
$select= $_POST{'select'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
LastName: ".$LastName."
Email: ".$email."
Phone: ".$phone."
Other_Names: ".$Other_Names."
select : ".$select ."
Message: ".$message."

";

mail ("name@youremail.com" , "New Message", $email_message);
header("location: ../mail-success.html");
?>


