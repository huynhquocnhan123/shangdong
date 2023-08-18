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
			<?php foreach($product as $k => $value){
					$d->reset();
					$sql_img_plus = "select photo,thumb from #_hinhanh where id_hinhanh='".$value['id']."' limit 0,1 ";
					$d->query($sql_img_plus);
					$img_plus = $d->fetch_array(); 

					?>
					<div class="item" >
						<div class="item" >
							<h3 class="ten"><a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=$value['ten']?>" ><?=$value['ten']?></a></h3>
							<a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=$value['ten']?>">
								<img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>" />
							</a>
							<?php if($img_plus['photo']!=''){ ?> 
							<div class="item_img_plus">		
										<a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=$value['ten']?>">
											<img class="img_them" src="<?=_upload_hinhthem_l.$img_plus['thumb']?>" alt="<?=$value['ten']?>" />
										</a>			
								</div>
							<?php	} ?>
						
					</div><!---END .item-->
				<?php } ?>
		</div>
	</div>
</div>	
