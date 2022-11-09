<div class="show_sp" style=" height:1500px;">
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
  $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,9";
   $query_pro = mysqli_query($mysqli,$sql_pro);
   
?>
<?php 
  $sql_pro = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
   $query_pro = mysqli_query($mysqli,$sql_pro);
   $sql_cate ="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
   $query_cate= mysqli_query($mysqli,$sql_cate);
   $row_title=mysqli_fetch_array($query_cate);
?>
<div id="danh_muc_sp">
<h1 style="margin-left: 379px; font-size: revert;margin-bottom: 1px;"><?php echo $row_title['tendanhmuc']?></h1>
<div class="hoa_dm">
		<img src="img/hoa/flower_string.png" style="width: 384px; margin-left: 258px;">
</div>
<div class="container-fluid">
		<div class="col-md-12">
	   	    	<ul class="product_list">
	   	    		<?php 
                     while($row_pro = mysqli_fetch_array($query_pro)){
	   	    		?>
	   	    		<li>
	   	    			<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>"  style="height: 69%; width:291px">
	   	    				
	   	    			<div class="icon_buy" style="margin-left: 231px;margin-top: 56px;">
	   	    					<i class="fas fa-cart-plus"></i>
	   	    			</div> 
	   	    			<a href="sanpham.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
	   	    				<p style="color: black;font-size:17px" class="title_product" title="<?php echo $row_pro['tensanpham']?>">
	   	    					
	   	    				 <?php echo $row_pro['tensanpham']?></p>
	   	    				<p class="price_product" style="margin-left:57px">Giá: <?php echo number_format($row_pro['giasanpham']).' VNĐ'?>  </p>
	   	    			</a>
	   	    		</li>
	   	    		<?php 
	   	          	}
	   	          	?>
	   	    	</ul>
	   	    </div>
	  </div>
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
<div class="row_sp col-lg-12 col-md-4" style="width: 139%;margin-left: -307px;padding-top: 120px;">
                <?php
                include('pages/footer_sp.php');
                ?>
</div>
</div>