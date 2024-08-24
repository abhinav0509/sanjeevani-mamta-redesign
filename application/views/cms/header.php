<!doctype html>


<head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sanjeevani Mamta Hospital & Research Centre| "A unit of Mamta & Madhusudan Agarawal Foundation" </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/iriy-admin.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/demo/css/demo.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/assets/font-awesome/css/font-awesome.css">
		 <link rel="stylesheet" href="<?php echo base_url();?>data/dist/assets/plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/plugins/rickshaw.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/plugins/morris.min.css">	
		<link href="<?php echo base_url();?>front/css/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url();?>front/js/sweetalert/sweetalert.min.js"></script>		
        <script src="<?php echo base_url();?>data/dist/assets/libs/jquery/jquery.min.js"></script>
    </head>
    <body class="">
	<script>
	var j=jQuery.noConflict();
	j(document).ready(function(){
		
		j.getJSON("https://www.medicohelpline.com/HospitalNotifications?lgKey=AGS9hZBNpGXElYrataENyiS&dataType=json",function(data){
		//j.getJSON("http://192.168.1.14:8084/MedicoHelpline/HospitalNotifications?lgKey="+j("#hossid").val()+"&dataType=json",function(data){
			var items = [];
			console.log(data);
			j(".headerMailNotification").html(data['mailNotification']);
		});
		
		j("#np").keyup(function(){
			j("#cp").val("");
			j("#text_match").text("");
		});
		
		j("#cp").keyup(function(){
			var len = j("#np").val().length;
			if(j("#cp").val().length>=len){
			if(j("#cp").val()==j("#np").val()){
				j("#text_match").css('color','green');
				j("#text_match").text("Password Match");
				j("#subtn").attr('disabled',false);
			}
			else{
				j("#text_match").css('color','red');
			    j("#text_match").text("Not Match");
				j("#subtn").attr('disabled',true);
			}
			}
		});	
		j("#excelupload").submit(function(e){
	   e.preventDefault();
		j.ajax({
		  url:'<?php echo base_url();?>index.php/Password_Data/reset_password', 
		  contentType: false,
		  processData: false,
		  cache: false,
		  type: 'POST',
		  data      : new FormData(this),
		  success : function (data)
		  {
			 var obj = j.parseJSON(data);
			if(obj.message=="Success")
			{
				swal({
					title: "Success",
					type: "success",
					text: "Password Changed Successfully!....."
				});
				 j("#myModal").modal('hide');
				 j("#user_id").val("");
				 j("#np").val("");
				 j("#cp").val("");
				 j("#text_match").text("");
			}else if(obj.message=="Error")
			{
				swal({
					type : "Error",
					type: "error",
					text: "Error Please Try Again!!..."
				});
				$("#btnCont").attr('disabled',false);
				$("#loaderImg").hide();
			}
			 
	      },
		  error: function(data)
			{
				
			}
		 
	    }); 
		});
	});
	
	function show1()
	 {
		 j("#np").val("");
		 j("#myModal").modal('show');
		 j("#user_id").val(<?php echo $user['id']?>);
	 }
	</script>
	<style>
	.table th {
		color: #000;
		font-weight: 600;
	}
	a {
		color: #555;
		text-decoration: none;
	}
	.nav > li > ul > li > a{
	    color: #555;
		font-size:12px;
		font-weight:normal;
	}
	#img1 > img {
		padding: 4px;
	}
	.table th {
		color: #000;
		font-weight: 200;
	}
	.nav-sub > li.active > a {
		color: #2599d6;
	}
	</style>
	  <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
               <div style="padding-top: 0px" class="headerLogo nav navbar-nav navbar-nav-expanded">
                    <a href="javascript:;" style="display:inline;"><img height="50px" src="<?php echo base_url();?>data/images/titleBarLogo_1.png" style="top: 0"></a>
                    <a href="javascript:;" id="Menulabel" class="headerhomeMenu" title="Menu"></a>
                </div> 
               <ul id="opnav" class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                   <!--<li>
                        <a class="dropdown-toggle external btn btn-primary btn-sm" style="color: #fff; background: #2599D6; border-color: #2599D6; font-weight: bold; font-size: 12px; padding: 1px 7px; margin-top: 13px;" href="javascript:;">
                           Patient Dashboard
                        </a>
                    </li>-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle external" style="font-size:15px;padding:15px;" href="javascript:;">
                            <i class="glyphicon glyphicon-home"></i>
                            <span style="display:none;" class="badge badge-up badge-danger badge-small headerAppointmentNotification"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications pull-right">
                            <li style="color: white;padding-left: 10;font-weight: bold;" class="dropdown-title bg-inverse">
                                <i class="fa fa-fw fa-calendar-o"></i> Today's Appointments - <span style="display:none;" class="headerAppointmentNotification"></span>
                            </li>                            
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><div id="appointmentnotificationlist" style="overflow: hidden; width: auto; height: 200px;"><div class="todayAppHeaderList" style="padding:10px 5px 10px 10px ;">                                          <a href="DoctorAppointmentDashboard" style="text-decoration: none;">                                             <div class="notification" style="padding:0px;" href="javascript:;">                                                 <div class="notification-thumb pull-left">                                                     <i class="fa fa-warning fa-2x text-danger"></i>                                                 </div>                                                 <div class="notification-body">                                                     <strong>Sorry !! No Appointments</strong><br>                                                 </div>                                             </div>                                         </a>                                     </div></div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            <li class="dropdown-footer">
                                <a href="Home"><i class="fa fa-share"></i> See all Appointments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                         <a class="dropdown-toggle external headerMail" style="font-size:15px;padding:15px;" href="http://www.medicohelpline.com/HospitalLogin?lgKey=<?php echo $id[0]['hosid'];?>&urltab=Message">
                            <i class="fa fa-envelope-o" style="font-size: 17px"></i>                            
                            <span class="badge badge-up badge-warning badge-small headerMailNotification"></span>
                        </a> 
                    </li> 
                   <li class="dropdown">
                        <a style="background: transparent;" data-toggle="dropdown" class="dropdown-toggle navbar-user external" href="javascript:;">
                            <img width="128px" height="128px" class="img-circle" src="<?php echo base_url();?>data/images/hospitalicon.jpg">
                            <span style="color:#1063AF;font-weight:bold" class="hidden-xs" id="headerUserName">Sanjeevani Mamta Hospital & Research Centre</span>
                            <b style="color:#1063AF;" class="caret"></b>
                        </a>
                        <ul style="left:inherit;right: 0;" class="dropdown-menu pull-right-xs">
							<li><a class="external" href="<?php echo base_url();?>" target="_blank"><i class="fa fa-fw fa-globe"></i> Go to Website</a></li>
                            <li class="divider"></li>
							
							<li><a class="external" href="<?php echo base_url();?>index.php/Admin/mail_config" ><i class="fa fa-fw fa-envelope"></i> Mail Configuration</a></li>
							<li><a class="external" href="javascript:;" onclick="show1()"><i class="fa fa-fw fa-key"></i> Change Password</a></li>
                            <li><a class="external" href="<?php echo base_url();?>index.php/Login/Logout"><i class="fa fa-fw fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
				 <input type="hidden" id="hossid" name="hossid" value="<?php echo $id[0]['hosid'];?>"> 
            </nav>
        </header>
		
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<form method="post" id="excelupload" action="" enctype="multipart/form-data">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Change Password</h4>
						</div>
						<div class="modal-body">
							<div id="LogIn"  class="panel-collapse collapse in" style="border-top: 0px;">
								<input type="hidden" id="user_id" name="user_id" value="">
								<div class="row">
									<div class="col-lg-12">     
										<div class="form-group">
										<label class="control-label" for="inputPassword3">New Password</label>
										<input type="password" id="np" name="np"  class="form-control" pattern=".{8,}" required title="Minimum 8 characters" />
										</div>
									</div> 
									<div class="col-lg-12">     
										<div class="form-group">
										<label class="control-label" for="inputPassword3">Confirm Password</label>
										<input type="password" id="cp" name="cp"  class="form-control" pattern=".{8,}" required title="Minimum 8 characters" />
										</div>
									</div> 
									<div class="col-sm-12">
										<span id="text_match" style="font-weight:bold;color:green;"></span>
									</div>
								</div>   
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" type="submit" id="subtn">Submit</button>   
							<button class="btn btn-primary modal-close" type="button" data-dismiss="modal">Cancel</button> 
						</div>
					</div>
				</form>
			</div>
		</div>
