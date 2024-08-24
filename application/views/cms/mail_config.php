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
	   
	   j("#Cancelbtn").click(function(){
		   j("#img1").html("");
		   CKEDITOR.instances.pdisc.setData("");
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_mailconfig');
	   });
	   
	   
	  
});

function Edit(obj,id)
{
	j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_mailconfig');
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
	j("#mail").val(obj[0][r].mail);
	j("#password").val(obj[0][r].password);
}

function Delete(id,obj){
	if(confirm("Are you sure, you want to delete It.."))
	j.ajax({
		url:"<?php echo base_url();?>index.php/Delete/delete_mailconfig",
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
			url:"<?php echo base_url();?>index.php/Status/mail_config",
			type:"post",
			data:{'id':id,'str':str},
			success:function(data){
				var obj = j.parseJSON(data);
				j("#alert1").text(obj.message);
				j("#alert1").fadeIn('slow');
				j("#alert1").delay(2000).fadeOut(300);
				window.location='<?php echo base_url();?>index.php/Admin/mail_config';
			},
			error:function(){
				
			}
		});
}
var showForm = function(id){
  document.getElementById(id).style.display = '';
}

/*
function editFunction(row_id)
{
	alert("hi");

	 document.getElementById("mailid").contentEditable = true;
	  
	 document.getElementById("pwdid").contentEditable = true;
		
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
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View Mail Configuration</a></li>
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
								<form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_mailconfig" enctype="multipart/form-data">
									<div id="accordion" class="panel-group">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a style="background: #D7DADC;border-radius: 5px;padding:12px;font-size:13px;" class="collapse collapsed" data-toggle="collapse" data-parent="#accordionacademic" href="#collapseThree">
														Add Mail Configuration
														<i style="float:right" class="fa fa-fw fa-chevron-down"></i>
													</a>
												</h4>
											</div>
											<div class="panel-collapse collapse" id="collapseThree">
											<div class="panel-body">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-sm-4 control-label" for="inputEmail3">Mail Id <span class="asterisk">*</span></label>
													<div class="col-sm-8">
														<input type="email" placeholder="Email Id" id="mail" name="mail" class="form-control" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label"  for="inputPassword3">Password</label>
													<div class="col-sm-8">
														<input type="text" placeholder="Password" id ="password" name="password" class="form-control" required>
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
									 <!--<button id= "formdetail" onclick="showForm('formdetail')">Add New Email</button>-->
									<table id="" class="table table-bordered" style="float:left;">
										<thead style="background: #f5f5f5; color: #FFF;"> 
											  <th width="10%" style="text-align:center;">Mail ID</th>
											  <th width="10%" style="text-align:center;">Password</th>
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
										       <td style="text-align:center;" id="mailid" class="mailid"><?php echo $row['mail'];?></td>
											   <?php $p = strlen($row['password']);?>
											   <td style="text-align:center;" id="pwdid" class="pwdid">
													<?php echo str_repeat("*",$p); ?>
											   </td>
											   <td>
												   <select name="status" id = "status" class="form-control" onchange="change_aboutus('<?php echo $row['id'];?>',this.value)">
													<option <?php if($row['status']=='Not Active'){?> selected="selected" <?php }?>>Not Active</option>
													<option <?php if($row['status']=='Active'){?> selected="selected" <?php }?>>Active</option>
												   </select>
											   </td><!--onclick="Edit(jArray,'<?php echo $row['id'];?>')"   onclick="editFunction('<?php echo $row['id'];?>',this)" -->
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;" id="EditB" class="edit-user fa fa-edit" title="Edit Record" onclick="Edit(jArray,'<?php echo $row['id'];?>')"></i><i style="color:#275273;font-size:20px; margin-left:10px;" id="DeleteN" class="fa fa-trash-o" title="Delete Record" onclick="Delete('<?php echo $row['id'];?>',this)"></i></td>                               
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

							<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/mail_config">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
						    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>