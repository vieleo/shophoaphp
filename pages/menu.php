<?php 

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC ";
$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);      
?>
<?php
  if (isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
  	unset($_SESSION['dangky']);
  }
?>
<div id="menu_top" style="background: azure;position: fixed;z-index: 10;width: 100%;height: 98px;">
<div class="menu">
	   	    <ul class="list_menu">
	   	    	<li><a href="index.php">Trang chủ</a></li>
	   	    	<li><a href="sanpham.php?quanly=tintuc">Sản phẩm mới nhất</a></li>
	   	    	<?php
                 while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	   	    	?>
						<!--
	   	    	<li><a href="sanpham.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
	   	    	<?php
                 }
	   	    	?>-->

	   	    	<li><a href="sanpham.php?quanly=giohang">Giỏ hàng</a></li>
	   	    	<?php 
	   	   		 if (isset($_SESSION['dangky'])) {
	   	   		 ?>
	   	   		 <li><a href="sanpham.php?dangxuat=1">Đăng xuất</a></li>
	   	   		 <?php 
	   	   		}else{
	   	   		?>	
	   	   		<li><a href="sanpham.php?quanly=dangky">Đăng ký</a></li>
	   	   		<?php
	   	   		}
	   	   		?>
	   	    	<!--<li><a href="sanpham.php?quanly=lienhe">Liên hệ</a></li>	-->
	   	    </ul>
            <p>
            <form action="sanpham.php?quanly=timkiem" method="POST" class="tim_kiem">
	   	    	<input type="text" placeholder="Nhập từ khoá..." name="tukhoa" class="form_tk">
	   	    	<input type="submit" name="timkiem" value="Tìm" class="search_tk">
	   	    	</form>
	   	     </p>
</div>
</div>