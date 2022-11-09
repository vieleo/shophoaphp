<?php 
    $result = "";
    $error  = "";
  if(isset($_POST['submit']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "nguyenquangviet2k1@gmail.com"; // Your mail
    $mail->Password = '0982561463'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('nguyenquangvietvp@gmail.com');
    $mail->addAddress('nguyenquangviet2k1@gmail.com');
    $mail->addAddress('htrangtrang2001@gmail.com');
    $mail->addAddress('tyen929@gmail.com');

    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    //mail("nguyenquangviet2k1@gmail.com","My subject", "aaaa");
    if(!$mail->send())
    {
      $error = "Something went worng. Please try again.";
    }
    else 
    {
      $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>soengsouy.com</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--========================================================================================-->
  <link href='https://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>
  <!--========================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--=========================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--=========================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--=========================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--=========================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--=========================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--=========================================================================================-->
</head>
<body>

  <div class="contact1">

    <div class="container-contact1">
      <a href="index.php" class="ve_tt" style="position: absolute;
        margin-top: -650px;
        font-size: 20px;
        font-weight: 700;
        margin-left: -102px;"><i>Quay về trang chủ!! </i></a>
   
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="images/img-01.png" alt="IMG">
      </div>
      <form action="" method="post" class="contact1-form validate-form">
        <span class="contact1-form-title">
           Liên Hệ
        </span>
        <h6 class="text-center text-success"> <?=$result; ?></h6>
        <h6 class="text-center text-danger"> <?=$error; ?></h6>
        <br>
        <div class="wrap-input1 validate-input" data-validate = "Name is required">
          <input class="input1" type="text" name="name" placeholder="Name">
          <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input1" type="text" name="email" placeholder="Email">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Subject is required">
          <input class="input1" type="text" name="subject" placeholder="Subject">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Message is required">
          <textarea class="input1" name="message" placeholder="Message"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button type="submit" name="submit" class="contact1-form-btn">
            <span>
              Gửi Mail
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>

  <!--====================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--====================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--=====================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--=====================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--=========================================================-->
  <script src="js/main.js"></script>

</body>
</html>
