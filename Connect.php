<?php
$hot = 'localhost';
$username = 'root';
$password = '';
$db = 'elect';

mysql_connect($hot ,$username ,$password) or die ('connect Faild');
mysql_query('set names utf8');
mysql_select_db($db) or die ('DB fail');
 ?>