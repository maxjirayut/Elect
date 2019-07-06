<?php
include 'Connect.php';
$SQL = "SELECT * FROM tb_number WHERE Number_Code = '".mysql_real_escape_string($_POST['Number_Code'])."'";
$objQuery = mysql_query($SQL);
$objResult = mysql_fetch_array($objQuery);

if ($objResult !='' || $objResult != NULL) {
  echo "<script>alert('มีรหัสนักศึกษาแล้วไม่สามารถกรอกซ่ำได้')</script>";
  echo "<script>window.location='FromInserNumber.php'</script>";
}else {
  $SQL = 'insert into tb_number(Number_Code,Number_Name,Number_Phone,Grade)
    value (
      "'.$_POST["Number_Code"].'",
      "'.$_POST["Number_Name"].'",
      "'.$_POST["Number_Phone"].'",
      "'.$_POST["Grade"].'"
      )';
  $SQL = mysql_query($SQL);

      if ($SQL) {
        echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
        echo "<script>window.location='Student.php'</script>";
      }else {
        echo "ERROR";
      }
}



 ?>
