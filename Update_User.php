<?php
include 'Connect.php';

 $sql_up = 'UPDATE tb_number set
        Number_User = "'.$_POST['Number_User'].'",
        Number_Name = "'.$_POST['Number_Name'].'",
        Number_Sub = "'.$_POST['Number_Sub'].'",
        Number_Phone = "'.$_POST['Number_Phone'].'"

        WHERE
        Number_ID = "'.$_GET['Number_ID'].'"
   ';

 $query = mysql_query($sql_up);

if ($query) {
  echo "<script>window.location='FromEditUser.php'</script>";
}else {
  echo "Error EDIT";
}


?>
