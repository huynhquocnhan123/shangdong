<?php	

$d->reset();
$sql_contact = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
$d->query($sql_contact);
$company_contact = $d->fetch_array();


$d->reset();
$sql2="select ten$lang as ten,tenkhongdau,id from #_news where type='chinhsach' and hienthi=1 order by stt asc,id desc";
$d->query($sql2);
$chinhsach_ft=$d->result_array();

$d->reset();
$sql_brands="select * from #_product_danhmuc where  type='sanpham' and hienthi=1 order by stt asc,id desc";
$d->query($sql_brands);
$p_brands=$d->result_array();


?>
<div id="main_footer">
    <div class="content_ft">
<!--         <div class="content_top">
            <span class="text1">Tel</span>
            <span class="text2"><?=$company['dienthoai']?></span>
        </div> -->
        <div class="content_bottom">
            <div class=" wow fadeIn" data-wow-delay="500ms"  >
                <ul class="menu_footer">
                    <li>
                     <img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" />
                     <p>Office phone:<?=$company['dienthoai']?></p>
                     <p>HR phone: +86 0510-66868863</p>
                 </li>
                 <li>
                    <a href="about-us.html">About Us</a>
                    <div class="part__detail">
                        <a href="#">Company Profile</a><br>


                    </div>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <div class="part__detail brand">
                      <?php foreach($p_brands as $t => $brand){ ?>
                        <a class="" href="product/<?=$brand['tenkhongdau']?>/">
                          <?=$brand['ten']?>
                      </a>
                      <br>
                  <?php } ?>

              </div>
          </li>
          <li>
            <a href="encyclopedia.html">Service</a>
            <div class="part__detail">
                <a href="/service.html">Media Center</a>
            </div>
        </li>
        <li>
            <a href="news.html">News</a>
            <div class="part__detail">
                <a href="/news.html">Company News</a>

            </div>
        </li>
        <li><a href="about-us.html">Contact</a></li>
    </ul> 
</div>
            <!-- <div class="col_w50 wow fadeInDown" data-wow-delay="700ms" style="float:right;" >
               <img src="images/qr.jpg" alt="">
           </div> -->
           <div class="clear"></div>
       </div>
   </div>
</div>
<div id="copy_right">Copyright © 2017 Shangdong-Haohua. Powered by HAOHUA.</div>
