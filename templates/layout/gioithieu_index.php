<?php 
#gioi_thieu
$sql = "select ten$lang as ten,mota$lang as mota,title,keywords,description,photo from #_about where type='about' and hienthi=1 limit 0,1";
$d->query($sql);
$about_index = $d->fetch_array();
?>


<div id="gioithieu_index" >
    <div class="content_noidung wow fadeInDown" data-wow-delay="300ms">

     <div class="col_w50">
        <div class="title_gioithieu">ABOUT <span>US</span></span></div>
        <span class="company_name">Qianchi</span>
        <div class="about_desc">    
            <?=$about_index['mota']?>
        </div>
        <a href="gioi-thieu.html" class="see_more">READ MORE +</a> 
    </div>
    <div class="col_w50">
        <div class="img_about">
            <img class="img" src="<?=_upload_hinhanh_l.$about_index['photo']?>" alt="<?=$about_index['title']?>" />
        </div>
    </div>
    <div class="clear"></div>

</div>
</div>