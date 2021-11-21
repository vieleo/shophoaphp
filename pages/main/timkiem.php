<?php 
   if (isset($_POST['timkiem'])) {
   	$tukhoa = $_POST['tukhoa'];
   }
  $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
   tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
   $query_pro = mysqli_query($mysqli,$sql_pro); 
?>
<h3>Từ khoá tìm kiếm:<?php echo $_POST['tukhoa']?></h3>
	   	    	<ul class="product_list">
	   	    		<?php
	   	    		while($row= mysqli_fetch_array($query_pro)){
	   	    		?>	
	   	    		<li>
	   	    			<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" style="height: 65%; width:291px">
	   	    				
	   	    			<div class="icon_buy" style="margin-left: 231px;margin-top: 72px;">
	   	    					<i class="fas fa-cart-plus"></i>
	   	    			</div> 
	   	    			<a href="sanpham.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
	   	    				<p style="color: black" class="title_product" title="<?php echo $row['tensanpham']?>"><?php echo $row['tensanpham']?></p>
	   	    				<p class="price_product" style="margin-left:75px">Giá: <?php echo $row['giasanpham'].' vnđ'?>  </p>

	   	    				<p style="color:var(--,blue);margin-left:65px">Từ khoá: <?php echo $row['tendanhmuc']?></p>

	   	    			</a>
	   	    		</li>
	   	    		<?php
 					}
 					?>
	   	    		
	   	    	</ul>
	   	    	