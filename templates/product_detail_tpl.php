
<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<!--Tags sản phẩm-->
<link href="css/tab.css" type="text/css" rel="stylesheet" />
<input type="hidden" value="1" class="soluong"  />
<div id="banner_product">
    <img src="images/banner_product.jpg" alt="Banner">
</div>
<!-- <div id="redirect_bar">
    <div class="inner"><a href="."><i class="fa fa-home"></i> Home</a> > <span><?=$title_cat?></span></div>
</div> -->

<div class="box_container product">
    <div id="">
        <!-- <?php include _template."layout/left.php";?> -->
    </div>
    <div id="">
        <div class="content">
            <div class="zoom_slick">    
                <div class="slick2">                
                    <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>"><img class='' src="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" /></a>

                    <?php $count=count($hinhthem); if($count>0) {?>
                        <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                            <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>" ><img src="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" /></a>	
                        <?php }} ?>
                    </div><!--.slick-->
                    <?php $count=count($hinhthem); if($count>0) {?>
                        <div class="slick">                
                            <p><img src="<?=_upload_sanpham_l.$row_detail['thumb']?>" /></p>
                            <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                                <p><img src="<?=_upload_hinhthem_l.$hinhthem[$j]['thumb']?>" /></p>
                            <?php } ?>
                        </div><!--.slick-->
                    <?php } ?>
                </div><!--.zoom_slick--> 
                <ul class="product_info">
                 
                    <li class="ten"><?=$row_detail['ten']?></li>

                    <?php if($row_detail['description'] != '') { ?><li><?=$row_detail['description']?></li><?php } ?>


                </ul>
                <div class="clear"></div>  
            </div><!--.wap_pro-->
            <div class="content_detail">
                <span class="title">DETAIL</span>
                <?=$row_detail['noidung']?>   
            </div>           
        </div>
        <div class="clear"></div>   
    </div>


