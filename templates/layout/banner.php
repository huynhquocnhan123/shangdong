<?php 
$sql_brand="select * from #_product_danhmuc where  type='sanpham' and hienthi=1 order by stt asc,id desc";
$d->query($sql_brand);
$p_brand=$d->result_array();
?>
<div id="banner">
	<h1>Our Brands</h1>
	<?php foreach($p_brand as $q => $brand){ ?>
		<a href="product/<?=$brand['tenkhongdau']?>/">
			<img src="<?=_upload_sanpham_l.$brand['photo']?>" alt="" class="product_img">
		</a>
	<?php } ?>
</div>