<?php
//session_start();
//include('config/config.php');
//if(isset($_POST['dangnhap'])) {
//	$taikhoan = $_POST['username'];
//	$matkhau = md5($_POST['password']);
//	$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";
//	$row = mysqli_query($mysqli,$sql);
//	$count = mysqli_num_rows($row);
//	if($count > 0){
//		$_SESSION['dangnhap'] = $taikhoan;
//		header("Location:sanpham.php");
//	}else {
//		echo '<script>alert("tài khoản hoặc mật khẩu sai, vui lòng nhập lại");</script>';
//		header("Location:sanpham.php");
//	}
//}

login();

function login(){
	if(!empty($_POST)){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if($email == 'nguyenquangviet2k1@gmail.com' && $password == "16022001"){
			header("Location:sanpham.php");
		}else{
			echo '<h2 style="color:red; text-align:center" >Tài khoản hoặc mật khẩu không đúng!</h2>';
		}

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập ADMINCP</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		body{
			background: #f2f2f2;
		}
		.wrapper-login{
			width: 15%;
			margin: 0 auto;

		}
		table.table-login{
			width: 100%;
		}
		table.table-login tr td{
            padding: 5px;
		}

	</style>
</head>
<body>
	<div class="wrapper-login">
		<form  action="" autocomplete="off" method="POST">
	<table border="1" class="table-login" style="text-align:center; border-collapse: collapse; ">
		<tr>
			<td colspan="2"><h3>Đăng nhập admin</h3></td>
		</tr>
		<tr>
			<td>Tài Khoản</td>
			<td><input type="email" name="email"></td>

		</tr>
		<tr>
			<td>Mật Khẩu</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
		</tr>
	</table>
	</form>
</div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
</body>
</html>
