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
		  height: '700px',
		  wheelStep: 1
	   });
	   $(".opp").addClass('active');
	
	$.getJSON("https://www.medicohelpline.com/HospitalAllDoctors?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	   var items = [];
	   console.log(data);
	   if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		    for(i=0; i<hDoc.length; i++){
				var op="";
				op +="<option value=\""+hDoc[i]['uid']+"\"> Dr."+hDoc[i]['fname']+" "+hDoc[i]['lname']+"</option>";
				$("#Consultants").append(op);
			}
	   }
    });

	$.getJSON("https://www.medicohelpline.com/HospitalSpecialites?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
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
				$("#Specialization").append(op);
			}
	   }
    });
	
	$.getJSON("https://www.medicohelpline.com/HospitalDoctorstime?lgKey="+$("#hosuid").val()+"&dataType=json", function( data ) {
	  $("#preloader1").show();
	  var items = [];
	   console.log(data);
	   var op="";
	   var op1="";
	   var tclass="";
	   var days="";
	   if(data['hospitalDoctorList'].length > 0){
		   var hDoc=data['hospitalDoctorList'];
		
		   for(i=0; i<hDoc.length; i++){
			   
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('(Ayush)',' ');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('medicine','Medicine');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Dermatologist(Skin)','Dermatologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Oncologists','Oncologist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Periododontist','Periodontist');
				hDoc[i]['specialityName']=hDoc[i]['specialityName'].replace('Maxillo Facial Surgeon','Oral & Maxillo Facial Surgeon');
				if(hDoc[i]['department']=="Cardiology" || hDoc[i]['department']=="Oncology")
				{
					
					op1 +="<tr class=\" "+hDoc[i]['uid']+" "+hDoc[i]['speciality']+" All\" data-attr=\" "+hDoc[i]['speciality']+" \">";
					
					op1 +="<td style=\"text-align:center;\"> Dr."+hDoc[i]['fname']+" "+hDoc[i]['lname']+"</td>";
					op1 +="<td style=\"text-align:center;\">"+hDoc[i]['specialityName']+"</td>";
					days=hDoc[i]['days'].split(",");
					for(k=0;k<days.length;k++){
					   var dd = days[k].trim().replace("NA","-");				
					   op1 +="<td style=\"text-align:center;font-size:11px;\">";
					   var tt = dd.split("/");
					   for(var h=0; h<tt.length; h++)
					   {
					   //if(tt[0].trim()=="NA"){ tt[0]="-"};
					   //if(tt[1].trim()=="NA"){ tt[1]="-"};
					   //op +=" "+tt[0]+"<br />"+tt[1]+" ";	
					   if(tt[h].trim()=="NA"){ tt[h]="-"};
					   op1 +=" "+tt[h]+"<br />";
										   
					   }
					   op1 +="</td>";
					}
					op1 +="</tr>";
				}
				else{
					
					op +="<tr class=\" "+hDoc[i]['uid']+" "+hDoc[i]['speciality']+" All\" data-attr=\" "+hDoc[i]['speciality']+" \">";
					op +="<td style=\"text-align:center;\"> Dr."+hDoc[i]['fname']+" "+hDoc[i]['lname']+"</td>";
					op +="<td style=\"text-align:center;\">"+hDoc[i]['specialityName']+"</td>";
					days=hDoc[i]['days'].split(",");
					for(k=0;k<days.length;k++){
					   var dd = days[k].trim().replace("NA","-");				
					   op +="<td style=\"text-align:center;font-size:11px;\">";
					   var tt = dd.split("/");
					   for(var h=0; h<tt.length; h++)
					   {
					   //if(tt[0].trim()=="NA"){ tt[0]="-"};
					   //if(tt[1].trim()=="NA"){ tt[1]="-"};
					   //op +=" "+tt[0]+"<br />"+tt[1]+" ";	
					   if(tt[h].trim()=="NA"){ tt[h]="-"};
					   op +=" "+tt[h]+"<br />";	
					   }
					   op +="</td>";
					}
					op +="</tr>";
				}
			}
			$(".tdata").append(op1);
			$(".tdata").append(op);
			$("#preloader1").hide();
	   }
	   else
	   {
		   $(".opdtime").html("<code>No Data Available....</code>")
	   }
	});   
});
$(document).ready(function(){
	$("#Consultants").change(function(){
		var demo = $(this).val();
		var selTd = $("#tdata ." + demo).attr("data-attr");
		$("#Specialization option").each(function(){
				if($.trim($(this).val())==$.trim(selTd)){
					$(this).attr('selected','selected');					
				}
				else{;
					$(this).removeAttr('selected');
				}
		});
	});
});
</script>
<style>
* {
  box-sizing: border-box;
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table td,
.table th {
  padding: 12px 15px;
  border: 1px solid #ddd;
  text-align: center;
  font-size: 16px;
}

.table th {
  background-color: #92c9e6;
  color: #ffffff;
}

.table tbody tr:nth-child(even) {
  background-color: #d1e8f5;
}

/*responsive*/

@media (max-width: 500px) {
  .table thead {
    display: none;
  }

  .table,
  .table tbody,
  .table tr,
  .table td {
    display: block;
    width: 100%;
  }
  .table tr {
    margin-bottom: 15px;
  }
  .table td {
    padding-left: 50%;
    text-align: left;
    position: relative;
  }
  .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
  }
</style>
 <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:17px;">
                            <h2>OPD Schedule</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>OPD Schedule</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->
	<section class="mainContent full-width clearfix">
      <div class="container">
		<div class="sectionTitle text-center timeTablepd">
					<h2 style="margin-bottom:25px !important;">
						<span class="shape shape-left bg-color-4"></span>
						<span class="color-2" style="font-size:24px !important;" title="Timetable Updated On 18Feb,2020">OPD SCHEDULE</span>
						<span class="shape shape-right bg-color-4"></span>
					</h2>
		</div>
        <div class="row">
         
          <div class="col-md-12 col-sm-12 col-xs-12 opdtime">
			<div id="preloader1">
						<div id="spinner">
							<img class="floating" src="<?php echo base_url();?>newFront/progress.gif" alt="">
						</div>
					</div>
			<table class="table table-bordered tb_opd" >
				<thead style="background-color:#f5f5f5;">
					<tr>
						<th style="text-align:center;width:15%">
							<select id="Consultants">
								<option value="">All Doctors.</option>								
							</select>
						</th>
						<th style="text-align:center;width:15%">
							<select id="Specialization">
								<option value="">Speciality</option>							 															 
							</select>
						</th>    
						<th style="text-align:center;width:10%">Mon</th> 
						<th style="text-align:center;width:10%">Tue</th> 
						<th style="text-align:center;width:10%">Wed</th> 
						<th style="text-align:center;width:10%">Thu</th> 
						<th style="text-align:center;width:10%">Fri</th> 
						<th style="text-align:center;width:10%">Sat</th> 
						<th style="text-align:center;width:10%">Sun</th> 
					</tr>
				</thead>
				
			</table>
			<table class="table table-bordered ">
				<tbody id="tdata" class="tdata" >												
					
				</tbody>
			</table>
			
		  </div>
        </div>
        
        
      </div>
    </section>
	<style>
		.OpdNone{display:none !important;}
		.OpdInline{display:inline-block !important;}
	</style>
 <script>
	  $("#Consultants").change(function(){
			$("#Specialization").val("");
			searchResult();
	  });
	  $("#Specialization").change(function(){
			$("#daysofdoc").val("");
			$("#Consultants").val("");
			searchResult();
	  });
	  
	  function searchResult(){
		if($("#Consultants").val()!="" && $("#Consultants").val().length > 0){
			$("#Specialization").val("");
			$(".All").removeClass("OpdInline").addClass("OpdNone");
			$("."+$("#Consultants").val()).removeClass("OpdNone").addClass("OpdInline");
		}
		else if($("#Specialization").val()!="" && $("#Specialization").val().length > 0){
			$("#daysofdoc").val("");
			$("#Consultants").val("");
			$(".All").removeClass("OpdInline").addClass("OpdNone");
			$("."+$("#Specialization").val()).removeClass("OpdNone").addClass("OpdInline");
		}
		else{
			$(".All").addClass("OpdInline");
		}
	  }
    </script>