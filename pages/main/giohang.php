<p>Giỏ hàng
  <?php 
if(isset($_SESSION['dangky'])){
  echo 'xin chào: '.'<span style="color:red">'. $_SESSION['dangky'].'</span>';
  //echo $_SESSION['id_khachhang'];
}
?>
</p>
<?php 
   if(isset($_SESSION['cart'])){
   }
?>
<table class="table table-striped" style="width:100%;text-align:center;font-family: initial ;font-size: 20px; border-collapse: separate;color: #9E7777;" border=3px bgcolor="#F3F1F5" >  <tr>
    <th>Id</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php 
   if(isset($_SESSION['cart'])){
    $i = 0;
    $tongtien = 0;
      foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong']*$cart_item['giasanpham'];
        $tongtien+=$thanhtien;
        $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masanpham']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
      <a class="icon_style" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fas fa-plus"></i></a>
      <?php echo $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fas fa-minus"></i></a>
      </td>
    <td><?php echo number_format($cart_item['giasanpham']).'vnđ'; ?></td>
    <td><?php echo number_format($thanhtien).'vnđ';?></td>
    <td ><a style="font-size: 25px; color:#fff" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>" class="btn btn-danger">Xoá</a></td>
  </tr>
   <?php 
     }
   ?>
    <tr>
        <td colspan="8">
          <p style="float: left;font-size: 25px">Tổng tiền:<?php echo number_format($tongtien).'vnđ'?></p><br/>
          <p style="float: right;"><a style="font-size: 25px; color:#fff" href="pages/main/themgiohang.php?xoatatca=1" class="btn btn-danger">Xoá tất cả</a></p> 
        <div style="clear:both;"></div>
        <?php 
       if(isset($_SESSION['dangky'])){
        ?>
        <p> <a style="font-size: 25px; color:#009DAE" href="sanpham.php?quanly=thanhtoan">Đặt hàng</a> </p>
        <?php 
      }else{
        ?>
       <p><a style="font-size: 25px; color:#009DAE" href="sanpham.php?quanly=dangky">Đăng ký đặt hàng</a></p>
       <?php 
     }
     ?>
     </td>
    </tr>
    <?php
     }else{
       ?>
       <tr>
           <td colspan="8"><p>Giỏ hàng trống</p></td>
       </tr>
    <?php 
     } 
    ?>
</table>
<div class="row_sp col-lg-12 col-md-4" style="width: 139%;margin-left: -307px;padding-top: 1350px;">
                <?php
                include('pages/footer_sp.php');
                ?>
</div>