<?php
include 'Header.php';
include 'Menu/MenuHome.php';
include 'Connect.php';
 ?>
 <table class="table"  id="dataTable">
     <thead class="thead-light">
        <tr>
          <th>เบอร์</th>
          <th>ชื่อ</th>
          <th>คณะ</th>
          <th>ที่อยู่</th>
          <th>อีเมล</th>
          <th>เบอร์โทร</th>
          <th>สถานะ</th>
          <th>แก่ไข/ลบ</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_student ";
        $query = mysql_query($sql);
        while ($a = mysql_fetch_array($query)) {
         ?>
        <tr>
          <td><?php echo $a['ST_Number']; ?></td>
          <td><?php echo $a['ST_Name']; ?></td>
          <td><?php echo $a['ST_Sub']; ?></td>
          <td><?php echo $a['ST_Address']; ?></td>
          <td><?php echo $a['ST_Email']; ?></td>
          <td><?php echo $a['ST_Phone']; ?></td>
          <td><?php echo $a['ST_Status']; ?></td>
          <td width="15%" >
            <div class="text-center">
              <a href="FromHome.php?ST_ID=<?php echo $a['ST_ID']; ?>">
                <button type="button" class="btn btn-warning" name="button">รายละเอียด</button>
              </a>
              <a href="JavaScript:if(confirm('ยืนยันการลบ') == true){window
                  .location='DeleteHome.php?ST_ID=<?php echo $a["ST_ID"];?>';}">
                <button type="button" class="btn btn-danger" name="button">ลบ</button>
              </a>
            </div>
          </td>
        </tr>
          <?php } ?>
      </tbody>
  </table>
<?php include 'Footer.php'; ?>
