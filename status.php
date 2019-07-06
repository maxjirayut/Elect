<?php
include 'Connect.php';

$setnum = '0000000000';
$codes = $_POST['status_code'];
$totor = $codes.$setnum;

 $sql_up = 'UPDATE tb_status set
        status_code = "'.$_POST['status_code'].'",
        status_number = '.$totor.'
        WHERE
        status_id = 1
   ';
    $query = mysql_query($sql_up);

    if ($query) {
      echo "<script>window.location='Permissions.php'</script>";
    }else {
      echo "ERROR";
    }

 ?>
