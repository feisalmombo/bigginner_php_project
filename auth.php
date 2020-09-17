<?php
/*
Author: Feisal Suleiman Mombo The Developer
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
