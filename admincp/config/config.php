<?php
$mysqli = new mysqli("localhost:3307","root","","web_cnpm");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối mysqli lỗi " . $mysqli->connect_error;
  exit();
}
?>