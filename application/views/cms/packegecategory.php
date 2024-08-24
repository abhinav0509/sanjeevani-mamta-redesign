<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>data/css/AutoComplete.css" rel="stylesheet" type="text/css"/>  
<script src="<?php echo base_url();?>data/js/Autojquery-ui.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url();?>data/js/Jsfordatabindingteemp.js"></script>
<script>
var j =jQuery.noConflict();
var Frarr =[];
var mode="Add";
j(document).ready(function(){
	search();
	search1();
	j("#alert").delay(2000).fadeOut(300);
	j(".package").addClass("active open");
	j(".td_text").slimscroll({
		  height: '70px',
		  wheelStep: 1
	   });
	   CKEDITOR.replace("pdisc");
	   var Pageindex = j("#pindex").val();
	   var rcount = j("#rcount").val();
	   j("#sub_mnu1").val(j("#page").val());
	   j("#sub_mnu2").val(j("#title1").val());
	   
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
		  j("#title1").val(j("#sub_mnu2").val());
		  j('#hfield').submit();
	   });
	   
	   j("#Cancelbtn").click(function(){
		   j("#img1").html("");
		   CKEDITOR.instances.pdisc.setData("");
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_package');
	   });		
});

function search()
{
	j("#title").autocomplete({
		   source: function (request, response) {
			  j.ajax({
				  type: "POST",
				 // contentType: "application/json; charset=utf-8",
					url: "<?php echo base_url();?>index.php/Search_Data/GetCategory",
					data: { term: j("#title").val()},
					dataType: "json",
					  success: function (data) {
						   response(j.map(data, function (item) {
							  return {
								  label: item.name,// Name must be column name in table which you want to show Ex:- Username
								  label1: item.price,
								  label2: item.discount,
								  label3: item.sp,
								  label4: item.pdesc,
								  label5: item.package_type,
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
			 j('#title').val(ui.item.label);    
			 j('#price').val(ui.item.label1); 
			 j('#discount').val(ui.item.label2); 
			 j('#sp').val(ui.item.label3);    
			 j('#package_type').val(ui.item.label5);    
			CKEDITOR.instances.pdisc.setData(ui.item.label4);    
			  //return false;
			  if(mode=="Edit"){
			  j.ajax({
				url:'<?php echo base_url();?>index.php/Admin/GetPackage',
				type:'POST',
				data:{'title':j('#title').val()},
				success: function(data)
				{
					var obj= j.parseJSON(data);
					if(obj.msg=='Exist')
					{	
						j('#title').val("");
						j('#ext').show();
					}
					else
					{
					}
				},
				error: function()
				{
				}
			});
		  }
		  }
	  });
}
function show(input){
	var dvPreview = document.getElementById("img1");
	dvPreview.innerHTML = "";
	var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
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

function Edit(obj,id,$cid)
	{
		mode="Edit";
		j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_package');
		j("#t1").removeClass("active");
		j("#t2").addClass("active");
		j("#tab1-1").removeClass("active");	
		j("#tab1-2").addClass("active");
		
		j("#upload").attr('required',false);
		j("#img1").html("");
		var op='';
		var r;    
		for(i=0;i<obj[0].length;i++)
		  {
			 if(obj[0][i].id==id)
			 {
			  r=i;
			 }  
		  }
		j("#bid").val(obj[0][r].id);
		j("#cid").val($cid);
		j("#title").val(obj[0][r].name);
		j("#price").val(obj[0][r].price);
		j("#discount").val(obj[0][r].discount);
		j("#package_type").val(obj[0][r].package_type);
		j("#sp").val(obj[0][r].sp);
		j("#testcategory").val(obj[0][r].testcategory);
		j("#testname").val(obj[0][r].testname);
		CKEDITOR.instances.pdisc.setData(obj[0][r].pdesc);
		if(obj[0][r].image!=""){
		var imgg = obj[0][r].image;
		var l = imgg.split(",");
		for(var k=0; k<l.length; k++)
		{
			var img_url = "<?php echo base_url();?>data/uploads/package/"+l[k];
			op+='<img src="'+img_url+'" style="height:115px;width:125px;border:1px solid #D7DADC;margin-right:5px;">';
		}
		j("#img1").append(op);
		}
	}
	
	function Delete(id,obj){
		if(confirm("Are you sure, you want to delete It.."))
		j.ajax({
			url:"<?php echo base_url();?>index.php/Delete/delete_package",
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
	function calculate(){
		var price = j("#price").val();
		if(j("#discount").val()!=""){
			var dis =  j("#discount").val();
			var ss = ((price/100)*(dis));
			var sp = price - ss;
			j("#sp").val(sp);
		}
		else if(j("#discount").val()==0){
			j("#sp").val(price);
		}
		else{
			j("#sp").val(price);
		}
		
		
	}
	function search1()
	{
	j("#sub_mnu2").autocomplete({
		   source: function (request, response) {
			  j.ajax({
				  type: "POST",
				 // contentType: "application/json; charset=utf-8",
					url: "<?php echo base_url();?>index.php/Search_Data/Getpackage",
					data: { term: j("#sub_mnu2").val()},
					dataType: "json",
					  success: function (data) {
						   response(j.map(data, function (item) {
							  return {
								  label: item.testcategory,// Name must be column name in table which you want to show Ex:- Username
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
			 j('#sub_mnu2').val(ui.item.label);
		  }
	});
	}
	function search_data(){
      j('#pindex').val(1);
      j("#page").val(j("#sub_mnu1").val());
	  j("#title1").val(j("#sub_mnu2").val());
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
			j("#hfield").attr('action','<?php echo base_url();?>index.php/Delete_Data/delete_package');
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
.fa
{
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
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View Package Category</a></li>
							<li class="" id="t2"><a href="#tab1-2" data-toggle="tab">Add Package Category</a></li>
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
													<select class="form-control" id="sub_mnu1" name="sub_mnu1" >
													<option value="">Select Package</option>
													<?php foreach($category as $fac){?>
														<option value="<?php echo $fac['id'];?>"><?php echo $fac['name'];?></option>
													<?php }?>
													</select>
												</div>
												<div class="col-sm-3" style="display:none;">
													<input type="text" id="sub_mnu2" name="sub_mnu2" class="form-control" placeholder="Search By Test Category" />
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
											  <th width="15%" style="text-align:center;">Package</th>
											  <th width="10%" style="text-align:center;">Test Category</th>
											  <th width="18%" style="text-align:center;">Test Name</th>
											  <th width="14%" style="text-align:center;">Image</th>
											  <th width="8%" style="text-align:center;">Brochure</th>
											  <th width="18%" style="text-align:center;">Description</th> 
											  <th width="8%" style="text-align:center;">Action</th>                                                                   
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
											   <td style="text-align:center;"><?php echo $row['name'];?><br>(<i class="fa fa-rupee"></i><?php echo $row['sp'];?>)</td>
											   <td style="text-align:center;"><?php echo $row['testcategory'];?></td>
											   <?php $test = explode(",",$row['testname']);?>
											  <td style="text-align:center;">
											   <?php $cnt= count($test);//for($i=0;$i<count($test);$i++){?>
											   <?php //echo $test[$i];?><br>
											   <?php //}?>
											   <?php echo '<b>'."Total Test:".$cnt."".'</b>';echo '</br>'; echo " ".$row['testname'];?>
											   </td>
											   <td style="text-align:center;">
											   <?php if($row['image']!=""){?>
											   <img src="<?php echo base_url()?>data/uploads/package/<?php echo $row['image'];?>" style="width:auto;height:90px;border:1px solid #D7DADC;margin:0px">
											   <?php } else{?>
													<img src="<?php echo base_url()?>data/images/noimg.png" style="width:90px;height:90px;border:1px solid #D7DADC;margin:0px">
											   <?php }?>
											   </td>
											   <td style="text-align:center;">
											   <?php if($row['brochure']!=""){?>
											   <a href="<?php echo base_url()?>data/uploads/brochure/<?php echo $row['brochure'];?>" target="blank" class="docshow fancybox.iframe"><i style="font-size:60px; padding-left:15px; color: #AB1B20;" class="fa fa-file-pdf-o"></i></a>
											   <?php }?>
											   </td>
											   <td style=""><p class="td_text"><?php echo strip_tags($row['pdesc']);?></p></td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;" id="EditB" class="fa fa-edit" title="Edit Record" onclick="Edit(jArray,'<?php echo $row['id'];?>','<?php echo $row['pid'];?>')" ></i><i style="color:#275273;font-size:20px; margin-left:10px;" id="DeleteN" class="fa fa-trash-o" title="Delete Record" onclick="Delete('<?php echo $row['id'];?>',this)"></i></td>                               
										  </tr>
										   <?php }} else{?>
										  <tr>
										    <td colspan="6" style="color:#2599D6;text-align:center;">No Data Available !</td>
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
							
							<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/packegecategory">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="title1" name="title1" value="<?php if(isset($dt['title1'])){ echo $dt['title1']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
							</form>
							
							<div id="tab1-2" class="tab-pane">
								<form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_package" enctype="multipart/form-data">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">Add Package Category</h4>
										</div>
										</div>
										<div class="panel-body">
										<div class="col-sm-6">
										    <div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Package Name <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Package Name" id="title" name="title" class="form-control" required>
													<span id="ext" style="display:none;color:red;font-size:10px;">Package Already Exist</span>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Price <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="number" placeholder="MRP" id="price" name="price" onkeyup="calculate()" class="form-control" min="0" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Discount </label>
												<div class="col-sm-8">
													<input type="number" placeholder="Discount" id="discount" name="discount" onkeyup="calculate()" min="0" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Selling Price <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="CheckUp Price" id="sp" name="sp"  class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
										    <div class="form-group" style="display:none;">
												<label class="col-sm-4 control-label" for="inputEmail3">Test Category <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Add Test Category" id="testcategory" name="testcategory" class="form-control" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Test Name <span class="asterisk">*</span></label>
												<div class="col-sm-8">
												
													<input type="text" placeholder="Add Test Name" id="testname" name="testname" class="form-control" required>
													<!--<div class="col-sm-4">
													<input type="checkbox"  id="testname" name="testname[]" value="Haemogram" class="form-control">Haemogram</br>
													<input type="checkbox"  id="testname" name="testname[]" value="Blood Group" class="form-control">Blood Group</br>
													<input type="checkbox"  id="testname" name="testname[]" value="Blood Urea" class="form-control">Blood Urea</br>
													</div>
													<div class="col-sm-4">
													<input type="checkbox"  id="testname" name="testname[]" value="Blood Sugar (Fasting)" class="form-control">Blood Sugar (Fasting)</br>
													<input type="checkbox"  id="testname" name="testname[]" value="Serum Cholesterol" class="form-control">Serum Cholesterol</br>
													<input type="checkbox"  id="testname" name="testname[]" value="Urine Examination" class="form-control">Urine Examination</br>
													</div>-->
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Brochure </label>
												<div class="col-sm-8">
													<input type="file" id="upload1" name="upload1" class="form-control" style="padding:0px">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Image <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="file" id="upload" name="upload" onchange="show(this);" class="form-control" style="padding:0px" REQUIRED>
												</div>
											</div>
											<!-- <div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Type<span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<select class="form-control" name="package_type" id="package_type">
														<option value="">Select Package Type</option>
														<option value="Wellness">Wellness</option>
														<option value="Pre-operative">Pre-Operative</option>
													</select>
												</div>
											</div>	 -->
											 <div class="form-group" id="img1">                                              
												  <div class="col-sm-4">
													 <!--<img id="img1" src="http://localhost/budhrani/uploads/d.png" style="width:75%; height:102px; display:; " />-->
												  </div>
											 </div>
											 <div class="form-group" id="img2">                                              
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
										<input type="hidden" id="cid" name="cid">
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
