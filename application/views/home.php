<div id="page-content">
	<div id="page-content-scroll">
		<!--Enables this element to be scrolled -->
		<div class="header-clear"></div>

		<!--Modal Menu -->
		<div class="modal-menu modal-menu-light" style="direction: rtl;">
			<a href="#" class="close-modal-menu" style="background-color: #bf0e00; text-align: center"><em style="font-weight: 500; color: #fff; text-align: center; padding-right: 0 !important">ارسال طلب المساعدة</em></a>
			<img src="" width="40%" style="margin-right: auto; margin-left: auto; margin-top: 20px " class="hj-image" />
			<a href="#"><i class="fa fa-user"></i><em><b>أسم الحاج : </b> <font class="hj-name"></font></em></a>
			<a href="#"><i class="fa fa-list-ol"></i><em><b>رقم الحاج: </b> <font class="hj-number"></font></em></a>			
			<a href="#"><i class="fa fa-plane"></i><em><b>رقم الجواز : </b> <font class="hj-passnum"></font></em></a>			
			<a href="#"><i class="fa fa-phone"></i><em><b>رقم المشرف : </b> <font class="hj-mobile"></font></em></a>
			<a href="#"><i class="fa fa-circle"></i><em><b>فصيلة الدم : </b> <font class="hj-blood"></font></em></a>
			<a href="#"><i class="fa fa-user-md"></i><em>مرض السكر مازال مصاب</em></a>
			
		</div>

		<div class="staff-slider" style="margin-top: 40px;overflow: hidden!important;">
			<div class="">
				<form id="image-rec" method="post" enctype="multipart/form-data" action='http://52.11.126.190/image/example.php'>
				<div class="image-upload" style="margin-top: 20px; margin-bottom: 20px">
					<h3>طلب مساعدة طبية</h3>
					<p>لطلب مساعدة طبية برجاء الضغط علي الزر بالاسفل وتصوير المريض ثم الضغط علي ارسال طلب المساعدة</p>
					<label for="file-input">
					<img class="scale-hover" src="<?= base_url()."assets/"; ?>images/pictures/sos.png" style="margin-top: 8px; width: 250px!important; height: 250px!important; border-radius: 150px; margin-left: auto; margin-right: auto;">
					</label>
					<input id="file-input" type="file" name="userfile"/>
				</div>
				</form>

			</div>
		</div>
	</div>
</div>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
$('#file-input').on('change', function() 
{
  $("#image-rec").ajaxForm({ 
	 success:function(data){
		 obj = JSON.parse(data);
		 //alert(obj);
		 //console.log(obj);
		 var id = obj.results["0"].item.custom;
		 //alert(id);
		 if(id !=== 0){
		 $(".hj-image").attr("src",obj.results["0"].image.thumb_120);
		 
		var post_url = "<?php echo base_url() . 'index.php/home/get_user_data/' ?>" + id;
		$.ajax({
			type: "POST",
			url: post_url,
			success: function(user)
			{
				//console.log(user);
				if(user != null){
					$(".hj-name").append(user.name);
					$(".hj-number").append(user.hj_num);
					$(".hj-passnum").append(user.passport_number);
					$(".hj-mobile").append(user.phone);
					$(".hj-blood").append(user.bload);
					
					$('.modal-menu').toggleClass('active-modal-menu');
					$('.modal-menu-background').toggleClass('active-modal-menu-background');
					$('.open-modal-menu').toggleClass('rotate-45');					
					
				}else{
					alert('Error here');
				}


			}, //end success
			error: function(xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(thrownError);
				alert('error');
			}
		}); //end AJAX
	 }else{
	  
	  
	    $(".hj-name").append("غير مسجل بالنظام");
	  
	  	$(".hj-image").hide();
		$(".hj-number").append(user.hj_num);
		$(".hj-passnum").hide();
		$(".hj-mobile").hide();
		$(".hj-blood").hide();
	  
		$('.modal-menu').toggleClass('active-modal-menu');
		$('.modal-menu-background').toggleClass('active-modal-menu-background');
		$('.open-modal-menu').toggleClass('rotate-45');	
	 	 
     
     }
		 
		
	 },
	 error:function(){
		alert('error');
	  }
   }).submit();
});
	
</script>

</body>
