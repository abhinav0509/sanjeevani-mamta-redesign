<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>data/css/AutoComplete.css" rel="stylesheet" type="text/css"/>  
<script src="<?php echo base_url();?>data/js/Autojquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>data/dist/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>data/js/Jsfordatabindingteemp.js"></script>
<script>
var j = jQuery.noConflict();
var Frarr =[];
j(document).ready(function(){
	search();
	j("#alert").delay(2000).fadeOut(300);
	j(".career").addClass("active");
	j(".td_text").slimscroll({
		  height: '40px',
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
		   j("#img1").html("");
		   CKEDITOR.instances.pdisc.setData("");
		   j("#type").attr('disabled',false);
		   j("#formdetail").attr('action','<?php echo base_url();?>index.php/Insert/insert_career');
	   });
	   
	   j('#cl_date').datepicker();
	});
	
	function Edit(obj,id)
	{
		j("#formdetail").attr('action','<?php echo base_url();?>index.php/Update/update_career');
		j("#t1").removeClass("active");
		j("#t2").addClass("active");
		j("#tab1-1").removeClass("active");	
		j("#tab1-2").addClass("active");
		
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
		j("#type").val(obj[0][r].type);
		j("#title").val(obj[0][r].title);
		j("#designation").val(obj[0][r].designation);		
		j("#qualification").val(obj[0][r].qualification);
		j("#experience").val(obj[0][r].experience);
		j("#cl_date").val(obj[0][r].closing_date);
		CKEDITOR.instances.pdisc.setData(obj[0][r].pdesc);		
	}
	
	function Delete(id,obj){
		if(confirm("Are you sure, you want to delete It.."))
		j.ajax({
			url:"<?php echo base_url();?>index.php/Delete/delete_career",
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
				url:"<?php echo base_url();?>index.php/Status/career",
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
	function search()
	{
	j("#sub_mnu1").autocomplete({
		   source: function (request, response) {
			  j.ajax({
				  type: "POST",
				 // contentType: "application/json; charset=utf-8",
					url: "<?php echo base_url();?>index.php/Search_Data/Getcareer",
					data: { term: j("#sub_mnu1").val()},
					dataType: "json",
					  success: function (data) {
						   response(j.map(data, function (item) {
							  return {
								  label: item.title,// Name must be column name in table which you want to show Ex:- Username
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
			 j('#sub_mnu1').val(ui.item.label);
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
			j("#hfield").attr('action','<?php echo base_url();?>index.php/Delete_Data/delete_careers');
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
			
			<?php $this->load->view('cms/sidebar');?>
		
			<div style="padding: 0px;border: 1px solid #DDDDDD;border-radius: 0px;" class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
				<div style="height: 925px;margin: 0px;" class="tab-content">	
					<div class="row">
						<ul class="nav nav-tabs" style="margin:16px;margin-top:0px;">
							<li class="active" id="t1"><a href="#tab1-1" data-toggle="tab">View Careers</a></li>
							<li class="" id="t2"><a href="#tab1-2" data-toggle="tab">Add Careers</a></li>
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
													<input type="text" id="sub_mnu1" name="sub_mnu1" class="form-control" placeholder="Search By Title" />
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
												  <th width="9%" style="text-align:center;">Posting Date</th>
												  <th width="9%" style="text-align:center;">Closing Date</th>
												  <th width="10%" style="text-align:center;">Title</th>
												  <th width="10%" style="text-align:center;">Designation</th>
												  <th width="10%" style="text-align:center;">Qualification</th>
												  <th width="10%" style="text-align:center;">Experience</th>
												  <th width="20%" style="text-align:center;">Description</th>
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
												   <td style="text-align:center;"><?php echo $row['posted_date'];?></td>
													<?php $dt = str_replace("/","-",$row['closing_date']);
														  $date=date_create($row['closing_date']);
													?>
												   <td style="text-align:center;"><?php echo date_format($date,"d-m-Y")?></td>	
												   <td style="text-align:center;"><?php echo $row['title'];?></td>												   
												   <td style="text-align:center;"><?php echo $row['designation'];?></td>
												   <td style="text-align:center;"><?php echo $row['qualification'];?></td>
												   <td style="text-align:center;"><?php echo $row['experience'];?></td>
												   <td><p class="td_text"><?php echo strip_tags($row['pdesc']);?></p></td>
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
												<td colspan="9" style="color:#2599D6;text-align:center;">No Data Available !</td>
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
								
							<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Admin/career">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
						   </form>
								
							<div id="tab1-2" class="tab-pane">
								<form id="formdetail" name="formdetail" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Insert/insert_career" enctype="multipart/form-data">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">Add Careers</h4>
										</div>
										<div class="panel-body">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputPassword3">Type<span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<select id="type" name="type" class="form-control" onchange="" required>
														<option value="">Select Type</option>
														<option value="Medical">Medical</option>
														<option value="Nursing">Nursing</option>
														<option value="Non Medical">Non Medical</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Titile <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Title" id="title" name="title" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Designation <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Job Designation" id="designation" name="designation" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Qualification <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Qualification" id="qualification" name="qualification" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Experience <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Experience" id="experience" name="experience" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Closing Date </label>
												<div class="col-sm-8">
												<div class="input-group date">
													<input class="form-control" data-rel="datepicker" placeholder="Closing Date" type="text" id="cl_date" name="cl_date">
													<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
												</div>	
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