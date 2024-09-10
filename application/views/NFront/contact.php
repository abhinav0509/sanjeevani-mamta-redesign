<!--Start Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8M2EKL5HY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8M2EKL5HY2');
</script>
<!--  /Start Google Analytics -->
<script>
$(document).ready(function(){
	$(".contctus").addClass("active");
	
	$("#btnContus").click(function(){
		var flag=true;
		  var str = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if ( $("#txtcname").val().match('^[a-z A-Z]{3,16}$') ) {
				$('#txtcname').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#cname").get(0).focus();
				$('#txtcname').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#txtcemail").val()!="")
			{
				if ( $("#txtcemail").val().match(str) ) {
					$('#txtcemail').attr('style','border-color:#84BED6 !important');
				} else {
					//$("#cemail").get(0).focus();
					$('#txtcemail').attr('style','border-color:red !important');
					flag = false;
				}
			}
			if ( $("#txtcmobile").val().match('^[0-9]{10}$') ) {
				$('#txtcmobile').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#cmobile").get(0).focus();
				$('#txtcmobile').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#txtcmessage").val()!="")
			{
				$('#txtcmessage').attr('style','border-color:#84BED6 !important');
			}
			else{
				//$("#cmessage").get(0).focus();
				$('#txtcmessage').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#txtcname").val()!="" && $("#txtcmobile").val()!="" && $("#txtcmessage").val()!="")
			{
				if(flag)
				{
				  concmsinsert();
				  coninsert();
				}
		    }
	});
});
function concmsinsert()
{
	$("#btnContus").attr('disabled',true);
    $("#loaderImg").show();
	$.ajax({
		url: '<?php echo base_url();?>index.php/Insert/insert_enquiry',
		type: 'POST',
		data : {
			'name': $("#txtcname").val(),
			'email': $("#txtcemail").val(),
			'mobile': $("#txtcmobile").val(),
			'subject': $("#txtcsubject").val(),
			'message': $("#txtcmessage").val(),
			'site': $("#txtcsite").val()
		},
	
		success: function(data)
		{
			var obj = $.parseJSON(data);
			if(obj.msg=="Success")
			{
				swal({
						title: "Success",
						type:"success",
						text:"Enquiry Send Successfully...!!!"
						
					});	
			$("#txtcname").val("");
			$("#txtcemail").val("");
			$("#txtcmobile").val("");
			$("#txtcsubject").val("");
			$("#txtcmessage").val("");
			$("#txtbtnContus").attr('disabled',false);
			$("#loaderImg").hide();
			}
			else if(obj.msg=="Error"){
				swal({
					title: "Error",
					type:"error",
					text:"Error!!! Please Try Again"
				});
				$("#btnContus").attr('disabled',false);
				$("#loaderImg").hide();
			}
		},
		error: function()
		{
			
		}
	});
}
function coninsert()
{
	$.ajax({
		url: "https://www.medicohelpline.com/HospitalEnquiry",
		data : {
			lgKey: $("#hosuid").val(),
			name: $("#txtcname").val(),
			email: $("#txtcemail").val(),
			mobile: $("#txtcmobile").val(),
			subject: $("#txtcsubject").val(),
			message: $("#txtcmessage").val(),
			enqfor: $("#txtcsite").val()
		},
		type: "POST",
		dataType: "json",
		success: function(data)
		{
			
		},
		error: function()
		{
			
		}
	});
}
</script>
<style>
	.mainContent.full-width.clearfix.conactSection {
	margin-top: 0;
}
.select2-container--default .select2-selection--single {
	background-color: #fff;
	border: 1px solid #84bed6;
	border-radius: 4px;
	height: 48px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
	color: #aaa;
	line-height: 48px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
	height: 48px;
	position: absolute;
	top: 1px;
	right: 1px;
	width: 20px;
}


.homeContactContent .form-group .form-control option{color:#333;}

</style>
                <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
               <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Contact Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Contact Us section Start -->
                <section class="contact-us-wrap ptb-100">
                    <div class="container">
                        <div class="row justify-content-center pb-75">
                             <?php foreach($contact as $con){?>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="contact-item">
                                    <span class="contact-icon1">
                                        <i class="flaticon-map"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Address:</h3>
                                        <?php echo $con['address'];?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="contact-item">
                                    <span class="contact-icon1">
                                        <i class="flaticon-email-2"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Email:</h3>
                                        <p><a href="mailto:hello@example.com"> <?php echo $con['email'];?> </a></p><br>
                                         <p><a href="mailto:hello@example.com"> marketing@sanjeevanimamtahospital.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="contact-item">
                                    <span class="contact-icon1">
                                        <i class="flaticon-call"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Phone:</h3>
                                        <a href="tel:7021487408">+91 9769097620</a><br>
                                        <a href="tel:7021487408">+91 9769097640</a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="row gx-5">
                            <div class="col-sm-6 ">
            <div class="homeContactContent">
              <form action="" method="POST" id="enqForm">
                <div class="row">
					<!--<div class="col-sm-12 col-xs-12">
						<div class="form-group">
						<select class="js-example-basic-multiple"style="width: 100%;min-height: 48px;border-radius: 5px;border: 1px solid #84bed6;">
							<option>General Form</option>
							<option>Corporate Tie-ups</option>
						</select>
						</div>
                    </div>-->
                  <div class="col-sm-6 col-xs-12" style="margin-top: 13px;">
                    <div class="form-group">
                      <i class="fa fa-user"></i>
                      <input class="form-control border-color-4" id="txtcname" name="cname" placeholder="Name" required="" title="Please Enter Characters Only" type="text" pattern="[a-z A-z ]+">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12" style="margin-top: 13px;">
                    <div class="form-group">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <input class="form-control border-color-4" id="txtcemail" name="cemail" placeholder="Email address" title="Please Enter Correct EmailID" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12" style="margin-top: 13px;">
                    <div class="form-group">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <input class="form-control border-color-4" id="txtcmobile" name="cmobile" placeholder="Enter 10 digit Mobile No." title="Enter 10 Digit Mobile No." required="" type="text" pattern="[0789][0-9]{9}">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12" style="margin-top: 13px;">
                    <div class="form-group">
                      <i class="fa fa-book" aria-hidden="true"></i>
                      <input class="form-control border-color-4" id="txtcsubject" name="csubject" placeholder="Subject" required="" type="text">
                    </div>
                  </div>
                  <div class="col-xs-12" style="margin-top: 13px;">
                    <div class="form-group">
                      <i class="fa fa-comments" aria-hidden="true"></i>
                      <textarea class="form-control border-color-4" id="txtcmessage" name="cmessage" placeholder="Write message" required=""></textarea>
                    </div>
                  </div>
				  <input type="hidden" id="txtcsite" name="csite" value="SMSSH">
				  <span id="ext" class="alert alert-success" style=" padding:8px;float:right;display:none;"></span>
                  <div class="col-xs-12" style="margin-top: 13px;">
                    <div class="formBtnArea">
                      
                      <button type="button" class="btn btn-primary" id="btnContus" style="background-color:#286499;">Send Message</button>
					  <img style="margin-left: auto; margin-right: auto; padding-top: 9px; display:none;" id="loaderImg" src="<?php echo base_url();?>newFront/loader.gif">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="comp-map">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966658.593602226!2d72.70355249606015!3d18.842217340279607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c92a4ead2b2d%3A0x722a656eda70f0b6!2sSanjeevani%20Mamta%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1721284520140!5m2!1sen!2sin" width="600" height="350" style="border-radius:10px;width:600px;height:350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
           <!--   <div class="col-sm-6" >-->
           <!--         <div class="mapArea">-->
        			<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7911552220053!2d72.84500087520644!3d19.11681578209617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9220efc9099%3A0x6b34ef32ab781229!2sSanjeevani%20Mamta%20Super%20Speciality%20Hospital!5e0!3m2!1sen!2sin!4v1693478234355!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
        			<!--</div>-->
           <!--       </div>              -->
                        </div>
                    </div>
                </section>
                <!-- Contact Us section End -->
                

            </div>
            <!-- Content wrapper end -->

       