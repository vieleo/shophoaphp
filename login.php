<?php
 function login(){
    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //tạo kết nối với database
                $connect = new mysqli("localhost", "root", "","web_cnpm");
                //cho phép PHP lưu unicode (utf8) - database
                mysqli_set_charset($connect, "utf8");
                //kiểm tra kết nối có thành công không
                if ($connect ->connect_error) {
                        var_dump($connect ->connect_error);
                        die();
                }
                /// thực hiện truy vấn dữ liệu- insert data vào database
                $query = "SELECT * FROM tbl_login WHERE EMAIL = '".$email."' AND PASSWORD = '".$password."'";
                $resultset = mysqli_query($connect,$query);
                $data = array();
                 while($row = mysqli_fetch_array($resultset, 1)){
                    $data[] = $row;
                 }
                //ĐÓNG kết nối
                $connect -> close();
        if($data != null && count($data) > 0)
        {
            header("Location:admincp/sanpham.php");
        }elseif($password != "") {
                echo '<h2 style="color:red; text-align:center; position: absolute; background : rgba(255, 255, 255)" >Tài khoản hoặc mật khẩu không đúng!</h2>';
        }
    }
}
?>
