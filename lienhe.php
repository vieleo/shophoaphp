<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="YRpUZtbORLCQyvQIrzQh3Xj2C7Zf8JKRM7efSOMF">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/danhmuc.css">
    <link rel="stylesheet" type="text/css" href="css/lienhe.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
    </script>
    <!--<script type="text/javascript">
      function welcome() {
        alert('Chào mừng quý khách đến với shop!')
      }
    </script>-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#description'
      });
    </script>
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js">      
    </script>
    <script type="text/javascript">
           
         $(document).ready(function(){
            
            $('#myForm').validate({
                rules:{
                    fullname:{
                        required:true
                    },
                    phone:{
                        digits:true
                    }              
                }, 
                messages:{
                    fullname:{
                        required:"Cần nhập họ tên"
                    },
                    phone:{
                        digits:"số điện thoại chỉ chứa các chữ số"
                    }   
                }
            });
         });
     </script>


     

    
  </head>
  <body >

  <!-- Navbar ---><nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          Shop
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                Trang chủ
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="danhmuc.php">
                Sản phẩm
              </a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cửa hàng
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Số 10 Lê Văn Lương</a></li>
            <li><a class="dropdown-item" href="#">Số 8 Trần Hưng Đạo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Văn phòng - Số 5 Láng Hạ </a></li>
          </ul>
        </li>
            <li class="nav-item">
              <a class="nav-link" href="lienhe.php">
                Liên hệ
              </a>
            </li>
            <!-- Authentication Links -->
            <li class="nav-item">
              <a class="nav-link" href="/login">
                Login
              </a>
            </li>
            <li class="nav-item">
              <a href="/welcome/en">
                <img src="./images/en.png" style="height:30px;margin: 5px;">
              </a>
              <a href="/welcome/vn">
                <img src="./images/vn.png" style="height:30px;margin: 5px;">
              </a>
            </li>
            <li class="nav-item" id="cart_id">
              <a class="nav-link" href="giohang.html">
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
          </ul>
        </div>
      </div>
    </nav>




<!--lienhe-->


 <div class="lien_he">
  <div class="introduce row">
       <div class="container-fluid text-center">
            <h1 class="section-title">
              Sản phẩm mới
            </h1>
       </div>
       <div class="container-fluid text-center">
            <img src="images/flower_string.png" width="30%">
       </div>
   </div>    
  <div class="send_feedback" >
    <center><h2 style="color:red">Gửi Phản Hồi</h2></center>
    <form class="phan_hoi" id="myForm">
      <input class="conten" type="name" name="fullname" placeholder="Họ tên" style="width:350px;height: 30px;"><button style="width:30px"><i class="fas fa-user-edit"></i></button><br>
      <input class="conten" type="email" name="email" placeholder="Email" style="width:350px;height: 30px;"><button style="width:30px"><i class="fas fa-envelope-square"></i></button><br>
      <input class="conten" type="phone" name="phone" placeholder="Số điện thoại" style="width:350px;height: 30px;"><button style="width:30px"><i class="fas fa-phone"></i></button><br>
      <input class="conten" type="text" name="title" placeholder="Tiêu đề" style="width:350px;height: 30px;"><button style="width:30px"><i class="far fa-file-alt"></i></button><br>
      <textarea class="conten" style="width:350px; height:100px" placeholder="Nội dung"></textarea><br>
      <input type="submit" name="Gửi" value="Gửi"  style="width:100px; color:white; background-color: red">
      
    </form>
    
  </div>
 <div class="contact">
    <h2 class="tieu_de">Thông Tin Liên Hệ</h2>
    <p>Địa chỉ: Khu 3, Lũng Hoà, Vĩnh Tường, Vĩnh Phúc</p>
    <p>Hotline:<a href="tel:0397636901">0397636901</a></p>
    <p>Email: <a href="mailto:nguyenquangvietvp@gmail.com">nguyenquangviet2k1@gmail.com</a></p>
    <img src="images/bandolienhe.PNG" alt="Bản đồ vị trí" width="400px">
    
  </div>

</div>
  
  






<!--footer--->
<footer>
  <div class="container">  <div class="container row">
    <div class="col-md-3"><h3>MỞ RỘNG</h3>
      <ul>
        <li>Nhãn Hiệu</li>
        <li>Phiếu Quà Tặng</li>
        <li>Chi Nhánh</li>
        <li>Đặc Biệt</li>
      </ul>
    </div>
    <div class="col-md-3"><h3>THÔNG TIN</h3>
      <ul>
        <li>Về Chúng Tôi</li>
        <li>Chính sách bảo mật</li>
        <li>Điều Khoản và Điều Kiện</li>
        <li>Liên Hệ</li>
        <li>Tìm Chúng Tôi</li>
      </ul>
    </div>
    <div class="col-md-3"><h3>TÀI KHOẢN</h3>
      <ul>
        <li>Tài Khoản của tôi</li>
        <li>Lịch Sử Mua Hàng</li>
        <li>Danh Sách Mua Hàng</li>
        <li>Bản Tin</li>
        <li>Lợi Nhuận</li>
      </ul>
    </div>
    <div class="col-md-3"><h3>CONTACCT US</h3>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i>
         Đường đua F1, Phú Đô, Nam Từ Liêm, Hà Nội</li>
        <li><i class="fas fa-envelope"></i>trianh.contact@gmail.com</li>
        <li><i class="fas fa-phone-alt"></i>0964688431</li>
        <li>
          <a href="#"><img class="lang_flag" src="images/paypal-1.jpg"></a>
          <a href="#"><img class="lang_flag" src="images/visa.jpg"></a>
          <a href="#"><img class="lang_flag" src="images/discover.png"></a>
          <a href="#"><img class="lang_flag" src="images/maestro.png"></a>
          <a href="#"><img class="lang_flag" src="images/american.jpg"></a>
        </li>
      </ul>
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
  </html>