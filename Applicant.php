<?php include 'Header.php';
include 'Connect.php';
include 'Menu/MenuApplicant.php'; ?>
<table class="table"  id="dataTable">
    <thead class="thead-light">
       <tr>
         <th>เบอร์</th>
         <th>ชื่อ</th>
         <th>คณะ</th>
       </tr>
     </thead>
     <tbody>
       <?php
       $sql = "SELECT * FROM `tb_student` WHERE ST_Status = 'อนุมัติ'";
       $query = mysql_query($sql);
       while ($a = mysql_fetch_array($query)) {
        ?>
       <tr>
         <td><?php echo $a['ST_ID']; ?></td>
         <td><?php echo $a['ST_Name']; ?></td>
         <td><?php echo $a['ST_Sub']; ?></td>
       </tr>
         <?php } ?>
     </tbody>
 </table>

<?php include 'Footer.php'; ?>
