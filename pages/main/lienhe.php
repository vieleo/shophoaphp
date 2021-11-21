<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Liên hệ</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="css/lienhe.css">
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
	</script>
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
<body>
	<div class="send_feedback">
		<center><h2 style="color:red">Gửi Phản Hồi</h2></center>
		<form class="phan_hoi" id="myForm">
			<input class="conten" type="name" name="fullname" placeholder="Họ tên" style="width:350px;height: 30px;"><button style="width:30px"><i class="fas fa-user-edit"></i></button><br>
			<input class="conten" type="email" name="email" placeholder="E-mail" style="width:350px;height: 30px;"><button style="width:30px"><i class="fas fa-envelope-square"></i></button><br>
			<input class="conten" type="phone" name="phone" placeholder="Số điện thoại" style="width:350px;height: 30px;"><button style="width:30px"><i class="fas fa-phone"></i></button><br>
			<input class="conten" type="text" name="title" placeholder="Tiêu đề" style="width:350px;height: 30px;"><button style="width:30px"><i class="far fa-file-alt"></i></button><br>
			<textarea class="conten" style="width:350px; height:100px" placeholder="Nội dung"></textarea><br>
			<input type="submit" name="submit" value="Gửi"  style="width:100px; color:white; background-color: red">
			
		</form>
		
	</div>
	<div class="contact">
		<h2 class="tieu_de">Thông Tin Liên Hệ</h2>
		<p>Địa chỉ: Khu 3, Lũng Hoà, Vĩnh Tường, Vĩnh Phúc</p>
		<p>Hotline:<a href="tel:0397636901">0397636901</a></p>
		<p>Email: <a href="mailto:nguyenquangvietvp@gmail.com">nguyenquangviet2k1@gmail.com</a></p>
		<img src="img/bandolienhe.PNG" alt="Bản đồ vị trí" width="400px">
		
	</div>
	
	
</body>
</html>