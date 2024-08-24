<script src="<?php echo base_url();?>data/dist/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>data/dist/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/timepicker.css">
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
var idd = '<?php echo $urll;?>';
$(document).ready(function(){
	$('[data-rel=datepicker]').datepicker({
			autoclose: true,
			todayHighlight: true
			});
	$('.appAptTime').timepicker();
	
	$(".homedr").on("contextmenu",function(e){
		   return false;
		});
	
	show(idd);
	$.getJSON("https://www.medicohelpline.com/HospitalAllDoctors?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	//$.getJSON("http://192.168.1.10:8084/MedicoHelpline/HospitalAllDoctors?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json", function( data ) {
	   var items = [];
	   console.log(data);
	   if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		    for(i=0; i<hDoc.length; i++){
				var op="";
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('(Ayush)',' ');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('medicine','Medicine');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Oncologists','Oncologist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Periododontist','Periodontist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
				
				if(hDoc[i]['uid']==idd)
					op +="<option value=\""+hDoc[i]['uid']+"\" selected=\"selected\"> Dr. "+hDoc[i]['fname']+" "+hDoc[i]['lname']+" ("+hDoc[i]['speciality']+")</option>";
				else
					op +="<option value=\""+hDoc[i]['uid']+"\"> Dr. "+hDoc[i]['fname']+" "+hDoc[i]['lname']+" ("+hDoc[i]['speciality']+")</option>";
				$("#Consultantt").append(op);
			}
	   }
    });
	
	$("#appAptDate").change(function(){
		var sel = $(this).val();
		var today = new Date();
		var dd = today.getDate();
		var mon = today.getMonth()+1;
		var yy = today.getFullYear();
		if(dd<10) {
			dd='0'+dd
		} 

		if(mon<10) {
			mon='0'+mon
		} 
		var datee = yy+"-"+mon+"-"+dd;
		if(sel < datee)
		{
			$("#appAptDate").val("");
			swal({
				title: "Warning",
				type:"warning",
				text:"Please Select Appropriate Date...!!!"
			});
		}
	});
	  
	$("#appbtnCont1").click(function()
		{
			var flag=true;
			var str = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z ]{2,4}|[0-9]{1,3})(\]?)$/;
			if ( $("#appname").val().match('^[a-z A-Z ]{3,255}$') ) {
				$('#appname').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#appname").get(0).focus();
				$('#appname').attr('style','border-color:red !important');
				flag = false;
			}
			if ( $("#appemail").val().match(str) ) {
				$('#appemail').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#appemail").get(0).focus();
				$('#appemail').attr('style','border-color:red !important');
				flag = false;
			}
			if ( $("#appmobile").val().match('^[0-9]{10}$') ) {
				$('#appmobile').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#appmobile").get(0).focus();
				$('#appmobile').attr('style','border-color:red !important');
				flag = false;
			}
			if ( $("#appAptDate").val()!="" ) {
				$('#appAptDate').attr('style','border-color:#84BED6 !important');
			} else {
				$('#appAptDate').attr('style','border-color:red !important');
				flag = false;
			}
			if ( $("#Consultantt").val()!="" ) {
				$('#Consultantt').attr('style','border-color:#84BED6 !important');
			} else {
				//$("#Consultantt").get(0).focus();
				$('#Consultantt').attr('style','border-color:red !important');
				flag = false;
			}
			if ( $("#appAptTime").val()!="" ) {
				$('#appAptTime').attr('style','border-color:#84BED6 !important');
			} else {
				$('#appAptTime').attr('style','border-color:red !important');
				flag = false;
			}
			if($("#appAptTime").val()!="" && $("#appname").val()!="" && $("#appemail").val()!="" && $("#appmobile").val()!="" && $("#appAptDate").val()!="" && $("#appAptTime").val()!="")
			{
				if(flag)
				{
					appcmsinsert();
				    appinsert();
				}
			}
		});
	
	/*$("#appForm").submit(function(event){
		event.preventDefault();
        var formdata = new FormData($(this)[0]);	
	    $("#btnCont").attr('disabled',true);
        $("#loaderImg").show();
	    /*$.ajax({
				url: '<?php echo base_url();?>index.php/bookAppointment',
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
								text:"Appointment Booked Successfully...!!!"
							});	
					$("#name").val("");
					$("#email").val("");
					$("#mobile").val("");
					$("#AptDate").val("");
					$("#AptTime").val("");
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
	});*/
	
});
function show(id)
{
	if(id!="")
	{
	$("#preloader").show();
	$.ajax({
						url: "https://www.medicohelpline.com/HospitalSingleDoctor",
						//url: "http://192.168.1.10:8084/MedicoHelpline/HospitalSingleDoctor",
                        data: {
                          lgKey: $("#hosuid").val(),
						  docuid: id
                        },
                        type: "post",
                        dataType: "json",
                        success: function(jsonResponse){
							var data = jsonResponse.doctorTimetableList;
							var data1 = jsonResponse.academicsList;
							$(".acade").html("");
							$(".opdd").html("");
							$(".drkeyskill").html("");
							$(".homedr").html("");
							var op1='';
							var op2='';
							var op='';
							var mmg="";
							var d12 = new Date();
							var dayName = d12.getDay();
							if(jsonResponse.editError=="Success")
							{
								data[0].specialityName=data[0].specialityName.replace('(Ayush)',' ');
								data[0].specialityName=data[0].specialityName.replace('medicine','Medicine');
								data[0].specialityName=data[0].specialityName.replace('Dermatologist(Skin)','Dermatologist');
								data[0].specialityName=data[0].specialityName.replace('Oncologists','Oncologist');
								data[0].specialityName=data[0].specialityName.replace('Periododontist','Periodontist');				
								data[0].specialityName=data[0].specialityName.replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
								op+='<div class="media">';
								op+='<div class="col-sm-3">';
								op+='<img class="prfimg" src="https://www.medicohelpline.com/images/doctorProfileImage/'+data[0].img+'" style="width:200px;;height:200px;border-radius:10px;">';
								op+='</div>';
								op+='<div class="col-sm-9">';
								op+='<h3 class="drname">Dr.'+data[0].fname+" "+data[0].lname+'</h3>';
								op+='<h5 class="degree" style="font-weight:600"><i class="fa fa-fw fa-graduation-cap"></i> ('+data[0].degree+')</h5>';
								op+='<p class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">RegNo. :&nbsp;&nbsp;&nbsp;<span class="regg" style="font-weight:500">'+data[0].reg+'</span></p><br>';
								op+='<p class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">Department:&nbsp;&nbsp;&nbsp;<span class="drdept" style="font-weight:500">'+data[0].department+'</span></p><br>';
								op+='<p class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">Special Interest:&nbsp;&nbsp;&nbsp;<span class="drspeciality" style="font-weight:500">'+data[0].specialityName+'</span></p>';
								op+='</div>';
								op+='</div>';
								$(".homedr").html(op);
								var s = data[0].days1;
								var t = data[0].days;
								var dayy = s.split(",");
								var timm = t.split(",");
								for(var k=0; k<dayy.length; k++)
								{
									if(k==0)
									{
									op2+='<div class="row" style="padding: 0px; margin:0;">';
									op2+='<div class="col-sm-4 dayTimesHeading">';
									op2+='<strong>'+dayy[k]+'</strong>';
									op2+='</div>';
									op2+='<div class="col-sm-8 dayTimeData" style="padding: 0px; display: block;text-align:center;">';
									op2+='<div class="col-xs-12 col-sm-12 dayTimes timeCol XSTimeTblPadd" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-bottom: 1px solid rgb(224, 224, 224); color: rgb(0, 0, 0);">';
									if(timm[k]=="NA / NA"){
									op2+='<code>Clinic Close !  <i class="fa fa-fw fa-smile-o"></i></code>';
									} else {
									op2+='<span class="label-OnlineTime" id="Mon-OnlineTime">';
									var tim = timm[k].split("/");
										for(var j=0; j<tim.length; j++){ if(tim[j]!=" NA"){
										op2+=tim[j]+'<br>';
										  } }
									op2+='</span>';
									}
									op2+='</div>';
									op2+='</div>';
									op2+='</div>';
									}
									else
									{
									op1+='<div class="row" style="padding: 0px; margin:0;">';
									op1+='<div class="col-sm-4 dayTimesHeading">';
									op1+='<strong>'+dayy[k]+'</strong>';
									op1+='</div>';
									op1+='<div class="col-sm-8 dayTimeData" style="padding: 0px; display: block;text-align:center;">';
									op1+='<div class="col-xs-12 col-sm-12 dayTimes timeCol XSTimeTblPadd" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-bottom: 1px solid rgb(224, 224, 224); color: rgb(0, 0, 0);">';
									if(timm[k]=="NA / NA"){
									op1+='<code>Clinic Close !  <i class="fa fa-fw fa-smile-o"></i></code>';
									} else {
									op1+='<span class="label-OnlineTime" id="Mon-OnlineTime">';
									var tim = timm[k].split("/");
										for(var j=0; j<tim.length; j++){ if(tim[j]!=" NA"){
										op1+=tim[j]+'<br>';
										  } }
									op1+='</span>';
									}
									op1+='</div>';
									op1+='</div>';
									op1+='</div>';
									}
								}
								$("#drid").val(data[0].uid);
								$("#drnm").val(data[0].fname+" "+data[0].lname);
								$("#dept").val(data[0].department);
								$("#speciality").val(data[0].specialityName);
								$(".opdd").html(op1);
								$(".opdd").append(op2);
								$("#preloader").hide();								
							}
						},
						error:function(error){
							
						}
	});
	}
	else
	{
		var op='';
		$(".homedr").html("");
		$(".opdd").html("");
		op+='<code>Please Select Doctor......</code>';
		
		$(".homedr").html(op);
		$(".opdd").html(op);
	}
}

function show1(id)
{
	if(id!="")
	{
	$("#preloader").show();
	$.ajax({
						url: "https://www.medicohelpline.com/HospitalSingleDoctor",
						//url: "http://192.168.1.10:8084/MedicoHelpline/HospitalSingleDoctor",
                        data: {
                          lgKey: $("#hosuid").val(),
						  docuid: id
                        },
                        type: "post",
                        dataType: "json",
                        success: function(jsonResponse){
							var data = jsonResponse.doctorTimetableList;
							var data1 = jsonResponse.academicsList;
							$(".acade").html("");
							$(".opdd").html("");
							$(".drkeyskill").html("");
							var op1='';
							var op2='';
							var op="";
							var mmg="";
							if(jsonResponse.editError=="Success")
							{
								if(data[0]['gender']=="Female" && data[0]['img']=="defaultMale.jpg")
									data[0].img="defaultFemale.jpg";
								mmg="https://www.medicohelpline.com/images/doctorProfileImage/"+data[0].img;
								//mmg="http://192.168.1.10:8084/MedicoHelpline/images/doctorProfileImage/"+data[0].img;
								$(".prfimg").attr('src',mmg);
								$(".drname").html("Dr."+data[0].fname+" "+data[0].lname);
								$(".drdept").html(data[0].department);
								$(".regg").html(data[0].reg);
								$(".drspeciality").html(data[0].specialityName);
								if(data[0].keyskill!=""){
									$(".drkeyskill").html(data[0].keyskill);
								}
								$(".drdegree").html(data[0].degree);
								$(".degree").html("("+data[0].degree+")");
								if(data1!="")
								{
									for(var g=0; g<data1.length; g++)
									{
										op+="<p style='text-align:left;margin:0px;font-weight:600;'>"+data1[g].expType+":</p>";
										op+="<ul style='text-align:left;margin-left:50px'><li>"+data1[g].expDetail+"</li></ul>"
									}
									$(".acade").html(op);
								}
								var s = data[0].days1;
								var t = data[0].days;
								var dayy = s.split(",");
								var timm = t.split(",");
								for(var k=0; k<dayy.length; k++)
								{
									if(k==0)
									{
									op2+='<div class="row" style="padding: 0px; margin:0;">';
									op2+='<div class="col-sm-4 dayTimesHeading">';
									op2+='<strong>'+dayy[k]+'</strong>';
									op2+='</div>';
									op2+='<div class="col-sm-8 dayTimeData" style="padding: 0px; display: block;text-align:center;">';
									op2+='<div class="col-xs-12 col-sm-12 dayTimes timeCol XSTimeTblPadd" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-bottom: 1px solid rgb(224, 224, 224); color: rgb(0, 0, 0);">';
									if(timm[k]=="NA / NA"){
									op2+='<code>Clinic Close !  <i class="fa fa-fw fa-smile-o"></i></code>';
									} else {
									op2+='<span class="label-OnlineTime" id="Mon-OnlineTime">';
									var tim = timm[k].split("/");
										for(var j=0; j<tim.length; j++){ if(tim[j]!=" NA"){
									op2+=tim[j]+'<br>';
										  } }
									op2+='</span>';
									}
									op2+='</div>';
									op2+='</div>';
									op2+='</div>';
									}
									else
									{
									op1+='<div class="row" style="padding: 0px; margin:0;">';
									op1+='<div class="col-sm-4 dayTimesHeading">';
									op1+='<strong>'+dayy[k]+'</strong>';
									op1+='</div>';
									op1+='<div class="col-sm-8 dayTimeData" style="padding: 0px; display: block;text-align:center;">';
									op1+='<div class="col-xs-12 col-sm-12 dayTimes timeCol XSTimeTblPadd" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-bottom: 1px solid rgb(224, 224, 224); color: rgb(0, 0, 0);">';
									if(timm[k]=="NA / NA"){
									op1+='<code>Clinic Close !  <i class="fa fa-fw fa-smile-o"></i></code>';
									} else {
									op1+='<span class="label-OnlineTime" id="Mon-OnlineTime">';
									var tim = timm[k].split("/");
										for(var j=0; j<tim.length; j++){ if(tim[j]!=" NA"){
									op1+=tim[j]+'<br>';
										  } }
									op1+='</span>';
									}
									op1+='</div>';
									op1+='</div>';
									op1+='</div>';
									}
								}
								$("#drid").val(data[0].uid);
								$("#drnm").val(data[0].fname+" "+data[0].lname);
								$("#dept").val(data[0].department);
								$("#speciality").val(data[0].specialityName);
								$(".opdd").html(op1);
								$(".opdd").append(op2);
								$("#preloader").hide();
							}
						},
						error:function(error){
							
						}
	});
	}
	else
	{
		var op='';
		$(".drlist").html("");
		op+='<code>Please Select Doctor......</code>';
		
		$(".drlist").html(op);
	}
}

function appinsert()
{
	$.ajax({
		url: "https://www.medicohelpline.com/HospitalAppReq",
		//url: "http://192.168.1.14:8084/MedicoHelpline/HospitalAppReq",
		data: {
		  hosuid: $("#hosuid").val(),
		  docuid: $("#drid").val(),
		  patientName: $("#appname").val(),
		  patientMobile: $("#appmobile").val(),
		  patientEmail: $("#appemail").val(),
		  userdate: $("#appAptDate").val(),
		  appTime: $("#appAptTime").val()
		},
		type: "post",
		dataType: "json",
		success: function(jsonResponse){
			if(jsonResponse.editError=="Success")
			{
				
					}
				},
				error:function(error){
					
				}
			});
}

function appcmsinsert()
{
	$("#appbtnCont1").attr('disabled',true);
    $("#apploaderImg1").show();
	$.ajax({
		url: "<?php echo base_url();?>index.php/bookAppointment",
		type: "POST",
		data: {
		  'drid': $("#drid").val(),
		  'drnm': $("#drnm").val(),
		  'patientName': $("#appname").val(),
		  'patientMobile': $("#appmobile").val(),
		  'patientEmail': $("#appemail").val(),
		  'userdate': $("#appAptDate").val(),
		  'appTime': $("#appAptTime").val(),
		  'speciality': $("#speciality").val()
		},
		success: function(data)
			{
				var obj = $.parseJSON(data);
				if(obj.msg=="Success")
				{
					swal({
							title: "Success",
							type:"success",
							text:"Appointment Booked Successfully...!!!"
						});	
				$("#appname").val("");
				$("#appemail").val("");
				$("#appmobile").val("");
				$("#appAptDate").val("");
				$("#Consultantt").val("");
				$("#appbtnCont1").attr('disabled',false);
				$("#apploaderImg").hide();
				$("[data-rel=datepicker]").datepicker('remove');		
				$('[data-rel=datepicker]').datepicker({
					minDate:0,
					autoclose: true,
					todayHighlight: true,
					format: 'yyyy-mm-dd'
				});
				$('[data-rel=timepicker]').timepicker('setTime', new Date());
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
			error:function(error){
				
			}
		});
}
function dttt1()
{
	$("#appAptDate").focus();
}
function ttt1()
{
	$("#appAptTime").focus();
}
</script>
<style>
.homeContactContent .form-group .form-control {
  height: 45px;
}
.homeContactContent .form-group i {
  line-height: 43px;
}
.moretimeRow {
  border-bottom: 1px solid #fff;
  margin: 0;
  padding: 5px 0;
  text-align: center;
}
.dayTimesHeading {
  background: #eff0f1 none repeat scroll 0 0;
  border: 1px solid #e0e0e0;
  font-weight: bold;
  height: 48px;
  padding: 13px 10px;
  text-align: center;
}
.dayTimes {
  border: 1px solid #e0e0e0;
  font-size: 12px;
  height: 48px;
  padding: 5px 10px;
  text-align: center;
}
</style>
 <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:15px;">
                            <h2>Appointment</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>appointment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->
<!-- Sewarch Sectoon -->
	<section class="DoctorinfoTab">
		<div class="container">
			<div class="row">
				<div class="col-md-8">				
					<div class="tabCommon drlist">
					  <ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Doctor</a></li>
						<!--<li><a data-toggle="tab" href="#menu11">Education</a></li>-->
						<li><a data-toggle="tab" href="#menu12">TimeTable</a></li>
					  </ul>
					  <div class="tab-content">
						<div id="home" class="tab-pane in active homedr">
						  <!--<div class="media">
							<div class="col-sm-3">
								<img class="prfimg" src="" style="width:100%;height:140px;">
							</div>
							<div class="col-sm-9">
								<h3 class="drname">Dr.</h3>
								<h5 class="degree" style="font-weight:600"></h5>
								<p>RegNo. :&nbsp;&nbsp;&nbsp;<span class="regg" style="font-weight:500"></span></p>
								<p>Department:&nbsp;&nbsp;&nbsp;<span class="drdept" style="font-weight:500"></span></p>
								<!--<ul>
									<li class="drdept" style="margin-left:15%"></li>
								</ul>-->
								<!--<p>Special Interest:&nbsp;&nbsp;&nbsp;<span class="drspeciality" style="font-weight:500"></span></p>
								<!--<ul>
									<li class="drspeciality" style="margin-left:15%"></li>
								</ul>-->
							<!--</div>
						 </div>-->
						</div>
						<div id="menu11" class="tab-pane" style="">
							<div class="media">
								<div class="col-sm-4">
									<img src="<?php echo base_url();?>newFront/img/education.jpg" >
								</div>
								<div class="col-sm-8">
									<h4 class="drdegree"></h4>
									<div class="acade">
										
									</div>
								</div>
							</div>
						</div>
						<div id="menu12" class="tab-pane">
							<div class="media">
								<div class="col-sm-4">
									<img src="<?php echo base_url();?>newFront/img/tab-dummy.jpg" >
								</div>
								<div class="col-sm-8 opdd">
									
								</div>
							</div>
						</div>
					  </div>
					</div>         
				</div>
				<div class="col-md-4">
				<div class="appointment-form-title"><i class="fa fa-calendar"></i> Request Appointment <span style="font-size: 13px">(call:- +91 7021487408)</span></div>
				<div class="homeContactContent" style="padding: 15px;border: 1px solid #CCCCCC">
				  <form action="" method="POST" id="appForm">
					<div class="row">
					  <div class="col-sm-12 col-xs-12">
						<div class="form-group">
							<select class="form-control border-color-4" id="Consultantt" onchange="show(this.value)">
								<option value="">Select Doctor</option>
							
							</select>
						</div>
					  </div>
					  <!--<div class="col-sm-12 col-xs-12">
						<div class="form-group">
							<select class="form-control border-color-2" >
								<option value="NeuroClass">Neuro Surgery</option>
								<option value="SurgeonClass">General Surgeon</option>
								<option value="PsychiClass">Psychiatrist</option> 
								<option value="NeurologyClass">Neurology</option> 
								<option value="MedicineClass">General Medicine</option>
							</select>
						</div>
					  </div>-->
					  <div class="col-sm-12 col-xs-12" style="margin-top:10px;">
						<div class="form-group">
						  <i class="fa fa-user"></i>
						  <input class="form-control border-color-4" id="appname" name="name" placeholder="Name*(required)" required="" title="Please Enter Characters Only" type="text" pattern="[a-zA-Z ]+">
						</div>
					  </div>
					  <div class="col-sm-12 col-xs-12" style="margin-top:10px;">
						<div class="form-group">
						  <i class="fa fa-calendar" onclick="dttt1()"></i>
						  <input class="form-control border-color-4" readonly data-rel="datepicker" id="appAptDate" name="appAptDate" placeholder="Date*(required)" required="" type="text">
						</div>
					  </div>
					  <div class="col-xs-12" style="margin-top:10px;">
						<div class="form-group">
						  <i class="fa fa-clock-o" onclick="ttt1()"></i>
						  <input class="form-control border-color-4 appAptTime" readonly id="appAptTime" name="appAptTime" placeholder="Time*(required)" required="" type="text" data-minute-step="30">
						</div>
					  </div>
					  <div class="col-sm-12 col-xs-12" style="margin-top:10px;">
						<div class="form-group">
						  <i class="fa fa-phone" aria-hidden="true"></i>
						  <input class="form-control border-color-4" id="appmobile" name="mobile" placeholder="Phone*(required)" required="" type="text" pattern="[0789][0-9]{9}">
						</div>
					  </div>
					  <div class="col-sm-12 col-xs-12" style="margin-top:10px;">
						<div class="form-group">
						  <i class="fa fa-envelope" aria-hidden="true"></i>
						  <input class="form-control border-color-4" id="appemail" name="email" placeholder="Email*(required)" required="" title="Please Enter Correct EmailID" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						</div>
					  </div>
					  <input type="hidden" id="drid" name="drid">
					  <input type="hidden" id="drnm" name="drnm">
					  <input type="hidden" id="dept" name="dept">
					  <input type="hidden" id="speciality" name="speciality">
					  <span id="ext" class="alert alert-success" style=" padding:8px;float:right;display:none;"></span>
					  <div class="col-xs-12" style="margin-top:10px;">
						<div class="formBtnArea">
						  <button type="button" class="btn style2" id="appbtnCont1" style="width:120px;">Submit</button>
						  <img style="margin-left: auto; margin-right: auto; padding-top: 9px; display:none;" id="apploaderImg" src="<?php echo base_url();?>newFront/loader.gif">
						</div>
					  </div>
					</div>
				  </form>
				</div>
				</div>
			</div>
		</div>
	
	</section>
   <!-- FOOTER -->
    