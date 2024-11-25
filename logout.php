<?php
session_start();
if(isset($_SESSION['suser']))
{
	session_destroy();
	header("location: index.php");
	
}

?>