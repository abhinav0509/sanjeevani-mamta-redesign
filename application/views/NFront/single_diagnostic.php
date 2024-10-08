<!--Start Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8M2EKL5HY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8M2EKL5HY2');
</script>
<!--  /Start Google Analytics -->
<script>
$(document).ready(function(){
	$(".about-countinner ul").addClass("myhealthList");
	$(".about-countinner ol").addClass("myhealthList");
	$(".about-countinner ul li").prepend('<i class="fa fa-check-square"></i> ');
	$(".about-countinner ol li").prepend('<i class="fa fa-check-square"></i> ');
	$(".service").addClass('active');
});

function change_dia(id)
{
	window.location = '<?php echo base_url();?>index.php/Singlediagnostic/'+id;
}
</script>
 <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:15px;">
                            <h2>Diagnostics</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Diagnostics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->
	
	
	<section class="mainContent full-width clearfix productSection">
		<div class="container">
			<div class="row DepartPostion">
				<div class="col-md-3 col-sm-5 col-xs-12 DheadPos">
					<aside>
						<div class="panel panel-default courseSidebar" style="display:none;">
							<div class="panel-heading bg-color-4 border-color-4">
								<h3 class="panel-title">Diagnostics</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled categoryItem">
								<?php foreach($dept1 as $de){?>
									<li><a href="<?php echo base_url();?>index.php/Singlediagnostic/<?php echo $de['id'];?>"><?php echo $de['name'];?>
									
									</a></li>
								<?php }?>
								</ul>
							</div>
						</div>
						
						<div class=" panel panel-default courseSidebar">
						<div class="pannel-body">
							<select class="DepartmentSelect" onchange="change_dia(this.value)">
								<option value="">Select Diagnostics</option>
								<?php foreach($dept1 as $de){?>
									<option value="<?php echo $de['name'];?>"><?php 
									$de['name'] = str_replace("Radiology & Imaging","Radiology & Imaging Services",$de['name']); echo $de['name'];?></option>
								<?php }?>
							</select>
						</div>
					</div>
					</aside>
				</div>
				<div class="col-md-9 col-sm-7 col-xs-12">
					<?php foreach($result as $row){?>
					 	<div class="sectionTitle text-center">
							<h2 style="margin-bottom:20px;">
								<span class=""></span>
								<!--<span class="color-2"><?php echo $row['name']; $row['name'] = str_replace("Radiology & Imaging","Radiology & Imaging Services",$row['name']);?>?></span>-->
								<span class="color-4" style="font-size:24px !important;">The Department Of <?php echo str_replace("Department","",$row['name']);?></span>
								<span class=""></span>
							</h2>
						</div>	
						<?php break;?>
					<?php }?>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12  myBorder">
					<div class="about-countinner md-services">
					<?php foreach($result as $row){?>
						<?php if($row['image']!=""){
					$img = explode(",",$row['image']);
					if(count($img)>1){
					for($i=0; $i<count($img);$i++)	{	?>
					<div class="col-sm-6" style="padding:4px;">
					<img src="<?php echo base_url();?>data/uploads/diagnostics/<?php echo $img[$i];?>" class="img-responsive" style="height:300px;width:100%">
					</div>
					<?php } } else {?>
					<img src="<?php echo base_url();?>data/uploads/diagnostics/<?php echo $row['image'];?>" class="img-responsive" style="height:300px;width:100%">
					<?php } }?>
					<!--<div class="anstImg">
						<img src="<?php echo base_url();?>newFront/img/anst.jpg">
						<img src="<?php echo base_url();?>newFront/img/anst.jpg">
					</div>-->
					<p class="clrr"></p>
					<div class="anstText">
						<?php echo $row['pdesc'];?>
					</div>
					<?php }?>
					</div>
				</div>
				 </div>
        </div>
	</section>
	