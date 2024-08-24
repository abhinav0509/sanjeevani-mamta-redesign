<!doctype html>
<html class="no-js">
    
<!-- Mirrored from iriy-admin.kibao.pl/v1.1.0/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Aug 2014 06:25:18 GMT -->
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/css/iriy-admin.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/demo/css/demo.css">
        <link rel="stylesheet" href="<?php echo base_url();?>data/dist/assets/font-awesome/css/font-awesome.css">	
        <script src="<?php echo base_url();?>data/dist/assets/libs/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url();?>data/dist/assets/bs3/js/bootstrap.min.js"></script>
		
		
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
            ga('create','UA-52444811-1','auto');ga('send','pageview');
        </script>

        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <style>
    body {
    background: #222D32;
    font-family: 'Roboto', sans-serif;
}

.login-box {
    margin-top: 75px;
    height: auto;
    background: #1A2226;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #1A2226;
    color: #ECF0F5;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: #6C6C6C;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}
    </style>
    <body>
	<script>
	var j=jQuery.noConflict();
	j(document).ready(function(){
	   j(".alert1").delay(2000).fadeOut(300);
	   j("#pass").keyup(function(){
			j("#cp").val("");
			j("#text_match").text("");
		});
		
		j("#cp").keyup(function(){
			var len = j("#pass").val().length;
			if(j("#cp").val().length>=len){
			if(j("#cp").val()==j("#pass").val()){
				j("#text_match").css('color','green');
				j("#text_match").text("Password Match");
				j("#subtn2").attr('disabled',false);
			}
			else{
				j("#text_match").css('color','red');
			    j("#text_match").text("Not Match");
				j("#subtn2").attr('disabled',true);
			}
			}
		});	
	   j('#password').focus(function(){
		  j('#passer').hide();
	   });
	   j('#email').focus(function(){
		  j('#nmer').hide();
	   });
 
		j("#user").keyup(function(){
			j.ajax({
				url:'<?php echo base_url();?>index.php/Password_Data/Getuserid',
				type:'POST',
				data:{'title':j('#user').val()},
				success: function(data)
				{
					var obj= j.parseJSON(data);
					if(obj.msg=='Not Exist')
					{	
						j("#subtn").attr('disabled',true);
					}
					else if(obj.msg=='Exist')
					{
						j("#user_id").val(obj.id);
						j("#subtn").attr('disabled',false);
					}
				},
				error: function()
				{
				}
			});
		});
		
		j("#excelupload").submit(function(e){
			j("#user_id1").val(j("#user_id").val());
		   e.preventDefault();
			j.ajax({
			  url:'<?php echo base_url();?>index.php/Password_Data/mail_code', 
			  contentType: false,
			  processData: false,
			  cache: false,
			  type: 'POST',
			  data      : new FormData(this),
			  success : function (data)
			  {
				 var obj = j.parseJSON(data);
				 j("#user").val("");
				 j("#myModal").modal('hide');
				 j("#myModal1").modal('show');
				 
			  } 
			 
			}); 
		});
		j("#verifycode").submit(function(e){
			j("#user_id2").val(j("#user_id1").val());
		   e.preventDefault();
			j.ajax({
			  url:'<?php echo base_url();?>index.php/Password_Data/verify', 
			  contentType: false,
			  processData: false,
			  cache: false,
			  type: 'POST',
			  data      : new FormData(this),
			  success : function (data)
			  {
				 var obj = j.parseJSON(data);
				 if(obj.msg=='Exist')
					{
					 j("#code").val("");
					 j("#myModal1").modal('hide');
					 j("#myModal2").modal('show');
					 j("#pass").val("");
					}
				 else if(obj.msg=='Not Exist')
					{
					  j("#ext1").show();
					  j("#code").val("");
					  j("#ext1").delay(2000).fadeOut(300);
					}
				 
			  } 
			 
			}); 
		});
		j("#form3").submit(function(e){
			j("#user_id2").val(j("#user_id1").val());
		   e.preventDefault();
			j.ajax({
			  url:'<?php echo base_url();?>index.php/Password_Data/change_pass', 
			  contentType: false,
			  processData: false,
			  cache: false,
			  type: 'POST',
			  data      : new FormData(this),
			  success : function (data)
			  {
				var obj = j.parseJSON(data);
				alert(obj.message);
				j("#pass").val("");
				j("#cp").val("");
				j("#myModal2").modal('hide');
			  } 
			 
			}); 
		});
	});	
	function pass()
	{
		 j("#myModal").modal('show');
	}
	function validate()
	{
 
	   if(j('#email').val()=="")
	   {
         j('#nmer').show();
		 j("#nmer").delay(2000).fadeOut(300);
		 return false;
	   }
	   if(j('#password').val()=="")
	   {
	     j('#passer').show();
		 j("#passer").delay(2000).fadeOut(300);
		 return false;
	   }
	   return true;
	
	}
	</script>
  <!--  <div class="container">-->
		<!--<center>-->
		<!--	<form method="post" action="<?php echo base_url();?>index.php/Login/admin_login" onsubmit="return validate()">-->
		<!--		<div class="panel panel-default form-container" style="margin-top:40px; width:50%;">	-->
		<!--			<div class="panel-heading">-->
		<!--				<h3 style="text-align:center;">Admin Login</h3>-->
		<!--			</div>-->
		<!--			<div class="panel-body">-->
		<!--					<span style="color:#F01C2B; display:none; float:left;font-size:14px;" id="nmer" class="col-sm-12">Username is required field</span>-->
		<!--					<div class="form-group input-group col-sm-12">-->
		<!--						<label class="sr-only" for="email">Email Address</label>-->
		<!--						<span class="input-group-addon">@</span>-->
		<!--						<input type="text" class="form-control input-lg" name="email" id="email" placeholder="Username">-->
		<!--					</div>	-->
							
		<!--					<div class="form-group input-group col-sm-12">-->
		<!--						<label class="sr-only" for="password">Password</label>-->
		<!--						<span class="input-group-addon"><i class="fa fa-lock" style="font-size:17px;color:#787878;"></i> </span>-->
		<!--						<input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password">-->
		<!--					</div>-->
		<!--					<span style="color:#F01C2B; display:none; float:left;font-size:14px;" id="passer" class="col-sm-12">Password is required field</span>-->
		<!--					<div>-->
		<!--						<?php if(isset($message)){ ?>-->
		<!--						<span style="float:left; color:#FF0000;" class="alert1"><?php echo $message; ?> </span>-->
		<!--						<?php } ?>-->
		<!--				   </div>-->
		<!--			</div>-->
		<!--			<div class="panel-footer">-->
		<!--				<div class="form-group" style="text-align:left;">-->
		<!--						<input type="submit" value="Login" style="width:15%;height:32px;" class="btn btn-primary">-->
		<!--						<a href="javascript:;" onclick="pass()" class="text-primary-dark text-underline" style="float:right;margin-top:5px;">Forget Your Password?</a>-->
		<!--				</div>-->
						<!--<input type="submit" value="Login" style="width:20%;height:40px;" class="btn btn-primary">
		<!--				<a href="javascript:;" onclick="pass()" class="text-primary-dark text-underline" style="float:right;margin-top:10px;margin-right:10px">Forget Your Password?</a>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</form>-->
		<!--</center>-->
  <!--  </div>-->
	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post" action="<?php echo base_url();?>index.php/Login/admin_login" onsubmit="return validate()">
                         <span style="color:#F01C2B; display:none; float:left;font-size:14px;" id="nmer" class="col-sm-12">Username is required field</span>
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email Address</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="" i>
                            </div>
                            <span style="color:#F01C2B; display:none; float:left;font-size:14px;" id="passer" class="col-sm-12">Password is required field</span>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                  <a href="<?php echo base_url();?>">back to website</a>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" value="Login" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                                <a href="javascript:;" onclick="pass()" class="text-primary-dark text-underline" style="float:right;margin-top:5px;">Forget Your Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
	</div>
	
	
	
	<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal" text-align="center" data-backdrop="static" data-keyboard="false"> 
             <div  class="modal-dialog modal-lg">
				   <form method="post" id="excelupload" action="" enctype="multipart/form-data">
						<div class="modal-content login-social" style="width:300px;">
							 <div class="row">  
								 <div class="col-lg-12" style="background-color:#FFF;">                                  
									 <div class="panel-heading login" id="login">
										 <h4 class="panel-title" style="background-color: #2babd2;width: 329px;height: 32px;margin-left: -31px;margin-top: -10px;">
											 <a href="javascript:;" >
												 <font size="4px" color="#fff">
											  Enter Email Address</font>
											 </a>
											 <div  class="modal-close" type="button" data-dismiss="modal" style="border-radius:5px;float:right;">
												<i class="fa fa-times"></i>
											 </div>
										 </h4>
									 </div>
									 <div id="LogIn"  class="panel-collapse collapse in" style="border-top: 0px;">
									   <input type="hidden" id="user_id" name="user_id" value="">
									   <span id="ext" style="font-size:11px;color:#2F71A9;">Enter Registered Email ID</span>
										  <div class="row">
											 <div class="col-lg-12">     
												 <div class="form-group">
													<input type="email" id="user" name="user" placeholder="Enter Registered Email address" class="form-control" required autocomplete="off">
												 </div>
											 </div> 
										  </div>   
										  <div class="row">
											 <div class="col-lg-12 form-group">                                    
												 <button class="btn btn-primary" type="submit" id="subtn">Next</button>                               
											 </div>
										  </div>
									 </div>
								 </div>
							 </div>
					    </div>
				   </form>
			 </div>
	</div>
	<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal" text-align="center" data-backdrop="static" data-keyboard="false"> 
             <div  class="modal-dialog modal-lg">
				   <form method="post" id="verifycode" action="" enctype="multipart/form-data">
						<div class="modal-content login-social" style="width:300px;">
							 <div class="row">  
								 <div class="col-lg-12" style="background-color:#FFF;">                                  
									 <div class="panel-heading login" id="login">
										 <h4 class="panel-title" style="background-color: #2babd2;width: 329px;height: 32px;margin-left: -31px;margin-top: -10px;">
											 <a href="javascript:;" >
												 <font size="4px" color="#fff">
											  Enter Verification code</font>
											 </a>
											 <div  class="modal-close" type="button" data-dismiss="modal" style="border-radius:5px;float:right;">
												<i class="fa fa-times"></i>
											 </div>
										 </h4>
									 </div>
									 <div id="LogIn"  class="panel-collapse collapse in" style="border-top: 0px;">
									   <input type="hidden" id="user_id1" name="user_id1" value="">
										  <span id="textt" style="font-size:11px;color:#2A6395;">Enter the Code has been sent on your EmailId</span>
										  <div class="row">
											 <div class="col-lg-12">     
												 <div class="form-group">
													<input type="text" id="code" name="code" placeholder="Enter Code" class="form-control" required>
													<span id="ext1" style="color:red;display:none;">Please check Code</span>
												</div>
											 </div> 
										  </div>   
										  <div class="row">
											 <div class="col-lg-12 form-group">                                    
												 <button class="btn btn-primary" type="submit" id="subtn1">Next</button>                               
											 </div>
										  </div>
									 </div>
								 </div>
							 </div>
					    </div>
				   </form>
			 </div>
	</div>
	<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal" text-align="center" data-backdrop="static" data-keyboard="false"> 
             <div  class="modal-dialog modal-lg">
				   <form method="post" id="form3" action="" enctype="multipart/form-data">
						<div class="modal-content login-social" style="width:300px;">
							 <div class="row">  
								 <div class="col-lg-12" style="background-color:#FFF;">                                  
									 <div class="panel-heading login" id="login">
										 <h4 class="panel-title" style="background-color: #2babd2;width: 329px;height: 32px;margin-left: -31px;margin-top: -10px;">
											 <a href="javascript:;" >
												 <font size="4px" color="#fff">
											  Change Password</font>
											 </a>
											 <div  class="modal-close" type="button" data-dismiss="modal" style="border-radius:5px;float:right;">
												<i class="fa fa-times"></i>
											 </div>
										 </h4>
									 </div>
									 <div id="LogIn"  class="panel-collapse collapse in" style="border-top: 0px;">
									   <input type="hidden" id="user_id2" name="user_id2" value="">
										  <div class="row">
											 <div class="col-lg-12">     
												 <div class="form-group">
													<label class="control-label" for="inputPassword3">New Password</label>
													<input type="password" id="pass" name="pass" placeholder="Enter New Password" class="form-control" pattern=".{8,}" required title="Minimum 8 characters" />
												 </div>
											 </div>
											 <div class="col-lg-12">     
												 <div class="form-group">
												  <label class="control-label" for="inputPassword3">Confirm Password</label>
												  <input type="password" id="cp" name="cp" placeholder="Enter Confirm Password" class="form-control" pattern=".{8,}" required title="Minimum 8 characters" />
												 </div>
											 </div>
											 <div class="col-sm-12">
												<span id="text_match" style="color:green;"></span>
											 </div>
										  </div>   
										  <div class="row">
											 <div class="col-lg-12 form-group">                                    
												 <button class="btn btn-primary" type="submit" id="subtn2">Submit</button>                               
											 </div>
										  </div>
									 </div>
								 </div>
							 </div>
					    </div>
				   </form>
			 </div>
	</div>

</body>


<!-- Mirrored from iriy-admin.kibao.pl/v1.1.0/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Aug 2014 06:25:18 GMT -->
</html>
