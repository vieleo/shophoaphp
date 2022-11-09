<?php
  $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
  $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<h2>Liệt kê danh mục sản phẩm</h2>
<table style="width: 50%" border="1" style="border-collapse: collapse;">
  <tr class="btn-default">
  	<th style="width:10%px;text-align:center;">Id</th>
    <th style="width:40%px;text-align:center;">Tên danh mục</th>
    <th style="width:10%px;text-align:center;">Quản lý</th>
  </tr>
  <?php
     $i = 0;
     while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
  ?>
  <tr>
  	<td><?php echo $i ?></td>
  	<td><?php echo $row['tendanhmuc'] ?></td>
  	<td>
  		<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xoá</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
  	</td>
    
  </tr>
  <?php
   }
  ?> 
  
</table>