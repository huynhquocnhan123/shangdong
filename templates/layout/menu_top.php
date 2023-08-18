<?php

$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb from #_product_danhmuc where hienthi=1 and type='sanpham' order by stt,id desc";
$d->query($sql);
$p_danhmuc=$d->result_array();



$d->reset();
$sql_banner = "select photo from #_background where type='logo' limit 0,1";
$d->query($sql_banner);
$row_logo = $d->fetch_array();






$d->reset();
$sqlnew="select * from #_news_danhmuc where hienthi=1 and type='tintuc' order by stt,id desc";
$d->query($sqlnew);
$p_danhmuc_new=$d->result_array();
?>



<nav id="menu_mobi" style="height:0; overflow:hidden;"></nav>
<div class="header">
    <a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    <a href="tel:<?=$company['dienthoai']?>">
        <p class="hotline_m">Hotline: <?=$company['dienthoai']?></p>
    </a>
</div>








<nav id="menu">
    <div class="col_w20">
        <a href="." class="wp_logo"><img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" /></a>
    </div>
    <ul class="col_w70 list_menu">

        <li>
            <a class="<?php if($_REQUEST['com'] == 'about-us') echo 'active'; ?>" href="about-us.html">
            About</a>

        </li>
        <li>
            <a class="<?php if($_REQUEST['com'] == 'product') echo 'active'; ?>" href="product.html">Products</a>

            <ul class="content__list">
                <h2>Product</h2>
                <div>
                    <?php 
                    for($i = 0; $i < count($p_danhmuc); $i++){ 
                      $d->reset();
                      $sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_product_list where id_danhmuc=".$p_danhmuc[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
                      $d->query($sql_dvquan);
                      $p_list=$d->result_array();

                      ?>
                      <li>
                        <div class="bound">
                            <a href="product/<?=$p_danhmuc[$i]['tenkhongdau']?>/"><?=$p_danhmuc[$i]['ten']?></a>
                            <div class="content__list--detail">
                                <?php if(count($p_list)>0) { ?>
                                    <ul class="dm_cap2">
                                        <?php for($j=0;$j<count($p_list);$j++) { ?>
                                            <?php 
                                            $d->reset();
                                            $sql_sp3="select * from #_product_cat where id_list=".$p_list[$j]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
                                            $d->query($sql_sp3);
                                            $p_cat=$d->result_array();

                                            ?>
                                            <li>
                                                <a href="product/<?=$p_list[$j]['id']?>/<?=$p_list[$j]['tenkhongdau']?>/"><?=$p_list[$j]['ten']?>
                                            </a>
                                            <div class="content__list--detail2">
                                                <?php if(count($p_cat)>0) { ?>
                                                    <ul class="dm_cap3">
                                                        <?php for($k=0;$k<count($p_cat);$k++) { ?>
                                                            <li>
                                                                <a href="product/<?=$p_danhmuc[$i]['tenkhongdau']?>/<?=$p_list[$j]['tenkhongdau']?>/<?=$p_cat[$k]['tenkhongdau']?>/"><?=$p_cat[$k]['ten']?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </li>
        <?php } ?>
    </div>

</ul>
</li>
<li>
    <a class="<?php if($_REQUEST['com'] == 'service') echo 'active'; ?>" href="service.html">
    Service</a>
    <ul class="content__list">
        <h2>Product</h2>
        <div>
            <?php 
            for($i = 0; $i < count($p_danhmuc_new); $i++){ 
              $d->reset();
              $sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_news_list where id_danhmuc=".$p_danhmuc_new[$i]['id']." and type='tintuc' and hienthi=1 order by stt asc,id desc";
              $d->query($sql_dvquan);
              $p_list=$d->result_array();

              ?>
              <li>
                <div class="bound">
                    <a href="service/<?=$p_danhmuc_new[$i]['tenkhongdau']?>/"><?=$p_danhmuc_new[$i]['ten']?></a>
                    <div class="content__list--detail">
                        <?php if(count($p_list)>0) { ?>
                            <ul class="dm_cap2">
                                <?php for($j=0;$j<count($p_list);$j++) { ?>
                                    <?php 
                                    $d->reset();
                                    $sql_sp3="select * from #_product_cat where id_list=".$p_list[$j]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
                                    $d->query($sql_sp3);
                                    $p_cat=$d->result_array();

                                    ?>
                                    <li>
                                        <a href="service/<?=$p_list[$j]['id']?>/<?=$p_list[$j]['tenkhongdau']?>/"><?=$p_list[$j]['ten']?>
                                    </a>
                                    <div class="content__list--detail2">
                                        <?php if(count($p_cat)>0) { ?>
                                            <ul class="dm_cap3">
                                                <?php for($k=0;$k<count($p_cat);$k++) { ?>
                                                    <li>
                                                        <a href="product/<?=$p_danhmuc[$i]['tenkhongdau']?>/<?=$p_list[$j]['tenkhongdau']?>/<?=$p_cat[$k]['tenkhongdau']?>/"><?=$p_cat[$k]['ten']?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </li>
<?php } ?>
</div>

</ul>
</li> 
<li><a class="<?php if($_REQUEST['com'] == 'news') echo 'active'; ?>" href="news.html">
News</a></li>
<li><a class="<?php if($_REQUEST['com'] == 'contact') echo 'active'; ?>" href="contact.html">
Contact</a></li>
</ul>


<!-- <div class="col_w10 icon_menu" >
    <button><img src="images/search_other.png"></button>
    
    <p><span>EN </span><img src="images/before_spnb.PNG"></p>
</div> -->

</nav>
