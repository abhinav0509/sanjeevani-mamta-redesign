<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>data/css/AutoComplete.css" rel="stylesheet" type="text/css"/> 
<script src="<?php echo base_url();?>data/js/Autojquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>data/js/jquery.validate.min.js"></script>  
<link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/plugins/jquery-select2.min.css">
<script src="<?php echo base_url();?>data/dist/assets/plugins/jquery-select2/select2.min.js"></script>
<script src="<?php echo base_url();?>data/js/Jsfordatabindingteemp.js"></script>
<script src="<?php echo base_url();?>data/dist/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/bootstrap-multiselect.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url();?>data/dist/js/bootstrap-multiselect.js"></script>
<script>
var j =jQuery.noConflict();
var yourArray = [];
var Frarr =[];
var di=1;
j(document).ready(function(){
	j("select[name='days[]']").multiselect({
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
					j("select[name='days[]']").multiselect('selectAll', false);
					j("select[name='days[]']").multiselect('updateButtonText');}
				else
					j("select[name='days[]']").multiselect('select', expData[i]);
			}
	j(".fromtime").timepicker();
	j(".totime").timepicker();
	j(".opd").addClass("active open");
	j("#alert").delay(2000).fadeOut(300);
	j(".td_text").slimscroll({
	  height: '70px',
	  wheelStep: 1
    });
	   var Pageindex = j("#pindex").val();
	   var rcount = j("#rcount").val();
	   j("#sub_mnu1").val(j("#page").val());
	   
	   if(Pageindex=="")
		 Pageindex=1;
	   if(rcount=="")
		  rcount=0; 
	   j(".pager").ASPSnippets_Pager({
            ActiveCssClass: "current",
            PagerCssClass: "pager",
            PageIndex: parseInt(Pageindex),
            PageSize: 6,
            RecordCount: parseInt(rcount)

        });
        
	  j(".page").click(function () {
		  var pageindex = j(this).attr('page');          
		  j('#pindex').val(pageindex);
		  j("#page").val(j("#sub_mnu1").val());
		  j('#hfield').submit();
	   });
	   
	   j("#Cancelbtn").click(function(){
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_opd');
	   });
	   
		 j(".multiselect-container li input[type='checkbox']").change(function() {
			 var val = j(this).val();
			var ischecked= j(this).is(':checked');
			if(ischecked)
			{
				yourArray.push(j(this).val());
				j(".multiselect-container li input[value='"+val+"'] ").not(this).attr("disabled", true);
			}
			else if(!ischecked)
			{
				yourArray.pop(j(this).val());
			  j(".multiselect-container li input[value='"+val+"'] ").attr("disabled", false);
			}
		});	  
		
		j("#formdetail").submit(function(){
			var s='';
			var f='';
			var t='';
			j("select[name='days[]']").each(function(){
					if(s.length==0)
					{
						s=j(this).val();
					}
					else{
					s=s+"~"+j(this).val();
					}
				console.log(s);
				j("#dy").val(s);
			});
			j("input[name='fromtime[]']").each(function(){
					if(f.length==0)
					{
						f=j(this).val();
					}
					else{
					f=f+"~"+j(this).val();
					}
				console.log(f);
				j("#ft").val(f);
			});
			j("input[name='totime[]']").each(function(){
					if(t.length==0)
					{
						t=j(this).val();
					}
					else{
					t=t+"~"+j(this).val();
					}
				console.log(t);
				j("#tt").val(t);
			});		
			 event.preventDefault();
			 var formdata = new FormData(j(this)[0]);	
			 j.ajax({
				url: j("#formdetail").attr('action'),
				type: 'POST',
				processData: false,
				contentType: false,
				async: false,
				data: formdata,
				success: function(data)
				{
					var obj1= j.parseJSON(data);
					j("#alert1").text(obj1.message);
					j("#alert1").fadeIn('slow');
					j("#alert1").delay(2000).fadeOut(300);
					
				},			
				error: function()
				{					
				}
			 });
		});
});


function show(input){
	var dvPreview = document.getElementById("img1");
	dvPreview.innerHTML = "";
	var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
	if(input.files.length<3){
	for (var i = 0; i < input.files.length; i++) {
	    var file = input.files[i];
	    if (regex.test(file.name.toLowerCase())) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            var img = document.createElement("IMG");
	            img.height = "115";
	            img.width = "125";
	            img.src = e.target.result;
	            dvPreview.appendChild(img);
	        }
	        reader.readAsDataURL(file);
	    }
	}
	}
	else{
	alert("Select Only 2 Files");
	document.getElementById("upload").value="";
	}
}

function Edit(obj,id,obj1)
	{
		j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_opdschedule');
		j("#t1").removeClass("active");
		j("#t2").addClass("active");
		j("#tab1-1").removeClass("active");	
		j("#tab1-2").addClass("active");
		
		j("#roww").html("");
		var op='';
		var r;    
		var q=0;
		yourArray=[];
		var dy = obj[0][0].day;
		var s = dy.split("~");
		var fy = obj[0][0].ft;
		var f = fy.split("~");
		var ty = obj[0][0].tt;
		var t = ty.split("~");
		for(k=0;k<obj1[0].length;k++)
	{	
         if(obj1[0][k].dr_id==id)
        {
			if(q==0){
				var cur=".row0";
				op="";
				op+="<div class='row row0'>";
                op+="<div class='col-sm-12'>";
				op+="<div class='col-sm-2'>";
                op+="<i class='fa fa-plus' id='addRow' onclick='addrow();' style='float:right;margin-right:10px;'></i>";
                op+="</div>";
				op+="<div class='col-sm-3'>";
                op+='<select class="form-control code" name="days[]" required multiple="multiple">';
				op+='<option value="Mon">Monday</option>';
				op+='<option value="Tues">Tuesday</option>';
				op+='<option value="Wed">Wednesday</option>';
				op+='<option value="Thur">Thursday</option>';
				op+='<option value="Fri">Friday</option>';
				op+='<option value="Sat">Saturday</option>';
				op+='<option value="Sun">Sunday</option>';
				op+='</select>';
                op+="</div>";
				op+="<input type='hidden' name='pid[]' id='pid' value='"+obj1[0][k].id+"'>";
				op+="<div class='col-sm-2'>";
                op+="<input type='text' name='fromtime[]' id='fromtime' onkeyup='search2(this)' value='"+obj1[0][k].fromtime+"' class='form-control fromtime' required />";
                op+="</div>";
				op+="<div class='col-sm-2'>";
				op+="<input type='text' name='totime[]' id='totime' class='form-control totime' value='"+obj1[0][k].totime+"' required />";
				op+="</div>";
				op+="</div>";
				op+="</div>";
			 }
			 else{
				  if(j('.roww div.row').length > 1)
					di=parseInt(di+1);
				
				 var cur=".row"+di; 
				op="";
				 op+="<div class='row row"+di+"' id='dell' style='padding-top:10px;'>";
				 op+="<div class='col-sm-12'>";
				 op+="<div class='col-sm-2'>";
				 op+="<i class='fa fa-trash-o' onclick='\delprod("+obj1[0][k].id+",this)'\ style='float:right;margin-right:10px;'></i>";
				 op+="</div>";
				 op+="<div class='col-sm-3'>";
				 op+='<select class="form-control code" name="days[]" required multiple="multiple">';
				 op+='<option value="Mon">Monday</option>';
				 op+='<option value="Tues">Tuesday</option>';
				 op+='<option value="Wed">Wednesday</option>';
				 op+='<option value="Thur">Thursday</option>';
				 op+='<option value="Fri">Friday</option>';
				 op+='<option value="Sat">Saturday</option>';
				 op+='<option value="Sun">Sunday</option>';
				 op+='</select>';
				 op+="</div>";
				 op+="<input type='hidden' name='pid[]' id='pid' value='"+obj1[0][k].id+"'>";
				 op+="<div class='col-sm-2'>";
                 op+="<input type='text' name='fromtime[]' id='fromtime1' onkeyup='search3(this)' value='"+obj1[0][k].fromtime+"' class='form-control fromtime' required />";
                 op+="</div>";
				 op+="<div class='col-sm-2'>";
				 op+="<input type='text' name='totime[]' id='totime1' value='"+obj1[0][k].totime+"' class='form-control totime' required />";
				 op+="</div>";
				 op+="</div>";
				 op+="</div>";
				 
			 }
          q++; 
		  j("#roww").append(op);
		 j("select[name='days[]']").multiselect({
				buttonWidth: function(){
						return "100%";  //  value chosen randomly
				},
				includeSelectAllOption: true,
				selectAllText: 'All',
				selectAllValue: 'All'
			});
			var expData = "null".split(",");
			for(var i =0;i<expData.length;i++){
				if(expData[i].trim()=="All"){
					j("select[name='days[]']").multiselect('selectAll', false);
					j("select[name='days[]']").multiselect('updateButtonText');}
				else
					j("select[name='days[]']").multiselect('select', expData[i]);
			}
			
				j(cur).find(".multiselect-container li input[type='checkbox']").each(function() {
					 if(yourArray!="")
					 {
						 for(var l=0; l<yourArray.length;l++)
						 {
							 if(j(this).val()==yourArray[l])
							 {
								j(this).attr("disabled", true);
							 }
						 }
					 }
				 });
				j(cur).find("select[name='days[]'] option").each(function(){
					var vl = j(this).val();
					var d = obj1[0][k].days;
					var st = d.split(",");
						for(var m=0;m<st.length;m++)
						{
							if(vl == st[m])
							{
								j(this).attr('selected',true);
								j(cur).find(".multiselect-container li input[value='"+vl+"']").prop('checked',true);
								j(cur).find(".multiselect-container li input[value='"+vl+"']").parent().parent().parent().addClass('active');
								j(".multiselect-container li input[type='checkbox']").trigger('change');
							}
						}					
				});
				j(".multiselect-container li input[type='checkbox']").change(function() {
					 var val = j(this).val();
					var ischecked= j(this).is(':checked');
					if(ischecked)
					{
						yourArray.push(j(this).val());
						j(".multiselect-container li input[value='"+val+"'] ").not(this).attr("disabled", true);
					}
					else if(!ischecked){
					  yourArray.pop(j(this).val());
					  j(".multiselect-container li input[value='"+val+"'] ").attr("disabled", false);
					}
				}); 
		}
	}
		 j(".fromtime").timepicker();
		 j(".totime").timepicker();
			
		for(i=0;i<obj[0].length;i++)
		  {
			 if(obj[0][i].id==id)
			 {
			  r=i;
			 }  
		  }
		  
		j("#bid").val(obj[0][r].id);
		j("#name").val(obj[0][r].dr_id);
		j("#designation").val(obj[0][r].speciality);
		j("#dy").val(obj[0][r].day);
		j("#ft").val(obj[0][r].ft);
		j("#tt").val(obj[0][r].tt);
	}
	
	function Delete(id,obj){
		if(confirm("Are you sure, you want to delete It.."))
		j.ajax({
			url:"<?php echo base_url();?>index.php/Delete/delete_opd",
			type:"post",
			data:{'id':id},
			success:function(data){
			   var obj1=j.parseJSON(data);
               j("#alert1").text(obj1.message);
               j("#alert1").fadeIn('slow');
               j("#alert1").delay(2000).fadeOut(300);
               j(obj).closest('tr').remove();
            },
            error: function () {
                
            }
			
		});
	}
	
	function change_aboutus(id,str)
	{
		if(confirm("Are you sure, you want to Change Status!.."))
			j.ajax({
				url:"<?php echo base_url();?>index.php/Status/opd",
				type:"post",
				data:{'id':id,'str':str},
				success:function(data){
					var obj = j.parseJSON(data);
					j("#alert1").text(obj.message);
					j("#alert1").fadeIn('slow');
					j("#alert1").delay(2000).fadeOut(300);
				},
				error:function(){
					
				}
			});
	}
    
	function search_data(){
      j('#pindex').val(1);
      j("#page").val(j("#sub_mnu1").val());
      j('#hfield').submit();
    }
	function eachcheck(obj,Status){
	   var ct =[];
	   var results1=
	   SDeachcheck({
		  tbodyname: "tdata",            
		  eachtitle: obj,  
		  titlecheck : 'titlechk',
		  clickstatus : Status,
		  Hiddendata :  j("#storeArrayvalue").val()          
	  });
		 j("#storeArrayvalue").val(results1);     
		 var results = j("#storeArrayvalue").val();     
		 if(results != ""){
		   ct=results.split(',');   
		   var ottp="<i class='fa fa-check-square-o'></i>&nbsp;"+ct.length; 
		   j('.label').html(ottp);
		 }
		 else
		 {
		   var ottp="<i class='fa fa-check-square-o'></i>&nbsp;"+0; 
		   j('.label').html(ottp);
		 }

	}
	function clickAction()
	{
		var dt=[];
		var t = j("#storeArrayvalue").val();
		dt = t.split(",");
		if(t!="")
		{
			if(confirm("Are you sure, you want to delete It.."))
			j("#hfield").attr('action','<?php echo base_url();?>index.php/Delete_Data/delete_opd');
			j("#hfield").submit();
		}
		else if(t==""){
				j('#alert1').show();
				j('#alert1').html("<strong>Please Select Record to perform operation</strong>");
				j("#alert1").delay(3200).fadeOut(300);
			}
	}
	function addrow(obj){   
	
	 if(j('.roww div.row').length > 1)
		di=parseInt(di+1);
	
	 var cur=".row"+di; 
     op="";
	 op+='<div class="row row'+di+'" dell" id="dell" style="padding-top:10px;">';
	 op+='<div class="col-sm-12">';
	 op+='<div class="col-sm-2">';
	 op+='<i class="fa fa-trash-o" onclick="\delrow(this)"\ style="float:right;margin-right:10px;"></i>';
	 op+='</div>';
	 op+='<div class="col-sm-3">';
	 op+='<select class="form-control code" name="days[]" required multiple="multiple">';
	 op+='<option value="Mon">Monday</option>';
	 op+='<option value="Tues">Tuesday</option>';
	 op+='<option value="Wed">Wednesday</option>';
	 op+='<option value="Thur">Thursday</option>';
	 op+='<option value="Fri">Friday</option>';
	 op+='<option value="Sat">Saturday</option>';
	 op+='<option value="Sun">Sunday</option>';
	 op+='</select>';
	 op+='</div>';
	 op+='<div class="col-sm-2">';
	 op+='<input type="text" name="fromtime[]" id="fromtime1" onkeyup="\"\ class="form-control fromtime" required placeholder="From Time"/>';
	 op+='</div>';
	 op+='<div class="col-sm-2">';
	 op+='<input type="text" name="totime[]" id="totime1" onkeyup="\"\ class="form-control totime" required placeholder="To Time"/>';
	 op+='</div>';
	 op+='</div>';
	 op+='</div>';
	 j("#roww").append(op);
	 
	 j(".fromtime").timepicker();
	 j(".totime").timepicker();
	 j("select[name='days[]']").multiselect({
			buttonWidth: function(){
					return "100%";  //  value chosen randomly
			},
			includeSelectAllOption: true,
			selectAllText: 'All',
			selectAllValue: 'All'
		});
		var expData = "null".split(",");
		for(var i =0;i<expData.length;i++){
			if(expData[i].trim()=="All"){
				j("select[name='days[]']").multiselect('selectAll', false);
				j("select[name='days[]']").multiselect('updateButtonText');}
			else
				j("select[name='days[]']").multiselect('select', expData[i]);
		}
		 j(cur).find(".multiselect-container li input[type='checkbox']").each(function() {
			 if(yourArray!="")
			 {
				 for(var l=0; l<yourArray.length;l++)
				 {
					 if(j(this).val()==yourArray[l])
					 {
						j(this).attr("disabled", true);
					 }
				 }
			 }
		 });
		 j(".multiselect-container li input[type='checkbox']").change(function() {			 
			 var val = j(this).val();
			var ischecked= j(this).is(':checked');
			if(ischecked)
			{
				j(".multiselect-container li input[value='"+val+"'] ").not(this).attr("disabled", true);
				yourArray.push(j(this).val());
			}
			else if(!ischecked){
				yourArray.pop(j(this).val());
			  j(".multiselect-container li input[value='"+val+"'] ").attr("disabled", false);
			}
		}); 
	/* clickcnt++;
	 if(clickcnt >=4){
		 $(".roww").slimscroll({
			  height: '200px',
			  wheelStep: 1
		 });
	 }*/
	
  }
  
  function delrow(obj){
	  j(obj).parent().next().find(".multiselect-container li input[type='checkbox']").each(function(){
		  var val = j(this).val();
		  var ischecked= j(this).is(':checked');
		  if(ischecked)
			{
				j(".multiselect-container li input[value='"+val+"'] ").attr("disabled", false);
			}
	  });
	  j(obj).parent().parent().parent().remove();
  }
  function delprod(id,obj1){
     if (confirm("Are you sure, you want to Delete It.."))
        j.ajax({  
            url: '<?php echo base_url(); ?>index.php/Delete/delete_opddetails',
            type: 'POST',
            data:{'id':id},      
            success: function (data) {
               var obj=j.parseJSON(data);
               j("#alert1").text(obj.message);
               j("#alert1").fadeIn('slow');
               j("#alert1").delay(2000).fadeOut(300);
               j(obj1).parent().parent().parent().remove();
            },
            error: function () {
                
            }
        });
  }
</script>
<style>
.profile {
  background-color: #428bca;
  bottom: 0;
  height: 19px;
  left: 0;
  margin-left: auto;
  margin-right: auto;
  margin-top: -24px;
  opacity: 0;
  overflow: visible;
  right: 0;
  text-align: center;
  transition: all 0.2s cubic-bezier(0.17, 0.67, 0.84, 0.57) 0s;
  width: 90px;
  z-index: 1000;
}

.imge:hover .profile {
    opacity: 0.9;
    bottom: 0;
}
.pager
{
	height: 18px;
	margin: 16px;
}
.pager .page
{
	cursor: pointer;
	border: 1px solid;
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
.alert {
  border: 1px solid transparent;
  border-radius: 4px;
  margin-bottom: 0;
  padding: 5px;
}
.fa{
	cursor:pointer;
}
</style>

<div class="page-wrapper">
<div class="page-content">
	<div class="container-fluid-md">
		<div class="row">
			<?php $this->load->view('cms/sidebar'); ?>
			<div style="padding: 0px;border: 1px solid #DDDDDD;border-radius: 0px;" class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
				<div style="height: 925px;margin: 0px;" class="tab-content">	
					<div class="row">
						<ul class="nav nav-tabs" style="margin:16px;margin-top:0px;">
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View OPD Schedule</a></li>
							<li class="" id="t2"><a href="#tab1-2" data-toggle="tab">Add OPD Schedule</a></li>
							<li class="pull-right">
								<?php if(isset($message)){?>
									<div class="alert alert-success" id="alert"> 
										 <strong><?php echo $message; ?></strong> 
									</div>
								<?php }?>
							</li>
							<li class="pull-right">
									<div class="alert alert-success" id="alert1" style="display:none;"> 
									</div>
							</li>
						</ul>
						<div class="tab-content" style="margin:16px;">
							<div id="tab1-1" class="tab-pane active">
								 <div class="table-responsive"> 
								 <div class="row">
										<div class="col-sm-12" style="padding-bottom: 10px;">
										  <div class="form-group">
												<div class="col-sm-3">
													<select placeholder="Doctor Name" id="sub_mnu1" name="sub_mnu1" class="form-control" required>
														<option value="">Select Doctor</option>
														<?php foreach($dr as $d){?>
														<option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>
														<?php }?>
													</select>
												</div>
												<div class="col-sm-3">
													<a class="btn btn-primary" style="padding: 6px 7px;" onclick="search_data()">
														<i class="fa fa-search"></i> Search
													</a>
												</div>
											</div>
										 </div>       
									</div>
									<table id="" class="table table-bordered" style="float:left;">
										<thead style="background: #f5f5f5; color: #FFF;">   
											  <th width="2%">
												 <div class="btn-group btn-group-sm btn-group-text-normal ">
												   <span style="white-space: nowrap; padding: 2px 9px 1px 10px;" >
													<input type="checkbox" id="titlechk" onchange="eachcheck(this,'title')"  /> &nbsp;
													<i class="fa fa-caret-down dropdown-toggle" data-toggle="dropdown" style="cursor:pointer"></i>
								   
													<ul class="dropdown-menu" role="menu">
														 <li><a href="javascript:;" onclick="eachcheck(this,'AllNone')">All None</a></li>                                   
														<li class="divider"></li>
														<li><a href="javascript:;" onclick="clickAction()">
															<i class="fa fa-fw fa-caret-right"></i>Delete
															<span class="label label-danger">0</span></a>  
														</li>
													</ul>
												   </span> 
												</div>
											  </th>
											  <th width="15%" style="text-align:center;">Name</th>
											  <th width="15%" style="text-align:center;">Designation</th>
											  <th width="15%" style="text-align:center;">Days</th>
											  <th width="20%" style="text-align:center;">Time</th>
											  <th width="10%" style="text-align:center;">Status</th>
											  <th width="10%" style="text-align:center;">Action</th>                                                                   
										</thead>
										<script>							
										  var jArray=[];
										  jArray.push(<?php echo json_encode($result);?>);
										  var jArray1=[];
										  jArray1.push(<?php echo json_encode($opd);?>);
										</script>
										<tbody id="tdata">
										  <?php 
										  if(!empty($result)){
										  foreach($result as $row)
										  {
										  ?>
										  <tr>
												<td class="mail-check" style="text-align:center;">
													 <input type="checkbox" id="<?php echo $row['id']; ?>" onchange="eachcheck(this,'subtitle');" class="icheck square-blue">
											   </td>
											   <td style="text-align:center;"><?php echo $row['name'];?></td>
											   <td style="text-align:center;"><?php echo $row['speciality'];?></td>
											   <td style="text-align:center;">
											   <?php $dy = explode("~",$row['day']);
											   for($i=0;$i<count($dy);$i++){
											   ?>
											   <?php echo $dy[$i];?><br>
											   <?php }?>
											   </td>
											   <td style="text-align:center;">
											   <?php $f = explode("~",$row['ft']);
													 $t = explode("~",$row['tt']);
											   for($i=0;$i<count($f);$i++){
											   ?>
											   <?php echo $f[$i];?> to <?php echo $t[$i];?><br>
											   <?php }?>
											   </td>
											   <td>
												   <select name="status" id = "status" class="form-control" onchange="change_aboutus('<?php echo $row['id'];?>',this.value)">
													<option <?php if($row['status']=='Show'){?> selected="selected" <?php }?>>Show</option>
													<option <?php if($row['status']=='Hide'){?> selected="selected" <?php }?>>Hide</option>
												   </select>
											   </td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;cursor: pointer;" id="EditB" class="fa fa-edit" title="Edit Record" onclick="Edit(jArray,'<?php echo $row['id'];?>',jArray1)" ></i><i style="color:#275273;font-size:20px; margin-left:10px;cursor: pointer;" id="DeleteN" class="fa fa-trash-o" title="Delete Record" onclick="Delete('<?php echo $row['id'];?>',this)"></i></td>                               
										  </tr>
										  <?php }} else{?>
										  <tr>
										    <td colspan="7" style="color:#2599D6;text-align:center;">No Data Available !</td>
										  </tr>
										  <?php }?>
										</tbody>
									</table>     
									<?php if(isset($links)){?>
										<div class="pager">
											<?php echo $links;?>
										</div>
									<?php }?>									
								</div>
							</div>
							
							<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/opd">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
							</form>
							
							<div id="tab1-2" class="tab-pane">
								<form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_opdschedule" enctype="multipart/form-data">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">Add OPD Schedule</h4>
										</div>
										<div class="panel-body">
										<div class="col-sm-6">
										    <div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Name <span class="asterisk">*</span></label>
												<div class="col-sm-8">
												<select placeholder="Doctor Name" id="name" name="name" class="form-control" required>
												<option value="">Select Doctor</option>
												<?php foreach($dr as $d){?>
												<option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>
												<?php }?>
												</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Designation <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Doctor Designation" id="designation" name="designation" class="form-control" required>
												</div>
											</div>
										</div>
										<div id="roww" class="roww">
										 <div class="row" id="rww">
											 <div class="col-sm-12">
											 <div class="col-sm-2">
															 <i class="fa fa-plus" id="addRow" onclick="addrow(this);" style="float:right;margin-right:10px;"></i>
											 </div>
											 <div class="col-sm-3">
															<select class="form-control code" data-placeholder="Select Days" name="days[]"  required multiple="multiple">
																<option value="Mon">Monday</option>
																<option value="Tues">Tuesday</option>
																<option value="Wed">Wednesday</option>
																<option value="Thur">Thursday</option>
																<option value="Fri">Friday</option>
																<option value="Sat">Saturday</option>
																<option value="Sun">Sunday</option>
															</select>
											 </div>
											 <div class="col-sm-2">
															  <input type="text" name="fromtime[]" id="fromtime" onkeyup="" class="form-control fromtime" required placeholder="From Time"/>
											 </div>
											 <div class="col-sm-2">
															  <input type="text" name="totime[]" id="totime" onkeyup="" class="form-control totime" required placeholder="To Time" />
											 </div>
											</div>	
										 </div>	
										</div>
										<input type="hidden" id="bid" name="bid">
										<input type="hidden" id="dy" name="dy">
										<input type="hidden" id="ft" name="ft">
										<input type="hidden" id="tt" name="tt">
										</div>
										<div class="panel-footer">
											<div class="form-group">
												<div class="col-sm-offset-4 col-sm-8">
													<button class="btn btn-primary" type="submit" id="Subtn" name="Subtn">Submit</button>
													<button class="btn btn-primary" type="reset" id="Cancelbtn" name="Cancelbtn">Cancel</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>