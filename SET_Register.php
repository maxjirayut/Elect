<?php
include 'Connect.php';
$SQL = "SELECT * FROM tb_number WHERE Number_Code = '".mysql_real_escape_string($_POST['Number_Code'])."'";
$objQuery = mysql_query($SQL);
$objResult = mysql_fetch_array($objQuery);

$SQL_STATUS = "SELECT * FROM tb_status";
$Query = mysql_query($SQL_STATUS);
$Data = mysql_fetch_array($Query);
$endnumber ='9999999999';
$endon = $Data['status_code'];
$endtator = $endon.$endnumber;
$number = $Data['status_number'];

if ($objResult == ''||$objResult == NULL) {
  echo "<script>alert('รหัสผ่านไม่ถูกต้อง')</script>";
  echo "<script>window.location='Register.php'</script>";
} elseif ($_POST['Number_Code'] < $number) {
  echo "<script>alert('รหัสนักศึกษาของคุณไม่สามารถลงสมัครนายกสโมสรได้')</script>";
  echo "<script>window.location='Register.php'</script>";
} elseif ($_POST['Number_Code'] > $endtator ) {
  echo "<script>alert('รหัสนักศึกษาของคุณไม่สามารถลงสมัครนายกสโมสรได้')</script>";
  echo "<script>window.location='Register.php'</script>";
} else if ($objResult != ''||$objResult != NULL) {

  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
  date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());

  $upload=$_FILES['Img_Profile'];
  if($upload <> '') {

  //โฟลเดอร์ที่เก็บไฟล์
  $path="img/";
  //ตัวขื่อกับนามสกุลภาพออกจากกัน
  $type = strrchr($_FILES['Img_Profile']['name'],".");
  //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
  $Newname_Profile =$numrand.$date1.$type;

  $path_copy=$path.$Newname_Profile;
  $path_link="img/".$Newname_Profile;
  //คัดลอกไฟล์ไปยังโฟลเดอร์
  move_uploaded_file($_FILES['Img_Profile']['tmp_name'],$path_copy);

  }

  $upload=$_FILES['Img_Grade'];
  if($upload <> '') {

  //โฟลเดอร์ที่เก็บไฟล์
  $path="img/";
  //ตัวขื่อกับนามสกุลภาพออกจากกัน
  $type = strrchr($_FILES['Img_Profile']['name'],".");
  //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
  $Newname_ProFile =$numrand.$date1.$type;

  $path_copy=$path.$Newname_ProFile;
  $path_link="img/".$Newname_ProFile;
  //คัดลอกไฟล์ไปยังโฟลเดอร์
  move_uploaded_file($_FILES['Img_Profile']['tmp_name'],$path_copy);

  }

   $SQL = 'insert into tb_student(ST_Code,ST_Name,ST_Sub,ST_Address,ST_Email,ST_Phone,ST_Grede,ST_Status,ST_Img_Grade,ST_Profile,ST_Policy)
  value (
    "'.$_POST["Number_Code"].'",
    "'.$_POST["ST_Name"].'",
    "'.$_POST["ST_Sub"].'",
    "'.$_POST["ST_Address"].'",
    "'.$_POST["ST_Email"].'",
    "'.$_POST["ST_Grede"].'",
    "'.$_POST["ST_Phone"].'",
    "รอการตรวจสอบ",
    "'.$Newname_Profile.'",
    "'.$Newname_ProFile.'",
    "'.$_POST["ST_Policy"].'"
    )';
$SQL = mysql_query($SQL);

    if ($SQL) {
      echo "<script>window.location='index.php'</script>";
    }else {
      echo "ERROR";
    }
}
 ?>
