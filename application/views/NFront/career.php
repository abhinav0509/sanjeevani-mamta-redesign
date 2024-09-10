<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
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
var imgrr='';
var resume='';
$(document).ready(function(){
	$(".home").addClass('active');
	var Pageindex = $("#pindex").val();
	   var rcount = $("#rcount").val();
	   
	   if(Pageindex=="")
		 Pageindex=1;
	   if(rcount=="")
		  rcount=0; 
	   $(".pager").ASPSnippets_Pager({
            ActiveCssClass: "current",
            PagerCssClass: "pager",
            PageIndex: parseInt(Pageindex),
            PageSize: 4,
            RecordCount: parseInt(rcount)

        });
        
	  $(".page").click(function () {
		  var pageindex = $(this).attr('page');          
		  $('#pindex').val(pageindex);
		  $('#hfield').submit();
	   });
	   
    $("#btnCareer").click(function(){
		var flag=true;
		var str = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if($("#candidatename").val().match('^[a-z A-Z]{3,16}$')){
			$('#candidatename').attr('style','border-color:#84BED6 !important');
		}
		else
		{
			$('#candidatename').attr('style','border-color:red !important');
			flag=false;
		}
		if($("#candidateemail").val().match(str)){
			$('#candidateemail').attr('style','border-color:#84BED6 !important');
		}
		else
		{
			$('#candidateemail').attr('style','border-color:red !important');
			flag=false;
		}
		if($("#candidatemobile").val().match('^[0-9]{10}$')){
			$('#candidatemobile').attr('style','border-color:#84BED6 !important');
		}
		else
		{
			$('#candidatemobile').attr('style','border-color:red !important');
			flag=false;
		}
		if($("#candidateapply").val()!=""){
			$('#capply').attr('style','border-color:#84BED6 !important');
		}
		else{
			$('#candidateapply').attr('style','border-color:red !important');
		}
		if($("#candidateexperience").val()!=""){
			$('#candidateexperience').attr('style','border-color:#84BED6 !important');
		}
		else{
			$('#candidateexperience').attr('style','border-color:red !important');
		}
		
		if($("#fileToUpload").val()!=""){
			$('#fileToUpload').attr('style','border-color:#84BED6 !important;padding:0px;');
		}
		else{
			$('#fileToUpload').attr('style','border-color:red !important;padding:0px;');
		}
		if($("#candidatename").val()!="" && $("#candidateemail").val()!="" && $("#candidatemobile").val()!="" && $("#candidateapply").val()!="" && $("candidateexperience").val()!="")
		{
			if(flag)
			{
				careercmsinsert();
				//careerinsert();
			}
		}	
		
	});

});
function careercmsinsert()
{
	
	   $("#btnCareer").attr('disabled',true);
         $("#loaderImg").show();
	   $.ajax({
				url: '<?php echo base_url();?>index.php/Insert/insert_resume',
				type: 'POST',
				data : {
					'name': $("#candidatename").val(),
					'email': $("#candidateemail").val(),
					'mobile': $("#candidatemobile").val(),
					'exp': $("#candidateexperience").val(),
					'designation': $("#candidatedesignation").val(),
					'ctc': $("#candidateCTC").val(),
					'applyfor': $("#candidateapply").val(),
					'message': $("#candidatemessage").val(),
					//'upload1': $("#fileToUpload").val(),
					'csite': $("#candidatesite").val()
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
						$("#candidatename").val("");
						$("#candidateemail").val("");
						$("#candidatemobile").val("");
						$("#candidateexperience").val("");
						$("#candidatedesignation").val("");
						$("#candidateCTC").val("");
						$("#candidateapply").val("");
						$("#candidatemessage").val("");
						$("#btnCareer").attr('disabled',false);
						$("#loaderImg").hide();
					}
					else if(obj.message=="Error"){
						swal({
							title: "Error",
							type:"error",
							text:"Error!!! Please Try Again"
						});
					}
				},			
				error: function()
				{
					
				}							
		});
	
}
/*
function careerinsert()
{	
	var formdata = new FormData($(this)[0]);	
	   // $("#btnCont").attr('disabled',true);
       // $("#loaderImg").hide();
	   $.ajax({
				url: 'http://192.168.1.21:8084/MedicoHelpline/HospitalEnquiry',
				//url: 'http://www.medicohelpline.com/HospitalEnquiry',
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
						imgrr = obj.mmg;
						swal({
								title: "Success",
								type:"success",
								text:"Enquiry Send Successfully...!!!"
							});	
						$("#cname").val("");
						$("#cemail").val("");
						$("#cmobile").val("");
						$("#cexperience").val("");
						$("#cdesignation").val("");
						$("#cCTC").val("");
						$("#capply").val("");
						$("#cmessage").val("");
						$("#btnCareer").attr('disabled',true);
						$("#loaderImg").show();
						}
						else if(obj.message=="Error"){
							swal({
								title: "Error",
								type:"error",
								text:"Error!!! Please Try Again"
							});
							//$("#btnCont").attr('disabled',false);
							//$("#loaderImg").hide();
						}
				},			
				error: function()
				{
					
				}							
		});
}
*/
</script>
<style>
.pager
{
	height: 18px;
	margin: 16px;
}
.pager .page
{
	cursor: pointer;
	border: 1px solid #253544;
	margin: 3px;
	padding: 5px;
	background: #E8EEF4;
}
.pager .page:hover
{
	cursor: pointer;
	border: 1px solid #1a0f49;
	margin: 3px;
	padding: 5px;
	background: #253544;
	color: #fff;
}
.pager span
{
	cursor: pointer;
	border: 1px solid #1a0f49;
	margin: 3px;
	padding: 5px;
	background: #253544;
	color: #fff;
}
.page 
{
  color: #253544;
}
.accordionCommon .panel-body p 
{
  margin-bottom: 10px;
}
.homeContactContent .form-group .form-control
{
  height: 40px;
}
.checkoutInfo .panel-heading {
  border-radius: 8px 8px 0 0;
  height: 46px;
  padding: 0 30px;
}
.checkoutInfo .panel-heading .panel-title {
  color: #ffffff;
  font-family: "Dosis",sans-serif;
  font-size: 24px;
  font-weight: 700;
  line-height: 42px;
  text-transform: capitalize;
}
.checkoutInfo .form-group .form-control {
  border-radius: 7px;
  border-width: 1px;
  height: 37px;
  margin-bottom: 10px;
}
</style>
<!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection" >
 <!-- <div class="container">-->
	<!--<div class="pageTitleInfo">-->
	<!--  <h2>Lets <span>Work</span> Together<br/><br/>-->
	<!--	and <span>Explore</span> Opportunities-->
	<!--  </h2>-->
	<!-- <ol class="breadcrumb">-->
	<!--		<li><a href="<?php echo base_url();?>">Home</a></li>-->
 <!--            <li>Contact Us</li>-->
	<!--		 <li class="active">Careers</li>-->
 <!--         </ol>-->
	<!--</div>-->
 <!-- </div>-->
  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:15px;">
                            	 <h2>Lets <span>Work</span> Together<br/><br/>
	                            and <span>Explore</span> Opportunities
                               </h2>
                            <h2>Careers</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>Careers</li>
                            </ul>
                        </div>
                    </div>
                </div>
</section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2 style="margin-bottom:40px;">
            <span class="shape shape-left bg-color-4"></span>
            <span class="color-2">Career</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
         
        <div class="row">
		<p style="font-size:16px;margin-bottom:20px;font-weight:600;text-align:center;">Candidates who are interested to work with us may forward their Resume to <span style="font-weight:normal;color:#EA7066;text-decoration:underline">enquirysmsshospital@gmail.com</span></p>

			<div class="col-md-8 col-sm-7 col-xs-12">
			<?php if(!empty($result)){?>
            <div class="accordionCommon" id="accordionOne">
              <div class="panel-group" id="accordionFirst">
			  <?php $q=0; $cl=1; foreach($result as $row){ if($q==0){?>
                <div class="panel panel-default">
                  <a class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordionFirst" href="#collapse-<?php echo $row['id'];?>">
                    <span><?php echo $row['designation'];?></span>
                    <span class="iconBlock"><i class="fa fa-chevron-down"></i></span>
                  </a>                    
                  <div id="collapse-<?php echo $row['id'];?>" class="panel-collapse collapse in">
                    <div class="panel-body">
					<?php $date=date_create($row['closing_date']);?>
						<!--<p>Closing Date : <?php echo date_format($date,"d-m-Y")?></p>-->
						<p>Qualification : <?php echo strip_tags($row['qualification'],"");?></p>
						<p>Experience : <?php echo strip_tags($row['experience'],"<p>");?></p>
						<p><?php echo strip_tags($row['pdesc'],"<p>");?></p>
                    </div>
                  </div>
                </div>
				<?php } else {?>
                <div class="panel panel-default">
                  <a class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordionFirst" href="#collapse-<?php echo $row['id'];?>">
                    <span><?php echo $row['designation'];?></span>
                    <span class="iconBlock"><i class="fa fa-chevron-up"></i></span>
                  </a>
                  <div id="collapse-<?php echo $row['id'];?>" class="panel-collapse collapse">
                    <div class="panel-body">
						<?php $date=date_create($row['closing_date']);?>
						<!--<p>Closing Date : <?php echo date_format($date,"d-m-Y")?></p>-->
						<p>Qualification : <?php echo strip_tags($row['qualification']);?></p>
						<p>Experience : <?php echo strip_tags($row['experience']);?></p>
						<p><?php echo strip_tags($row['pdesc'],"<p>");?></p>
                    </div>
                  </div>
                </div>
              <?php } $cl++; $q++; }?>  
              </div>
            </div>
			<?php if(isset($links)){?>
				<div class="pager">
					<?php echo $links;?>
				</div>
			  <?php }?>
		  <?php } else {?>
				<code>No Requirements</code>
		  <?php }?>
			</div>
          
          <div class="col-md-4 col-sm-5 col-xs-12">
			<form id="enqForm" name="formdetail" action="javascript:;" method="post" enctype="multipart/form-data">
              <div class="panel panel-default checkoutInfo">
                <div class="panel-heading bg-color-4 border-color-4">
                  <h3 class="panel-title">Apply</h3>
                </div>
                <div class="panel-body" style="padding:15px;">
				<div class="row">
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Name</label>
                      <input type="text" class="form-control border-color-4" id="candidatename" name="name" placeholder="Name" required pattern="[a-z A-z]+">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Experience</label>
                      <input type="text" class="form-control border-color-4" id="candidateexperience" name="exp" placeholder="Total Experience">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Apply For</label>
                      <select class="form-control border-color-4" id="candidateapply" name="applyfor" required="">
							<option value="">Applying For</option>
							<option value="Medical">Medical</option>
							<option value="Non-Medical">Non-Medical</option>
							<option value="Para Medical">Para Medical</option>
							<option value="Nursing">Nursing</option>
							<option value="Others">Others</option>
						</select>
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Designation</label>
                      <input class="form-control border-color-4" id="candidatedesignation" name="designation" placeholder="Current Designation" required="" type="text">
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Current CTC</label>
                      <input class="form-control border-color-4" id="candidateCTC" name="ctc" placeholder="Current CTC" required="" type="text">
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Upload Resume</label>
					  
                      <input class="form-control border-color-4" id="fileToUpload" name="fileToUpload" placeholder="Upload Resume" required="" type="file" style="padding:0px;">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Email</label>
                      <input type="text" class="form-control border-color-4" id="candidateemail" name="email" placeholder="Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12" style="width: 100%;">
                      <label for="">Contact</label>
                      <input type="text" class="form-control border-color-4" id="candidatemobile" name="mobile" placeholder="Mobile No." pattern="[0789][0-9]{9}">
                    </div>
                  </div>
				  <input type="hidden" id="candidatesite" name="csite" value="Career">
				</div>
				<div class="row">
                  <div class="form-group">
                    <div class="col-sm-12 col-xs-12">
                      <label for="">Message</label>
                      <textarea class="form-control border-color-4" id="candidatemessage" name="message" placeholder="Write message" required=""></textarea>
                    </div>
                  </div>
			    </div>
				  <div class="col-xs-12" style="padding-top:10px;">
                    <div class="formBtnArea" style="text-align: center">
                      <button type="submit" class="btn btn-primary" id="btnCareer"> Submit</button>
					  <img style="margin-left: auto; margin-right: auto; padding-top: 9px; display:none;" id="loaderImg" src="<?php echo base_url();?>newFront/loader.gif">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/career">
		<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>"> 
		<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
	</form>
