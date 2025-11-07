<!DOCTYPE html>
<?php
$cookie_name="user";
$cookie_value="yahoo Baba";
setcookie($cookie_name,$cookie_value,time()+(86400 * 30), "/");
echo "Cookie is set";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie is not set yet. Please refresh the page.";
}
    ?>
</body>
</html>