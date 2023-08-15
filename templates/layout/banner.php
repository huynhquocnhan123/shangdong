<?php 
$d->reset();
$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
$d->query($sql_banner);
$row_banner = $d->fetch_array();
?>
<div id="banner">
	<img class="banner" src="<?=_upload_hinhanh_l.$row_banner['photo']?>" />
</div>