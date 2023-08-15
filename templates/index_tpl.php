<?php
$d->reset();
$sql = "select id,ten$lang as ten,tenkhongdau,link from #_video where hienthi=1 limit 1";		
$d->query($sql);
$video_i = $d->result_array();

$d->reset();
$sql_tt = "select id,ten$lang as ten,tenkhongdau,thumb,photo,mota$lang as mota,ngaytao FROM #_news where type='ency' and hienthi=1 order by stt asc limit 0,20";		
$d->query($sql_tt);
$tintuc_i = $d->result_array();
?>
<div id="tintuc_index">
	<div class="content_noidung">
        <div class="title_tintuc"><span>Encyclopedias</span><a href="encyclopedias.html" class="see_more">More ></a></div>
        <div id="slick_tintuc_i2">
            <?php for($i=0;$i<count($tintuc_i);$i++){	?>
                <div class="box_news">

                    <a href="encyclopedias/<?=$tintuc_i[$i]['tenkhongdau']?>.html" title="<?=$tintuc_i[$i]['ten']?>"><img class="img" src="<?=_upload_tintuc_l.$tintuc_i[$i]['thumb']?>" alt="<?=$tintuc_i[$i]['ten']?>" /></a>  
                    <div class="news_info">
                        <h3 class="ten"><a href="encyclopedias/<?=$tintuc_i[$i]['tenkhongdau']?>.html" title="<?=$tintuc_i[$i]['ten']?>"><?=$tintuc_i[$i]['ten']?></a></h3>
                        <div class="news_desc">
                           <?=catchuoi($tintuc_i[$i]['mota'],60)?>
                        </div>
                        <a href="encyclopedias/<?=$tintuc_i[$i]['tenkhongdau']?>.html" class="read">Read more +</a>
                    </div>
                </div><!---END .box_new-->
            <?php } ?> 
        </div>
    </div>
</div>







