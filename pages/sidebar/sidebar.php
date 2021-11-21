<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <style type="text/css">
    .title_danhmuc {
    background: darkslategrey;
    color: #fff;
    border-radius: 12px 0px 63px 1px;
    height: 50px;
}
.sidebar {
    height: 390px;
    width: 14%;
    margin-top: 5px;
    margin-left: 5px;
    position: fixed;
    float: left;
}
  </style>
</head>
<body>

<div class="sidebar">
  <div class="title_danhmuc">
	<h3 style="padding-left: 10px; padding-top: 11px;">Danh Mục Sản Phẩm</h3>
  </div>
     <div class="danhsach">
	   	    <ul class="list_sidebar">
	   	    	<?php 
             ob_start();
						    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC ";
						    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc); 
						    while($row = mysqli_fetch_array($query_danhmuc))
                {     
					  ?>	
	   	    		<li>
                <a href="sanpham.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><i class="fas fa-plus"></i> 
              <?php
               echo $row['tendanhmuc']
              ?>
                 </a>
              </li>
	   	    		<?php 
	   	    	  }
	   	    	  ?>
	   	    </ul>
	   	</div>
</div>
</body>
</html>
