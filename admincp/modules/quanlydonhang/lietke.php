<?php
$sql_lietke_dh="SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh=mysqli_query($mysqli,$sql_lietke_dh);
?>
<h2> Danh sách đơn hàng</h2>
<table  class="" style="width: 100%" border="1"style="border-collapse: collapse;text-align:center;">
  <tr class="btn-default" style="height:40px;">
  	<th style="text-align:center;">Id</th>
    <th style="text-align:center;">Mã đơn hàng</th>
    <th style="text-align:center;">Tên khách hàng</th>
    <th style="text-align:center;">Địa chỉ</th>
    <th style="text-align:center;">Email</th>
    <th style="text-align:center;">Số điện thoại</th>
    <th style="text-align:center;">Tình trạng</th>
    <th style="text-align:center;">Quản lý</th>
    <th style="text-align:center;">In</th>
  </tr>
  <?php
  $i=0;
  while ($row=mysqli_fetch_array($query_lietke_dh)) {
  	$i++;
   ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart']?></td>
    <td><?php echo $row['tenkhachhang']?></td>
    <td><?php echo $row['diachi']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['dienthoai']?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'"> Đơn hàng mới</a>';
    	}else{
        echo 'Đã xem';
      }
    	?>
    </td>
    <td>
       <a href="sanpham.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
    </td>
    <td>
       <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart']?>">In đơn hàng</a>
    </td>
  </tr>
  <?php
}
  	?>
</table></p>