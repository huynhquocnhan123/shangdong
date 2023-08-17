
<?php	
// $d->reset();
// $sql_product="select * from #_product_cat where id_list=".$id_cats." and type='sanpham' and hienthi=1 order by stt asc,id desc";
// $d->query($sql_product);
// $p_product=$d->result_array();	



// $d->reset();
// $sql_producmenu="select * from #_product_list where id_danhmuc=58 and type='sanpham' and hienthi=1 order by stt asc,id desc";
// $d->query($sql_producmenu);
// $p_productmenu=$d->result_array();
?>


<div id="banner_product">
	<img src="images/banner_product.jpg" alt="Banner">
</div>
<!-- <div id="redirect_bar">
	<div class="inner"><a href="."><i class="fa fa-home"></i> Home</a> > <span><?=$title_cat?></span></div>
</div> -->
<input type="hidden" value="1" class="soluong"  />
<div class="box_container product">
	
	<?php if($id_lists !="") { ?>
		<?php
		$d->reset();
		$sql_product="select * from #_product_cat where id_list=".$id_lists." and type='sanpham' and hienthi=1 order by stt asc,id desc";
		$d->query($sql_product);
		$p_product=$d->result_array();	
		?>


		<div id="">
			<h2><?=$title_cat ?></h2>

			<ul class="list_news_r">    
				<?php for($i=0; $i < count($p_product); $i++){ ?>
					<li>
						<a href="product/<?=$p_product[$i]['tenkhongdau']?>/<?=$p_product[$i]['tenkhongdau']?>"><?=$p_product[$i]['ten']?></a>

					</li>			
				<?php } ?>
			</ul>
		</div>


	<?php } ?>
	<?php if($id_danhmucs !=''){ ?>

		<?php 

		$d->reset();
		$sql_producmenu="select * from #_product_list where id_danhmuc=".$id_danhmucs	." and type='sanpham' and hienthi=1 order by stt asc,id desc";
		$d->query($sql_producmenu);
		$p_productmenu=$d->result_array();


		?>

		<div id="">
			<!-- product/35/pcr/ -->
			<ul class="list_news_r">    
				<?php for($i=0; $i < count($p_productmenu); $i++){ ?>
					<?php 

					$d->reset();
					$sql_product="select * from #_product_cat where id_list=".$p_productmenu[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
					$d->query($sql_product);
					$p_product=$d->result_array();

					?>
					<h2 href="product/<?=$p_productmenu[$i]['tenkhongdau']?>/"><?=$p_productmenu[$i]['ten']?></h2>
					<?php for($j=0;$j<count($p_product);$j++) { ?>
						<li>
							<a href="product/<?=$title_no?>/<?=$p_productmenu[$i]['tenkhongdau']?>/<?=$p_product[$j]['tenkhongdau']?>"><?=$p_product[$j]['tenkhongdau']?></a>
						</li>
					<?php } ?> 
					<?=$p_product[i]['ten']?>
				<?php } ?>
			</ul>
		</div>

	<?php } ?>
	<?php if($id_cats !=''){ ?>

		<?php 

		$d->reset();
		$sql_producmenu="select * from #_product_list where id_danhmuc=".$id_danhmucs	." and type='sanpham' and hienthi=1 order by stt asc,id desc";
		$d->query($sql_producmenu);
		$p_productmenu=$d->result_array();


		?>

		<div id="">
			<!-- product/35/pcr/ -->
			<ul class="list_news_r">    
				<?php for($i=0; $i < count($p_productmenu); $i++){ ?>
					<?php 

					$d->reset();
					$sql_product="select * from #_product_cat where id_list=".$p_productmenu[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
					$d->query($sql_product);
					$p_product=$d->result_array();

					?>
					<h2 href="product/<?=$p_productmenu[$i]['tenkhongdau']?>/"><?=$p_productmenu[$i]['ten']?></h2>
					<?php for($j=0;$j<count($p_product);$j++) { ?>
						<li>
							<a href="product/<?=$title_no?>/<?=$p_productmenu[$i]['tenkhongdau']?>/<?=$p_product[$j]['tenkhongdau']?>"><?=$p_product[$j]['tenkhongdau']?></a>
						</li>
					<?php } ?> 
					<?=$p_product[i]['ten']?>
				<?php } ?>
			</ul>
		</div>

	<?php } ?>
	<div class="clear"></div>
</div>
<!-- <?php include _template."layout/left.php";?>  -->

<div id="">
	<div class="wap_item">
		<?php foreach($product as $k => $value){	?>
			<div class="product_item" >
				<a href="product/<?=$value['tenkhongdau']?>.html">
					<img src="<?=_upload_sanpham_l.$value['photo']?>" alt="" class="product_img">
					<div class="info">
						<h4 class="product_name"><?=$value['ten']?> 
					</h4>
					<?php 
					$d->reset();
					$sql_catname="select * from #_product_cat where id=".$value['id_cat']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
					$d->query($sql_catname);
					$p_catname=$d->result_array();	

					?>

					<div class="product_desc"><?php foreach($p_catname as $c=> $values){?>
						<?= $values['ten']?>
					<?php }?>

				</div> 
			</div>
		</a>
	</div>
<?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div>
</div> 
