<!--Start Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102355494-3', 'auto');
  ga('send', 'pageview');

</script>
<!--  /Start Google Analytics -->
<script>
$(document).ready(function(){
	$(".categoryItem").slimscroll({
		  height: '500px',
		  wheelStep: 1
	   });
	$(".home").addClass('active');
	
	$("#btnCont").click(function(){
		  var flag=true;
		  var str = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		  if ( $("#cname").val().match('^[a-z A-Z]{3,16}$') ) {
				$('#cname').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#cname").get(0).focus();
				$('#cname').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#cemail").val()!="")
			{
			if ( $("#cemail").val().match(str) ) {
				$('#cemail').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#cemail").get(0).focus();
				$('#cemail').attr('style','border-color:red !important');
				flag = false;
			}
			}
			if ( $("#cmobile").val().match('^[0-9]{10}$') ) {
				$('#cmobile').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#cmobile").get(0).focus();
				$('#cmobile').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#cmessage").val()!="")
			{
				$('#cmessage').attr('style','border-color:#84BED6 !important');
			}
			else{
				//$("#cmessage").get(0).focus();
				$('#cmessage').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#cname").val()!="" && $("#cmobile").val()!="" && $("#cmessage").val()!="")
			{
				if(flag)
				{
				  concmsinsert();
				  coninsert();
				}
		    }		
	});
	
	$("#enqForm").submit(function(event){
	  event.preventDefault();
       var formdata = new FormData($(this)[0]);	
	     $("#btnCont").attr('disabled',true);
         $("#loaderImg").show();
	   $.ajax({
				url: '<?php echo base_url();?>index.php/Insert/insert_enquiry',
				type: 'POST',
				processData: false,
				contentType: false,
				async: false,
				data: formdata,
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
					$("#name").val("");
					$("#email").val("");
					$("#mobile").val("");
					$("#message").val("");
					$("#btnCont").attr('disabled',false);
                    $("#loaderImg").hide();
					}
					else if(obj.message=="Error"){
						swal({
							title: "Error",
							type:"error",
							text:"Error!!! Please Try Again"
						});
						$("#btnCont").attr('disabled',false);
						$("#loaderImg").hide();
					}
				},			
				error: function()
				{
					
				}							
		});
	});

});

function concmsinsert()
{
	$("#btnCont").attr('disabled',true);
    $("#loaderImg").show();
	$.ajax({
		url: "<?php echo base_url();?>index.php/Insert/insert_enquiry",
		data : {
			'name': $("#cname").val(),
			'email': $("#cemail").val(),
			'mobile': $("#cmobile").val(),
			'subject': $("#csubject").val(),
			'message': $("#cmessage").val(),
			'site': $("#csite").val()
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
			$("#cname").val("");
			$("#cemail").val("");
			$("#cmobile").val("");
			$("#csubject").val("");
			$("#cmessage").val("");
			$("#btnCont").attr('disabled',false);
			$("#loaderImg").hide();
			}
			else if(obj.message=="Error"){
				swal({
					title: "Error",
					type:"error",
					text:"Error!!! Please Try Again"
				});
				$("#btnCont").attr('disabled',false);
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
		//url : "http://192.168.1.14:8084/MedicoHelpline/HospitalEnquiry",
		data : {
			lgKey: $("#hosuid").val(),
			name: $("#cname").val(),
			email: $("#cemail").val(),
			mobile: $("#cmobile").val(),
			subject: $("#csubject").val(),
			message: $("#cmessage").val(),
			enqfor: $("#csite").val()
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
</style>
<section>
         <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:15px;">
                            <h2>Health Packagess</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Health Packages</li>
                            </ul>
                        </div>
                    </div>
                </div>
    </section>
	
	
	<section class="mainContent full-width clearfix productSection">
		<div class="container">
		 <div class="sectionTitle text-center">
          <h2 class="posRelHead">
			<div class="mySelectPosition">
				<div class="myMenuSelect">
					<select class="form-control sub_mnu1" name="sub_mnu1" id="sub_mnu1" required  onchange="getVal(this);">
						<option value="" class="selopt">Wellness Package</option>
						<?php foreach($category as $cat){ ?>
								<option value="<?php echo $cat['id'];?>" class="selopt"><?php echo $cat['name'];?></option>	
						<?php }?>
					</select>
					<span class="departArrow"><i class="fa fa-caret-down"></i></span>
				</div>
				<div class="myMenuSelect">
				<select class="form-control category" name="category" id="category" required  onchange="getVal1(this);">
					<option value="" class="selopt">Pre-Operative Package</option>
					<?php 
					$requestUri = $_SERVER['REQUEST_URI'];
							$parts = explode('/', $requestUri);	
							$url=$parts[4];
					foreach($package_type as $ptype){
					if($ptype['id']==$url){
						?>
						<option value="<?php echo $ptype['id'];?>" class="selopt" selected><?php echo $ptype['name'];?></option>
					<?php } else {?>
					<option value="<?php echo $ptype['id'];?>" class="selopt"><?php echo $ptype['name'];?></option>
					<?php } }?>
				</select>
				<span class="departArrow"><i class="fa fa-caret-down"></i></span>
				</div>
			</div>	
            <span class="shape shape-left bg-color-4"></span>
			<?php /*foreach($package_type  as $ptype){
					$requestUri = $_SERVER['REQUEST_URI'];
					$parts = explode('/', $requestUri);	
					$url=$parts[4];
					if($ptype['id']==$url){
						$name=$ptype['name'];
					}	
				}*/
				?>
            <span class="color-2">Health Checkup Packages</span>
			
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
		
			<div class="row">
				<div class="col-md-9 col-sm-7 col-xs-12 pull-left myBorder">
					<div>
					<?php foreach($result as $row){?>
						<div class="thumbnail thumbnailContent">
							<div class="myThumbnails">
							
									<img src="<?php echo base_url();?>data/uploads/package/<?php echo $row['image'];?>" alt="image" class="img-responsive" style="height: 294px;padding: 15px;">
								
								<!--<div>
									<ul class="list-inline btn-yellow">
										<li><a href="javascript:;" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a></li> 
									</ul>
								</div>-->
							</div>
							<div class="sticker bg-color-1"><i class="fa fa-rupee"></i><?php echo $row['sp'];?></div>
							<div class="caption border-color-1">
								<h3><a href="javascript:;" class="color-1"> <?php echo $row['name'];?></a></h3>
								<ul class="list-unstyled">
								  <li><i class="fa fa-calendar-o" aria-hidden="true"></i> &nbsp;Mon-Sat</li>
								</ul>
								<ul class="myhealthList">
									<?php $test = explode(",",$row['testname']);?>
									<?php for($i=0; $i<count($test); $i++){?>
										<li><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo $test[$i];?></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					<?php }?>
					</div>
					<div class="about-countinner md-services myInstruction">
						<div class="sectionTitle text-center">
							<h2>
								<span class="shape shape-left bg-color-4"></span>
								<span class="color-2">Instructions for Health Check-up</span>
								<span class="shape shape-right bg-color-4"></span>
							</h2>
						</div>
												
						<ul class="choose-list">
							<li><p>Please take a prior appointment (020-66099751) before coming for Health Check up.</p></li>
							<li><p>Kindly observe fasting for 12 to 14 hours before coming for the health check up. (no solid or liquids to be consumed in this period other than plain water)</p></li>
							<li><p>Please report to Health Check-up Department between 9.00am to 11.00am. (Patients coming after 11.00 am have to come on the next day for some test)</p></li>
							<li><p>Please collect a sterilized container from the pathology lab on previous day.</p></li>
							<li><p>You can collect your report on next day and then proceed for physician consultation.</p></li>
							<li><p>Kindly bring old report or details of any past medical history.</p></li>
							<li><p>If you are using any contact lenses, Kindly do not wear your lenses 24 hours before coming for health checkup.</p></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-5 col-xs-12 pull-left">
					<aside>
						<div class="inqueryform">
							<h4>Send Enquiry</h4>
							<!--<form>
								<div class="form-group">
									<input placeholder="Name" name="Name" title="Name" type="text" class="form-control border-color-2">
								</div>
								<div class="form-group">
									<input placeholder="Contact No" type="Contact No" class="form-control border-color-3">	
								</div>
								<div class="form-group">			
									<input placeholder="email" type="Email" class="form-control border-color-4">	
								</div>
								<div class="form-group">			
									<textarea class="form-control border-color-5"></textarea >
								</div>
								<div class="form-group">			
									<button class="btn btn-info  btn-lg">Send Enquiry</button>
								</div>
							</form>-->
							<div class="homeContactContent">
							<form action="" method="POST" id="enqForm">
								<div class="row">
								  <div class="col-sm-12 col-xs-12">
									<div class="form-group" style="margin-bottom:0px;">
										<select class="healthGropdown form-control border-color-4" id="csubject" name="csubject">
											<option value="">Select Package</option>
											<?php foreach($package_type as $ptype){ ?>
												<?php if($urrll==$ptype['id'])
												{ ?>
													<option value="<?php echo $ptype['name'];?>" selected><?php echo $ptype['name'];?></option>
												<?php } else {?>
													<option value="<?php echo $ptype['name'];?>" ><?php echo $ptype['name'];?></option>
												<?php }?>
											<?php }?>
										</select>
									</div>
								  </div>
								  <div class="col-sm-12 col-xs-12">
									<div class="form-group">
									  <i class="fa fa-user"></i>
									  <input class="form-control border-color-4" id="cname" name="cname" placeholder="Name" required="" type="text" pattern="[a-z A-z ]+">
									</div>
								  </div>
								  <div class="col-sm-12 col-xs-12">
									<div class="form-group">
									  <i class="fa fa-envelope" aria-hidden="true"></i>
									  <input class="form-control border-color-4" id="cemail" name="cemail" placeholder="Email address" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
									</div>
								  </div>
								  <div class="col-sm-12 col-xs-12">
									<div class="form-group">
									  <i class="fa fa-phone" aria-hidden="true"></i>
									  <input class="form-control border-color-4" id="cmobile" name="cmobile" placeholder="Enter 10 digit Mobile No." pattern="[0789][0-9]{9}" required="" type="text">
									</div>
								  </div>
								  <div class="col-xs-12">
									<div class="form-group">
									  <i class="fa fa-comments" aria-hidden="true"></i>
									  <textarea class="form-control border-color-4" id="cmessage" name="cmessage" placeholder="Write message" style="height:100px;" required=""></textarea>
									</div>
								  </div>
								  <input type="hidden" id="csite" name="csite" value="HealthCheckup">
								  <span id="ext" class="alert alert-success" style=" padding:8px;float:right;display:none;"></span>
								  <div class="col-xs-12">
									<div class="formBtnArea">
									  <button type="button" class="btn btn-primary" id="btnCont" style="padding:0 10px 10px !important;">Send Message</button>
									  <img style="margin-left: auto; margin-right: auto; padding-top: 9px; display:none;" id="loaderImg" src="<?php echo base_url();?>newFront/loader.gif">
									</div>
								  </div>
								</div>
							  </form>
							</div>
						</div>
						<div class="panel panel-default courseSidebar">
							<div class="panel-heading bg-color-4 border-color-4">
							  <h3 class="panel-title">Health Packages</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled categoryItem">
								<?php foreach($package as $pack){?>
									<li><a href="<?php echo base_url();?>index.php/Singlecheckup/<?php echo $pack['id'];?>"> <?php echo substr($pack['name'],0,25);?></a></li>
								<?php }?>
								</ul>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	