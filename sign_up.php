<?php
   session_start();
   //var_dump($_SESSION);
   require_once ("register.php");
   
   register();
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
            width: 50%;
        }
        .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
        background-color: #985f6896;
         }
         .text-center {
        text-align: center;
        padding-top: 29px;
         }
         img {
        width: 1520px;
        height: 717px;
         }
         .banner_dangKy {
        margin-left: -380px;
        }
        .dang_ky {
        position: absolute;
        border: 1px solid;
        border-radius: 30px;
        width: 573px;
        height: 500px;
        box-shadow: 0 0.5rem 1.5rem rgb(0 0 0);
        background-color: aliceblue;
        margin-top: -655px;
        margin-left: 58px;
        }
    </style>

     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                    username:{
                        required:true
                    },
                    email:{
                        required:true
                    },
                    password:{
                        rangelength:[8,20]
                    },
                    phone_number:{
                        digits:true
                    }
                    


                }, 
                messages:{
                    fullname:{
                        required:"Cần nhập họ tên"
                    },
                    username:{
                        required:"Cần nhập thông tin"
                    }
                    email:{
                        required:"Cần nhập email"
                    },
                    password:{
                        rangelength:"password không ít hơn 8 ký tự và không nhiều hơn 20 ký tự"
                    }
                    phone_number:{
                        digits:"số điện thoại chỉ chứa các chữ số"
                    }
                    
                }
            });
 
         });

     </script>
</head>
<body class="center-block" >
<div class="banner_dangKy">
    <img src="img/banner_login_04.jpg" alt="">
</div>

	<!-- Default form register -->
    <div class="dang_ky">
<form class="text-center border border-light p-5" action="#!" method="POST" id="myForm">

    <p class="h4 mb-4"><b>Đăng ký</b></p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="fullname" placeholder="Tên">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="username" placeholder="Họ">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control" placeholder="Mật khẩu" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        Ít nhất 8 ký tự và 1 chữ số
    </small>

    <!-- Phone number -->
    <input type="phone" id="defaultRegisterPhonePassword" name="phone_number" class="form-control" placeholder="Số điện thoại" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Tùy chọn - để xác thực hai bước
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Theo dõi bản tin của chúng tôi</label>
    </div>


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" style="width:65%; margin-left: 20% "><b>Đăng ký</b></button>

    <!-- Social register -->
    <p>hoặc đăng ký với:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>Bằng cách nhấp chuột
        <em>đăng ký</em> bạn đồng ý với của chúng tôi
        <a href="" target="_blank">điều khoản dịch vụ</a>

</form>
</div>
<!-- Default form register -->
	
</body>
</html>