<?php
include 'connect.php';
	session_start();
	if($_SESSION['Admin_ID'] == "")
	{
   header("location:login.php");
		exit();
	}
	// $strSQL = "SELECT * FROM user u join salon s ON u.salon_id = s.salon_id WHERE user_id = '".$_SESSION['user_id']."' ";
	// $objQuery = mysql_query($strSQL);
	// $objResult = mysql_fetch_array($objQuery);
?>
