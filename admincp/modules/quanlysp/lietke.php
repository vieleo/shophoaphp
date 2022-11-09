<?php
  $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
  $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<h2 style="text-align:center; margin-top: 50px;">LIỆT KÊ SẢN PHẨM</h2>
<table  style="width: 100%;background: #fff;" border="1" style="border-collapse: collapse;background: cyan;">
  <tr class="btn-default" >
  	<th style="text-align:center;width: 40px;">Id</th>
    <th style="text-align:center;width:130px">Tên danh mục</th>
    <th style="text-align:center;    width: 200px;">Hình ảnh</th>
    <th style="text-align:center;">Giá sản phẩm</th>
    <th style="text-align:center;">Số lượng</th>
    <th style="text-align:center;    width: 130px;">Danh mục</th>
    <th style="text-align:center;">Mã sản phẩm</th>
    <th style="text-align:center; width:300px">Tóm tắt</th>
    <th style="text-align:center;    width: 81px;">Trạng thái</th>
    <th style="text-align:center;">Quản lý</th>
  </tr>
  <?php
     $i = 0;
     while ($row = mysqli_fetch_array($query_lietke_sp)) {
  ?>
  <tr>
  	<td style="height: 143px;text-align:center"><?php echo $row['id_sanpham'] ?></td>
  	<td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100%" height="159px"></td>
    <td style="text-align:center;width: 92px;"><?php echo number_format($row['giasanpham']) ?></td>
    <td style="text-align:center;width: 79px;"><?php echo $row['soluong'] ?></td>
    <td style="text-align:center"><?php echo $row['tendanhmuc'] ?></td>
    <td style="text-align:center;width: 79px;"><?php echo $row['masanpham'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td style="text-align:center"><?php if($row['tinhtrang']==1){
      echo 'Kích hoạt';
    }else{
      echo 'Ẩn';
    }
     ?>
       
     </td>
    
  	<td style="text-align:center">
  		
       <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" class="btn btn-success">Sửa</a>
      
       <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" class="btn btn-danger">Xoá</a> 
  	</td>
    
  </tr>
  <?php
   }
  ?> 
  
</table>