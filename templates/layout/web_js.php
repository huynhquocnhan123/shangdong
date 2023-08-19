



<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/my_script.js"></script>
<script src="js/plugins-scroll.js" type="text/javascript" ></script>
<link href="fontawesome/css/font-awesome.css" type="text/css" rel="stylesheet" />


<!--Menu mobile-->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
	$(function() {
		$m = $('nav#menu').html();
		$('nav#menu_mobi').append($m);
		$('nav#menu_mobi .search').addClass('search_mobi').removeClass('search');
		$('.hien_menu').click(function(){
			$('nav#menu_mobi').css({height: "auto"});
		});
		$('.user .fa-user-plus').toggle(function(){
			$('.user ul').slideDown(300);
		},function(){
			$('.user ul').slideUp(300);
		});
		
		$('nav#menu_mobi').mmenu({
				extensions	: [ 'effect-slide-menu', 'pageshadow' ],
				searchfield	: true,
				counters	: true,
				navbar 		: {
					title		: 'Menu'
				},
				navbars		: [
					{
						position	: 'top',
						content		: [ 'searchfield' ]
					}, {
						position	: 'top',
						content		: [
							'prev',
							'title',
							'close'
						]
					}, {
						position	: 'bottom',
						content		: [
							'<a>Online : <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></a>',
							'<a><?=_tong?> : <?php $count=count_online();echo $tong_xem=$count['daxem'];?></a>'
						]
					}
				]
			});
	});
</script>
<!--Menu mobile-->

<!--Hover menu-->
<script language="javascript" type="text/javascript">
	$(document).ready(function() { 
		//Hover vào menu xổ xuống
		// $(".active2").style.display="none"
				 // $(".active").hover(function () {
				 // 	$('.active').css({visibility:""})
				 // })


		$(".menu ul li").hover(function(){

			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300); 
			},function(){ 
			$(this).find('ul:first').css({visibility: "hidden"});
			}); 
		$(".menu ul li").hover(function(){
				$(this).find('>a').addClass('active2'); 
			},function(){ 
				$(this).find('>a').removeClass('active2'); 
		}); 
		//Hover vào danh mục xổ xuống
		/*$("#danhmuc ul li").hover(function(){
			$(this).find('ul:first').show(300); 
		},function(){ 
			$(this).find('ul:first').hide(300);
		}); */
		//Click vào danh mục xổ xuống
		$("#danhmuc > ul > li > a").click(function(){
			if($(this).parents('li').children('ul').find('li').length>0)
			{
				$("#danhmuc ul li ul").hide(300);
				
				if($(this).hasClass('active'))
				{
					$("#danhmuc ul li a").removeClass('active');
					$(this).parents('li').find('ul:first').hide(300); 
					$(this).removeClass('active');
				}
				else
				{
					$("#danhmuc ul li a").removeClass('active');
					$(this).parents('li').find('ul:first').show(300); 
					$(this).addClass('active');
				}
				return false;
			}
		});
	});  
</script>
<!--Hover menu-->

<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/fotorama.js" type="text/javascript"></script>


<!--Thêm alt cho hình ảnh-->
<script type="text/javascript">
	$(document).ready(function(e) {
        $('img').each(function(index, element) {
			if(!$(this).attr('alt') || $(this).attr('alt')=='')
			{
				$(this).attr('alt','<?=$company['ten']?>');
			}
        });
    });
</script>
<!--Thêm alt cho hình ảnh-->

<!--Tim kiem-->
<script type="text/javascript"> 
    function doEnter(evt){
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	function onSearch(evt) {			
	
			var keyword = document.getElementById("keyword").value;
			if(keyword=='' || keyword=='<?=_nhaptukhoatimkiem?>...')
			{
				alert('<?=_chuanhaptukhoa?>');
			}
			else{
				location.href = "tim-kiem.html&keyword="+keyword;
				loadPage(document.location);			
			}
		}		
</script>   
<!--Tim kiem-->


<?php if($template=='index') { ?>


<script  type="text/javascript">
	$(document).ready(function(){
		$('#title_tab li:first').addClass('active');
		var id_danhmuc = $('#title_tab li:first').attr('data-id');
		$('#content_tabs').load( "ajax/load_sanpham.php?id_danhmuc="+id_danhmuc);
		
		$('#title_tab li').click(function(){
			var id_danhmuc = $(this).attr('data-id');
			$('#title_tab li').removeClass('active');
			$(this).addClass('active');
			$('#content_tabs').load( "ajax/load_sanpham.php?id_danhmuc="+id_danhmuc);
			return false;
		});	
	});
</script>
<!--Tags sản phẩm-->

<script type="text/javascript">
    $(document).ready(function(){

		$('#slick_slider').slick({
			infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	slidesToShow: 1,
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:4000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			
		});
		$('#slick_slider_pc').slick({	

				draggable: true,

				arrows: false,

				dots: false,

				autoplay:true,  //Tự động chạy

				autoplaySpeed:3000,

				fade: true,

				speed: 900,

				infinite: true,

				cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',

				touchThreshold: 100

			});

      $('.slick_product').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			responsive: [
				{
				  breakpoint:1200,
				  settings: {
					slidesToShow: 5,
				  }
				},
				{
				  breakpoint:920,
				  settings: {
					slidesToShow: 4,
				  }
				},
				{
				  breakpoint:620,
				  settings: {
					slidesToShow: 3,
				  }
				},
				{
				  breakpoint:270,
				  settings: {
					slidesToShow: 2,
				  }
				}
			  ]
      });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_duan').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			responsive: [
				{
				  breakpoint:1200,
				  settings: {
					slidesToShow: 4,
				  }
				},
				{
				  breakpoint:820,
				  settings: {
					slidesToShow: 3,
				  }
				},
				{
				  breakpoint:420,
				  settings: {
					slidesToShow: 2,
				  }
				}
			  ]
      });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_spbc <?php for($i=0;$i<count($danhmuc_nb);$i++) echo ", #slick_spnb".$i; ?> ').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			responsive: [
				{
				  breakpoint:1200,
				  settings: {
					slidesToShow: 5,
				  }
				},
				{
				  breakpoint:920,
				  settings: {
					slidesToShow: 4,
				  }
				},
				{
				  breakpoint:720,
				  settings: {
					slidesToShow: 3,
				  }
				},
				{
				  breakpoint:320,
				  settings: {
					slidesToShow: 2,
				  }
				}
			  ]
      });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_tintuc_i,#slick_tintuc_i2').slick({
        	infinite: true,//Lặp lại
			accessibility:false,
			slidesToShow:3,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:4000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
      });
    });
</script>

<script type="text/javascript">
        $(document).ready(function(e) {
            $(window).scroll(function(){
                if(!$('.load_video').hasClass('load_video2'))
                {
                    $('.load_video').addClass('load_video2');
                    $('.load_video').load( "ajax/video.php");
                }
             });
        });
        </script>

<?php } ?>


<?php if($template=='product_detail') { ?>
<!-- slick -->
<script type="text/javascript">
    $(document).ready(function(){
		$('.slick2').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  autoplay:false,  //Tự động chạy
			  autoplaySpeed:5000,  //Tốc độ chạy
			  asNavFor: '.slick'			 
		});
		$('.slick').slick({
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  asNavFor: '.slick2',
			  dots: false,
			  centerMode: false,
			  focusOnSelect: true
		});
		 return false;
    });
</script>
<!-- slick -->

<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script type="text/javascript">
	var mzOptions = {
		zoomMode:true,
		onExpandClose: function(){MagicZoom.refresh();}
	};
</script>


<script  type="text/javascript">
	$(document).ready(function(){
		$('#content_tabs .tab').hide();
		$('#content_tabs .tab:first').show();
		$('#ultabs li:first').addClass('active');
		
		$('#ultabs li').click(function(){
			var vitri = $(this).data('vitri');
			$('#ultabs li').removeClass('active');
			$(this).addClass('active');
			
			$('#content_tabs .tab').hide();
			$('#content_tabs .tab:eq('+vitri+')').show();
			return false;
		});	
	});
</script>
<!--Tags sản phẩm-->

<?php } ?>


<?php if($com=='gio-hang') { ?>
<script type="text/javascript">
	$(document).ready(function(e) {
	
		$('.click_ajax2').click(function(){
			if(isEmpty($('#httt').val(), "<?=_chonhinhthucthanhtoan?>"))
			{
				$('#httt').focus();
				return false;
			}
			if(isEmpty($('#hoten').val(), "<?=_nhaphoten?>"))
			{
				$('#hoten').focus();
				return false;
			}
			if(isEmpty($('#dienthoai').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai').focus();
				return false;
			}
			if(isPhone($('#dienthoai').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai').focus();
				return false;
			}
		
			
			if(isEmpty($('#diachi').val(), "<?=_nhapdiachi?>"))
			{
				$('#diachi').focus();
				return false;
			}
			
			if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmpty($('#noidung').val(), "<?=_nhapnoidung?>"))
			{
				$('#noidung').focus();
				return false;
			}
			frm_order.submit();
		});    
    });
</script>
<?php } ?>

<!--Code gữ thanh menu trên cùng-->
<script type="text/javascript">
$(document).ready(function(){
	$(window).scroll(function(){
		var cach_top = $(window).scrollTop();
		var heaigt_header = $('.wap_menu').height();

		if(cach_top >= heaigt_header){
			$('div.wap_menu').css({position: 'fixed', top: '0px', zIndex:9999});
			
		}else{
			$('div.wap_menu').css({position: 'relative'});

		}
	});
});
</script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$('.click_ajax').click(function(){
			if(isEmpty($('#ten_lienhe').val(), "<?=_nhaphoten?>"))
			{
				$('#ten_lienhe').focus();
				return false;
			}
			
			if(isEmpty($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isPhone($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmail($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			
			if(isEmpty($('#noidung_lienhe').val(), "<?=_nhapnoidung?>"))
			{
				$('#noidung_lienhe').focus();
				return false;
			}
			if(isEmpty($('#capcha').val(), "<?=_nhapmabaove?>"))
			{
				$('#capcha').focus();
				return false;
			}
			$.ajax({
				type:'post',
				url:$(".frm").attr('action'),
				data:$(".frm").serialize(),
				dataType:'json',
				beforeSend: function() {
					$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');     
				},
				error: function(){
					add_popup('<?=_hethongloi?>');
				},
				success:function(kq){
					add_popup(kq.thongbao);
					$('#capcha').val('');
					if(kq.nhaplai=='nhaplai')
					{
						$(".frm")[0].reset();
					}
					
					
				}
			});
		});    
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#reset_capcha").click(function() {
			$("#hinh_captcha").attr("src", "sources/captcha.php?"+Math.random());
			return false;
		});
	});
</script>


