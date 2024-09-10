
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
	$(".categoryItem").slimscroll({
		  height: '500px',
		  wheelStep: 1
	   });
	$(".home").addClass('active');
});

</script>
<script>
function getVal(val){		
	var opt= $('.sub_mnu1 option:selected').val();	
	location.href ='<?php echo base_url();?>' + "index.php/SingleDept/" +opt;		
};
</script>
<script>
function getVal1(val){
			var options = $('.category option:selected').val();	
			location.href = '<?php echo base_url();?>' + "index.php/SingleDept/"+options;
		};
		
$(document).ready(function(){		
	$("#btnCont2").click(function(){
	  var flag=true;
	  var str = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	  if ( $("#ccname").val().match('^[a-z A-Z]{3,16}$') ) {
			$('#ccname').attr('style','border-color:#84BED6 !important');
		} else {
			//$("#cname").get(0).focus();
			$('#ccname').attr('style','border-color:red !important');
			flag = false;
		}
		if($("#ccemail").val()!="")
		{
		if ( $("#ccemail").val().match(str) ) {
			$('#ccemail').attr('style','border-color:#84BED6 !important');
		} else {
			//$("#cemail").get(0).focus();
			$('#ccemail').attr('style','border-color:red !important');
			flag = false;
		}
		}
		if ( $("#ccmobile").val().match('^[0-9]{10}$') ) {
			$('#ccmobile').attr('style','border-color:#84BED6 !important');
		} else {
			//$("#cmobile").get(0).focus();
			$('#ccmobile').attr('style','border-color:red !important');
			flag = false;
		}
		if($("#ccmessage").val()!="")
		{
			$('#ccmessage').attr('style','border-color:#84BED6 !important');
		}
		else{
			//$("#cmessage").get(0).focus();
			$('#ccmessage').attr('style','border-color:red !important');
			flag = false;
		}
		if($("#ccname").val()!="" && $("#ccmobile").val()!="" && $("#ccmessage").val()!="")
		{
			if(flag)
			{
			  concmsinsert1();
			  coninsert1();
			}
		}		
	});
});
function concmsinsert1()
	{
	$("#btnCont2").attr('disabled',true);
    $("#loaderImg").show();
	$.ajax({
		url: "<?php echo base_url();?>index.php/Insert/insert_enquiry",
		data : {
			'name': $("#ccname").val(),
			'email': $("#ccemail").val(),
			'mobile': $("#ccmobile").val(),
			'subject': $("#ccsubject").val(),
			'message': $("#ccmessage").val(),
			'site': $("#ccsite").val()
		},
		type: "POST",
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
			$("#ccname").val("");
			$("#ccemail").val("");
			$("#ccmobile").val("");
			$("#ccsubject").val("");
			$("#ccmessage").val("");
			$("#btnCont2").attr('disabled',false);
			$("#loaderImg").hide();
			}
			else if(obj.message=="Error"){
				swal({
					title: "Error",
					type:"error",
					text:"Error!!! Please Try Again"
				});
				$("#btnCont2").attr('disabled',false);
				$("#loaderImg").hide();
			}
		},
		error: function()
		{
			
		}
	});



	
}


function coninsert1()
{
	$.ajax({
		url: "https://www.medicohelpline.com/HospitalEnquiry",
		//url : "http://192.168.1.14:8084/MedicoHelpline/HospitalEnquiry",
		data : {
			lgKey: $("#hosuid").val(),
			name: $("#ccname").val(),
			email: $("#ccemail").val(),
			mobile: $("#ccmobile").val(),
			subject: $("#ccsubject").val(),
			message: $("#ccmessage").val(),
			enqfor: $("#ccsite").val()
		},
		type: "POST",
		dataType: "json",
		success: function(data){
			
		},
		error: function()
		{
			
		}
	});
}

</script>


 <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Department</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Department</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Service Details section Start -->
                <section class="service-details-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-8">
                                <?php foreach($result as $row){?>
                                <div class="service-desc">
                                    <!--<h2><?php echo $row['name'];?></h2>-->
                                     <div class="post-meta-option">
                                        <div class="row gx-0 align-items-center">
                                         <h5><?php echo $row['name'];?></h5>
                                        </div>
                                    </div>
                                    <!--<div class="row">-->
                                    <!--  <img src="<?php echo base_url();?>data/uploads/department/<?php echo $row['image'];?>" alt="image" class="img-responsive" style="height: 294px;padding: 15px; border-radius: 30px 30px 30px 30px;">-->
                                    <!--</a>-->
                                      <div class="row">
									<div class="colum sm-8">
                                      <img src="<?php echo base_url();?>data/uploads/department/<?php echo $row['image'];?>" alt="image" class="img-responsive" style="height: 400px;padding: 15px; border-radius: 30px 30px 30px 30px;width: 100%;float: right;">
									  <!--<img src="<?php echo base_url();?>data/uploads/department/human-knee-pain.jpg"alt="image" class="img-responsive" style="height: 294px;padding: 15px; border-radius: 30px 30px 30px 30px;width: 50%;">-->
									</div>
									</a>
                                    <ul class="list-unstyled">
								</ul>
								<ul class="caption border-color-1" >
									<?php $test = explode(",",$row['name']);?>
									<?php for($i=0; $i<count($test); $i++){?>
										
									<?php }?>
								</ul>
                                    </div>
                 <!--                  <div class="" style="text-align:justify;">-->
            					<!--	<?php echo $row['pdesc'];?>-->
            					<!--</div>-->
            				    	<div class="post-para" style="text-align:justify;">
                                        <blockquote class="wp-block-quote">
                                            <span class="wp-quote-icon"><i class="flaticon-straight-quotes"></i></span>
                                            <p><?php echo $row['pdesc'];?></p>
                                        </blockquote>
                                    </div>
                                    <!--<h3>Our Treatment Plan &amp; Strategies</h3>-->
                                    <!--<p>Amet consectetur adipisicing elit. Mollitia excepturi eaque, corporis nulla maxime inventore magni repreh enderit lorem ipsum dolor sit consequatur deserunt, eligendi totam voluptas natus. Quaerat neque nisi voluptatum ex esse architecto.</p>-->
                                    <!--<ul class="content-feature-list style1 list-style mb-0">-->
                                    <!--    <li><span><i class="ri-check-line"></i></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod tempor.</li>-->
                                    <!--    <li><span><i class="ri-check-line"></i></span> Advisory membership elitr, sed diam nonumy eirmod tempor invidunt ut labor et dolore magna.</li>-->
                                    <!--    <li><span><i class="ri-check-line"></i></span> If you do not have enough time, you will always be able to work and do what you want.</li>-->
                                    <!--    <li><span><i class="ri-check-line"></i></span> Irmad temporarily involved labor and doll magna alicum erat, sed diam voluptua. Vero Eos and accused and fair.</li>-->
                                    <!--    <li><span><i class="ri-check-line"></i></span> Labor and Love Magna Aliquam Irat, Sed Diam Valupatua. Vero eos et accusam et justo dolores et ea ribam.</li>-->
                                    <!--</ul>-->
                                </div>
                                <?php }?>
                            </div>
                            <div class="col-xl-4">
                                <div class="homeContactContent" style="padding: 15px;border: 1px solid #CCCCCC">
                                    <div class="sidebar-widget">
                                       <select class="form-control sub_mnu1" name="sub_mnu1" id="sub_mnu1" required  onchange="getVal(this);">
								<option value="">Select Department</option>
								<?php foreach($dept as $dp){?>
								<?php 
									$name=$dp['name'];	
									$dp['name'] = str_replace("Urology & Stone care Center","Urology",$dp['name']);
									$dp['name'] = str_replace("Dental","Dentistry",$dp['name']);
									$dp['name'] = str_replace("Pediatric","Paediatrics",$dp['name']);
									$dp['name'] = str_replace("Pulmonary Medicine (Chest Diseases)","Pulmonary Medicine",$dp['name']);
									$dp['name'] = str_replace("Physiotherapy And Occupational Therapy Department","Physiotherapy",$dp['name']);
									$dp['name'] = str_replace("Pathology Department","Pathology",$dp['name']);
									 
								?>
								<?php if($dp['name']=="Oncology" || $dp['name']=="Radiation Oncology" || $dp['name']=="Nuclear Medicine"){ } else{?>
									<option value="<?php echo $name;?>"><?php echo $dp['name'];?></option>
								<?php  } $name=""; }?>
								<option value="Nuclear">Nuclear Medicine</option>
							</select>
                                    </div>
                                    <br><br>
                                    <div class="sidebar-widget">
                                        <h4>Send Enquiry</h4>    
                                        <form action="#" class="contact-widget">
                                             <div class="form-group">
                                                <select class="healthGropdown form-control border-color-4" id="ccsubject" name="ccsubject">
										<option value="">Select Department</option>
								<?php foreach($dept as $dp){?>
								<?php 
									$name=$dp['name'];	
									$dp['name'] = str_replace("Urology & Stone care Center","Urology",$dp['name']);
									$dp['name'] = str_replace("Dental","Dentistry",$dp['name']);
									$dp['name'] = str_replace("Pediatric","Paediatrics",$dp['name']);
									$dp['name'] = str_replace("Pulmonary Medicine (Chest Diseases)","Pulmonary Medicine",$dp['name']);
									$dp['name'] = str_replace("Physiotherapy And Occupational Therapy Department","Physiotherapy",$dp['name']);
									$dp['name'] = str_replace("Pathology Department","Pathology",$dp['name']);
									 
								?>
								<?php if($dp['name']=="Oncology" || $dp['name']=="Radiation Oncology" || $dp['name']=="Nuclear Medicine"){ } else{?>
									<option value="<?php echo $name;?>"><?php echo $dp['name'];?></option>
								<?php  } $name=""; }?>
								<option value="Nuclear">Nuclear Medicine</option>
										</select>
                                            </div>
                                            <div class="form-group">
                                                 <select class="form-control" id="doctor" name="doctor">
					                   <option value="">All Doctors</option>
				                       <option value="DRItRgRh">Dr. Ashok Mehata (Cancer Surgeon)<option value="DRk6edvy">Dr. Dr.Ashish Gupta (Urologist)<option value="DRpmP4AC">Dr.Narayan Khandelwal (Orthopaedic Surgeon)<option value="DRsQakan">Dr.Nikhil Arbatti (Spin Surgeon)</option></select>
				                  </select>
                                            </div>
                                             <div class="form-group">
                                                  <i class="fa fa-user"></i>
                                                <input type="text" id="ccname" name="ccname" placeholder="Name" required="" type="text" pattern="[a-z A-z ]+">
                                            </div>
                                            <div class="form-group">
                                              <i class="fa fa-envelope" aria-hidden="true"></i>
									  <input class="form-control border-color-4" id="ccemail" name="ccemail" placeholder="Email address" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
									</div>
									 <div class="form-group">
                                                 <i class="fa fa-phone" aria-hidden="true"></i>
									  <input class="form-control border-color-4" id="ccmobile" name="ccmobile" placeholder="Enter 10 digit Mobile No." pattern="[0789][0-9]{9}" required="" type="text">
                                            </div>
                                            
                                             <div class="form-group">
                                                 <i class="fa fa-comments" aria-hidden="true"></i>
									  <textarea class="form-control border-color-4" id="ccmessage" name="ccmessage" placeholder="Write message" style="height:100px;" required=""></textarea>
                                            </div>
                                            <input type="hidden" id="ccsite" name="csite" value="SMSSH">
                                               <button type="button" class="btn style2" id="btnCont2" style="padding:0 10px 10px !important;">Send Message</button>
									  <img style="margin-left: auto; margin-right: auto; padding-top: 9px; display:none;" id="loaderImg" src="<?php echo base_url();?>newFront/loader.gif">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Service Details section End -->
            </div>
            <!-- Content wrapper end -->