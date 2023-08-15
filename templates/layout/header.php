<?php

	$d->reset();
	$sql_banner = "select photo from #_background where type='logo' limit 0,1";
	$d->query($sql_banner);
	$row_logo = $d->fetch_array();
	
	$d->reset();
	$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
	$d->query($sql_banner);
	$row_banner = $d->fetch_array();
	
	
?>



<div class="content_top">

    <a href="index.html"><img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" /></a>
    <a href="index.html"><img class="banner" src="<?=_upload_hinhanh_l.$row_banner['photo']?>" /></a>

    <div class="hotline_top">Hotline: <span><?=$company['dienthoai']?></span></div>


     <a href="gio-hang.html" class="sp_cart_top">
    Giỏ hàng: <span><?php if(count($_SESSION['cart'])>0)echo count($_SESSION['cart']);else echo '0';?></span> sản phẩm
    </a>

    <div class="search">
    <input type="text" name="keyword" id="keyword" placeholder="Tìm kiếm..." value="<?=@$tukhoa?>" >
    <p class="btn_search" aria-hidden="true" 
    title="<?=_search?>" onclick="onSearch(event,'keyword');" ></p>
    </div>

   

    <div class="clear"></div>
</div>



<?php /*?>


  

<div id="lienket" class="link_lienket">
	<a class="fb" title="facebook" href="<?=$company['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a class="gg" title="google+" href="<?=$company['google']?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
	<a class="tw" title="twitter" href="<?=$company['twitter']?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	
	<a class="yt" title="youtube" href="<?=$company['youtube']?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
	</div>



<div class="diachi_top">
	Địa chỉ:<br />
	<span><?=$company['diachi']?></span>
    
    </div><?php */?>

<?php /*?><?php */?>


<?php /*?>

<div class="col_h">
        
        	
        

        
        </div>

<?php */?>










<?php /*?><ul class="menu_login">
<?php if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false)){?>
    <li><a href="dang-ky.html"><?=_dangky?></a></li>
    <li><a href="dang-nhap.html"><?=_dangnhap?></a></li>
    <li><a style="border:none;" href="quen-mat-khau.html"><?=_quenmatkhau?></a></li>
<?php } else { ?>
	<li><a>Xin chào <span style="color:#FFFF00;">(
	<?php $info_user=info_user($_SESSION['login']['id']);echo $info_user['username']?>)</span></a></li>
    <li><a href="dang-xuat.html"><?=_dangxuat?></a></li>
    <li><a style="border:none;" href="thay-doi-thong-tin.html"><?=_thaydoithongtin?></a></li>
<?php } ?>
</ul>
<?php */?>
