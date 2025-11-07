<?php
echo"<h1> Session Data</h1>";
$_SESSION["name"]=$_POST["name"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["contact-method"]=$_POST["contact-method"];
$_SESSION["text-area"]=$_POST["text-area"];
$_SESSION["txt-area"]=$_POST["txt-area"];
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<h1> Requested Data</h1>"; 
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<h1> You Entered </h1>";
echo "<b>", "Name: ", $_REQUEST["name"];
echo "<br>";
echo "<b>" , "Email: ", $_REQUEST["email"];
echo "<br>";
echo "<b>", "Contact-Method: ",$_REQUEST["contact-method"];
echo "<br>";
echo "<b>", "Contact-Reason: ",$_REQUEST["text-area"];
echo "<br>";
echo "<b>", "Message: ", $_REQUEST["txt-area"];
if(isset($_POST["save"])){
$name=$_POST["name"];
$email=$_POST["email"];
$method=$_POST["contact-method"];
$text=$_POST["text-area"];
$txt=$_POST["txt-area"];
$file_path='data.txt';
$data="$name, $email, $method, $text, $txt\n";
$file_handle=fopen($file_path,'a');
fwrite($file_handle,$data);
fclose($file_handle);
}
?>