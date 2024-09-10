 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Start Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8M2EKL5HY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8M2EKL5HY2');
</script>
<!--  /Start Google Analytics -->
<style>
.team-member-content {
  height: 130px;
}
hr {
  margin-top: 8px !important;
  margin-bottom: 32px !important;
}
.docdiv{
	 margin-bottom: 15px !important;
}
.img-circle {
	border-radius: 5%;
}
 .baner{
 background-color: tomato;
 color:#fff;
}
</style>
<script>
$(document).ready(function(){
    var iconURL="";
    var deptName="";
	$("#Consultantt").change(function(){
			$("#department").val("");
			$("#daywiseFilter").val("");
			$("#timewiseFilter").val("");
			searchdata();
	  });
	  $("#department").change(function(){
			$("#Consultantt").val("");
			var speciality=$("#department option:selected").text();
			if(speciality=="Dental Surgeon" || speciality=="Endodontist" || speciality=="Oral & Maxillo Facial Surgeon" || speciality=="Prosthodontist" || speciality=="Orthodontist" || speciality=="Periodontist" || speciality=="Pedodontist"){
				searchdeptdata(speciality);
				
			}
			searchdata();
			$('.team').hide();
	  });
	  $("#daywiseFilter").change(function(){
			$("#Consultantt").val("");
			//alert("FD");
			searchdata();
	  });
	  $("#timewiseFilter").change(function(){
			$("#Consultantt").val("");
			searchdata();
	  });
	  
	 $(".findDrThumb").on("contextmenu",function(e){
		   return false;
		});
	
	$.getJSON("https://www.medicohelpline.com/HospitalAllDoctors?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	//$.getJSON("http://192.168.1.21:8084/MedicoHelpline/HospitalAllDoctors?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json", function( data ) {
		
		var items = [];
		
	   console.log(data);
	   deptName="orthopaedic.svg";
	   iconURL=`assets/img/Dept/Icons/${deptName}`;
	   console.log(iconURL);
	   
	   var op="";
	   if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		    for(i=0; i<hDoc.length; i++){
				/*alert("uid="+hDoc[i]['uid']);
				alert("fname="+hDoc[i]['fname']);
				alert("lname="+hDoc[i]['lname']);*/
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('(Ayush)',' ');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('medicine','Medicine');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Oncologists','Oncologist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Periododontist','Periodontist');					
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');			
				$("#Consultantt").append("<option value=\""+hDoc[i]['uid']+"\">Dr. "+hDoc[i]['fname']+" "+hDoc[i]['lname']+" ("+hDoc[i]['speciality']+")</option>");
			}
	   }
    });
	
	//$.getJSON("http://192.168.1.10:8084/MedicoHelpline/HospitalDepartmentList?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json", function( data ) {
// 	$.getJSON("https://www.medicohelpline.com/HospitalDepartmentList?lgKey=AGS9hZBNpGXElYrataENyiS&dataType=json", function( data ) {
// 	   var items = [];
// 	   console.log(data);
// 	   if(data['departmentList'].length > 0){
// 		   var hDoc=data['departmentList'];
// 		    for(i=0; i<hDoc.length; i++){
// 				var op="";
// 				op +="<option value=\""+hDoc[i]['deptname']+"\"> "+hDoc[i]['deptname']+"</option>";
// 				$("#department").append(op);
// 			}
// 	   }
//     });
	
	$.getJSON("https://www.medicohelpline.com/HospitalSpecialites?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	 // $.getJSON("http://192.168.1.21:8084/MedicoHelpline/HospitalSpecialites?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json", function( data ) {
	   var items = [];
	   console.log(data);
	   if(data['specialityList'].length > 0){
		   var hDoc=data['specialityList'];
		    for(i=0; i<hDoc.length; i++){
				var op="";
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('(Ayush)',' ');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('medicine','Medicine');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Oncologists','Oncologist');
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Periododontist','Periodontist');				
				hDoc[i]['speciality']=hDoc[i]['speciality'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
				op +="<option value=\""+hDoc[i]['id']+"\">"+hDoc[i]['speciality']+"</option>";
				$("#department").append(op);
			}
	   }
    });
	
	$.getJSON("https://www.medicohelpline.com/HospitalDoctorstime?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	//$.getJSON("http://192.168.1.21:8084/MedicoHelpline/HospitalDoctorstime?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json", function( data ) {
	$("#preloader1").show();
	var items = [];
	   console.log(data);
	   $("#totdoctors").html("");
	   if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		   var op2='';
		   var op1='';
		   var op='';
		    for(i=0; i<hDoc.length; i++){
				
				var now = new Date();
				var day = now.getDay();
				var t = hDoc[i].days;
				var timm = t.split(",");
				//alert(timm);
				var at = '';
				if(t!="-")
				{
					if((timm[day-1]=="NA / NA"))
					{
						at="OPD Closed";
					}
					else
					{
						var tt = timm[day-1];
						var ff = tt.split("/");
						if(ff[0].trim()=="NA")
						{
							at = ff[1];
							//alert(at);
						}
						else if(ff[1].trim()=="NA")
						{
							at = ff[0];	
							//alert(at);
							
						}
						else
						{
							at = ff[0]+"/"+ff[1];
							//alert(at);
						}
					}
				}
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('(Ayush)',' ');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('medicine','Medicine');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Oncologists','Oncologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Periododontist','Periodontist');				
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
				
				if(hDoc[i]['department']=="Cardiology" || hDoc[i]['department']=="Oncology"){
				
					
				op1 +='<div class="col-md-3 col-sm-12 docdiv" style="margin-bottom: 10px;">';
				op1 +='<div class="team-member animated rollIn animatedVisi" data-animtype="rollIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="border: 2px solid rgb(208, 214, 230); animation-delay: 0s; animation-duration: 1s;" ;="">';
				op1 +='<a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'" style="display:inline-block;width: 100%;text-align:center;padding-top: 6px">';
				if(hDoc[i]['gender']=="Female" && hDoc[i]['img']=="defaultMale.jpg")
					hDoc[i]['img']="defaultFemale.jpg";
				op1 +='<img src="https://medicohelpline.com/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 65%;display: inline-block;padding: 10px;">';
				//op1 +='<img src="http://192.168.1.10:8084/MedicoHelpline/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 75%;display: inline-block;padding: 10px;">';
				op1 +='</a>';
				op1 +='<div class="team-member-content">';
				op1 +='<h5 style="margin-bottom:2px;"><strong>Dr.'+hDoc[i]['fname']+' '+hDoc[i]['lname']+'</strong></h5>';
				op1 +='<div class="team-member-short-bio" style="">';
				//op1 +='<p>DEGREE: '+hDoc[i]['degree']+'</p>';
				op1 +='<p style="margin-bottom:2px">'+hDoc[i]['degree']+'</p>';
				//op +='<p style="background-color: #0066FF; color:#FFFFFF;">OPD TIME: Mon - Sat 10-2pm &amp; 7-9pm</p>';
				op1 +='</div>';
				//op1 +='<p style="text-align:center;margin:0 0 1px;font-size: 12px;"><strong>R.No.</strong> '+hDoc[i]['reg']+'</p>';
				op1 +='<p style="text-align:center;font-weight:bold;color:#1A75FF;margin:0 0 15px;font-size: 12px"> '+hDoc[i]['specialityName']+'</p>';
				//op1 +='<p style="text-align:center;font-size: 12px">'+hDoc[i]['department']+'</p>';
				op1 +='<div class="team-member-position" >';
				op1 +='<div class="appoint"><a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'">On Appt.</a> </div>';
				op1 +='<hr>';
				op1 +='</div>';
				if(t!="-"){
					op1 +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px"> OPD TIME : '+at+'</p>';
				}
				
				else{
					op1 +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px"> OPD TIME : OPD Closed</p>';
				}
				op1 +='</div>';
                op1 +='</div>';
				op1 +='</div>';
				}
				
				else{
					
				// 	op +='<div class="col-md-3 col-sm-6 docdiv" style="margin-bottom: 10px;">';
				// op +='<div class="team-member animated rollIn animatedVisi" data-animtype="rollIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="border: 2px solid rgb(208, 214, 230); animation-delay: 0s; animation-duration: 1s;" ;="">';
				// op +='<a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'" style="display:inline-block;width: 100%;text-align:center;padding-top: 6px">';
				// if(hDoc[i]['gender']=="Female" && hDoc[i]['img']=="defaultMale.jpg")
				// 	hDoc[i]['img']="defaultFemale.jpg";
				// op +='<img src="https://medicohelpline.com/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 65%;display: inline-block;padding: 10px;">';
				// //op +='<img src="http://192.168.1.10:8084/MedicoHelpline/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 75%;display: inline-block;padding: 10px;">';
				// op +='</a>';
				// op +='<div class="team-member-content">';
				// op +='<h5 style="margin-bottom:2px;"><strong>Dr.'+hDoc[i]['fname']+' '+hDoc[i]['lname']+'</strong></h5>';
				// op +='<div class="team-member-short-bio" style="">';
				// //op +='<p>DEGREE: '+hDoc[i]['degree']+'</p>';
				// op +='<p style="margin-bottom:2px">'+hDoc[i]['degree']+'</p>';
				// //op +='<p style="background-color: #0066FF; color:#FFFFFF;">OPD TIME: Mon - Sat 10-2pm &amp; 7-9pm</p>';
				// op +='</div>';
				// //op +='<p style="text-align:center;margin:0 0 1px;font-size: 12px;"><strong>R.No.</strong> '+hDoc[i]['reg']+'</p>';
				// op +='<p style="text-align:center;font-weight:bold;color:#1A75FF;margin:0 0 15px;font-size: 12px"> '+hDoc[i]['specialityName']+'</p>';
				// //op +='<p style="text-align:center;font-size: 12px">'+hDoc[i]['department']+'</p>';
				// op +='<div class="team-member-position" >';
				// op +='<div class="appoint"><a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'">On Appt.</a> </div>';
				// op +='<hr>';
				// op +='</div>';
				// if(t!="-"){
				// 	op +='<p style="background-color:rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px"> OPD TIME : '+at+'</p>';
				// }
				// else
				// {
				// 	op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px"> OPD TIME : OPD Closed</p>';
				// }
				// op +='</div>';
    //             op +='</div>';
				// op +='</div>';
				console.log(iconURL,"card");
				console.log(hDoc[i]['specialityName']);
				op +='<div class="col-md-3 col-sm-6 docdiv" style="margin-bottom: 10px;">';
				op +='<div class="doctor-profile-card d-flex flex-column  border  rounded" style="width:17rem;background-color: #f2f0f0;">';
                op +='<div class="doctor-details d-flex flex-column p-2 position-relative" style="padding:2px;">';
               
                op +='<div class="position-relative">';
                if(hDoc[i]['gender']=="Female" && hDoc[i]['img']=="defaultMale.jpg")
					hDoc[i]['img']="defaultFemale.jpg";
                op +='<img src="https://medicohelpline.com/images/doctorProfileImage/'+hDoc[i]['img']+'" alt="doctor-image" style="width:200px;height:200px;  border: 5px solid #fff;  padding: 15px;box-shadow: 0 0 10px -0px #dfecff;border-radius:50%;vertical-align: middle;margin-left:28px;">';
                op +='</div>';
               
                op +='<p style="font-size:16px; font-weight: 700;padding: 3px;text-align: center;">Dr.'+hDoc[i]['fname']+' '+hDoc[i]['lname']+'</p>'; 
                op +='<div class="work-details d-flex flex-row justify-content-between" style="gap:50px;text-align: center;">';
                op +='<p style="padding: 3px;text-align: center;font-size:10px; color:grey"><i class="fa fa-fw fa-graduation-cap"></i> '+hDoc[i]['degree']+'</p>';
                op +='<p style="padding: 3px;text-align: center;font-size:10px; color:grey">'+hDoc[i]['exp']+' YOE</p>';
                op +='</div>';
                  
                op +='<div class="ww-details d-flex flex-row justify-content-between">';
                
                
               
                op +='<small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2" style="font-size: 10px;">'+hDoc[i]['specialityName']+'</small>';
                 op +='<img src="https://sanjeevanimamtahospital.com/assets/img/Dept/Icons/'+hDoc[i]['department']+'.svg'+'" alt="" style="width: 10%;height: 10%;">'; 
                if(t!="-"){
					op +='<p style="font-size:11px; color:grey"><i class="fa-regular fa-clock">&nbsp;</i>'+at+'</p>';
				}
				else
				{
					op +='<p style="font-size:11px; color:grey"><i class="fa-regular fa-clock">&nbsp;</i>OPD Closed</p>';
				}
                op +='</div>';  
                op +='<a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'" style="margin-left:2px;"><button class="btn btn-outline-primary" style="width: 262px;margin-left: -6px;">Book Appointment</button></a>';
                op +='</div>';
                op +='</div>';
                op +='</div>';
				}
				
			}
			
			$(".findDrThumb").append(op1);
			$(".findDrThumb").append(op);
			$("#totdoctors").html(data['hospitalDoctorList'].length);
			$("#preloader1").hide();
	   }
	   else
	   {
		   $("#totdoctors").html("0");
		   $(".findDrThumb").html("<code>No Data Available....</code>")
	   }
    });
	
});

function searchdata()
{
	
	$("#preloader1").show();
	var time = "";
	
	if($("#timewiseFilter").val()!=null)
	{
		time=$("#timewiseFilter").val();
		//alert(time);
	}
	var dayy = "";
	if($("#daywiseFilter").val()!=null)
	{
		dayy=$("#daywiseFilter").val();
		//alert(dayy);
	}
	$.getJSON("https://www.medicohelpline.com/HospitalDoctorstime?lgKey="+$("#hosuid").val()+"&searchDoctor="+$("#Consultantt").val()+"&searchDepartment="+$("#department").val()+"&day="+dayy+"&time="+time+"&dataType=json", function( data ) {
	//$.getJSON("http://192.168.1.19:8084/MedicoHelpline/HospitalDoctorstime?lgKey="+$("#hosuid").val()+"&searchDoctor="+$("#Consultantt").val()+"&searchDepartment="+$("#department").val()+"&day="+dayy+"&time="+time+"&dataType=json", function( data ) {
	//$.getJSON("http://192.168.1.19:8084/MedicoHelpline/HospitalDoctorstime?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&searchDoctor="+$("#Consultantt").val()+"&searchDepartment="+$("#department").val()+"&day="+$("#daywiseFilter").val()+"&time="+$("#timewiseFilter").val()+"&dataType=json", function( data ) {
	
	var items = [];
		console.log(data);
		$(".findDrThumb").html("");
		$("#totdoctors").html("");
		if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		  
		   var op1='';
		   var op='';
		    for(i=0; i<hDoc.length; i++){
				var tt="";
				var s = hDoc[i].days1;
			
				var t = hDoc[i].days;
				//alert(t);
				var dayss = s.split(",");	
			
				var timm = t.split(",");
				if(dayy!=""){
					for(var k=0; k<dayss.length; k++)
					{
						var strr = dayss[k].substring(0,3);
						var y = strr.toUpperCase();
					
						if(new String(dayy[0]).valueOf() == new String(y).valueOf())
						{			
							
							//tt = timm[k];
							if(t!="-"){
							if((timm[k]=="NA / NA"))
							{
								tt="OPD Closed";
							}
							else
							{
								var at = timm[k];
								var ff = at.split("/");
								if(ff[0].trim()=="NA")
								{
									tt = ff[1];
									//alert(tt);
								}
								else if(ff[1].trim()=="NA")
								{
									tt = ff[0];
									//alert(tt);
								}
								else
								{
									tt = ff[0]+"/"+ff[1];
								}
							}
							}
						}
					}
				}
				else
				{
					var now = new Date();
					var day = now.getDay();
					var t = hDoc[i].days;
					var timm = t.split(",");
					if(t!="-")
					{
						if((timm[day-1]=="NA / NA"))
						{
							tt="OPD Closed";
						}
						else
						{
							var at = timm[day-1];
							var ff = at.split("/");
							if(ff[0].trim()=="NA")
							{
								tt = ff[1];
							}
							else if(ff[1].trim()=="NA")
							{
								tt = ff[0];
							}
							else
							{
								tt = ff[0]+"/"+ff[1];
							}
						}
					}
				}
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('(Ayush)',' ');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('medicine','Medicine');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Oncologists','Oncologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Periododontist','Periodontist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
				
				///////////////////////////////////////////
				if(hDoc[i]['department']=="Cardiology" || hDoc[i]['department']=="Oncology"){
					
				op1 +='<div class="col-md-3 col-sm-6 docdiv" style="margin-bottom: 10px;">';
				op1 +='<div class="team-member animated rollIn animatedVisi" data-animtype="rollIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="border: 2px solid rgb(208, 214, 230); animation-delay: 0s; animation-duration: 1s;" ;="">';
				op1 +='<a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'" style="display:inline-block;width: 100%;text-align:center;padding-top: 6px">';
				if(hDoc[i]['gender']=="Female" && hDoc[i]['img']=="defaultMale.jpg")
					hDoc[i]['img']="defaultFemale.jpg";
				op1 +='<img src="https://medicohelpline.com/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 75%;display: inline-block;padding: 10px;">';
				//op1 +='<img src="http://192.168.1.10:8084/MedicoHelpline/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 75%;display: inline-block;padding: 10px;">';
				op1 +='</a>';
				op1 +='<div class="team-member-content">';
				op1 +='<h5 style="margin-bottom:2px;"><strong>Dr.'+hDoc[i]['fname']+' '+hDoc[i]['lname']+'</strong></h5>';
				op1 +='<div class="team-member-short-bio" style="">';
				//op1 +='<p>DEGREE: '+hDoc[i]['degree']+'</p>';
				op1 +='<p style="margin-bottom:2px">'+hDoc[i]['degree']+'</p>';
				//op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;">OPD TIME: Mon - Sat 10-2pm &amp; 7-9pm</p>';
				op1 +='</div>';
				//op1 +='<p style="text-align:center;margin:0 0 1px;font-size: 12px;"><strong>R.No.</strong> '+hDoc[i]['reg']+'</p>';
				op1 +='<p style="text-align:center;font-weight:bold;color:#1A75FF;margin:0 0 15px;font-size: 12px"> '+hDoc[i]['specialityName']+'</p>';
				//op1 +='<p style="text-align:center;font-size: 12px">'+hDoc[i]['department']+'</p>';
				op1 +='<div class="team-member-position" >';
				op1 +='<div class="appoint"><a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'">On Appt.</a> </div>';
				op1 +='<hr>';
				op1 +='</div>';
				if(t!="-"){
					op1 +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">OPD TIME : '+tt+'</p>';
				}
				else
				{
					op1 +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">OPD TIME : OPD Closed</p>';
				}
				op1 +='</div>';
                op1 +='</div>';
				op1 +='</div>';
				}
				
				else{
					
				op +='<div class="col-md-3 col-sm-6 docdiv" style="margin-bottom: 10px;">';
				op +='<div class="team-member animated rollIn animatedVisi" data-animtype="rollIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="border: 2px solid rgb(208, 214, 230); animation-delay: 0s; animation-duration: 1s;" ;="">';
				op +='<a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'" style="display:inline-block;width: 100%;text-align:center;padding-top: 6px">';
				if(hDoc[i]['gender']=="Female" && hDoc[i]['img']=="defaultMale.jpg")
					hDoc[i]['img']="defaultFemale.jpg";
				op +='<img src="https://medicohelpline.com/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 65%;display: inline-block;padding: 10px;">';
				//op +='<img src="http://192.168.1.10:8084/MedicoHelpline/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 75%;display: inline-block;padding: 10px;">';
				op +='</a>';
				op +='<div class="team-member-content">';
				op +='<h5 style="margin-bottom:2px;"><strong>Dr.'+hDoc[i]['fname']+' '+hDoc[i]['lname']+'</strong></h5>';
				op +='<div class="team-member-short-bio" style="">';
				//op +='<p>DEGREE: '+hDoc[i]['degree']+'</p>';
				op +='<p style="margin-bottom:2px">'+hDoc[i]['degree']+'</p>';
				//op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;">OPD TIME: Mon - Sat 10-2pm &amp; 7-9pm</p>';
				op +='</div>';
				//op +='<p style="text-align:center;margin:0 0 1px;font-size: 12px"><strong>R.No.</strong> '+hDoc[i]['reg']+'</p>';
				op +='<p style="text-align:center;font-weight:bold;color:#1A75FF;margin:0 0 15px;font-size: 12px"> '+hDoc[i]['specialityName']+'</p>';
				//op +='<p style="text-align:center;font-size: 12px">'+hDoc[i]['department']+'</p>';
				op +='<div class="team-member-position" >';
				op +='<div class="appoint"><a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'">On Appt.</a> </div>';
				op +='<hr>';
				op +='</div>';
				if(t!="-"){
					op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">OPD TIME : '+tt+'</p>';
				}
				else{
					op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">OPD TIME : OPD Closed</p>';
				}
				op +='</div>';
                op +='</div>';
				op +='</div>';
				}
				
				if($("#Consultantt").val()!="")
				{
					$("#department").val(hDoc[i]['speciality']);
				}
			}
			
			$(".findDrThumb").append(op1);
			$(".findDrThumb").append(op);
			$("#totdoctors").html(data['hospitalDoctorList'].length);
			$("#preloader").hide();
		}
	   else
		{
		   $("#totdoctors").html("0");
		   $("#preloader1").hide();
		   $(".findDrThumb").html("<code>No Data Available....</code>")
		}
    });
}

function searchdeptdata(speciality)
{
	$.getJSON("https://www.medicohelpline.com/HospitalDoctorstime?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	//$.getJSON("http://192.168.1.21:8084/MedicoHelpline/HospitalDoctorstime?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json", function( data ) {
	$("#preloader1").show();
	var items = [];
	   console.log(data);
	   $("#totdoctors").html("");
	   if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		   var op2='';
		   var op1='';
		   var op='';
		    for(i=0; i<hDoc.length; i++){
				
				var now = new Date();
				var day = now.getDay();
				var t = hDoc[i].days;
				var timm = t.split(",");
				//alert(timm);
				var at = '';
				if(t!="-")
				{
					if((timm[day-1]=="NA / NA"))
					{
						at="OPD Closed";
					}
					else
					{
						var tt = timm[day-1];
						var ff = tt.split("/");
						if(ff[0].trim()=="NA")
						{
							at = ff[1];
							//alert(at);
						}
						else if(ff[1].trim()=="NA")
						{
							at = ff[0];	
							//alert(at);
							
						}
						else
						{
							at = ff[0]+"/"+ff[1];
							//alert(at);
						}
					}
				}
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('(Ayush)',' ');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('medicine','Medicine');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Oncologists','Oncologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Periododontist','Periodontist');				
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
				
				if(hDoc[i]['department']=="Dental" && hDoc[i]['specialityName']!=speciality){
					
				op +='<div class="col-md-3 col-sm-6 docdiv" style="margin-bottom: 10px;">';
				op +='<div class="team-member animated rollIn animatedVisi" data-animtype="rollIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="border: 2px solid rgb(208, 214, 230); animation-delay: 0s; animation-duration: 1s;" ;="">';
				op +='<a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'" style="display:inline-block;width: 100%;text-align:center;padding-top: 6px">';
				if(hDoc[i]['gender']=="Female" && hDoc[i]['img']=="defaultMale.jpg")
					hDoc[i]['img']="defaultFemale.jpg";
				op +='<img src="https://medicohelpline.com/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 65%;display: inline-block;padding: 10px;">';
				//op +='<img src="http://192.168.1.10:8084/MedicoHelpline/images/doctorProfileImage/'+hDoc[i]['img']+'" class="img-responsive img-circle" alt="Dr." style="width: 75%;display: inline-block;padding: 10px;">';
				op +='</a>';
				op +='<div class="team-member-content">';
				op +='<h5 style="margin-bottom:2px;"><strong>Dr.'+hDoc[i]['fname']+' '+hDoc[i]['lname']+'</strong></h5>';
				op +='<div class="team-member-short-bio" style="">';
				//op +='<p>DEGREE: '+hDoc[i]['degree']+'</p>';
				op +='<p style="margin-bottom:2px">'+hDoc[i]['degree']+'</p>';
				//op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;">OPD TIME: Mon - Sat 10-2pm &amp; 7-9pm</p>';
				op +='</div>';
				//op +='<p style="text-align:center;margin:0 0 1px;font-size: 12px"><strong>R.No.</strong> '+hDoc[i]['reg']+'</p>';
				op +='<p style="text-align:center;font-weight:bold;color:#1A75FF;margin:0 0 15px;font-size: 12px"> '+hDoc[i]['specialityName']+'</p>';
				//op +='<p style="text-align:center;font-size: 12px">'+hDoc[i]['department']+'</p>';
				op +='<div class="team-member-position" >';
				op +='<div class="appoint"><a href="<?php echo base_url();?>index.php/Appointment/'+hDoc[i]['uid']+'">On Appt.</a> </div>';
				op +='<hr>';
				op +='</div>';
				if(t!="-"){
					op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">OPD TIME : '+tt+'</p>';
				}
				else{
					op +='<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">OPD TIME : OPD Closed</p>';
				}
				op +='</div>';
                op +='</div>';
				op +='</div>';
				
				$('.team').show();
					
				}
				
			}
			
			$(".findDrThumb").append(op);
			
			//$(".team").css("display","none !imporatnt");
			$("#totdoctors").html(data['hospitalDoctorList'].length);
			$("#preloader1").hide();
	   }
	   else
	   {
		   $("#totdoctors").html("0");
		   $(".findDrThumb").html("<code>No Data Available....</code>")
	   }
    });

}
</script>

 <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:17px;">
                            <h2>All Doctors</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>All Doctors</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->
<!-- Sewarch Sectoon -->
	
	<section class="DoctorSearch">
	<div class="container">
      <div class="row DoctorSearch1">
		<div style="" class="col-sm-2 col-md-2 ">
			<!--<div class="input-group">
				<div class="input-group-btn">
					<button data-toggle="dropdown" class="btn btn-white dropdown-toggle drButton" type="button">
						Dr.
					</button>
				</div>
				<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
				<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
				<input value="" class="form-control ui-autocomplete-input" id="searchAuto" placeholder="Search by Doctor Name" autocomplete="off" type="text">-->
				<select class="form-control" id="Consultantt">
					<option value="">All Doctors</option>
				</select>
			<!--</div>-->
		</div>
		<div class="col-sm-2 col-md-2">
			<!--<input value="" class="form-control" id="advanceSeacrchDepartment" placeholder="Department" autocomplete="off" type="text">-->
			<select class="form-control" id="department">
				<option value="">All Specialities</option>
			</select>
		</div>
		<!--<div style="padding:0px;" class="col-sm-3 col-md-2">
			<div style="padding-top: 10px;" class="col-xs-3 col-sm-2 col-md-2 col-lg-4">Exp</div>
			<div class="col-xs-9 col-sm-10 col-md-10 col-lg-8" style="font-size: 10px;padding:0px;">
				<select class="form-control " multiple="multiple" id="expwiseFilter" style="display: none;">
				   <option value="0-5">0-5</option>
				   <option value="6-10">6-10</option>
				   <option value="11-15">11-15</option>
				   <option value="16-20">16-20</option>
				   <option value="21-25">21-25</option>
				   <option value="26-30">26-30</option>
				   <option value="Above 30">Above 30</option>
			   </select>
			</div>
		</div>-->
		<!--<div style="padding: 0px;" class="col-sm-3 col-md-3 nosearchforuser onlyforha">-->
		<!--	<div class="col-xs-3 col-sm-2 col-md-2 col-lg-3" style="padding-top: 4px;">Days</div>-->
		<!--	<div style="font-size: 10px;padding:0px;" class="col-xs-9 col-sm-9 col-md-9 col-lg-8  col-sm-offset-1 col-md-offset-1 col-lg-offset-1">-->
		<!--	   <select class="form-control" multiple="multiple" id="daywiseFilter" style="display: none;">-->
		<!--		   <option value="MON">MON</option>-->
		<!--		   <option value="TUE">TUE</option>-->
		<!--		   <option value="WED">WED</option>-->
		<!--		   <option value="THU">THU</option>-->
		<!--		   <option value="FRI">FRI</option>-->
		<!--		   <option value="SAT">SAT</option>-->
		<!--		   <option value="SUN">SUN</option>-->
		<!--	   </select>-->
		<!--	</div>-->
		<!--</div>-->
		<!--<div style="padding: 0px;" class="col-sm-3 col-md-3 nosearchforuser noforha">-->
		<!--	<div style="padding-top: 5px;" class="col-xs-3 col-sm-2 col-md-2 col-lg-4 ">Time</div>-->
		<!--	<div class="col-xs-9 col-sm-10 col-md-10 col-lg-8 selecTime" style="font-size: 10px;padding:0px;">-->
		<!--		<select class="form-control" multiple="multiple" id="timewiseFilter" style="display: none;">-->
		<!--		   <option value="10:00 AM - 01:00 PM">06:00 AM - 01:00 PM</option>-->
		<!--		   <option value="01:00 PM - 06:00 PM">01:00 PM - 06:00 PM</option>-->
		<!--		   <option value="06:00 PM - 11:00 PM">06:00 PM - 11:00 PM</option>-->
		<!--	   </select>-->
		<!--	</div>-->
		<!--</div>-->
		<!--<div style="padding:0px;text-align: center;" class="col-sm-2 col-md-1"><button class="btn  btn-info" id="advanceSearchBTN" onclick="searchdata();">Search</button></div>-->
	  </div>
   </div>
</section>
	
	<!-- /Search Section -->
	
	<section class="mainContent full-width clearfix" style="padding-top:20px !important">
     <div class="container">
		<div class="row" style="padding-bottom: 20px">
		<!--   <button class="btn  btn-info" id="advanceSearchBTN" style="background-color:#84BED6;">Total Doctors : <span id="totdoctors"></span></button>
		</div> -->
		<div class="row findDrThumb">
			<div id="preloader1">
				<div id="spinner">
					<img class="floating" src="<?php echo base_url();?>newFront/progress.gif" alt="">
				</div>
			</div>
			
		</div>
		<div class="row team" style="display:none;">
		<h4 style="text-align:center;">Technical Team</h4>
				<div class="findDrThumb1">
				
				<?php			
					foreach($team as $row){
					if($row['department']=="3"){?>
					
					<div class="col-md-3 col-sm-6 docdiv " style="margin-bottom: 10px;">
					<div class="team-member animated rollIn animatedVisi" data-animtype="rollIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="border: 2px solid rgb(208, 214, 230); animation-delay: 0s; animation-duration: 1s;" ;="">
					<a href="javascript:;" style="display:inline-block;width: 100%;text-align:center;padding-top: 6px">
					<?php if($row['image']!=""){?>
					<img src="<?php echo base_url();?>data/uploads/TechnicalTeam/<?php echo $row['image'];?>" class="img-responsive img-circle" alt="ProfileImg" style="width: 75%;display: inline-block;padding: 10px;">
					<?php } else {?>
				   <img src="<?php echo base_url()?>data/images/profile.png" class="img-responsive img-circle" style="width: 65%;display: inline-block;padding: 10px;">
				   <?php }?>
					<div class="team-member-content">
					<h5 style="margin-bottom:2px;"><strong><?php echo $row['name'];?></strong></h5>
					<div class="team-member-short-bio" style="">
					
					<p style="margin-bottom:2px">(<?php echo $row['qualification'];?>)</p>
					
					</div>
					<p style="text-align:center;margin:0 0 1px;font-size: 12px"><strong></strong></p>
					<p style="text-align:center;font-weight:bold;color:#1A75FF;margin:0 0 15px;font-size: 12px"> <?php echo $row['designation'];?></p>
					
					<div class="team-member-position" >
					<div class="appoint" style="margin-top:-22px;display:none;"><a href="<?php echo base_url();?>index.php/Appointment/">On Appt.</div>
					<hr style="margin-top:-22px !important;margin-bottom:24px !important;">
					</div>
					<p style="background-color: rgb(53,126,189); color:#FFFFFF;text-align: center;font-weight: bold;font-size:11px">Technical Team</p>
				
					</div>
					</div>
					</div>
				<?php	
					}}
				?>
				</div>
			</div>
		
	 </div>
    </section>
	   <script src="<?php echo base_url();?>newFront/js/aos.js"></script>
	<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
	  $("#guiest_id22").change(function(){
	  var day = $(this).val();
		$("#databody").find("tr").each(function(){
			var flagDay = true;
			var flagSP = true;
			var flagName = true;
			if(day=="AllClass")
				flagDay=$(this).hasClass(day);
			if(day=="AllClass")
				flagDay=$(this).hasClass(day);
			var flagSP=$(this).hasClass($("#guiest_id14").val());
			var flagName=$(this).hasClass($("#guiest_id18").val());
			if(flagDay && flagSP && flagName)
				$(this).show();
			else
				$(this).hide();
		});
		//$(".AllClass").hide();
		//$("."+$(this).val()).show();
	  });
	  
    </script>
	<script>
	$(document).ready(function(){
		$('#expwiseFilter').multiselect({
                buttonWidth: function(){
                        return "100%";  //  value chosen randomly
                },
                includeSelectAllOption: true,
                selectAllText: ' All',
                selectAllValue: 'All'
            });
            var expData = "null".split(",");
			for(var i =0;i<expData.length;i++){
				if(expData[i].trim()=="All"){
					$("#expwiseFilter").multiselect('selectAll', false);
					$("#expwiseFilter").multiselect('updateButtonText');}
				else
					$('#expwiseFilter').multiselect('select', expData[i]);
			}
			$('#daywiseFilter').multiselect({
                buttonWidth: function(){
                        return "100%";  //  value chosen randomly
                },
                includeSelectAllOption: true,
                selectAllText: ' All',
                selectAllValue: 'All'
            });
			var dayData = "null".split(",");
			for(var i =0;i<dayData.length;i++){
				if(dayData[i].trim()=="All"){
					$("#daywiseFilter").multiselect('selectAll', false);
					$("#daywiseFilter").multiselect('updateButtonText');}
				else
					$('#daywiseFilter').multiselect('select', dayData[i]);
			}
			
			 $('#timewiseFilter').multiselect({
                buttonWidth: function(){
                        return "100%";  //  value chosen randomly
                },
                includeSelectAllOption: true,
                selectAllText: ' 24 * 7',
                selectAllValue: 'All'
            });
			var timeData = "null".split(",");
			for(var i =0;i<timeData.length;i++){
				if(timeData[i].trim()=="All"){
					$("#timewiseFilter").multiselect('selectAll', false);
					$("#timewiseFilter").multiselect('updateButtonText');}
				else
					$('#timewiseFilter').multiselect('select', timeData[i]);
			}
		});
	</script>
	
	 