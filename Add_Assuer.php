<?php
include 'Connect.php';
$SQL = "SELECT * FROM tb_number WHERE Number_Code = '".mysql_real_escape_string($_POST['Number_Code'])."'";
$objQuery = mysql_query($SQL);
$objResult = mysql_fetch_array($objQuery);

if ($objResult =='' || $objResult == NULL) {
  echo "<script>alert('ไม่พบรหัสนักศึกษาในระบบ')</script>";
  echo "<script>window.location='Assure.php'</script>";
}else if ($objResult['Number_User'] != NULL || $objResult['Number_User'] != '' ) {
  echo "<script>alert('คุณได้ทำการยืนยันตัวตนแล้ว')</script>";
  echo "<script>window.location='Assure.php'</script>";
}else {
    $sql_up = 'UPDATE tb_number set
           Number_User = "'.$_POST['Number_User'].'",
           Number_Name = "'.$_POST['Number_Name'].'",
           Number_Sub = "'.$_POST['Number_Sub'].'",
           Number_Phone = "'.$_POST['Number_Phone'].'"
           WHERE
           Number_Code = "'.$_POST['Number_Code'].'"
      ';
      $query = mysql_query($sql_up);
   if ($query) {
     echo "<script>window.location='Assure.php'</script>";
   }else {
     echo "Error EDIT";
   }

 }
 ?>
