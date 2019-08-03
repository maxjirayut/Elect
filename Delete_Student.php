<?php
include 'Connect.php';
$Number_ID = $_GET['Number_ID'];
$SQL = "delete from tb_number where Number_ID = '$Number_ID'";
mysql_query($SQL);
echo "<script>window.location='Student.php'</script>";
 ?>
