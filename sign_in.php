<?php
 session_start();

 require_once ("login.php");
 
 login();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="./mai.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style type="text/css">
        body{
            width: 30%;
        }
        .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
        background-color: #985f6896;
         }
         .dang_nhap {
        background-color: aliceblue;
        border-radius: 33px;
        box-shadow: 0 0.5rem 1.5rem rgb(0 0 1);
        height: 319px;
        position: absolute;
        width: 401px;
        margin-top: -629px;
        margin-left: 57px;
        }
        .text-center {
        text-align: center;
        padding-top: 25px;
        }
        .banner_login {
        margin-left: -117%;
        }
        img {
        width: 1537px;
        height: 721px;
        }
    </style>

 <!--   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#description'
      });
    </script>
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"/>
        
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

     </script>-->
</head>
<body class="center-block" >
    <div class="banner_login">
    <img src="img/banner_login_04.jpg" alt="" >
    </div>


 <div class="dang_nhap">  <!-- Default form login -->
<form class="text-center border border-light p-5" action="#" method="POST">

    <p class="h4 mb-4"><b>Đăng nhập</b></p>

    <!-- Email -->
    <input type="email"   name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password"  name="password" class="form-control mb-4" placeholder="Mật khẩu">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Lưu tài khoản</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Quên mật khẩu?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit"><b>Đăng nhập</b></button>

    <!-- Register -->
    <p>Không có tài khoản
        <a href="sign_up.php">Đăng ký</a>
    </p>

    <!-- Social login -->
    <p>hoặc đăng nhập bằng:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
</div>
<!-- Default form login -->

</body>
</html>

