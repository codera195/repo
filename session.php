<?php
session_start();
if(isset($_SESSION["favcolor"])){

echo "Favorite color:".$_SESSION["favcolor"];
}

?>
