<?php
$mysqli = new mysqli("localhost","root","","web_cnpm");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối mysqli lỗi " . $mysqli->connect_error;
  exit();
}
?>