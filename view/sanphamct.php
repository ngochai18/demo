<main class="catalog  mb ">
  <div class="boxleft">
    <div class="mb">
      <?php
       extract($onesp);
      ?>
      <div class="box_title"><?=$name?></div>
      <div class="box_content">
        <?php
        $img = $img_path.$img;
        echo '<div class="spct">
               <img src="' .$img. '">
              </div>';
        // echo "<br>";
        echo $mota;
        ?>

      </div>
    </div>

    <div class="mb">
      <div class="box_title">BÌNH LUẬN</div>
      <div class="box_content2  product_portfolio binhluan ">
        <table>
          <tr>
            <td>Sản phẩm quá đẹp</td>
            <td>Nguyễn Thành A</td>
            <td>20/10/2022</td>
          </tr>
          <tr>
            <td>Sản phẩm quá đẹp</td>
            <td>Nguyễn Thành A</td>
            <td>20/10/2022</td>
          </tr>
        </table>
      </div>
      <div class="box_search">
        <form action="" method="POST">
          <input type="hidden" name="idpro" value="">
          <input type="text" name="noidung">
          <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
      </div>

    </div>

    <div class=" mb">
      <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
      <div class="box_content">
        <?php
        foreach($sp_cungloai as $sp_cung_loai){
               extract($sp_cung_loai);
               $linksp="index.php?act=sanphamct&idsp=".$id;
               echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';

        }
        ?>
      </div>
    </div>
  </div>
  <?php
  include "view/boxright.php";
  ?>

</main>