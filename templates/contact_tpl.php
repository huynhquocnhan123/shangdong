
<!-- <div class="tieude_giua"><div><?=$title_cat?></div><span></span></div> -->
<div class="box_container">
   <img class="img__contact" src="images/banner/banner_contact_m.JPG">

   <div class="content">
    <div class="tt_lh">
       <?=$company_contact['noidung'];?>


    </div> 

    <div class="frm_lienhe_index">
       <form method="post" name="frm" class="frm" action="ajax/contact.php" enctype="multipart/form-data">


         <h1>Contact us</h1>
         <div class="loicapcha thongbao"></div>
         <div class="row">
            <div class="row__part">
               <label>Name</label>
               <input name="ten_lienhe" type="text" id="ten_lienhe" class="input_lh" placeholder="Name" />
            </div>
            <div class="row__part">
               <label>Company</label>
               <input name="ten_lienhe" type="text" id="ten_lienhe" class="input_lh" placeholder="Company" />
            </div>
            <div class="row__part">
               <label>Country</label>
               <input name="ten_lienhe" type="text" id="ten_lienhe" class="input_lh" placeholder="Country" />
            </div>
            <div class="row__part">
               <label>You are looking for</label>
               <input name="ten_lienhe" type="text" id="ten_lienhe" class="input_lh" placeholder="You are looking for" />
            </div>
         </div>
         <div class="row__part input_oth">
            <label>Email</label>
            <input name="email_lienhe" type="text" id="email_lienhe" class="input_lh "  placeholder="Email" />
         </div>
         <div class="row__part input_oth">
            <label>Message</label>
            <textarea name="noidung_lienhe" id="noidung_lienhe" class="input_lh "  rows="10" placeholder="Note"></textarea>
         </div>
        <!--  <img src="sources/captcha.php" id="hinh_captcha">
         <a href="#reset_capcha" id="reset_capcha" title="<?=_doimakhac?>"><img src="images/refresh.png" alt="reset_capcha" /></a>
         <input name="capcha" type="text" id="capcha" class="input_lh"   style="width:120px;" placeholder="<?=_mabaove?> (*)" />
         <div class="clear"></div> -->

         <input type="button" value="Submit" class="click_ajax" />


      </form>
   </div><!--.frm_lienhe--> 
   <!-- <?=$company['map'];?> -->

</div><!--.content--> 
</div><!--.box_container--> 
