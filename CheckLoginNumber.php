<?php
include 'Connect.php';
	session_start();
	$SQL = "SELECT * FROM tb_number WHERE Number_Code = '".mysql_real_escape_string($_POST['Number_Code'])."'
	AND Number_User = '".mysql_real_escape_string($_POST['Number_User'])."'";
	$Query = mysql_query($SQL);
	$Result = mysql_fetch_array($Query);
	if(!$Result)
	{
			echo "<script>alert('Username and Password ไม่ถูกต้อง')</script>";
			echo "<script>window.location='LoginNumber.php'</script>";
	}
	else
	{
			   $_SESSION["Number_ID"] = $Result["Number_ID"];
			   session_write_close();
				 header("location:FromEditUser.php");

	}
	mysql_close();

?>
