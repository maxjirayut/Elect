<?php
include 'Connect.php';
$ST_ID = $_GET['ST_ID'];
$SQL = "delete from tb_student where ST_ID = '$ST_ID'";
$rss = mysql_query($SQL);
echo "<script>window.location='Home.php'</script>";
 ?>
