<?php
$d->reset();
$sql = "select id,ten$lang as ten,tenkhongdau,link from #_video where hienthi=1 limit 1";		
$d->query($sql);
$video_i = $d->result_array();

$d->reset();
$sql_tt = "select id,ten$lang as ten,tenkhongdau,thumb,photo,mota$lang as mota,ngaytao FROM #_news where type='ency' and hienthi=1 order by stt asc limit 0,20";		
$d->query($sql_tt);
$tintuc_i = $d->result_array();

$d->reset();

$sql = "select id,ten$lang as ten,tenkhongdau,photo,mota$lang as mota,title FROM #_about where type='about' and hienthi=1 order by stt asc ";

$d->query($sql);

$background=$d->fetch_array();
?>
<div id="tintuc_index">
    <img src="<?=_upload_hinhanh_l.$background['photo']?>" alt="background">
    <a class="a1">North America</a>
    <a class="a2">Europe</a>
    <a class="a3">Russia</a>
    <a class="a4">Africa</a>
    <a class="a5">South America</a>
    <a class="a6">Australia</a>
    <div class="gioi_thieu">
            <h3 ><?=$background['title']?></h3>
            <p><?=$background['mota']?></p>
           </div>
	<div class="content_noidung">
        <div id="slick_tintuc_i2">

        </div>
    </div>
</div>







