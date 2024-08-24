<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>data/css/AutoComplete.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url();?>data/js/Autojquery-ui.min.js" type="text/javascript"></script> 
<link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/plugins/jquery-select2.min.css">
<script src="<?php echo base_url();?>data/dist/assets/plugins/jquery-select2/select2.min.js"></script> 
<script src="<?php echo base_url();?>data/js/Jsfordatabindingteemp.js"></script>
<script src="<?php echo base_url();?>data/js/jquery.validate.min.js"></script>
<script>
var _URL = window.URL || window.webkitURL;
var j =jQuery.noConflict();
var Frarr =[];
var wordCountConf2 = {
    showParagraphs: false,
    showWordCount: true,
    showCharCount: true,
    countSpacesAsChars: false,
    countHTML: false,
    maxWordCount: -1,
    maxCharCount:55000
  };
j(document).ready(function(){
	search();
	search1();
	j("#Addfacility").click(function(){
	   j("#clear").show();
	   j("#Addfacility").hide();
	   j("#select1").hide();
	   j("#add1").show();
	   j("#title").val("");
	});	
	j("#clear").click(function(){
	   j("#clear").hide();
	   j("#Addfacility").show();
	   j("#select1").show();
	   j("#add1").hide();
	   j("#type").val("");
	});	
	j("#alert").delay(2000).fadeOut(300);
	j(".department").addClass("active");
	j('.form-chosen').select2({
		createTag: function (params) {
		  return {
			id: params.term,
			text: params.term,
			newOption: true
		  }
		}
	  });
	  j(".td_text").slimscroll({
		  height: '70px',
		  wheelStep: 1
	   });
	   
	   CKEDITOR.replace("pdisc",{
		   wordcount: wordCountConf2
	   });
	   var Pageindex = j("#pindex").val();
	   var rcount = j("#rcount").val();
	   j("#sub_mnu1").val(j("#page").val());
	   j("#sub_mnu2").val(j("#type1").val());
	   j("#doc").val(j("#doc1").val());
	   
	   if(Pageindex=="")
		 Pageindex=1;
	   if(rcount=="")
		  rcount=0; 
	   j(".pager").ASPSnippets_Pager({
            ActiveCssClass: "current",
            PagerCssClass: "pager",
            PageIndex: parseInt(Pageindex),
            PageSize:6,
            RecordCount: parseInt(rcount)

        });
        
	   j(".page").click(function () 
	   {
		  var pageindex = j(this).attr('page');          
		  j('#pindex').val(pageindex);
		  j("#page").val(j("#sub_mnu1").val());
		  j("#type1").val(j("#sub_mnu2").val());
		  j("#doc1").val(j("#doc").val());
		  j('#hfield').submit();
	   });	   
	   j('#upload').change(function(e)
	   {
			 var file, img, h, w, tp;
			  if ((file = this.files[0])) {
				  img = new Image();
				  img.onload = function () {
					var ext = file.name.split('.').pop().toLowerCase();
					  w=this.width;
					  h=this.height;
					  tp=file.type;                  
					  //alert("H="+h+"W="+w);
					  if(h < 250 && w >=500 || h >= 250 && w < 500 || h < 250 && w < 500){
						  alert("Please Upload Image In (500(Width) * 250(Height)) Dimentions");
						  j("#upload").val("");
						  j("#img1").attr('src','');
						  j("#img1").html("");
					  }
					  else if (h == 250  && w == 500) {
							 if (j.inArray(ext, ['jpg', 'jpeg','png']) == -1) {
								  alert('Invalid File Type! Please Upload Image With Only jpg or jpeg or png extension');
								  j("#upload").val("");
								  j("#img1").attr('src','');
								  j("#img1").html("");
							  }
					  }
				  };

				  img.src = _URL.createObjectURL(file);
			  }
		});
		j('#upload1').change(function(e)
	   {
			 var file, img, h, w, tp;
			  if ((file = this.files[0])) {
				  img = new Image();
				  img.onload = function () {
					var ext = file.name.split('.').pop().toLowerCase();
					  w=this.width;
					  h=this.height;
					  tp=file.type;                  
					  //alert("H="+h+"W="+w);
					  if(h < 250 && w >=500 || h >= 250 && w < 500 || h < 250 && w < 500){
						  alert("Please Upload Image In (500(Width) * 250(Height)) Dimentions");
						  j("#upload").val("");
						  j("#img1").attr('src','');
						  j("#img1").html("");
					  }
					  else if (h == 250  && w == 500) {
							 if (j.inArray(ext, ['jpg', 'jpeg','png']) == -1) {
								  alert('Invalid File Type! Please Upload Image With Only jpg or jpeg or png extension');
								  j("#upload").val("");
								  j("#img1").attr('src','');
								  j("#img1").html("");
							  }
					  }
					  else  
					  {
						   j("#formh").submit(); 
					  }
				  };

				  img.src = _URL.createObjectURL(file);
			  }
		});
	   j("#Cancelbtn").click(function()
	   {
		   j("#img1").html("");
		   CKEDITOR.instances.pdisc.setData("");
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_department');
	   });
	   j(".select2-search-choice").click(function()
	   {
		   alert($(this).val());
	   });
	   
	    var last_valid_selection = null;
		j('#doctors').change(function(event)
		{
			last_valid_selection = j(this).val();
			j("#dr").val(last_valid_selection);
		});
		j("#title").change(function()
		{
			CKEDITOR.instances.pdisc.setData("");
			var id = j("#title").val();
			j.ajax({
			url:"<?php echo  base_url();?>index.php/Search_Data/Search_department",
			type: 'POST',
			data:{'id':id},
			success: function(data)
			{
				var obj = j.parseJSON(data);
				j("#head").val(obj[0]['name']);
				CKEDITOR.instances.pdisc.setData(obj[0]['pdesc']);
			},
		   error: function()
			{
			}
		});
		});
		j("#formdetail").validate(
		{
			ignore: [],
		  debug: false,
			rules: {
				pdisc:{
					 required: function() 
					{
					 CKEDITOR.instances.pdisc.updateElement();
					},
					 minlength:10
				}
			},
			messages:
				{
				pdisc:{
					required:"Please enter Text",
					minlength:"Please enter 10 characters"
				}
			}
		});
		j("#Subtn").click(function()
		{
			if(j("#type").val()!="")
			{
				j("#title").attr('required',false);
				j("#formdetail").submit();
			}
			if(j("#type").val()=="")
			{
				j("#title").attr('required',true);
				j("#formdetail").submit();
			}
			if(j("#title").val()!="")
			{
				j("#type").attr('required',false);
				j("#formdetail").submit();
			}
			if(j("#title").val()=="")
			{
				j("#type").attr('required',true);
				j("#formdetail").submit();
			}
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

function Edit(obj,id)
	{
		
		j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_department');
		j("#t1").removeClass("active");
		j("#t2").addClass("active");
		j("#tab1-1").removeClass("active");	
		j("#tab1-2").addClass("active");
		j("#img1").html("");
		var op='';
		var r; 		 
		var s = '';
		for(i=0;i<obj[0].length;i++)
		  {
			 if(obj[0][i].id==id)
			 {
			  r=i;
			 }  
		  }
		j("#bid").val(obj[0][r].id);
		j("#title").val(obj[0][r].id);
		j("#inp").val(obj[0][r].name);
		j("#seq").val(obj[0][r].sequence);
		//j("#type").val(obj[0][r].dname);
		//j("#head").val(obj[0][r].hid);
		//j("#job_type").val(obj[0][r].type);
		if(obj[0][r].image!=""){
		var imgg = obj[0][r].image;
		var name=obj[0][r].name;
	
		var l = imgg.split(",");
		for(var k=0; k<l.length; k++)
		{
			var img_url = "<?php echo base_url();?>assets/img/Dept/"+l[k];
			if(l[k]=="No image"){  }
			else{
				op+='<img src="'+img_url+'" style="height:115px;width:125px;border:1px solid #D7DADC;margin-right:5px;">';
			}
		}
			
		j("#img1").append(op);
		}
		/*j("#doctors").html("");
		j.ajax({
				url:'<?php echo base_url();?>index.php/Search_Data/Getdoctor',
				type:'POST',
				data:{'id':obj[0][r].id,'type':obj[0][r].type},
				success: function(data)
				{
					var s='';
					var op='';
					var obj= j.parseJSON(data);
					var data1 = obj['data1'];
					var s = obj[0][r].dr;
					var data2 = obj['data2'];
					for(var i=0; i<data2.length;i++)
					{
						op+='<option value="'+data2[i]['id']+'">'+data2[i]['name']+'</option>'
					}
					//j("#doctors").append(op);
					
					/*for(var k=0; k<data1.length;k++)
					{
						if(s.length==0)
						{
							s = data1[k]['doctors'];
						}
						else{
							s+= ','+data1[k]['doctors'];
						}
					}
					j('#doctors').select2({
						createTag: function (params) {
						  return {
							id: params.term,
							text: params.term,
							newOption: true
						  }
						}
					  });
					j("#doctors").val(s.split(",")).trigger('change');
				},
				error: function()
				{
				}
		});*/
		CKEDITOR.instances.pdisc.setData(obj[0][r].pdesc);
	}
	
	function Delete(id,obj){
		if(confirm("Are you sure, you want to delete It.."))
		j.ajax({
			url:"<?php echo base_url();?>index.php/Delete/delete_department",
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
	
	function search()
	{
	j("#type").autocomplete({
		   source: function (request, response) {
			  j.ajax({
				  type: "POST",
				 // contentType: "application/json; charset=utf-8",
					url: "<?php echo base_url();?>index.php/Search_Data/GetDepartment",
					data: { term: j("#type").val()},
					dataType: "json",
					  success: function (data) {
						   response(j.map(data, function (item) {
							  return {
								  label: item.name,
								  label1: item.id,// Name must be column name in table which you want to show Ex:- Username
								  json: item
							  }
						  }))
					  },
					  error: function (result) {
					  }
				  });
		  },
		  search: function () { j(this).addClass('working'); },
		  open: function () { j(this).removeClass('working'); },
		  minLength: 0,
		  select: function (event, ui) {
			 j('#type').val(ui.item.label);  
			 var id = ui.item.label1;
			 j.ajax({
				url:'<?php echo base_url();?>index.php/Search_Data/Gethod',
				type:'POST',
				data:{'title':id},
				success: function(data)
				{
					var obj= j.parseJSON(data);
					j("#head").val(obj[0]['name']);
					CKEDITOR.instances.pdisc.setData(obj[0]['pdesc']);
				},
				error: function()
				{
				}
			});
		  }
	});
	}
	
	function search1()
	{
	j("#doc").autocomplete({
		   source: function (request, response) {
			  j.ajax({
				  type: "POST",
				 // contentType: "application/json; charset=utf-8",
					url: "<?php echo base_url();?>index.php/Search_Data/GetDoctors",
					data: { term: j("#doc").val()},
					dataType: "json",
					  success: function (data) {
						   response(j.map(data, function (item) {
							  return {
								  label: item.name,// Name must be column name in table which you want to show Ex:- Username
								  label1: item.id,
								  json: item
							  }
						  }))
					  },
					  error: function (result) {
					  }
				  });
		  },
		  search: function () { j(this).addClass('working'); },
		  open: function () { j(this).removeClass('working'); },
		  minLength: 0,
		  select: function (event, ui) {
			 j('#doc').val(ui.item.label1);
		  }
	});
	}
	
	
	function search_data(){
      j('#pindex').val(1);
      j("#page").val(j("#sub_mnu1").val());
	  j("#type1").val(j("#sub_mnu2").val());
	  j("#doc1").val(j("#doc").val());
      j('#hfield').submit();
    }
	
	function check(){
		
    document.getElementById("inp").value = j('#title :selected').text();
	
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
			j("#hfield").attr('action','<?php echo base_url();?>index.php/Delete_Data/delete_doctor');
			j("#hfield").submit();
		}
		else if(t==""){
				j('#alert1').show();
				j('#alert1').html("<strong>Please Select Record to perform operation</strong>");
				j("#alert1").delay(3200).fadeOut(300);
			}
	}
	function edit_one(id,img,all)
	{
		j("#idd").val(id);
		j("#imm").val(img);
		j("#imr").val(all);
		j("#upload1").trigger('click');
	}
	
	function delete_one(id,img,all){
		if(confirm("Are you sure! you want to delete It.."))
		j.ajax({
			url:"<?php echo base_url();?>index.php/Delete/singleimage_department",
			type:"post",
			data:{'id':id,'img1':img,'img_row':all},
			success:function(data){
			   var obj1=j.parseJSON(data);
               j("#alert1").text(obj1.message);
               j("#alert1").fadeIn('slow');
               j("#alert1").delay(2000).fadeOut(300);
			   window.location="<?php echo base_url();?>index.php/Admin/department";
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
.tooltip {
    display: block;
    font-size: 13px;
    line-height: 1.4;
    visibility: visible;
    z-index: 1070;
	opacity: 1;
    position: relative;
}
.tooltip .tooltiptext {
    visibility: hidden;
    width: auto;
    background-color: black;
    color: #fff;
    text-align: justify;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 500;
    top: 100%;
    left: 50%;
}
.tooltip:hover .tooltiptext {
    visibility: visible;
}
.fa
{
	cursor:pointer;
}
#inp{
	    display: block;
    width: 100%;
    height: 34px;
    padding: 7px 12px;
    font-size: 13px;
    line-height: 1.428571429;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 3px;
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
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View Department's</a></li>
							<li class="" id="t2"><a href="#tab1-2" data-toggle="tab">Add Department's</a></li>
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
												
													<select class="form-control" name="sub_mnu1" id="sub_mnu1" required>
													
														<option value="">Select Department</option>
														<?php foreach($dept as $dp){?>
															<option value="<?php echo $dp['id'];?>"><?php echo $dp['name'];?></option>
														<?php }?> 
																											
													 
												</div>
                                                <div class="col-sm-3" style="display:none;">
													<input type="text" id="doc" name="doc" class="form-control" style="display:none;"  placeholder="Search By Doctors Name" />
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
											  <th width="3%">
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
                                              <th width="17%" style="text-align:center;">Department</th>
											  <th width="10%" style="text-align:center;">Sequence</th>
											  <th width="14%" style="text-align:center;">Image</th>
											  <th width="20%" style="text-align:center;">Description</th>
											  <th width="10%" style="text-align:center;">Action</th>                                                                   
										</thead>
                                        <script>							
										  var jArray=[];
										  jArray.push(<?php echo json_encode($result);?>);
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
						    <td style="text-align:center;"><?php echo $row['sequence'];?></td>
						   <!--<?php $hd = explode(",",$row['Doctorss']);?>
						   <td style="text-align:center;">
						   <?php if($row['Doctorss']!=""){?>
						   <?php for($i = 0; $i<count($hd); $i++){?>
						   <?php if($hd[$i]==$row['hname']){?><b>Dr. <?php echo $row['hname'];?>  (HOD)</b><br>
						   <?php } else{?>
						   Dr. <?php echo $hd[$i];?><br>
						   <?php } } } ?>
                           </td>-->
							<?php $immg = explode(",",$row['image']);?>
						   <td style="text-align:center;">
							   <?php if($row['image']!=""){
								if(count($immg)>1){
							   for($i=0;$i<count($immg);$i++){?>
							   <div class="col-sm-6 imge" style="margin: 0px 5px; width: auto; padding: 4px;">
								   <?php if($immg[$i]=="No image"){?>
								   <img src="<?php echo base_url()?>data/images/noimg.png" style="width:90px;height:90px;border:1px solid #D7DADC;margin:0px">
								   <?php }else{?>
								   <img src="<?php echo base_url()?>data/uploads/department/<?php echo $immg[$i];?>" style="width:90px;height:90px;border:1px solid #D7DADC;margin:0px">
								   <?php }?>
								   <div class="profile">
										 <form action="#" method="post" style="display: inline">
											 <input type="file" name="change" id="change" style="display:none;">
											 <a id="uploadimg" title="Upload profile Image" class="icons" href="javascript:;" style="padding: 1px;">
												 <i class="fa fa-edit" style="color:#fff;" onclick="edit_one('<?php echo $row['id'];?>','<?php echo $immg[$i];?>','<?php echo $row['image'];?>')"></i>
											 </a>
										 </form>
										<?php if($immg[$i]!="No image"){?>
										<a title="Delete" class="icons" href="javascript:;">
											 <i class="fa fa-trash-o" style="padding-top: 2px;color:#fff;" onclick="delete_one('<?php echo $row['id'];?>','<?php echo $immg[$i];?>','<?php echo $row['image'];?>')"></i>
										</a>
										 <?php }?>
									</div>
								</div>
                                <?php } } else {?>
									<img src="<?php echo base_url()?>data/uploads/department/<?php echo $row['image'];?>" style="width:100%;height:90px;border:1px solid #D7DADC;padding:6px;">
							   <?php } }else{?>
									<img src="<?php echo base_url()?>data/images/noimg.png" style="width:90px;height:90px;border:1px solid #D7DADC;margin:0px">
							   <?php }?>
						   </td>
						   <td><p class="td_text"><?php echo strip_tags($row['pdesc']);?></p></td>
						   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;" id="EditB" class="fa fa-edit" title="Edit Record" onclick="Edit(jArray,'<?php echo $row['id'];?>')"></i><i style="color:#275273;font-size:20px; margin-left:10px;" id="DeleteN" class="fa fa-trash-o" title="Delete Record" onclick="Delete('<?php echo $row['id']?>',this)"></i></td>                               
					  </tr>
					  <?php }} else{?>
					  <tr>
						<td colspan="5" style="color:#2599D6;text-align:center;">No Data Available !</td>
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
                            <form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/department">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="type1" name="type1" value="<?php if(isset($dt['type1'])){ echo $dt['type1']; }?>">
								<input type="hidden" id="doc1" name="doc1" value="<?php if(isset($dt['doc1'])){ echo $dt['doc1']; }?>">
								 <input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>"> 
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
							</form>
                            <div id="tab1-2" class="tab-pane">
								<form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_department" enctype="multipart/form-data">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">Add Department</h4>
										</div>
										<div class="panel-body">
										<div class="col-sm-6">
											<div class="form-group" id="select1">
												<label class="col-sm-4 control-label" for="inputEmail3">Title <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<select id="title" name="title" class="form-control"  onChange="check();" required>
														<option value="">Select Department</option>		
														<?php foreach($dept as $dp){?>
														
															<option value="<?php echo $dp['id'];?>"><?php echo $dp['name']; ?></option>
																
														<?php }?>
													</select></br>
													<input type="text" name="input" id="inp" />
												
												</div>
											</div>
											<div class="form-group" style="display:none;" id="add1">
												<label class="col-sm-4 control-label" for="inputEmail3">Add <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Add New Department" id="type" name="type" class="form-control" required>
												</div>
											</div>
											<div class="form-group" style="">
												<label class="col-sm-4 control-label" for="inputEmail3">Sequence <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Dept.Sequence" id="seq" name="seq" class="form-control" required>
												</div>
											</div>
											<!--<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Head of Department<span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<select class="form-control" data-placeholder="Select Doctor's" id="head" name="head">
														<option value="">Select Hod </option>
														<?php foreach ($dr as $row){?>
														<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
														<?php }?>
													</select>
												</div>
											</div>-->
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Image </label>
												<div class="col-sm-8">
													<input type="file" id="upload" name="upload[]" onchange="show(this);" multiple class="form-control" style="padding:0px">
													<span class="asterisk">Upload Image in (500 X 250) Dimention and allowed file Types are (jpg ,jpeg ,png)</span>
												</div>
											</div>
											<!--<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Type<span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<select id="job_type" name="job_type" class="form-control">
														<option value="">Select Type</option>
														<option value="Part Time">Part Time</option>
														<option value="Full Time">Full Time</option>
														<option value="Honourable">Honourable</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4">Doctor's <span class="asterisk">*</span></label>
												<div class="controls col-sm-8">
													<select class="form-control form-chosen" data-placeholder="Select Doctor's" id="doctors" name="doctors" multiple>
														<option value="">Select Doctors </option>
														<?php foreach ($dr as $row){?>
														<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
														<?php }?>
													</select>
												</div>
											</div>-->
										</div>
                                        <div class="col-sm-6">
											<div class="form-group">
												<a class="btn btn-default" id="clear" style="float: left; display: none;padding:6px"><i class="fa fa-fw fa-times"></i> Clear</a>
												<a class="btn btn-default" id="Addfacility" style="float: left;padding:6px">
													<i class="fa fa-fw fa-plus"></i>
													Add New
												</a>
											</div>
											<div class="form-group" id="img1">                                              
												  <div class="col-sm-4">
													 <!--<img id="img1" src="http://localhost/budhrani/uploads/d.png" style="width:75%; height:102px; display:; " />-->
												  </div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">Description</label>
												<div class="col-sm-8">
													<textarea placeholder="Email" id="pdisc" name="pdisc" class="form-control"></textarea>
												</div>
											</div>
										</div>
										<input type="hidden" id="bid" name="bid">
										<input type="hidden" id="dr" name="dr">
										<input type="hidden" id="depid" name="depid">
										</div>
										<div class="panel-footer">
											<div class="form-group">
												<div class="col-sm-offset-4 col-sm-8">
													<button class="btn btn-primary" type="button" id="Subtn" name="Subtn">Submit</button>
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