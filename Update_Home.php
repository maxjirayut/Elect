<?php
include 'Connect.php';

if (!isset($_POST['Edit_Home'])) {
  $_POST['Edit_Home'] == "";
}
if ($_POST['Edit_Home']) {
 $sql_up = 'UPDATE tb_student set
        ST_Name = "'.$_POST['ST_Name'].'",
        ST_Sub = "'.$_POST['ST_Sub'].'",
        ST_Address = "'.$_POST['ST_Address'].'",
        ST_Email = "'.$_POST['ST_Email'].'",
        ST_Phone = "'.$_POST['ST_Phone'].'",
        ST_Status = "'.$_POST['ST_Status'].'"

        WHERE

        ST_ID = "'.$_GET['ST_ID'].'"

   ';

   $query = mysql_query($sql_up);
}
if ($query) {
  echo "<script>alert('แก้ไขข้อมูลของท่านเรียบร้อยแล้ว')</script>";
  echo "<script>window.location='Home.php'</script>";
}else {
  echo "Error EDIT";
}

?>
