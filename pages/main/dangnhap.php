<?php 
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		//$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		//$row = mysqli_query($mysqli,$sql);
		//$count = mysqli_num_rows($row);
		//if($count>0){
		//	$row_data=mysqli_fetch_array($row);
		//	$_SESSION['dangky'] = $row_data['tenkhachhang'];
		//	$_SESSION['id_khachhang'] = $row_data['id_dangky'];
		//header('Location:sanpham.php?quanly=giohang');
		//}else{
		//	echo '<p style="color:red">Mật khẩu hoặc Email sai!Vui lòng nhập lại!</p>';
		//	header("Location:login.php");
		//}
		//tạo kết nối với database
                $connect = new mysqli("localhost:3306", "root", "","web_cnpm");
                //cho phép PHP lưu unicode (utf8) - database
                mysqli_set_charset($connect, "utf8");
                //kiểm tra kết nối có thành công không
                if ($connect ->connect_error) {
                        var_dump($connect ->connect_error);
                        die();
                }
                /// thực hiện truy vấn dữ liệu- insert data vào database
                $query = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."'";
                $resultset = mysqli_query($connect,$query);
                $data = array();
                 while($row = mysqli_fetch_array($resultset, 1)){
                    $data[] = $row;
                 }
                //ĐÓNG kết nối
                $connect -> close();
        if($data != null && count($data) > 0)
        {
        	header('Location:sanpham.php?quanly=giohang');
            //header('Location:sanpham.php?quanly=giohang');
            die();
        }
	}
?>
<form action=""autocomplete="off" method="POST">
   <table border="1" width="60%" class="table-login" style="text-align: center;border-collapse: collapse;">
  	 <tr>
  	   <td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
     </tr>
	 <tr>
		<td>Tài khoản</td>
		<td><input type ="text" size="50" name="email" placeholder="Email........"></td>
	 </tr>
	 <tr>
		<td>Mật khẩu</td>
		<td><input type ="password" size="50" name="password" placeholder="Mật khẩu........"></td>
	 </tr>
	 <tr>
		<td colspan="2"><input type="submit" name="dangnhap" value="Đăng Nhập"></td>
	 </tr>
   </table>
  </form>