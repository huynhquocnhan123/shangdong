<div id="banner_product">
	<img src="images/banner_product.jpg" alt="Banner">
</div>
<div id="redirect_bar">
	<div class="inner"><a href="."><i class="fa fa-home"></i> Home</a> > <span><?=$title_cat?></span></div>
</div>
<input type="hidden" value="1" class="soluong"  />
<div class="box_container product">
	<div id="col_right">
		<div class="wap_item">
			<?php foreach($product as $k => $value){	?>
				<div class="product_item" >
					<a href="product/<?=$value['tenkhongdau']?>.html">
						<img src="<?=_upload_sanpham_l.$value['thumb']?>" alt="" class="product_img">
						<div class="info">
							<h4 class="product_name"><?=$value['ten']?></h4>
							<div class="product_desc"><?=$value['mota']?></div>
						</div>
					</a>
				</div><!---END .item-->
			<?php } ?>
			<div class="clear"></div>
			<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
		</div><!---END .wap_item-->
	</div>
	<div id="col_left">
		<?php include _template."layout/left.php";?>
	</div>
	<div class="clear"></div>
</div>

