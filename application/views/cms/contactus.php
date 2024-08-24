<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>data/css/AutoComplete.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url();?>data/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>data/js/Jsfordatabindingteemp.js"></script>
<script>
var j =jQuery.noConflict();
var Frarr =[];
j(document).ready(function(){
	j("#alert").delay(2000).fadeOut(300);
	j(".contact").addClass("active open");
	j(".td_text").slimscroll({
		  height: '70px',
		  wheelStep: 1
	   });
	   CKEDITOR.replace("pdisc");
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
            PageSize: 10,
            RecordCount: parseInt(rcount)

        });
        
	  j(".page").click(function () {
		  var pageindex = j(this).attr('page');          
		  j('#pindex').val(pageindex);
		  j("#page").val(j("#sub_mnu1").val());
		  j('#hfield').submit();
	   });
	   
	   j("#upload1").change(function(){
		  j("#formh").submit(); 
	   });
	   
	   j("#Cancelbtn").click(function(){
		   j("#img1").html("");
		   CKEDITOR.instances.pdisc.setData("");
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_news');
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
});

function Edit(obj,id,$cid)
{
	j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_contacts');
	j("#t1").removeClass("active");
	j("#t2").addClass("active");
	j("#tab1-1").removeClass("active");	
	j("#tab1-2").addClass("active");
	
	var r;    
	for(i=0;i<obj[0].length;i++)
	  {
		 if(obj[0][i].id==id)
		 {
		  r=i;
		 }  
	  }
	j("#bid").val(obj[0][r].id);
	j("#telephone").val(obj[0][r].telephone);
	j("#fax").val(obj[0][r].fax);
	j("#email").val(obj[0][r].email);
	j("#url").val(obj[0][r].urll);
	CKEDITOR.instances.pdisc.setData(obj[0][r].address);
}

function Delete(id,obj){
	if(confirm("Are you sure, you want to delete It.."))
	j.ajax({
		url:"<?php echo base_url();?>index.php/Delete/delete_contacts",
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
			url:"<?php echo base_url();?>index.php/Status/contacts",
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
			j("#hfield").attr('action','<?php echo base_url();?>index.php/Delete_Data/delete_contacts');
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
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View Contacts</a></li>
							<li class="" id="t2"><a href="#tab1-2" data-toggle="tab">Add Contacts</a></li>
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
											  <th width="12%" style="text-align:center;">Telephone No.</th>
											  <th width="10%" style="text-align:center;">Fax no.</th>
											  <th width="15%" style="text-align:center;">Email</th>
											  <th width="20%" style="text-align:center;">Website URL</th>
											  <th width="20%" style="text-align:center;">Address</th>
											  <th width="10%" style="text-align:center;">Status</th>
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
											   <td style="text-align:center;"><?php echo $row['telephone'];?></td>
											   <td style="text-align:center;"><?php echo $row['fax'];?></td>
											   <td style="text-align:center;"><?php echo $row['email'];?></td>
											   <td style="text-align:center;"><?php echo $row['urll'];?></td>
											   <td style="text-align:center;"><?php echo strip_tags($row['address']);?></td>
											   <td>
												   <select name="status" id = "status" class="form-control" onchange="change_aboutus('<?php echo $row['id'];?>',this.value)">
													<option <?php if($row['status']=='Show'){?> selected="selected" <?php }?>>Show</option>
													<option <?php if($row['status']=='Hide'){?> selected="selected" <?php }?>>Hide</option>
												   </select>
											   </td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;" id="EditB" class="fa fa-edit" title="Edit Record" onclick="Edit(jArray,'<?php echo $row['id'];?>')" ></i><i style="color:#275273;font-size:20px; margin-left:10px;" id="DeleteN" class="fa fa-trash-o" title="Delete Record" onclick="Delete('<?php echo $row['id'];?>',this)"></i></td>                               
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
							
							<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/contactus">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
						    </form>
							
							<div id="tab1-2" class="tab-pane">
								<form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_contacts" enctype="multipart/form-data">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">Add Contacts</h4>
										</div>
										<div class="panel-body">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Telephone No. <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Telephone No." id="telephone" name="telephone" class="form-control" pattern="^(0|[1-9][0-9]*)$" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Fax No.</label>
												<div class="col-sm-8">
													<input type="text" placeholder="Fax No." id="fax" name="fax" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Email ID <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Email ID." id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Website URL</label>
												<div class="col-sm-8">
													<input type="text" placeholder="Website URL" id="url" name="url" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">Address <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<textarea placeholder="Email" id="pdisc" name="pdisc" class="form-control"></textarea>
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
