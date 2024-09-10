<!--  /Start Google Analytics -->
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
	location.href ='<?php echo base_url();?>' + "index.php/Singlecheckup/" +opt;		
};
</script>
<script>
function getVal1(val){
			var options = $('.category option:selected').val();	
			location.href = '<?php echo base_url();?>' + "index.php/Singlecheckuptype/"+options;
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
<style>
.myBorder .thumbnail > .caption {
	float: right;
	margin-top: 17px;
	padding: 27px 10px 10px;
	display: inline-block;
	width: 60%;
}
.myBorder .thumbnail > .caption .list-unstyled {
	margin-bottom: 7px;
}
.myhealthList {
	-moz-column-count: 3;
	-webkit-column-count: 3;
}
.myhealthList > li {
	line-height: 20px !important;
	margin-bottom: 15px;
}
.homeContactContent .form-group i {
  line-height: 40px;
}
.homeContactContent .form-group .form-control {
  height: 40px;
}
.selopt, .sub_mnu1{
	color:black;
	background-color:white;
}
button {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
.book-now {
            background-color: #008CBA;
            color: white;
        }
</style>


 <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>HEALTH CHECKUP</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>HEALTH CHECKUP</li>
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
                                <div class="thumbnail thumbnailContent">
                                    <!--<h2><?php echo $row['name'];?></h2>-->
                                     <div class="post-meta-option">
                                        <div class="row gx-0 align-items-center">
										<h3 style="position:relative; text-align:center;"><a href="javascript:;" class="color-1"> <?php echo $row['name'];?></a></h3>
                                        </div>
                                    </div>
        <!--                            <div class="row">-->
        <!--                            <img src="<?php echo base_url();?>data/uploads/package/<?php echo $row['image'];?>" alt="image" class="img-responsive" style="height: 294px;padding: 15px; border-radius: 30px 30px 30px 30px;">-->
								<!--<div class="sticker" style="background-color:#2490EB;top: 149px;height: 65px;width: 56px;border-radius: 8px;"><i class="fa fa-rupee"></i><?php echo $row['sp'];?></div>-->
        <!--                            </a>-->
                                     <div class="row">
									<div class="colum sm-6">
                                    <img src="<?php echo base_url();?>data/uploads/package/<?php echo $row['image'];?>"  alt="image" class="img-responsive" style="height: 294px;padding: 15px; border-radius: 30px 30px 30px 30px;width: 50%;float: left;">
								<!--<div class="sticker" style="background-color: #eb4e24;top: 149px;height: 65px;width: 56px;border-radius: 50px;"><i class="fa fa-rupee"></i><?php echo $row['sp'];?></div>-->
								    <div class="">
                    					<!--<a href="<?php echo base_url();?>index.php/Singlecheckup/<?php echo $pack['id'];?>" class="btn btn-link" title="<?php echo $pack['name'];?>"><img src="<?php echo base_url();?>data/uploads/package/<?php echo $pack['image'];?>" alt="image" class="img-responsive">-->
                    					<!--</a>										-->
                    						<h3 style="font-family: auto;font-size: 18px;"><?php echo $row['name'];?></h3>
                    						<ul class="list-unstyled">
                    						<li><i class="fa fa-calendar-o" aria-hidden="true"></i>Mon-Sat</li>
                    						</ul>
                                			<ul class="myhealthList">
            									<?php $test = explode(",",$row['testname']);?>
            									<?php for($i=0; $i<count($test); $i++){?>
            										<li><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo $test[$i];?></li>
            									<?php }?>
            								</ul>
                    						<p>Rs.<?php echo $row['sp'];?>.00</p>
                    						<button class="book-now"><a href="" class="book-now" title="<?php echo $row['name'];?>">Book Now </a></button>
                    				</div>
								<!--<img src="<?php echo base_url();?>data/uploads/package/<?php echo $row['image'];?>"  alt="image" class="img-responsive" style="height: 294px;padding: 15px; border-radius: 30px 30px 30px 30px;width: 50%;float: right;">-->
								<!--<div class="sticker" style="background-color:#2490EB;top: 149px;height: 65px;width: 56px;border-radius: 8px;margin-left: 50%;"><i class="fa fa-rupee"></i><?php echo $row['sp'];?></div>-->
							</div>
							</a>
									<ul class="list-unstyled">
								  <!-- <li style="position:relative; top:-5px;"><i class="fa fa-calendar-o" aria-hidden="true"></i> &nbsp;Mon-Sat</li> -->
								</ul>
							 <!--   <ul class="myhealthList">-->
								<!--	<?php $test = explode(",",$row['testname']);?>-->
								<!--	<?php for($i=0; $i<count($test); $i++){?>-->
								<!--		<li><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo $test[$i];?></li>-->
								<!--	<?php }?>-->
								<!--</ul>-->
                                    </div>
            
            				    	<div class="post-para" style="text-align:justify;">
                                        <blockquote class="wp-block-quote">
                                            <!--<span class="wp-quote-icon"><i class="flaticon-straight-quotes"></i></span>-->
                                            <p> <?php echo $row['pdesc'];?></p>
                                        </blockquote>
                                    </div>
                                  
                                </div>
                                <?php }?>
                            </div>
                            <div class="col-xl-4">
                                 <div class="sidebar-widget">
        							<select class="form-control sub_mnu1" name="sub_mnu1" id="sub_mnu1" required  onchange="getVal(this);">
        							<option value="" class="selopt">Select Package</option>
        							<?php 
        							$requestUri = $_SERVER['REQUEST_URI'];
        							$parts = explode('/', $requestUri);	
        							$url=$parts[4];
        						
        							foreach($category as $cat){ 
        							if($cat['id']==$url){	
        							?>
        								<option value="<?php echo $cat['id'];?>" class="selopt" selected><?php echo $cat['name']. '(  Rs. '.$cat['price'].' )';?></option>	
        							<?php }else{ ?>
        								<option value="<?php echo $cat['id'];?>" class="selopt"><?php echo $cat['name']. '(  Rs. '.$cat['price'].' )';?></option>	
        							<?php } }?>
        						</select>
                                    </div>
                                    <br><br>
                                <div class="homeContactContent" style="padding: 15px;border: 1px solid #CCCCCC">
                                    <div class="sidebar-widget">
                                        <br>
                                        <h4>Send Enquiry</h4>    
                                        <form action="#" class="contact-widget">
                                             <div class="form-group">
											 <select class="healthGropdown form-control border-color-4" id="ccsubject" name="ccsubject">
											<option value="">Select Package</option>
											<?php foreach($package as $pack){ ?>
												<?php if($urrll==$pack['id'])
												{?>
													<option value="<?php echo $pack['name'];?>" selected><?php echo $pack['name']. '( Rs. '.$pack['price'].' )';?></option>
												<?php } else {?>
													<option value="<?php echo $pack['name'];?>" ><?php echo $pack['name']. '( Rs. '.$pack['price'].' )';?></option>
												<?php }?>
											<?php }?>
										</select>
                                            </div>
                                    
                                             <div class="form-group">
                                                  <i class="fa fa-user"></i>
                                                <input class="form-control border-color-4" type="text" id="ccname" name="ccname" placeholder="Name" required="" type="text" pattern="[a-z A-z ]+">
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