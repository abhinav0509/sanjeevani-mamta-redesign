<script>
var j =jQuery.noConflict();
j(document).ready(function(){
	j(".package").addClass("active open");
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
</script>

<div class="page-wrapper">
<div class="page-content">
	<div class="container-fluid-md">
		<div class="row">
			<?php $this->load->view('cms/sidebar'); ?>
			<div style="padding: 0px;border: 1px solid #DDDDDD;border-radius: 0px;" class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
				<div style="height: 925px;margin: 0px;" class="tab-content">	
					<div class="row">
						<ul class="nav nav-tabs" style="margin:16px;margin-top:0px;">
							<li class="active"><a href="#tab1-1" data-toggle="tab">View Package Description</a></li>
							<li class=""><a href="#tab1-2" data-toggle="tab">Add Package Description</a></li>
						</ul>
						<div class="tab-content" style="margin:16px;">
							<div id="tab1-1" class="tab-pane active">
								 <div class="table-responsive"> 
									<table id="" class="table table-bordered" style="float:left;">
										<thead style="background: #f5f5f5; color: #FFF;">   
											  <th width="15%" style="text-align:center;">Type</th>
											  <th width="15%" style="text-align:center;">Test Category</th>
											  <th width="20%" style="text-align:center;">Test Name</th>
											  <th width="10%" style="text-align:center;">Edit</th> 
											  <th width="10%" style="text-align:center;">Delete</th>                                                                   
										</thead>
										<tbody id="tdata">
										  <tr>
											   <td style="text-align:center;"></td>
											   <td style="text-align:center;"></td>
											   <td style="text-align:center;"></td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px;margin-left:10px;" id="EditB" class="fa fa-edit" title="Edit Record"></i></td>
											   <td style="text-align:center;"><i style="color:#275273;font-size:20px; margin-left:10px;" id="DeleteN" class="fa fa-trash-o" title="Delete Record"></i></td>                               
										  </tr>
										</tbody>
									</table>                 
								</div>
							</div>
							
							
							
							<div id="tab1-2" class="tab-pane">
								<form id="formdetail" name="formdetail" class="form-horizontal">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">Add Package Description</h4>
											
											<div class="panel-options">
												<a data-rel="collapse" href="#"><i class="fa fa-fw fa-minus"></i></a>
												<a data-rel="reload" href="#"><i class="fa fa-fw fa-refresh"></i></a>
												<a data-rel="close" href="#"><i class="fa fa-fw fa-times"></i></a>
											</div>
										</div>
										<div class="panel-body">
										<div class="col-sm-6">
										    <div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Type <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<select class="form-control" id="pack_type" name="pack_type" >
														<option value="">Select Health Package</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Test Category <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Add Test Category" id="test" name="test" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" for="inputEmail3">Test Name <span class="asterisk">*</span></label>
												<div class="col-sm-8">
													<input type="text" placeholder="Add Test Name" id="test" name="test" class="form-control">
												</div>
											</div>
										</div>
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
