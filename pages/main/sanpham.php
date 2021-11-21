<p><b>Chi tiết sản phẩm</b></p>
<?php 
   $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
   $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
   while($row_chitiet =mysqli_fetch_array($query_chitiet)){
 ?>  
<div class="wrapper_chitiet">
<div class="hinhanh_sanpham">
	<img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" style="height: 300px;width: 300px">
	
</div>
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
<div class="chitiet_sanpham">
	<h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
	<p>Mã sản phẩm: <?php echo $row_chitiet['masanpham']?></p>
	<p class="price_product" style="color:black; margin-left:-2px">Giá sản phẩm:  <?php echo number_format($row_chitiet['giasanpham']).' VNĐ'?>  </p>
	<p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong']?></p>
	<p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc']?></p>
	<!--<p><b>Mô tả:</b><?php echo $row_chitiet['noidung']?></p>-->
	<p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng" style="height:42px;width:134px;background:red;font-size:17px;color: #fff; font-weight: 700;" ></p>
</div>
</form>
</div>

<div class="clear">
	<div class="tabs">
  		<ul id="tabs-nav">
  		  <li><a href="#chitiet">Tóm tắt sản phẩm</a></li>
  		  <li><a href="#noidung">Nội dung</a></li>
  		  <li><a href="#hinhanh">Hình ảnh đính kèm</a></li>
  		  
  		</ul> <!-- END tabs-nav -->
  <div id="tabs-content">
    	<div id="chitiet" class="tab-content">
    	   <?php echo $row_chitiet['tomtat'] ?>
    	</div>

    	<div id="noidung" class="tab-content">
    	   <?php echo $row_chitiet['noidung'] ?>
    	</div>

    	<div id="hinhanh" class="tab-content">
    	   <img width="30%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
    	</div>
  </div> <!-- END tabs-content -->
</div> <!-- END tabs -->


<?php 
}
?>