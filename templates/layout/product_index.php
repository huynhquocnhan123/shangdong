<?php
$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb,photo from #_product_danhmuc where hienthi=1 and type='sanpham' order by stt,id desc";
$d->query($sql);
$p_danhmuc=$d->result_array();

$d->reset();
$sql_product="select ten$lang as ten,tenkhongdau,id,thumb,photo,mota from #_product where hienthi=1 and noibat>0 and type='sanpham' order by stt,id desc";
$d->query($sql_product);
$product=$d->result_array();
?>
<div id="product_recommend">
	<div class="box_container2">
		<h3 class="title">New Product</h3>	
		<div class="slick_product">
			<?php foreach ($product as $key => $value2) { ?>
				<div class="product_item">	
					<a href="product/<?=$value2['tenkhongdau']?>.html">
						<img src="<?=_upload_sanpham_l.$value2['thumb']?>" alt="" class="product_img">
						<h4 class="product_name"><?=$value2['ten']?></h4>
					</a>
					<div class="product_desc"><?=$value2['mota']?></div>
					<div class="icon"><span><img src="images/icon1.png" alt=""></span><span><img src="images/icon2.png" alt=""></span></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>	
