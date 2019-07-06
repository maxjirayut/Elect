<?php include 'Header.php';
include 'Connect.php';
include 'Menu/MenuReport.php';?>
    <table class="table"  id="dataTable">
        <thead class="thead-light">
          <tr>
            <th>เบอร์</th>
            <th>ชื่อ</th>
            <th>คณะ</th>
            <th>คะแนนรวม</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $SQL = "SELECT * FROM tb_student WHERE ST_Status = 'อนุมัติ' ";
          $query = mysql_query($SQL);
          while ($data = mysql_fetch_array($query)) {
           ?>
          <tr>
            <td><?php echo $data['ST_ID']; ?></td>
            <td><?php echo $data['ST_Name']; ?></td>
            <td><?php echo $data['ST_Sub']; ?></td>
            <td><?php echo $data['ST_Score']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
    </table>
 <?php include 'Footer.php'; ?>
