<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sản phẩm</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
    </script>
</head>
<body>
	<div class="wrapper col-md-4 col-sm-3">
	   <?php
	       session_start();
	       include("admincp/config/config.php");
	        include("pages/menu.php");
	        //include("pages/header.php");
	       include("pages/main.php");
	       //include("pages/footer.php");
	   ?>
	   
	   </div>

	   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	   <script type="text/javascript">
			// Show the first tab and hide the rest
				$('#tabs-nav li:first-child').addClass('active');
				$('.tab-content').hide();
				$('.tab-content:first').show();
				// Click function
				$('#tabs-nav li').click(function(){
				  $('#tabs-nav li').removeClass('active');
				  $(this).addClass('active');
				  $('.tab-content').hide();
				  
				  var activeTab = $(this).find('a').attr('href');
				  $(activeTab).fadeIn();
				  return false;
				});
	   </script>
	
</body>
</html>