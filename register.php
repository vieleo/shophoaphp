<?php
 function register(){
        if(!empty($_POST)){
                $fullname = $_POST['fullname'];
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone_number = $_POST['phone_number'];

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
                $query = "INSERT INTO tbl_login(FULL_NAME,USER_NAME,PASSWORD, EMAIL, PHONE_NUMBER) VALUES ('".$fullname."','".$user_name."', '".$password."', '".$email."', '".$phone_number."')";
                mysqli_query($connect, $query);

                //ĐÓNG kết nối
                $connect -> close();

        
        header("Location:sign_in.php");

     }
   }     

?>