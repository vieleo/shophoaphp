<?php 
	if (isset($_GET['trang'])) {
		$page = $_GET['trang'];

	}else{
		$page ='1';
	}
	if ($page == '' || $page ==1) {
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
  $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,15";
   $query_pro = mysqli_query($mysqli,$sql_pro);
   
?>
<h1 style="margin-left: 304px;">SẢN PHẨM MỚI NHẤT</h1>

<div class="anh_nhan">
	<img src="img/hoa/flower_string.png">
</div>
					<div class="col-md-4 col-sm-3">
	   	    	<ul class="product_list">
	   	    		<?php
	   	    		while($row= mysqli_fetch_array($query_pro)){
	   	    		?>	
	   	    		<li style="width:27.2%;">
	   	    			<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" style="height: 66%; width:304.3px">
	   	    				<div class="icon_buy">
	   	    					<i class="fas fa-cart-plus"></i>
	   	    				</div>

	   	    			<a href="sanpham.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
	   	    				<p style="color: black;font-size:17px" class="title_product" title="<?php echo $row['tensanpham']?>"><?php echo $row['tensanpham']?></p>
	   	    				<p class="price_product" style="margin-left:75px"> Giá: <?php echo number_format($row['giasanpham']).' VNĐ'?>  </p>

	   	    				<p style="color:var(--,blue); margin-left:68px">Thể Loại: <?php echo  $row['tendanhmuc']?></p>
	   	    					   	    			</a>
	   	    		</li>
	   	    		<?php
 					}
 					?>
	   	    	</ul>
	   	    </div>
	   	    	<div style="clear:both;"></div>
	   	    	<style type="text/css">
	   	    		  ul.list_trang{
	   	    		  	padding: 0;
	   	    		  	margin: 0;
	   	    		  	list-style: none;
	   	    	    }
	   	    	    ul.list_trang li{
	   	    	    	float: left;
	   	    	    	padding:5px 13px;
	   	    	    	margin: 5px;
	   	    	    	background: burlywood;
	   	    	    	display: block;
	   	    	    }
	   	    	    ul.list_trang li a{
	   	    	    	color: #000;
	   	    	    	text-align: center;
	   	    	    	text-decoration: none;

	   	    	    }


	   	    	</style>
	   	    	<?php
	   	    	$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
	   	    	$row_count = mysqli_num_rows($sql_trang);
	   	    	$trang = ceil($row_count/5);
	   	    	?>
	   	    	<p>Trang hiện tại : <?php echo $page  ?>/<?php echo $trang ?></p>
	   	    	
	   	    	<ul class="list_trang">
	   	    		
	   	    		<?php
	   	    		for($i=1;$i<=$trang;$i++){
	   	    		?>
	   	    			<li <?php if($i ==$page){ echo 'style="background:red"';}else{ echo '';}  ?> ><a href="sanpham.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
	   	    		<?php	
	   	    		}
	   	    		?>

	   	    	</ul>