<?php
// define variables and set to empty values
$name = $email = $query = $body = "";

$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$query = test_input($_POST['query']);
$to = 'emma@embdeveloper.co.uk';
$from = 'bellefirestorm@gmail.com';
$subject = 'Query Form Submission';
$body = "From: $name.\n ". 
        "E-Mail: $email.\n". 
        "Message: $query.\n";

mail($to, $subject, $body);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>