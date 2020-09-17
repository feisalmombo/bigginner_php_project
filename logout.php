<?php
/*
Author: Feisal Suleiman Mombo The Developer
*/

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>