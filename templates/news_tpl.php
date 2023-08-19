
<?php 



?>





<div id="banner_product">
    <img src="images/banner/banner_media_m.JPG" alt="Banner">
</div>
<?php if($id_list==6) {?>
    <h1 class="tieude_giua"><?=$title_list?></h1>
    <div class="box_container video__container">
        <div class="wap_box_new video">

            <iframe  width="420" height="500"
            src="https://www.youtube.com/embed/fISpPdSTHBs">
        </iframe>
        <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
            <div class="box_news">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><img src="<?php if($tintuc[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tintuc[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
                <div>
                    <h3 class="ten"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a></h3>
                    <div class="mota"><?=$tintuc[$i]['mota']?></div>  
                    <!-- <div class="clear"></div>          -->
                </div>
            </div><!---END .box_new-->
            <hr> 
        <?php } ?>
    </div><!---END .wap_box_new-->
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->
<?php }?>






<?php if($id_list==4 ) {?>
    <h1 class="tieude_giua"><?=$title_list?></h1>
    <div class="box_container_manual">
        <div class="wap_box_new_manual">
          <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
            <div class="box_news_manual">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><img src="<?php if($tintuc[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tintuc[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
                <div>
                    <h3 class="ten"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a></h3>
<!--                         <div class="mota"><?=$tintuc[$i]['mota']?></div>  
-->                        <!-- <div class="clear"></div>          -->
</div>
</div><!---END .box_new-->
<?php } ?>
</div><!---END .wap_box_new-->
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->

<?php }?>
<?php if($id_list==5 || $id_danhmuc=="media-center" ){?>
    <h1 class="tieude_giua"><?=$title_list?></h1>
    <div class="box_container">

        <div class="wap_box_new">
          <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
            <div class="box_news">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><img src="<?php if($tintuc[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tintuc[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
                <div>
                    <h3 class="ten"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a></h3>
                    <div class="mota"><?=$tintuc[$i]['mota']?></div>  
                    <!-- <div class="clear"></div>          -->
                </div>
            </div><!---END .box_new-->
            <hr> 
        <?php } ?>
    </div><!---END .wap_box_new-->
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->

<?php }?>
<?php if($com=="service" & $id_list="") {?>
    <h1 class="tieude_giua"><?=$title_list?></h1>
    <div class="box_container">

        <div class="wap_box_new">
          <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
            <div class="box_news">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><img src="<?php if($tintuc[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tintuc[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
                <div>
                    <h3 class="ten"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a></h3>
                    <div class="mota"><?=$tintuc[$i]['mota']?></div>  
                    <!-- <div class="clear"></div>          -->
                </div>
            </div><!---END .box_new-->
            <hr> 
        <?php } ?>
    </div><!---END .wap_box_new-->
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->

<?php }?>
<?php if($com=="news"){?>
    <h1 class="tieude_giua"><?=$title_list?></h1>
    <div class="box_container">

        <div class="wap_box_new">
          <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
            <div class="box_news">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><img src="<?php if($tintuc[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tintuc[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
                <div>
                    <h3 class="ten"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a></h3>
                    <div class="mota"><?=$tintuc[$i]['mota']?></div>  
                    <!-- <div class="clear"></div>          -->
                </div>
            </div><!---END .box_new-->
            <hr> 
        <?php } ?>
    </div><!---END .wap_box_new-->
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->
<?php } ?>
