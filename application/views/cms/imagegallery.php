<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>data/css/AutoComplete.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url();?>data/js/Jsfordatabindingteemp.js"></script>  
<script>
var _URL = window.URL || window.webkitURL;
var j = jQuery.noConflict();
var Frarr =[];
j(document).ready(function(){
	j("#alert").delay(2000).fadeOut(300);
	j(".gallery").addClass("active");
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
            PageSize: 5,
            RecordCount: parseInt(rcount)

        });
        
	  j(".page").click(function () {
		  var pageindex = j(this).attr('page');          
		  j('#pindex').val(pageindex);
		  j("#page").val(j("#sub_mnu1").val());
		  j('#hfield').submit();
	   });
	   
	   j('#upload').change(function(e){
			 var file, img, h, w, tp;
			  if ((file = this.files[0])) {
				  img = new Image();
				  img.onload = function () {
					var ext = file.name.split('.').pop().toLowerCase();
					  w=this.width;
					  h=this.height;
					  tp=file.type;                  
					  //alert("H="+h+"W="+w);
					  if(h < 150 && w >=250 || h >= 150 && w < 250 || h < 150 && w < 250 ){
						  alert("Please Upload Image In (250(Width) * 150(Height)) Dimentions");
						  j("#upload").val("");
						  j("#img1").attr('src','');
						  j("#img1").html("");
					  }
					  else if (h == 150  && w == 250) {
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
	   j("#upload1").change(function(){
			 var file, img, h, w, tp;
			  if ((file = this.files[0])) {
				  img = new Image();
				  img.onload = function () {
					var ext = file.name.split('.').pop().toLowerCase();
					  w=this.width;
					  h=this.height;
					  tp=file.type;                  
					  //alert("H="+h+"W="+w);
					  if(h < 150 && w >=250 || h >= 150 && w < 250 || h < 150 && w < 250 ){
						  alert("Please Upload Image In (250(Width) * 150(Height)) Dimentions");
						  j("#upload").val("");
						  j("#img1").attr('src','');
						  j("#img1").html("");
					  }
					  else if (h == 150  && w == 250) {
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
		  j("#formh").submit(); 
	   });
	   
	   j("#formh").submit(function(event){
		  event.preventDefault();
		   var formdata = new FormData(j(this)[0]);	   	  
		   j.ajax({
					url: "<?php echo base_url();?>index.php/Update/singleimage_gallery",
					type: 'POST',
					processData: false,
					contentType: false,
					async: false,
					data: formdata,
					success: function(data)
					{
						var obj = j.parseJSON(data);
						j("#alert1").text(obj.message);
					    j("#alert1").fadeIn('slow');
					    j("#alert1").delay(2000).fadeOut(300);
						edit_album(j("#al_id").val());						
					},			
					error: function()
					{
					}							
			});
		});
	   
	   j("#upload2").change(function(){
		   var file, img, h, w, tp;
			  if ((file = this.files[0])) {
				  img = new Image();
				  img.onload = function () {
					var ext = file.name.split('.').pop().toLowerCase();
					  w=this.width;
					  h=this.height;
					  tp=file.type;                  
					  //alert("H="+h+"W="+w);
					  if(h < 150 && w >=250 || h >= 150 && w < 250 || h < 150 && w < 250 ){
						  alert("Please Upload Image In (250(Width) * 150(Height)) Dimentions");
						  j("#upload").val("");
						  j("#img1").attr('src','');
						  j("#img1").html("");
					  }
					  else if (h == 150  && w == 250) {
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
		  j("#formadd1").submit(); 
	   });
	   
	   j("#formadd1").submit(function(event){
		  event.preventDefault();
		   var formdata = new FormData(j(this)[0]);	   	  
		   j.ajax({
					url: "<?php echo base_url();?>index.php/Insert/singleimage_gallery",
					type: 'POST',
					processData: false,
					contentType: false,
					async: false,
					data: formdata,
					success: function(data)
					{
						var obj = j.parseJSON(data);
						j("#alert1").text(obj.message);
					    j("#alert1").fadeIn('slow');
					    j("#alert1").delay(2000).fadeOut(300);
						edit_album(j("#add_id").val());						
					},			
					error: function()
					{	
					}							
			});
        });
	   
	   j("#Cancelbtn").click(function(){
		   j("#img1").html("");
		   j("#upload").attr('disabled',false);
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_gallery');
	   });
  
});
function show(input)
{
	var dvPreview = document.getElementById("img1");
	dvPreview.innerHTML = "";
	var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
		for (var i = 0; i < input.files.length; i++){
		    var file = input.files[i];
		    if (regex.test(file.name.toLowerCase())) {
		        var reader = new FileReader();
		        reader.onload = function (e){
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

function Edit(obj,id)
{
	j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_gallery');
	j(".collapse").trigger('click');
	var r;    
	for(i=0;i<obj[0].length;i++)
	  {
		 if(obj[0][i].id==id)
		 {
		  r=i;
		 }  
	  }
	j("#bid").val(obj[0][r].id);
	j("#sub_mnu1").val(obj[0][r].sub_mnu1);
	j("#title").val(obj[0][r].title);
	j("#category").val(obj[0][r].category);
	j("#upload").attr('disabled',true);
}

function Delete(id,obj){
	if(confirm("Are you sure, you want to delete It.."))
	j.ajax({
		url:"<?php echo base_url();?>index.php/Delete/delete_gallery",
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
function edit_album(id)
{
	j("#imageview").html("");
	j("#t1").removeClass("active");
	j("#t2").addClass("active");
	j("#tab1-1").removeClass("active");	
	j("#tab1-2").addClass("active");
	j.ajax({
		url:"<?php echo base_url();?>index.php/Admin/More_upload",
		type:"post",
		data:{'id':id},
		success:function(data){
			var obj=j.parseJSON(data);
			var op='';
			for(var i=0;i<obj.length;i++)
			{
				var img_url = "<?php echo base_url();?>data/uploads/gallery/"+obj[i]['image'];
				op+='<div class="col-sm-3 img">';
				op+='<img id="img1" src="'+img_url+'" style="width:100%; height:150px;border:1px solid #f5f5f5; " />';
				op+='<div class="profile1">';
				op+='<form action="#" method="post" style="display: inline">';
				op+='<input type="file" name="change" id="change" style="display:none;">';
				op+='<a id="uploadimg" title="Upload profile Image" class="icons" href="javascript:;" style="padding: 1px;">';
				op+='<i class="fa fa-edit" style="color:#fff;font-size:20px;margin:4px" onclick="edit_one('+obj[i]['id']+','+id+')"></i>';
				op+='</a>';
				op+='</form>';
				op+='<a title="Delete" class="icons" href="javascript:;">';
				op+='<i class="fa fa-trash-o" style="padding-top: 2px;color:#fff;font-size:20px;" onclick="delete_one('+obj[i]['id']+',this)"></i>';
				op+='</a>';
				op+='</div>';
				op+='</div>';
			}
				op+='<div class="col-sm-1">';
				op+='<i class="fa fa-plus" style="font-size:20px;margin:65px 30px 30px 37px;" onclick="addimage('+id+')"></i>';
				op+='</div>';
				j("#imageview").append(op);
			
		},
		error: function () {
			
		}
		
	});	
}

function edit_one(id,al_id)
{
	j("#idd").val(id);
	j("#al_id").val(al_id);
	j("#upload1").trigger('click');
}

function delete_one(id,obj){
if(confirm("Are you sure! you want to delete It.."))
	j.ajax({
		url:"<?php echo base_url();?>index.php/Delete/singleimage_gallery",
		type:"post",
		data:{'id':id},
		success:function(data){
		   var obj1=j.parseJSON(data);
		   j("#alert1").text(obj1.message);
		   j("#alert1").fadeIn('slow');
		   j("#alert1").delay(2000).fadeOut(300);
		   j(obj).parent().parent().parent().remove();
		},
		error: function () {
			
		}
		
	});	
}

function addimage(id)
{
	j("#add_id").val(id);
	j("#upload2").trigger('click');
}
function change_aboutus(id,str)
{
if(confirm("Are you sure, you want to Change Status!.."))
	j.ajax({
		url:"<?php echo base_url();?>index.php/Status/gallery",
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
			j("#hfield").attr('action','<?php echo base_url();?>index.php/Delete_Data/delete_images');
			j("#hfield").submit();
		}
		else if(t==""){
				j('#alert1').show();
				j('#alert1').html("<strong>Please Select Record to perform operation</strong>");
				j("#alert1").delay(3200).fadeOut(300);
			}
	}

</script>
<style>
.profile1 {
  background-color: #428bca;
  bottom: 0;
  height: 26px;
  left: 0;
  margin-left: auto;
  margin-right: auto;
  margin-top: -27px;
  opacity: 0;
  overflow: visible;
  right: 0;
  text-align: center;
  transition: all 0.2s cubic-bezier(0.17, 0.67, 0.84, 0.57) 0s;
  width: 100%;
  z-index: 1000;
}
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
  width: 106px;
  z-index: 1000;
}

.imge:hover .profile {
    opacity: 0.9;
    bottom: 0;
}
.img:hover .profile1 {
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
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View Images</a></li>
							<li class="" id="t2"><a href="#tab1-2" data-toggle="tab">Edit Images</a></li>
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
								 <form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_gallery" enctype="multipart/form-data">
									 <div id="accordion" class="panel-group">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a style="background: #D7DADC;border-radius: 5px;padding:12px;font-size:13px;" class="collapse collapsed" data-toggle="collapse" data-parent="#accordionacademic" href="#collapseThree">
														Add Album
														<i style="float:right" class="fa fa-fw fa-chevron-down"></i>
													</a>
												</h4>
											</div>
											<div class="panel-collapse collapse" id="collapseThree">
											<div class="panel-body">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-sm-4 control-label" for="inputEmail3">Titile <span class="asterisk">*</span></label>
													<div class="col-sm-8">
														<input type="text" placeholder="Title" id="title" name="title" class="form-control" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label" for="inputEmail3">Department <span class="asterisk">*</span></label>
													<div class="col-sm-8">
														<select class="form-control" name="sub_mnu1" id="sub_mnu1">
														<option value="">Select Department</option>
														<?php foreach($dept as $dp){ ?>
															<option value="<?php echo $dp['id'];?>"><?php echo $dp['name'];?></option>
														<?php }?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label" for="inputEmail3">Category <span class="asterisk">*</span></label>
													<div class="col-sm-8">
														<select class="form-control" name="category" id="sub_mnu1">
														<option value="">Select Category</option>
														<option value="Department">Department</option>
														<option value="News & Events">News & Events</option>-->
														</select>
													</div>
												</div>													
												<div class="form-group">
													<label class="col-sm-4 control-label" for="inputPassword3">Images <span class="asterisk">*</span></label>
													<div class="col-sm-8">
														<input type="file" id="upload" name="upload[]" multiple  class="form-control" style="padding:0px" required>
														<span class="asterisk">Upload Image of minimum (250 X 150) Dimention and allowed file Types are (jpg ,jpeg ,png)</span>
													</div>
												</div>
												
											</div>
											<div class="col-sm-6">
												 <div class="form-group" id="img1">                                              
													  <div class="col-sm-4">
														 <!--<img id="img1" src="http://localhost/budhrani/uploads/d.png" style="width:75%; height:102px; display:; " />-->
													  </div>
												 </div>
											</div>
											<input type="hidden" id="bid" name="bid">
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
										</div>
									</div>
								</form>
							
								 <div class="table-responsive"> 
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
											  <th width="17%" style="text-align:center;">Title</th>
											  <th width="20%" style="text-align:center;">Album</th>
											  <th width="10%" style="text-align:center;">Status</th>
											  <th width="10%" style="text-align:center;">Edit</th>  
											  <th width="10%" style="text-align:center;">Delete</th>                                                                   
										</thead>
										  <script>							
										  var jArray=[];
										  jArray.push(<?php echo json_encode($result);?>);
										  var jArray1=[];
										  jArray1.push(<?php echo json_encode($album);?>);
										  </script>
										  <tbody id="tdata">
										  <?php 
										  if(!empty($result)){
										  foreach($result as $row)
										  {
										  ?>
										  <tr>
										       <td class="mail-check" style="text-align:center;">
													 <input type="checkbox" id="<?php echo $row['aid']; ?>" onchange="eachcheck(this,'subtitle');" class="icheck square-blue">
											   </td>
											   <td style="text-align:center;"><?php echo $row['title'];?></td>
											   <td style="text-align:center;" class="imge">
											   <?php if($row['image']!=""){?>
											   <img src="<?php echo base_url()?>data/uploads/gallery/<?php echo $row['image'];?>" style="width:106px;height:90px;border:1px solid #D7DADC;margin:0px" >
											   <div class="profile">
													 <form action="#" method="post" style="display: inline">
														 <input type="file" name="change" id="change" style="display:none;">
														 <a id="uploadimg" title="Upload profile Image" class="icons" href="javascript:;" style="padding: 1px;">
															 <i class="fa fa-edit" style="color:#fff;" onclick="edit_album(<?php echo $row['album_id'];?>)"></i>
														 </a>
													 </form>
											   </div>
											   <?php }?>
											   </td>
											   <td>
												   <select name="status" id = "status" class="form-control" onchange="change_aboutus('<?php echo $row['aid'];?>',this.value)">
													<option <?php if($row['status']=='Show'){?> selected="selected" <?php }?>>Show</option>
													<option <?php if($row['status']=='Hide'){?> selected="selected" <?php }?>>Hide</option>
												   </select>
											   </td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;" id="EditB" class="fa fa-edit" title="Edit Record" onclick="Edit(jArray1,'<?php echo $row['aid'];?>')"></i></td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px; margin-left:10px;" id="DeleteN" class="fa fa-trash-o" title="Delete Record" onclick="Delete('<?php echo $row['aid'];?>',this)"></i></td>                               
										  </tr>
										  <?php }} else{?>
											  <tr>
												<td colspan="4" style="color:#2599D6;text-align:center;">No Data Available !</td>
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
							
							<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/imagegallery">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
						    </form>
							<div id="tab1-2" class="tab-pane">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">Edit Images</h4>
									</div>
									<div class="panel-body" id="imageview">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<form id="formh" name="formh" method="post" enctype="multipart/form-data">
	<input type="hidden" id="idd" name="idd">
	<input type="hidden" id="al_id" name="al_id">
	<input type="file" id="upload1" name="upload1" style="display:none;">
</form>
<form id="formadd1" name="formadd" method="post" enctype="multipart/form-data">
	<input type="hidden" id="add_id" name="add_id">
	<input type="file" id="upload2" name="upload2" style="display:none;">
</form>