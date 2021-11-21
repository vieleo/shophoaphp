<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Báo Cáo CNPM</title>
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="./mai.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style >
        * {
             margin :0px;
             padding:0px;           
        }
    	.image{
    		margin: 0px;
    		margin-top: 88px;
    		
    	}
    	.image img{
    		width: 1518px;
    		height: 500px;
    	}


    	ul{
            list-style: none;
        }

        a {
            text-decoration:none;
        }

        body{
            font-family: 'Segoe UI', Tahoma, Geneva ,Verdana, sans-serif;
            color: black;
            background-color: white;
        }

        #logo{
        	
        	margin-left: 70px;
        }


       

        .inner-header {
            display: flex;
            justify-content:space-between;
            align-items:center;
        }

        

        ul#main-menu {
    display: flex;
    position: relative;
    left: -440px;
}

        ul#main-menu a{
            text-transform: uppercase;
            padding: 20px 20px;
            color: black;
            display: block;
            font-weight: bold;
            margin-right: 0px;  
            font-size: 13px;  

        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            border-bottom: 1px solid white;
            padding: 10px 0px;
            transition: all 0.5s ease-in-out;
            z-index: 10;

        }

        header.sticky{
            background:  black;
            opacity: 0.9;
            padding: 10px 0px;
            box-shadow:  0px 5px 15px rgba(0, 0, 0, 0.5);
            
        }

        header.sticky #main-menu  a {
            color: white;
        }

        header.sticky #logo {
            color: white;
        }

        ul#main-menu > li > a:hover {
            background:   ;
            color: red;
            transition: ease-in 0.10s;
            -moz-transition: ease-in 0.10s;
            -webkit-transition: ease-in 0.10s;
        }
         ul.submenu {
            width: 320px;
            min-height: 10px;
            background:  white;
            display: none;
            position: absolute;
        }

        ul.submenu li{
            list-style: none;
        }

        ul.submenu li a{
            color: #fff;
            text-decoration: none;
            display: block;
            border-bottom: 2px solid #ccc;
            line-height: 10px;
            text-indent: 10px;
        }

        ul#main-menu > li:hover ul.submenu{
            display: block;

        }

        ul.submenu li a:hover{
           background:   #eaeae1 ;
           
            transition: ease-in 0.10s;
            -moz-transition: ease-in 0.10s;
            -webkit-transition: ease-in 0.10s;
        }
        #container{
        	background-color: white;
        	width: 1160px;
    		height: 900px;  
    		margin-left: 170px;
    		position: absolute;
    		background-color:  ;


    	  
        }

        ul.tom {
        	width: 800px;
        	height: 100px;
        	position: absolute;
        	background-color:  ;
        }
        ul.tom a{
        	color: black;
        	font-family: 30px;
        	float: left;
        	padding-left: 30px;
        	font-size: 25px;
        	margin-top: 45px;
        	font-weight: bold;
        }

        ul.tom a:hover{
        	color: red;
        }

        .hometab1{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 8%;
        }
        .hometab1 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab1 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        
        .hometab2{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab2 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab2 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        
        .hometab3{
        	width: 800px;
        	height: 130px;
        	background-color:  ;
        	margin-top: 0%;
        }
        .hometab3 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab3 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab4{
        	width: 800px;
        	height: 130px;
        	background-color:  ;
        	margin-top: 0%;
        }
        .hometab4 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab4 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab5{
        	width: 800px;
        	height: 130px;
        	background-color:  ;
        	margin-top: 0%;
        }
        .hometab5 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab5 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab6{
        	width: 800px;
        	height: 130px;
        	background-color:  ;
        	margin-top: 0%;
        }
        .hometab6 img{
        	padding-left: 10px ;
        	padding-top: 5px;

        }
        .hometab6 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .icon{
        	display: flex;
        	position: absolute;
        	margin-top: -50px;
        	margin-left: 220px;
        }

        .conten1 a:hover{
        	color: blue;
        }
        .conten2 a:hover{
        	color: blue;
        }
        .conten3 a:hover{
        	color: blue;
        }
        .conten4 a:hover{
        	color: blue;
        }
        .conten h5 a{
        	color:blue ;
            margin-left: 690px;
            position: absolute;
            right: 400px;
            top: 20px;    
        }
        .conten h5 a:hover{
        	color: red;
        }

        .context{
        	width: 500px;
        	height: 800px;
        	padding-right: 30px;
        	padding-top: 585px;
        	right: 100px;
        	top: 45px;
        	position: absolute;

        }
        .nav nav-tabs a{
        	font-weight: bold;		
        }
        .tab-content{
            top: -25px;
            
            padding-right: 400px;
        	left: 15px;
        }
        
        .hometab7{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab7 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab7 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab8{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab8 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab8 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;       	
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab9{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab9 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab9 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;        	
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab10{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab10 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab10 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;        	
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab11{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab11 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab11 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;        	
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab12{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab12 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab12 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;        	
        	margin-left: 20px;
        	font-size: 20px;
        	border-radius: 15px ;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab13{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab13 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab13 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;	
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab14{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab14 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab14 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab15{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab15 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab15 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab16{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab16 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab16 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab17{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab17 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab17 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab18{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab18 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab18 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .hometab19{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab19 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab19 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab20{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab20 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab20 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab21{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab21 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab21 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab22{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab22 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab22 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab23{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab23 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab23 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }
        .hometab24{
        	width: 800px;
        	height: 130px;
        	background-color: ;
        	margin-top: 0%;
        }
        .hometab24 img{
        	padding-left: 10px ;
        	padding-top: 10px;

        }
        .hometab24 a{
        	color: black;
        	font-weight: bold;
        	position: absolute;
        	margin-left: 20px;
        	font-size: 20px;
        	margin-right: 400px;
    		padding-left: 18%;
        }

        .phone a {
            color: burlywood;
            margin-left: 800px;
            padding-right: 0px;
            position: absolute;
            top: -5px;
            float: left;
            margin-top: 13px;
        }
        .phone a:hover{
        	color: red;
        }
        .email a {
            color: burlywood;
            padding-right: 0px;
            position: absolute;
            top: -24px;
            text-decoration: none;
            float: left;
            margin-left: 723px;
            margin-top: 31px;
        }
        .email a:hover{
        	color: red;
        }

        button.login_dn {
            position: absolute;
            margin-left: 79%;
            width: 106px;
            border-radius: 20px;
            height: 34px;
            top: 33px;
            font-weight: 800;
        }
        button.sign_up {
            position: absolute;
            margin-left: 87%;
            width: 112px;
            border-radius: 18px;
            height: 32px;
            top: 34px;
            font-weight: 800;
        }
        #intro{
        	width: 1518px;
        	height: 900px;
        	background-color: white;
        }
        .leopie{
        	width: 1518px;
        	height: 700px;
        	background: <img src="img/anhnen.jpg" alt="">;
        }


        * {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container-inder {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.container-inder{
  width: 1000px;
  height: 550px;
  margin-left: 270px;
}
.conten-333{
  width: 100%;
  height: 80px;
}
.conten-333 h1{
  color:  #ff3300;
}


.content-inder {
            background: beige;
            width: 1511px;
            height: 800px;
            padding-left: 47px;
        }
        ul.products{
            display: flex;
            list-style: none;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 1200px;
            margin-left: 120px;
            margin-top: 10px;

            
        }
        ul.products li{
            flex-basis: 25%;
            padding-left: 10px;
            padding-right: 10px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }

        ul.products product-name a:hover product-item{
            color: red;

        }

        ul.products li .product-top a.refer-now{
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color:  blue;
            color: black;
            padding: 10px 0px;
            position: absolute;
            bottom: -36;
            width: 100%;
            transition: 0.60s ease-in-out;
            opacity: 0.85;
        }

        ul.products li .product-top .product-thumb img{
            display: block;
        }

        ul.products li:hover .product-top .product-thumb img{
            filter: opacity(80%);
        }

        ul.products li .product-top .product-thumb{
            display: block;

        }

        ul.products li .product-top{
            position: relative;
            overflow: hidden;
        }

        ul.products li:hover a.refer-now {
            bottom: 0px;
        }
        

        .content-inder p {
            color: black;
            text-align: center;
            font-size: 20px;
            margin: auto;
            margin-right: 209px;
            font-size: 16px;
        }
        .product-item {
             background-color: #f5f5f0;
             height: 300px;
        }
        a.product-name {
            text-decoration: none;
            font-family: system-ui;
            font-weight: bold;
        }
        .madein a {
           text-decoration: none;
        }
        .danh-muc h2 {
             padding-left: 130px;
            font-size: 31px;
             color: black;
             padding-top: 37px;
        }


        .pass-1 {
    margin-left: 178px;
    margin-top: 120px;
}
.anh-1 h3 {
    font-size: 29px;
    margin-top: 43px;
}
.anh-1-1 {
    border: 1px solid white;
    width: 1110px;
    height: 116px;
}
.anh-1-1 p a {
    width: 25%;
    height: 82px;
    float: left;
    border: 1px solid blue;
    border-radius: 86px;
    text-align: center;
    font-size: 21px;
    display: block;
    text-decoration: none;
    padding-right: 0px;
    padding-top: 22px;
    margin-top: 10px;
    background-color: #80d4ff;
    font-weight: bold;
    color: black;
}
.content-inder p {
    color: black;
    text-align: center;
    font-size: 20px;
    margin: auto;
    margin-right: 28px;
    font-size: 16px;
}
.anh-1-1 p a:hover{
    background-color:    #b3ff99;
    color:  red;
}
.anh-1-2 {
    border: 1px solid ;
    width: 1080px;
    height: 124px;
}
.anh-1-2 img {
    float: left;
    border: 1px solid black;
}
.zuzu{
	width: 100%;
	height: 900px;
}
.anh-1-2 {
    border: 1px solid black;
    width: 1070px;
    height: 125px;
    margin-left: 3px;
    margin-top: 25px;
}


.bombom {
    width: auto;
    height: 677px;
    background: #f5f5f0;
    margin-left: -47px;
}
.son-son {
    width: 1364px;
    height: 548px;
    margin-left: 78px;
    padding-top: 70px;
}
ul.son-1 {
    position: absolute;
    width: 18%;
    height: 523px;
    font-size: 23px;
    list-style: none;
    padding-left: 50px;
} 
ul.son-1 li a {
    text-decoration: none;
    color: black;
}
ul.son-1 li a:hover{
	color: red;
}

ul.son-2 {
    float: left;
    position: absolute;
    margin-left: 340px;
    width: 20%;
    height: 525px;
    font-size: 22px;
    list-style: none;
    padding-left: 44px;
}
ul.son-2 li a {
    text-decoration: none;
    color: black;
}
ul.son-2 li a:hover{
	color: red;
}
ul.son-3 {
    position: absolute;
    margin-left: 679px;
    width: 19%;
    height: 525px;
    font-size: 22px;
    list-style: none;
    padding-left: 77px;
}
ul.son-3 li a {
    text-decoration: none;
    color: black;
}
ul.son-3 li a:hover{
	color: red;
}
ul.son-4 {
    position: absolute;
    margin-left: 1049px;
    height: 525px;
    font-size: 22px;
    width: 20%;
    list-style: none;
    padding-left: 40px;
}
ul.son-4 li a {
    text-decoration: none;
    color: black;
}
ul.son-4 li a:hover{
	color: red;
}

button.btn.btn-outline-light.mb-4 {
    margin-left: 393px;
    margin-top: 20px;
}
.form-outline.form-white.mb-4 {
    right: 0px;
    padding-left: 388px;
    margin-right: -403px;
    padding-top: 20px;
}
.row.mt-3 {
    margin-left: 110px;
    margin-top: 20px;
}
section {
    margin-left: -16px;
}
form {
    width: 100%;
    height: 377px;
}
.text-center.p-4 {
    margin-top: 18px;
    margin-left: -24px;
    margin-right: -15px;
    background-color: white;
}


/*fexit icon*/
.icon-bar {
  position: fixed;
  top: 50%;
  right: 0;
  margin-right: 7px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 7px;
    transition: all 0.3s ease;
    color: white;
    font-size: 16px;
    width: 120%;
    border-radius: 45px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
} 


.sprice{
    position: absolute;
    font-size: x-large;
    margin-left: 75%;
    border-radius: 122px;
    width: 50px;
    height: 45px;
    padding-top: 5px;
    margin-top: 8px;
    text-align: center;
    box-shadow: 0 0.5rem 0.5rem;
    background-color: antiquewhite;
}
    </style>
    <script type="text/javascript">
        function welcome(){
            alert("Chào mừng cô đến với sản phẩm của em!")
        }
    </script>

</head>
<body onload="welcome()">
	<div id="wrapper">
          <header>
              <div class="inner-header">
              	<a href="index.php"><img id="logo" src="img/logo1.png"width="80px"></a>
                <div class="sprice"><a href="http://localhost/BaoCaoCNPM/sanpham.php?quanly=giohang"><i class="fas fa-shopping-cart" style="color:red"></i></a></div>
                <button class="login_dn" ><a href="sign_in.php">Đăng nhập</a></button>
                <button class="sign_up"><a href="sign_up.php">Đăng ký</a></button>
              	<div class="phone">
              	 	<a href="tel:0397636901"><i class="fa fa-phone-square" aria-hidden="true"></i>0397636901</a>
                 </div>
                 <div class="email">
                 	<a href="mailto:nguyenquangviet2k1@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>nguyenquangviet2k1@gmail.com</a>
                 </div>
                 
                   <nav>
                       <ul id="main-menu">
                           <li><a href="">Nhà đất bán</a>
                                <ul class="submenu"style="width:300px">
                                    <li><a href="">Bán căn hộ chung cư</a></li>
                                    <li><a href="">Bán nhà riêng</a></li>
                                    <li><a href="">Bán nhà biệt thự, liền kề</a></li>
                                    <li><a href="">Bán nhà mặt phố</a></li>
                                    <li><a href="">Bán đất nền dự án</a></li>
                                    <li><a href="">Bán đất</a></li>
                                    <li><a href="">Bán trang trại, khu nghỉ dưỡng </a></li>
                                    <li><a href="">Bán condotel</a></li>
                                    <li><a href="">Bán kho, nhà xưởng</a></li>
                                    <li><a href="">Bán loại bất động sản khác</a></li>
                                </ul>
                            </li>    

                            <li><a href="sanpham.php">Sản Phẩm</a>

                            </li>    
                           
                           <li><a href="">Nhà đất cho thuê</a>
                           	    <ul class="submenu"style="width:300px">
                                    <li><a href="">Cho thuê căn hộ chung cư</a></li>
                                    <li><a href="">Cho thuê nhà riêng</a></li>
                                    <li><a href="">Cho thuê nhà trọ, phòng trọ</a></li>
                                    <li><a href="">Cho thuê  văn phòng </a></li>
                                    <li><a href="">Cho thuê cửa hàng-ki ốt</a></li>
                                    <li><a href="">Cho thuê kho, nhà xưởng, đất</a></li>
                                    <li><a href="">Cho thuê nhà mặt phố</a></li>
                                    <li><a href="">Cho thuê loại bất động sản khác</a></li>
                                </ul>    
                           </li>
                                
                           <li><a href="">Dự án</a>
                                <ul class="submenu"style="width:250px">
                                    <li><a href="">Căn hộ, Chung cư</a></li>
                                    <li><a href="">Cao ốc văn phòng</a></li>
                                    <li><a href="">Trung tâm thương mại</a></li>
                                    <li><a href="">Khu đô thị mới</a></li>
                                    <li><a href="">Khu phức hợp</a></li>
                                    <li><a href="">Nhà ở xã hội</a></li>
                                    <li><a href="">Khu nghỉ dưỡng, Sinh thái</a></li>
                                    <li><a href="">Khu công nghiệp</a></li>
                                    <li><a href="">Dự án khác</a></li>
                                    <li><a href="">Biệt thự, liền kề</a></li>
                                </ul>
                           </li>
                           
                           <li><a href="">Tin tức</a>
                                <ul class="submenu"style="width:230px">
                                    <li><a href="">BĐS & Covid-19</a></li>
                                    <li><a href="">Tin thị trường</a></li>
                                    <li><a href="">Interaktive Story</a></li>
                                    <li><a href="">Phân tích-Nhận định</a></li>
                                    <li><a href="">Chính sách-Quản lý</a></li>
                                    <li><a href="">Thông tin quy hoạch</a></li>
                                    <li><a href="">Bất động sản thế giới </a></li>
                                    <li><a href="">Tài chính-Chứng khoán</a></li>
                                    <li><a href="">Tư vấn luật</a></li>
                                    <li><a href="">Lời khuyên</a></li>
                                </ul>
                           </li>

                           
                           <li><a href="">Phong thuỷ</a>
                                <ul class="submenu"style="width:230px">
                                    <li><a href="">Phong thuỷ toàn cảnh</a></li>
                                    <li><a href="">Tư vấn phong thuỷ</a></li>
                                    <li><a href="">Phong thuỷ nhà ở</a></li>
                                    <li><a href="">Phong thuỷ văn phòng</a></li>
                                    <li><a href="">Phong thuỷ theo đuổi</a></li>
                                    <li><a href="">Mách bạn</a></li>

                                </ul>    
                           </li>

                           <li><a href="">Danh bạ</a>
                           	    <ul class="submenu"style="width:170px">
                                    <li><a href="">Nhà môi giới</a></li>
                                    <li><a href="">Doanh nghiệp</a></li>
                                </ul>    

                           </li>
                           
                       </ul>
                   </nav>
              </div>
          </header>
          <div class="image">
				<img id="img" onclick="changeImage()" src="img/anh4.jpg" alt="">
		  </div>
	<script>
		var index=1;
		 changeImage= function (){
			var imgs = ["img/anh4.jpg","img/anh5.jpg","img/anh6.jpg"];
			document.getElementById('img').src = imgs[index];
			index++;
			if (index==3) {
				index=0;
			}
		}
		setInterval(changeImage,2000)
 	</script>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script >
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $('header').addClass('sticky');
                } else {
                     $('header').removeClass('sticky');
                }
            });
        });
    </script>

  <!--fexit icon-->
  <script type="text/javascript">
      function facebook(){
        alert("Liên hệ với Fanpage của chúng tôi!");
      }
  </script>
  <script type="text/javascript">
      function twitter(){
        alert("Liên hệ với Twitter của chúng tôi!");
      }
  </script>
  <script type="text/javascript">
      function google(){
        alert("Liên hệ với Google của chúng tôi!");
      }
  </script>
  <script type="text/javascript">
      function linkedin(){
        alert("Liên hệ với Linkedin của chúng tôi!");
      }
  </script>
  <script type="text/javascript">
      function youtube(){
        alert("Liên hệ với Youtube của chúng tôi!");
      }
  </script>

  <div class="icon-bar">

        <a href="#" class="facebook" onclick="facebook()"><i class="fab fa-facebook-square"></i>
        <a href="#" class="twitter" onclick="twitter()"><i class="fab fa-twitter-square"></i></a> 
        <a href="#" class="google" onclick="google()"><i class="fab fa-google-plus-square"></i></a> 
        <a href="#" class="linkedin" onclick="linkedin()"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="youtube" onclick="youtube()"><i class="fab fa-youtube"></i></a>
  </div>


    <div id="container">    	
		<div class="container1">
		    <div class="conten">
			  	<ul class="nav nav-tabs">
    		       	<li class="active"><a data-toggle="tab" href="#home">Tin nổi bật</a></li>
			       	<li><a data-toggle="tab" href="#menu1">Tin tức</a></li>
    		      	<li><a data-toggle="tab" href="#menu2">Tư vấn</a></li>
			 		<li><a data-toggle="tab" href="#menu3">Phong thuỷ</a></li>
                    

  		        </ul>
			 	<h5><a href="https://batdongsan.com.vn/phong-thuy" >Xem thêm! </a></h5>
			</div>

    <div class="tab-content">
  		<div id="home" class="tab-pane fade in active">

			 <div class="conten1">
        			<div class="hometab1">
        			        <a href="" title="Thị trường lao dốc, giới đầu tư bắt đầu gom đất khi đại dịch Covid-19 hoành hành">Thị trường lao dốc, giới đầu tư bắt đầu gom đất khi đại dịch Covid-19 hoành hành</a>
        			  		<img  src="img/anh7.jpg" width="25%", height="auto",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>1 giờ trước</span>  
        			 		</span> 
        			</div>

        			<div class="hometab2">
        			 		<a href="" title="Đánh giá dự án Lạc Hồng Lotus: căn hộ khu Ngoại Giao Đoàn, giá từ 30 triệu/m2">Đánh giá dự án Lạc Hồng Lotus: căn hộ khu Ngoại Giao Đoàn, giá từ 30 triệu/m2</a>
        			  		<img  src="img/anh8.jpg" width="25%", height="auto",>
        			  		<span class="icon" style="left:15px" >
        			 		 <i class="fas fa-clock"></i>
        			    	<span>2 giờ trước</span>  
        			 		</span> 
        			</div>
			
        			<div class="hometab3">
        			  		<a href="" title="Vạch sẵn từng bước kế hoạch, cô gái 27 tuổi mua được nhà như ý">Vạch sẵn từng bước kế hoạch, cô gái 27 tuổi mua được nhà như ý</a>
        			 		<img  src="img/anh9.png" width="25%", height="auto",>
        			 		<span class="icon" style="left:15px" >
        			   		<i class="fas fa-clock"></i>
        			    	<span>1 giờ trước</span>  
        			  		</span> 
       				 </div>

        			<div class="hometab4">
        			  		<a href="" title="Thị trường nhà cho thuê giá rẻ “đóng băng” vì dịch bệnh">Thị trường nhà cho thuê giá rẻ “đóng băng” vì dịch bệnh</a>
        			  		<img  src="img/anh10.jpg" width="25%", height="auto",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>5 giờ trước</span>  
        			 		</span> 
        			</div>
        			
        			<div class="hometab5">
        			  		<a href="" title="Giới đầu tư “đứng ngồi không yên” khi đại dịch kéo dài">Giới đầu tư “đứng ngồi không yên” khi đại dịch kéo dài</a>
        			  		<img  src="img/anh12.jpg" width="25%", height="auto",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>3 giờ trước</span>  
        			  		</span> 
        			</div>
			
        			<div class="hometab6">
        			  		<a href="" title="Thị trường BĐS thích ứng ra sao sau mỗi đợt dịch Covid-19?">Thị trường BĐS thích ứng ra sao sau mỗi đợt dịch Covid-19?</a>
        			  		<img  src="img/anh11.jpg" width="25%", height="auto",>
        			  		<span class="icon" style="left:15px" >
        			   	 	<i class="fas fa-clock"></i>
        			    	<span>4 giờ trước</span>  
        			  		</span>
        			</div>  
               </div>
        </div>

    	<div id="menu1" class="tab-pane fade">
    		<div class="conten2">
        			<div class="hometab7">
        			        <a href="" title="Điểm danh các dự án chung cư quận Hà Đông bàn giao năm 2021">Điểm danh các dự án chung cư quận Hà Đông bàn giao năm 2021</a>
        			  		<img  src="img/tintuc.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>8 giờ trước</span>  
        			 		</span> 
        			</div>

        			<div class="hometab8">
        			 		<a href="" title="Điểm danh các dự án chung cư quận Hà Đông bàn giao năm 2021">Điểm danh các dự án chung cư quận Hà Đông bàn giao năm 2021</a>
        			  		<img  src="img/tintuc1.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			 		 <i class="fas fa-clock"></i>
        			    	<span>5 giờ trước</span>  
        			 		</span> 
        			</div>
			
        			<div class="hometab9">
        			  		<a href="" title="Giá thuê BĐS bán lẻ giảm nhẹ những tháng cuối năm 2021">Giá thuê BĐS bán lẻ giảm nhẹ những tháng cuối năm 2021</a>
        			 		<img  src="img/tintuc2.jpg" width="25%", height="120px",>
        			 		<span class="icon" style="left:15px" >
        			   		<i class="fas fa-clock"></i>
        			    	<span>12 giờ trước</span>  
        			  		</span> 
       				 </div>

        			<div class="hometab10">
        			  		<a href="" title="Vĩnh Phúc sắp triển khai khu đô thị Định Trung 24,6ha">Vĩnh Phúc sắp triển khai khu đô thị Định Trung 24,6ha</a>
        			  		<img  src="img/tintuc3.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>3 giờ trước</span>  
        			 		</span> 
        			</div>
        			
        			<div class="hometab11">
        			  		<a href="" title="Long An xây khu công nghiệp Nam Tân Lập 2.590 tỷ đồng"> Long An xây khu công nghiệp Nam Tân Lập 2.590 tỷ đồng</a>
        			  		<img  src="img/tintuc4.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>9 giờ trước</span>  
        			  		</span> 
        			</div>
			
        			<div class="hometab12">
        			  		<a href="" title="Danh mục 25 công trình đường bộ ưu tiên đầu tư trước năm 2030">Danh mục 25 công trình đường bộ ưu tiên đầu tư trước năm 2030</a>
        			  		<img  src="img/tintuc5.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			   	 	<i class="fas fa-clock"></i>
        			    	<span>4 giờ trước</span>  
        			  		</span>
        			</div>  
               </div>
    	   	
   	 	</div>

    	<div id="menu2" class="tab-pane fade">
    	     
        		<div class="conten3">
        			<div class="hometab13">
        			        <a href="" title="Vợ chồng 9X kể chuyện “tay mơ” đầu tư đất nền và bài học chốt lời trong sốt đất">Vợ chồng 9X kể chuyện “tay mơ” đầu tư đất nền và bài học chốt lời trong sốt đất</a>
        			  		<img  src="img/tuvan1.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>8 giờ trước</span>  
        			 		</span> 
        			</div>

        			<div class="hometab14">
        			 		<a href="" title="Đất vườn là gì, đất vườn có xây được nhà không?">Đất vườn là gì, đất vườn có xây được nhà không?</a>
        			  		<img  src="img/tuvan2.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			 		 <i class="fas fa-clock"></i>
        			    	<span>5 giờ trước</span>  
        			 		</span> 
        			</div>
			
        			<div class="hometab15">
        			  		<a href="" title="Phí quản lý chung cư và phí bảo trì chung cư khác nhau thế nào?">Phí quản lý chung cư và phí bảo trì chung cư khác nhau thế nào?</a>
        			 		<img  src="img/tuvan3.jpg" width="25%", height="120px",>
        			 		<span class="icon" style="left:15px" >
        			   		<i class="fas fa-clock"></i>
        			    	<span>12 giờ trước</span>  
        			  		</span> 
       				 </div>

        			<div class="hometab16">
        			  		<a href="" title="Hướng dẫn cách đọc bản vẽ thiết kế kiến trúc nhà">Hướng dẫn cách đọc bản vẽ thiết kế kiến trúc nhà</a>
        			  		<img  src="img/tuvan4.png" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>3 giờ trước</span>  
        			 		</span> 
        			</div>
        			
        			<div class="hometab17">
        			  		<a href="" title="Điều kiện và mẫu đơn xin ngân hàng giảm lãi suất cho vay do dịch Covid "> Điều kiện và mẫu đơn xin ngân hàng giảm lãi suất cho vay do dịch Covid</a>
        			  		<img  src="img/tuvan5.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>9 giờ trước</span>  
        			  		</span> 
        			</div>
			
        			<div class="hometab18">
        			  		<a href="" title="Giải đáp 5 thắc mắc về phí bảo trì chung cư">Giải đáp 5 thắc mắc về phí bảo trì chung cư</a>
        			  		<img  src="img/tuvan6.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			   	 	<i class="fas fa-clock"></i>
        			    	<span>4 giờ trước</span>  
        			  		</span>
        			</div>  
               </div>
    	   	
   	 	</div>
   	 	<div id="menu3" class="tab-pane fade">
      	     <div class="conten4">
        			<div class="hometab19">
        			        <a href="" title="Tháng 7/2021 âm lịch có nên nhập trạch, động thổ, mua nhà, sửa nhà?">Tháng 7/2021 âm lịch có nên nhập trạch, động thổ, mua nhà, sửa nhà?</a>
        			  		<img  src="img/phongthuy1.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>1 giờ trước</span>  
        			 		</span> 
        			</div>

        			<div class="hometab20">
        			 		<a href="" title="Cách chọn mảnh đất có phong thủy tốt để làm nhà">Cách chọn mảnh đất có phong thủy tốt để làm nhà</a>
        			  		<img  src="img/phongthuy2.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			 		 <i class="fas fa-clock"></i>
        			    	<span>6 giờ trước</span>  
        			 		</span> 
        			</div>
			
        			<div class="hometab21">
        			  		<a href="" title="5 yếu tố chính ảnh hưởng đến phong thủy ngôi nhà ít người biết">5 yếu tố chính ảnh hưởng đến phong thủy ngôi nhà ít người biết</a>
        			 		<img  src="img/phongthuy3.png" width="25%", height="120px",>
        			 		<span class="icon" style="left:15px" >
        			   		<i class="fas fa-clock"></i>
        			    	<span>12 giờ trước</span>  
        			  		</span> 
       				 </div>

        			<div class="hometab22">
        			  		<a href="" title="Một số vật dụng trong phòng ngủ cần lưu ý về phong thủy">Một số vật dụng trong phòng ngủ cần lưu ý về phong thủy</a>
        			  		<img  src="img/phongthuy4.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>1 giờ trước</span>  
        			 		</span> 
        			</div>
        			
        			<div class="hometab23">
        			  		<a href="" title="8 loại pháp khí kích hoạt năng lượng trong phong thủy nhà ở"> 8 loại pháp khí kích hoạt năng lượng trong phong thủy nhà ở</a>
        			  		<img  src="img/phongthuy5.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			    	<i class="fas fa-clock"></i>
        			    	<span>9 giờ trước</span>  
        			  		</span> 
        			</div>
			
        			<div class="hometab24">
        			  		<a href="" title="Làm nhà năm 2021: Thời điểm động thổ và lưu ý cho nhà hướng Tây">Làm nhà năm 2021: Thời điểm động thổ và lưu ý cho nhà hướng Tây</a>
        			  		<img  src="img/phongthuy6.jpg" width="25%", height="120px",>
        			  		<span class="icon" style="left:15px" >
        			   	 	<i class="fas fa-clock"></i>
        			    	<span>5 giờ trước</span>  
        			  		</span>
        			</div>  
               </div>
      			
    </div>

   	</div>



    	
  </div>
</div>

    
<div class="context">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 350px;
    height: 800px;
    margin: auto; 
  }
  </style>
  
  <div id="myCarousel" class="carousel slide">
   
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <a href=""><img src="img/js1.jpg" alt="" width="350px" height="800px"></a>
        
      </div>

      <div class="item">
        <a href=""><img src="img/js2.jpg" alt="" width="350px" height="800px"></a>

      </div>
    
      <div class="item">
        <a href=""><img src="img/js3.png" alt="" width="350px" height="800px"></a>
        
      </div>

      <div class="item">
        <a href=""><img src="img/4.png" alt="" width="350px" height="800px"></a>
        
      </div>
  
    </div>

    
    
  </div>
</div>

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
    		
    			
    		
    </div>
    	
 </div>
 <div id="intro">

 	
 </div>
 <div class="leopie">
 	<div class="conten-333">
      <h1><center>DỰ ÁN NỔI BẬT</center></h1>
  </div>

<div class="container-inder">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/noibat1.png" style="width:1000px", height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/noibat2.png" style="width:1000px", height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/noibat3.jpg" style="width:1000px", height="400px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/noibat4.jpg" style="width:1000px", height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img/noibat5.jpg" style="width:1000px", height="400px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img/noibat6.jpg" style="width:1000px", height="400px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>


  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/noibat1.png" style="width:100%" onclick="currentSlide(1)" alt="Moonlight Centre Point">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/noibat2.png" style="width:100%" onclick="currentSlide(2)" alt="The Matrix One">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/noibat3.jpg" style="width:100%" onclick="currentSlide(3)" alt="The Pavilion">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/noibat4.jpg" style="width:100%" onclick="currentSlide(4)" alt="King Crown Infinity">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/noibat5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Hà Đô Centrosa ">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img/noibat6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Hà Đô Centrosa">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
 	
 </div>

 <div class="content-inder">
        <div class="danh-muc">
            <h2>Bất động sản dành cho bạn</h2>
        </div>
    <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/danhmuc1.jpg"width="350px", height="200px" alt="" title="">
                        </a>
                        <a href="" class="refer-now">Tham khảo</a>
                        
                    </div>
                    <div class="product-info">
                       
                        <a href="" class="product-name" title="Bán đất thuộc ấp 5 xã minh thành, đất nằm giữa hai cụm kcn lớn, becamex và kcn Minh Hưng Hàn Quốc">Bán đất thuộc ấp 5 xã minh thành, đất nằm giữa hai cụm kcn lớn, becamex và kcn...</a>
                        <div class="product-price" style="color:black"><p><b>610 triệu * 180m<sup>2</sup></b></p></div>
                        <div class="madein"><a href="">Chơn Thành</a>,<a href="">Bình Phước</a></div>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/danhmuc2.jpg"width="350px"height="200px"  alt="" title="">
                        </a>
                         <a href="" class="refer-now">Tham khảo</a>
                        
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name" title="Vành Đai Becamex đường nhựa lớn 250m2, SHR Chơn Thành, Bình Phước 0933771856">Vành Đai Becamex đường nhựa lớn 250m2, SHR Chơn Thành, Bình Phước 0933771856</a>
                        <div class="product-price"style="color:black"><p><b>1.2 tỉ * 250m<sup>2</sup></b></p> </div>
                        <div class="madein"><a href="">Chơn Thành</a>,<a href="">Bình Phước</a></div>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/danhmuc3.jpeg"width="350px"width="360px", height="200px" alt="" title="">
                        </a>
                         <a href="" class="refer-now">Tham khảo</a>
                        
                    </div>
                    <div class="product-info">
                        
                        <a href="" class="product-name" title="Đường Số 40 vành đai Becamex mặt tiền đường nhựa lộ lớn xung quanh nhà trọ hiện hữu">Đường Số 40 vành đai Becamex mặt tiền đường nhựa lộ lớn xung quanh nhà trọ ...</a>
                        <div class="product-price"style="color:black"><p><b>1.45 tỉ * 200m<sup>2</sup></b></p></div>
                        <div class="madein"><a href="">Chơn Thành</a>,<a href="">Bình Phước</a></div>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/danhmuc4.jpg"width="350px", height="200px" alt="" title="">
                        </a>
                         <a href="" class="refer-now">Tham khảo</a>
                        
                    </div>
                    <div class="product-info">
                        
                        <a href="" class="product-name" title="Bán đất vành đai khu công nghiệp Becamex Bình Phước, mặt tiền đường nhựa DT: 250m2 sổ sẵn">Bán đất vành đai khu công nghiệp Becamex Bình Phước, mặt tiền đường nhựa DT:...</a>
                        <div class="product-price"style="color:black"><p><b>1.45 ti * 250m<sup>2</sup></b></p></div>
                        <div class="madein"><a href="">Chơn Thành</a>,<a href="">Bình Phước</a></div>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/danhmuc5.jpg"width="350px", height="200px" alt="" title="">
                        </a>
                         <a href="" class="refer-now">Tham khảo</a>
                        
                    </div>
                    <div class="product-info">
                        
                        <a href="" class="product-name" title="LEXUS GS FBán đất vành đai khu công nghiệp Becamex Bình Phước, mặt tiền đường nhựa DT: 250m2 sổ sẵn">LEXUS GS FBán đất vành đai khu công nghiệp Becamex Bình Phước, mặt tiền đường...</a>
                        <div class="product-price"style="color:black"><p><b>510 triệu * 120m<sup>2</sup></b></p></div>
                        <div class="madein"><a href="">Chơn Thành</a>,<a href="">Bình Phước</a></div>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/danhmuc6.jpeg"width="350px", height="200px" alt="" title="">
                        </a>
                         <a href="" class="refer-now">Tham khảo</a>
                        
                    </div>
                    <div class="product-info">
                        <a href="" class="product-name" title="Bán 1 lô đất đường Số 40 Becamex Bình Phước, đường chính thông QL13, 14, thông khu công nghiệp">Bán 1 lô đất đường Số 40 Becamex Bình Phước, đường chính thông QL13, 14,...</a>
                        <div class="product-price"style="color:black"><p><b>610 triệu * 180m<sup>2</sup></b></p></div>
                        <div class="madein"><a href="">Chơn Thành</a>,<a href="">Bình Phước</a></div>
                        
                    </div>
                    
                </div>
            </li>
        </ul>
<div class="zuzu">
        <div class="pass-1">
        <div class="anh">
        <img src="img/banner.jpg" alt="">
        </div>
        <div class="anh-1">
            <h3>Hỗ trợ tiện ích</h3>
            <div class="anh-1-1">
                
                    <p><a href=""><i class="fas fa-house-user"></i>Xem tuổi xây nhà</a></p>
                    <p><a href=""><i class="fas fa-wallet"></i>Dự tính chi phí làm</a></p>
                    <p><a href=""><i class="fas fa-hand-holding-usd"></i>Tính lãi suất</a></p>
                    <p><a href=""><i class="fas fa-comment-medical"></i>Tư vấn phong thuỷ</a></p>   
            </div>
             <h3>Doanh nghiệp tiêu biểu </h3>
            <div class="anh-1-2">
                <a href="http://deborah.vn/"><img src="img/cty-1.png" width="178px", height="124px"></a>
                <a href="www.hausland.com.vn"><img src="img/cty-2.png"width="178px", height="123px"></a>
                <a href="http://srtvietnam.vn"><img src="img/cty-3.png"width="178px", height="124px"></a>
                <a href="bigdreamgroup.com.vn"><img src="img/cty-4.jpg"width="178px", height="124px"></a>
                <a href="http://kimtinhgroup.vn"><img src="img/cty-5.png"width="178px", height="124px"></a>
                <a href="http://www.hoangcatgroup.com"><img src="img/cty-6.jpg"width="178px", height="124px"></a>
                
            </div>
            
        </div>
        
    </div>
</div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true">
    </script>
    <link rel="stylesheet" href="dinh-dang.css">
</head>
<body>
    <div class="bombom">
        <div class="son-son">
        <ul class="son-1">
            <li><a href=""><b>Nhà đất TP HCM</b></a></li>
            <li><a href="">Bán nhà Quận 1</a></li>
            <li><a href="">Bán nhà Quận 2</a></li>
            <li><a href="">Bán nhà Quận 3</a></li>
            <li><a href="">Bán nhà Quận 4</a></li>
            <li><a href="">Bán nhà Quận 6</a></li>
            <li><a href="">Bán nhà Quận 7</a></li>
            <li><a href="">Bán nhà Quận 8</a></li>
            <li><a href="">Bán nhà Quận 9</a></li>
            <li><a href="">Bán nhà Quận 10</a></li>
            <li><a href="">Bán nhà Tân Phú</a></li>
            <li><a href="">Bán nhà Thủ Đức</a></li>
            <li><a href="">Bán nhà Bình Chánh</a></li>
            <li><a href="">Bán nhà Bình Tân</a></li>
            <li><a href="">Chung cư Thủ Đức</a></li>
            <li><a href="">Biệt thự Gò Vấp</a></li>
        </ul>


        <ul class="son-2">
            <li><a href=""><b>Nhà đất Hà Nội</b></a></li>
            <li><a href="">Bán nhà chính chủ Hà Nội</a></li>
            <li><a href="">Chung cư Bắc Từ Liêm</a></li>
            <li><a href="">Nhà đất Long Biên</a></li>
            <li><a href="">Nhà đất Hà Đông</a></li>
            <li><a href="">Thuê chung cư Hà Nội</a></li>
            <li><a href="">Bán nhà Bắc Từ Liêm</a></li>
            <li><a href="">Thuê nhà Hà Nội</a></li>
            <li><a href="">Thuê nhà Thanh Xuân</a></li>
            <li><a href="">Chung cư Hà Đông</a></li>
            <li><a href="">Nhà đất Đông Anh</a></li>
            <li><a href="">Terra An Hưng</a></li>
            <li><a href="">Thuê phòng trọ Hà Nội</a></li>
            <li><a href="">The Matrix One</a></li>
            <li><a href="">Chung cư Thủ Đức</a></li>
            <li><a href="">Vinhomes Ocean Park</a></li>
            <li><a href="">Vinhomes Smart City</a></li>
        </ul>


        <ul class="son-3">
            <li><a href=""><b>Mua bán nhà đất</b></a></li>
            <li><a href="">Nhà đất Vĩnh Phúc</a></li>
            <li><a href="">Nhà đất Bình Thuận</a></li>
            <li><a href="">Nhà đất Gia Lai</a></li>
            <li><a href="">Nhà đất Lâm Đồng</a></li>
            <li><a href="">Nhà đất Quảng Bình</a></li>
            <li><a href="">Nhà đất Bắc Giang</a></li>
            <li><a href="">Nhà đất Bắc Ninh</a></li>
            <li><a href="">Nhà đất Nghệ An</a></li>
            <li><a href="">Nhà đất Hải Phòng</a></li>
            <li><a href="">Nhà đất Bạc Liêu</a></li>
            <li><a href="">Nhà đất Quảng Nam</a></li>
            <li><a href="">CityLand Park Hills</a></li>
            <li><a href="">Nhà đất Bình Dương</a></li>
            <li><a href="">Nhà Đất Đà Nẵng</a></li>
            <li><a href="">Nhà đất Phú Thọ</a></li>
            <li><a href="">Nhà đất Nam Định</a></li>
        </ul>

        <ul class="son-4">
            <li><a href=""><b>Nhà đất cho thuê</b></a></li>
            <li><a href="">Cho thuê nhà Quận 2</a></li>
            <li><a href="">Cho thuê nhà Tân Phú</a></li>
            <li><a href="">Cho thuê nhà Quận 12</a></li>
            <li><a href="">Thuê nhà nguyên căn</a></li>
            <li><a href="">Cho thuê nhà Quận 7</a></li>
            <li><a href="">Cho thuê phòng trọ</a></li>
            <li><a href="">Cho thuê nhà Tân Bình</a></li>
            <li><a href="">Cho thuê nhà Bình Thạnh</a></li>
            <li><a href="">Cho thuê nhà Quận 10</a></li>
            <li><a href="">Cho thuê nhà Quận 8</a></li>
            <li><a href="">Nhà trọ Quận 7</a></li>
            <li><a href="">Charm Long Hải Resort</a></li>
            <li><a href="">Cho thuê nhà Hà Nội</a></li>
            <li><a href="">Cho thuê nhà Hồ Chí Minh</a></li>
            <li><a href="">Cho thuê nhà Gò Vấp</a></li>
            <li><a href="">Cho thuê nhà Thủ Đức</a></li>
        </ul>
    </div>
</div>
    
 <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
      </div>

<footer class="text-center text-lg-start bg-light text-muted">
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span><b>KẾT NỐI VỚI CHÚNG TÔI<b></span>
    </div>
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>  
  </section>
  
  <section class=""
    <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
        
        
        
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4"><b>HƯỚNG DẪN</b></h6>
          <p>
            <a href="#!" class="text-reset">Báo giá & hỗ trợ</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Câu hỏi thường gặp</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Thông báp</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Liên hệ</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Sitemap</a>
          </p>
        </div>
        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        
          <h6 class="text-uppercase fw-bold mb-4"><b> QUY ĐỊNH</b></h6>
          <p>
            <a href="#!" class="text-reset">Quy định đăng tin</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Quy chế hoạt động</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Điều khoản thoả thuân</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Chính sách bảo mật</a>
          </p>
           <p>
            <a href="#!" class="text-reset">Giải quyết khiếu nại</a>
          </p>
           <p>
            <a href="#!" class="text-reset">Góp ý báo lỗi </a>
          </p>
        </div>
       
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4"><b>Contact<b></h6>
          <p><i class="fas fa-home me-3"></i> 235 Hoàng Quốc Việt, Hà Nội</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            epu@edu.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 04 2245 2662</p>
          <p><i class="fas fa-print me-3"></i> 04 3836 2065</p>
        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
         
          <img src="img/bando.PNG" width="382px", height="200px">
    </div>
      </div>
      <div class="text-center p-4" style="">
    © 2021 Copyright:
<a class="text-reset fw-bold" href="#">EPU Trường Đại Học Điện Lực</a>
</div>
    </div>
    
  </section>
</footer>

	
</body>
</html>