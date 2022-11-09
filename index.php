<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Shop Flower</title>

    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideDown("slow");
      });
    });
    </script>
    <style> 
    #panel, #flip{
      padding: 5px;
      color:blue
      text-align:center;
    }
    #panel {
      padding: 50px;
      display: none;
      background:border-box;
      
    }
   </style>

 <!--về đầu trang-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $("a").on('click', function(event) {

 
    if (this.hash !== "") {
      
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

  </head>
  <body onload="welcome()">
<?php
  include('admincp/config/config.php');
  $sql_spmoi = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc = '25' LIMIT 4 ";
  $query_spmoi = mysqli_query($mysqli, $sql_spmoi);
  $sql_hoaqua = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc = '31' LIMIT 4 ";
  $query_hoaqua = mysqli_query($mysqli, $sql_hoaqua);
  $sql_moinhat = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc > '25' ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 8 ";
  $query_moinhat = mysqli_query($mysqli, $sql_moinhat);
  $sql_khaitruong = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc = '26' LIMIT 4 ";
  $query_khaitruong = mysqli_query($mysqli, $sql_khaitruong);
   
?>
  

<!-- Navbar --->
<div class="menu_tt" id="my_top">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Trang chủ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="sanpham.php">Sản phẩm</a>
        </li>

		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cửa hàng
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Số 10 Lê Văn Lương</a></li>
            <li><a class="dropdown-item" href="#">Số 8 Trần Hưng Đạo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Văn phòng - Số 5 Láng Hạ </a></li>
          </ul>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="lienhe.php">Liên hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="sign_in.php">Login</a>
        </li>
        <li class="nav-item">
          <a href="#"><img class="lang_flag" src="images/en.png"></a>
          <a href="#"><img class="lang_flag" src="images/vn.png"></a>
        </li>
        <li class="nav-item" id="cart_id">
              <a class="nav-link" href="http://localhost:81/Shop_flower/sanpham.php?quanly=giohang">
                <i class="fa fa-cart-plus" style="font-size:1.5rem">

                </i>
                <span class="cart_number">
                    20
                  </span>
              </a>
              <div id="cart_window" >GIỎ HÀNG</div>
            </li>
            <a class="nav-link" href="/order">
            </a>
    </div>
  </div>
</nav>
</div>
<!---Carousel---->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carousel_01.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

      
        <h6 class="home-carousel-title">Độc quyền</h6>
        <h1 class="home-carousel-title">GIẢM GIÁ ĐẾN 70%</h6>
        <h6 class="home-carousel-title">Nhận ưu đãi đặc biệt</h6>
        <div class="text-left">
    <!--javascript-->
          <script type="text/javascript">
            function xemChiTiet(){
              if (confirm('Bạn thực sự muốn xem chi tiết chứ ?')) 
                alert('Bạn đã đồng ý!');
              else
                alert('Bạn không đồng ý !');
            }
          </script>

          <button class="btn btn-light home-button" onclick="xemChiTiet()">
            <span class="home-carousel-title">
            Chi tiết
            </span>
          </button>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/carousel_02.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h6 class="home-carousel-title">Độc quyền</h6>
        <h1 class="home-carousel-title">GIẢM GIÁ ĐẾN 70%</h6>
        <h6 class="home-carousel-title">Nhận ưu đãi đặc biệt</h6>
        <div class="text-left">
          <button class="btn btn-light home-button">
            <span class="home-carousel-title">Chi tiết</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="phone col-md-6 col-sm-6">
  <p>ĐẶT HOA NHANH - GỌI NGAY 1900 633 045 - 0865 160 360 HOẶC 0397636901</p>
  <hr style="width: 1223px; margin-left: -317px; color: coral;">
</div>

<div class="contact">
   <ul class="lienhe_shop ">
        <li class="zalo">
          <a href="https://chat.zalo.me/?null">Chat Zalo</a>
        </li>
        <li class="facebook">
          <a href="https://www.facebook.com/">Chat FaceBook</a>
        </li>
        <li class="hotline">
         <a href="tel:0397636901">Hotline: 0397636901</a>
        </li>
   </ul>
</div>

<!---Collection------>

<div class="container">   
  <div class="collection row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
             Bộ sưu tập hoa
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
<div class="container">
  <div class="category">
    <div class="danhmuc">
  <div class="col-md-2 col-sm-2" >
     
    <div class="category_one">
      <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=25"><img src="images/hoasinhnhat/SN01.jpg" width="200px" ></a>
    </div>
    <div class="titel">
    <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=25" class="ten_TL" style="margin-left:-21px">Hoa Sinh Nhật</a>
    </div>
  </div>
  <div class="col-md-2 col-sm-2">
    <div class="category_one">
      <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=29"><img src="images/hoachiabuon/CB01.jpg"width="200px"></a>
    </div>
    <div class="titel" style="margin-left:11%">
    <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=29" class="ten_TL" >Hoa Chia Buồn</a>
    </div>
  </div>
  <div class="col-md-2 col-sm-2">
    <div class="category_one">
      <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=30"><img src="images/hoalan/lan01.jpg"width="200px"></a>
    </div>
    <div class="titel">
    <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=30" class="ten_TL" style="margin-left: 13px;">Hoa Lan</a>
    </div>
  </div>
  <div class="col-md-2 col-sm-2">
    <div class="category_one">
      <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=28"><img src="images/hoatinhyeu/TY01.jpg"width="200px"></a>
    </div>
    <div class="titel">
    <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=28" class="ten_TL" style="margin-left:-13px;">Hoa Tình Yêu</a>
    </div>
  </div>
  <div class="col-md-2 col-sm-2">
    <div class="category_one">
      <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=26"><img src="images/hoakhaitruong/KT1.jpg"width="200px"></a>
    </div>
    <div class="titel">
    <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=26" class="ten_TL" style="margin-left:-22px;">Hoa Khai Trương</a>
    </div>
  </div>
  <div class="col-md-2 col-sm-2">
    <div class="category_one">
      <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=27"><img src="images/hoacuoi/cuoi01.jpg"width="200px"></a>
    </div>
    <div class="titel">
    <a href="http://localhost:81/Shop_flower/sanpham.php?quanly=danhmucsanpham&id=27" class="ten_TL" style="margin-left:10px;">Hoa Cưới</a>
    </div>
  </div>
  </div>
  </div>

</div>
</div>
</div>

<div class="container">   
  <div class="introduce row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Sản Phẩm Mới Nhất
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
       <ul class="product_list">
              <?php
              while($row_moinhat= mysqli_fetch_array($query_moinhat)){
              ?>  
              <li style="width:24%;">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_moinhat['hinhanh']?>" style="height: 66%; width:271.9px">
                  <div class="icon_buy" style="margin-left:213px;margin-top:77px;height:53px;padding-top:3px">
                    <i class="fas fa-cart-plus"></i>
                  </div>

                <a href="sanpham.php?quanly=sanpham&id=<?php echo $row_moinhat['id_sanpham']?>" style="margin-left:-12px">
                  <p style="color: black;font-size:17px" class="title_product" title="<?php echo $row_moinhat['tensanpham']?>"><?php echo $row_moinhat['tensanpham']?></p>
                  <p class="price_product" style="margin-left:75px"> Giá: <?php echo number_format($row_moinhat['giasanpham']).' VNĐ'?>  </p>

                  <!-- <p style="color:var(--,blue); margin-left:68px">Thể Loại: <?php echo  $row['tendanhmuc']?></p> -->
                </a>
              </li>
              <?php
          }
          ?>
        </ul>
  </div>
</div>  


<div class="container">   
  <div class="collection row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
             Dịch Vụ
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
       <div class="dich_vu col-md-4 col-sm-3">
          <div class="dv_img">
             <img src="images/dv11.png">
          </div>
          <div class="noi_dung">
            <h3 style="font-size: 20px;font-weight: 700;text-align: center;">FREE SHIPPING</h3>
            <p style="text-align: center;font-family: cursive;">Shop Flower giao miễn phí địa điểm nhận hàng bán kình 10km đối với tất cả bó hoa, lẵng hoa, và kệ hoa trên 1 triệu.</p>
          </div>
       </div>
       <div class="dich_vu col-md-4 col-sm-3">
          <div class="dv_img">
             <img src="images/dv2222.png">
          </div>
          <div class="noi_dung">
            <h3 style="font-size: 20px;font-weight: 700;text-align: center;">GIAO NHANH TRONG 30 PHÚT</h3>
            <p style="text-align: center;font-family: cursive;">Shop Flower có thể giao nhanh trong 30' khu vực nội thành Hà Nội với bó hoa hoặc lẵng hoa đơn giản.</p>
          </div>
       </div>
       <div class="dich_vu col-md-4 col-sm-3">
          <div class="dv_img">
             <img src="images/dv3.png">
          </div>
          <div class="noi_dung">
            <h3 style="font-size: 20px;font-weight: 700;text-align: center;">HOA ĐẸP NHƯ HÌNH</h3>
            <p style="text-align: center;font-family: cursive;">Shop Flower Cam kết hoa đẹp như hình và giống đến 90% so với hình chụp trên website.</p>
          </div>
       </div>
  </div>
</div>       






<div class="container">   
  <div class="introduce row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Hoa Sinh Nhật
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
        <ul class="product_list">
              <?php
              while($row_spmoi= mysqli_fetch_array($query_spmoi)){
              ?>  
              <li style="width:24%;">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_spmoi['hinhanh']?>" style="height: 66%; width:271.9px">
                  <div class="icon_buy" style="margin-left:213px;margin-top:77px;height:53px;padding-top:3px">
                    <i class="fas fa-cart-plus"></i>
                  </div>

                <a href="sanpham.php?quanly=sanpham&id=<?php echo $row_spmoi['id_sanpham']?>" style="margin-left:-12px">
                  <p style="color: black;font-size:17px" class="title_product" title="<?php echo $row_spmoi['tensanpham']?>"><?php echo $row_spmoi['tensanpham']?></p>
                  <p class="price_product" style="margin-left:75px"> Giá: <?php echo number_format($row_spmoi['giasanpham']).' VNĐ'?>  </p>

                  <!-- <p style="color:var(--,blue); margin-left:68px">Thể Loại: <?php echo  $row['tendanhmuc']?></p> -->
                </a>
              </li>
              <?php
          }
          ?>
        </ul>
      </div>
    </div>
      
  


<div class="container">   
  <div class="introduce row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Giỏ Trái Cây
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
       <ul class="product_list">
              <?php
              while($row_hoaqua= mysqli_fetch_array($query_hoaqua)){
              ?>  
              <li style="width:24%;">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_hoaqua['hinhanh']?>" style="height: 66%; width:271.9px">
                  <div class="icon_buy" style="margin-left:213px;margin-top:77px;height:53px;padding-top:3px">
                    <i class="fas fa-cart-plus"></i>
                  </div>

                <a href="sanpham.php?quanly=sanpham&id=<?php echo $row_hoaqua['id_sanpham']?>" style="margin-left:-10px">
                  <p style="color: black;font-size:17px" class="title_product" title="<?php echo $row_hoaqua['tensanpham']?>"><?php echo $row_hoaqua['tensanpham']?></p>
                  <p class="price_product" style="margin-left:65px"> Giá: <?php echo number_format($row_hoaqua['giasanpham']).' VNĐ'?>  </p>

                  <!-- <p style="color:var(--,blue); margin-left:68px">Thể Loại: <?php echo  $row['tendanhmuc']?></p> -->
                </a>
              </li>
              <?php
          }
          ?>
        </ul>
   </div>
</div>   

<div class="container">   
  <div class="introduce row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Hoa Khai Trương
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
        <ul class="product_list">
              <?php
              while($row_khaitruong= mysqli_fetch_array($query_khaitruong)){
              ?>  
              <li style="width:24%;">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_khaitruong['hinhanh']?>" style="height: 66%; width:271.9px">
                  <div class="icon_buy" style="margin-left:213px;margin-top:77px;height:53px;padding-top:3px">
                    <i class="fas fa-cart-plus"></i>
                  </div>

                <a href="sanpham.php?quanly=sanpham&id=<?php echo $row_khaitruong['id_sanpham']?>" style="margin-left:-12px">
                  <p style="color: black;font-size:17px" class="title_product" title="<?php echo $row_khaitruong['tensanpham']?>"><?php echo $row_khaitruong['tensanpham']?></p>
                  <p class="price_product" style="margin-left:65px"> Giá: <?php echo number_format($row_khaitruong['giasanpham']).' VNĐ'?>  </p>

                  <!-- <p style="color:var(--,blue); margin-left:68px">Thể Loại: <?php echo  $row['tendanhmuc']?></p> -->
                </a>
              </li>
              <?php
          }
          ?>
        </ul>
      </div>
    </div>
     







    
<div class="container">   
  <div class="partner row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Khách Hàng Tiêu Biểu
            </h1>
            <!--<p><center>Chọn lựa từ các thương hiệu sản phẩm cao cấp và tiết kiệm nhất</center></p>-->
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
       <?php
            include("pages/doi_tac.php");
        ?>
 </div>
 <?php
    include("pages/thongtincuahang.php");
 ?>
 
 <div class="container">   
  <div class="introduce row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Quảng Cáo
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
       <div class="col-md-6 col-sm-6">
            <div class="card">
                 <img class="card-img-top" src="images/products/promo7.jpg" alt="Hoa sinh nhật">
                 <div class="card-body container text-center">
                        <h5 class="theme">Độc Quyền</h5>
                        <h2 class="theme"><b>Bộ Sưu Tập Xịn</b></h2>
                         <h5 class="theme">Chi Tiết</h5>
                  </div>
            </div>
       </div>
       <div class="col-md-6 col-sm-6">
            <div class="card">
                 <img class="card-img-top" src="images/products/promo8.jpg" alt="Hoa sinh nhật">
                 <div class="card-body container text-center">
                        <h5 class="theme_one">Xu Hướng Mới</h5>
                        <h2 class="theme_one"><b>Độc Lạ</b></h2>
                        <h5 class="theme_one">Mua Ngay</h5>
                  </div>
            </div>
       </div>
       <div class="mytop" style="position: fixed;top: 84%;left: 95%;">
       <a href="#my_top" class="len_top" style="font-size:46px;color: #ff3385;"><i class="fas fa-arrow-circle-up"></i></a>
       </div>

<?php
  include"pages/footer.php";

?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>