<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container" style="margin-left:-140px">
        <h3>Sản phẩm liên quan</h3>
        <div class="slick_slider">
                <div class="row responsive" style="margin: 0 auto;width: 100%;">
                    
                        
                            <?php
                            $sql_moinhat = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc > '25' ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 9 ";
                            $query_moinhat = mysqli_query($mysqli, $sql_moinhat);
                            while($row_moinhat= mysqli_fetch_array($query_moinhat)){
                            ?>
                            <div class="col-md-12 col-sm-6">
                            <div class="details" style="width: 213px;border: 1px solid #c2c2a3;border-radius: 20px;">
                             <img src="admincp/modules/quanlysp/uploads/<?php echo $row_moinhat['hinhanh']?>" style="border-radius: 20px;   margin-left: -1px;width: 213px;" height="179px">
                             <a href="">
                             <p style="text-align: center;font-weight: 700;"><?php echo $row_moinhat['tensanpham'] ?></p>
                             <p style="font-weight: 600;color: red;margin-left: 45px;">Giá: <?php echo number_format($row_moinhat['giasanpham']).' VNĐ'?></p>
                             <input type="submit" name=""  value="Thêm giỏ hàng" style="margin-left: 53px;; background: indianred;color: #fff; font-weight: 700;">
                             </a>
                             </div>
                             </div>
                             <?php
                             }
                             ?>  
                    
                </div>
        </div>
        </div>
        



    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.responsive').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
       
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1

      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
</body>
</html>
