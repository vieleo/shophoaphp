<?php
   session_start();
   //var_dump($_SESSION);
   require_once ("register.php");
   
   register();
?>

<!DOCTYPE html>
<head>
<title>Đăng ký</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css_theme/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css_theme/style.css" rel='stylesheet' type='text/css' />
<link href="css_theme/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css_theme/font.css" type="text/css"/>
<link href="css_theme/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js_theme/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
    <h2>Đăng ký</h2>
        <form action="#" method="post">
            <input type="text" class="ggg" name="fullname" placeholder="NAME" required="">
            <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
            <input type="phone" class="ggg" name="phone_number" placeholder="PHONE" required="">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <h4><input type="checkbox" />Tôi đồng ý với Điều khoản dịch vụ và Chính sách quyền riêng tư.</h4>
            
                <div class="clearfix"></div>
                <input type="submit" value="Đăng ký" name="register">
        </form>
        <p>Already Registered.<a href="login.html">Đăng ký</a></p>
</div>
</div>
<script src="js_theme/bootstrap.js"></script>
<script src="js_theme/jquery.dcjqaccordion.2.7.js"></script>
<script src="js_theme/scripts.js"></script>
<script src="js_theme/jquery.slimscroll.js"></script>
<script src="js_theme/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js_theme/jquery.scrollTo.js"></script>
</body>
</html>
