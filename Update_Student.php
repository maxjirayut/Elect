<?php
include 'Connect.php';

if (!isset($_POST['Edit'])) {
  $_POST['Edit'] == "";
}
if ($_POST['Edit']) {
 $sql_up = 'UPDATE tb_number set
        Number_Code = "'.$_POST['Number_Code'].'",
        Number_Code = "'.$_POST['Number_User'].'",
        Number_Name = "'.$_POST['Number_Name'].'",
        Number_Phone = "'.$_POST['Number_Phone'].'",
        Year = "'.$_POST['Year'].'",
        room = "'.$_POST['room'].'"
        WHERE
        Number_ID = "'.$_GET['Number_ID'].'"
   ';

   $query = mysql_query($sql_up);
}
if ($query) {
  echo "<script>alert('แก้ไขข้อมูลของท่านเรียบร้อยแล้ว')</script>";
  echo "<script>window.location='Student.php'</script>";
}else {
  echo "Error EDIT";
}

?>
