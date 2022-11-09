<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chi tiết sản phẩm</title>
    <link href="css_details/bootstrap.min.css" rel="stylesheet">
    <link href="css_details/font-awesome.min.css" rel="stylesheet">
    <link href="css_details/prettyPhoto.css" rel="stylesheet">
    <link href="css_details/price-range.css" rel="stylesheet">
    <link href="css_details/animate.css" rel="stylesheet">
    <link href="css_details/main.css" rel="stylesheet">
    <link href="css_details/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
        input:hover.themgiohang {
            background: #FE980F;
        }
    </style>
</head><!--/head-->

<body>
  <section>
     <div class="container">
        <div class="row">  
                <div class="col-sm-9 padding-right">
<?php 
   $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 3";                
   $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
   while($row_chitiet =mysqli_fetch_array($query_chitiet)){
   ?>    
    
       
            

                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                
                                  <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                          <a href=""><img src="images/langhoa/LH01.jpg" width="70px",height="50px" alt=""></a>
                                          <a href=""><img src="images/langhoa/LH02.jpg" width="70px",height="50px" alt=""></a>
                                          <a href=""><img src="images/langhoa/LH03.jpg" width="70px",height="50px" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="images/langhoa/LH04.jpg" width="70px",height="50px" alt=""></a>
                                          <a href=""><img src="images/langhoa/LH05.jpg" width="70px",height="50px" alt=""></a>
                                          <a href=""><img src="images/langhoa/LH06.jpeg" width="70px",height="50px" alt=""></a>
                                        </div>
                                        <!--<div class="item">
                                          <a href=""><img src="images/langhoa/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/langhoa/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/langhoa/similar3.jpg" alt=""></a>
                                        </div>-->
                                        
                                    </div>

                                  <!-- Controls -->
                                  <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>
                            </div>

                        </div>
            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">            
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2>Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h2>
                                <p>Mã ID: <?php echo $row_chitiet['id_sanpham']?></p>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
                                    <span><p class="price_product" style="color:black; margin-left:-2px">  <?php echo number_format($row_chitiet['giasanpham']).' VNĐ'?>  </p></span>
                                    <label>Số lượng:</label>
                                    <input type="text" min="1" value="1" />
                                    <input class="themgiohang" name="themgiohang" type="submit" value="Đặt hàng" style="width:100px;background=#FE980F;">
                                    <!--<button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        
                                    </button>-->
                                </span>
                                <p><b>Tình trạng kho:</b> Còn hàng</p>
                                <p><b>Chất lượng:</b> Mới</p>
                                <p><b>Tên danh mục:</b> <?php echo $row_chitiet['tendanhmuc'] ?></p>
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    </div><!--/product-details-->
            </form>                    
                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Tóm tắt</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Nội dung</a></li>
                                <li><a href="#tag" data-toggle="tab">Hình ảnh đính kèm</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá(10)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details" >
                                <?php
                                echo $row_chitiet['tomtat'];
                                ?>
                                
                            </div>
                            
                            <div class="tab-pane fade" id="companyprofile" >
                                <?php
                                echo $row_chitiet['noidung'];
                                ?>
                                
                            </div>
                            
                            <div class="tab-pane fade" id="tag" >
                                
                                 <img width="30%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
                                
                            
                            </div>
                            
                            <div class="tab-pane fade active in" id="reviews" >
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>quangviet</a></li>
                                        <li><a href=""><i class="fas fa-clock"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="far fa-calendar-alt"></i>1/12/2021</a></li>
                                    </ul>
                                    <p>Đã nhận hàng. Chất lượng phục vụ rất tốt. Giao hàng nhanh . Chất lượng sản phẩn tuyệt vời. Cảm ơn shop!</p>
                                    <p><b>Hãy đánh giá sản phẩm </b></p>
                                    
                                    <form action="#">
                                        <span>
                                            <input type="text" placeholder="Tên người dùng"/>
                                            <input type="email" placeholder="Địa chỉ email"/>
                                        </span>
                                        <div class="cmt">
                                            <iframe src="binhluan.php?idsp=<?=$_GET['id']?>" width="100%" height="400px" frameborder="0"></iframe>
                                        </div>
                                        <textarea name="" ></textarea>
                                        <b>Đánh giá chất lượng: </b> <img src="images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right">
                                            Gửi
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--/category-tab-->
                       
               
        
    
    
   <?php
   }
   ?>
    </div>
                
            </div>
   </div>
   </section>
   <div class="container">
    <div class="lquan" style="position: absolute;margin-top: 1095px; margin-left: 113px">
     <?php
      include('pages/sp_lquan.php');
     ?>
     </div>
   </div>
    <script src="js_details/jquery.js"></script>
    <script src="js_details/price-range.js"></script>
    <script src="js_details/jquery.scrollUp.min.js"></script>
    <script src="js_details/bootstrap.min.js"></script>
    <script src="js_details/jquery.prettyPhoto.js"></script>
    <script src="js_details/main.js"></script>

</body>
</html>
<div class="row_chitiet col-lg-12 col-md-4" style="width: 103%;margin-left: -43px;margin-top: 1169px;">
                <?php
                include('pages/footer_sp.php');
                ?>
</div>