<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sản phẩm</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </script>
</head>
<body>
	<div class="wrapper col-md-4 col-sm-3" style="margin-left:14px">
	   <?php
	       session_start();
	       include("admincp/config/config.php");
	        include("pages/menu.php");
	        //include("pages/header.php");
	       include("pages/main.php");
	       //include("pages/footer_sp.php");
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