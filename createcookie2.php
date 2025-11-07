<?php
$cookie_name="Atif";
$cookie_value="yahoo baba";
setcookie($cookie_name,$cookie_value,time()+86400*30,"/");
echo "cookie is set";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    echo $_COOKIE[$cookie_name];
    ?>
</body>
</html>