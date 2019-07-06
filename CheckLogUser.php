<?php
include 'Connect.php';
	session_start();
	if($_SESSION['Number_ID'] == "")
	{
   header("location:loginNumber.php");
		exit();
	}
	$strSQL = "SELECT * FROM tb_number WHERE Number_ID = '".$_SESSION['Number_ID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
