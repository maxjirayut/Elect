<?php
include 'Connect.php';
	session_start();
	$SQL = "SELECT * FROM admin WHERE Username = '".mysql_real_escape_string($_POST['Username'])."'
	AND Password = '".mysql_real_escape_string($_POST['Password'])."'";
	$Query = mysql_query($SQL);
	$Result = mysql_fetch_array($Query);
	if(!$Result)
	{
			// echo "Username and Password Incorrect!";
			echo "<script>alert('Username and Password ไม่ถูกต้อง')</script>";
			// echo "<script>window.location='login.php'</script>";
	}
	else
	{
			   $_SESSION["Admin_ID"] = $Result["Admin_ID"];
			   session_write_close();
				 header("location:Home.php");

	}
	mysql_close();

// if ("$_POST[Username]" == 'admin' && "$_POST[Password]" == 'admin') {
// 	header("location:Home.php");
// }else {
// 	echo "<script>alert('Username and Password ไม่ถูกต้อง')</script>";
// 	echo "<script>window.location='login.php'</script>";
// }
?>
