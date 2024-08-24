<!--Start Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102355494-3', 'auto');
  ga('send', 'pageview');

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
	window.location = '<?php echo base_url();?>index.php/Singlecampdata/'+id;
}
</script>
 <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:15px;">
                            <h2>Camp Data</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Camp Data</li>
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
								<h3 class="panel-title">Camp Data</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled categoryItem">
								<?php foreach($camp1 as $cp){?>
									<li><a href="<?php echo base_url();?>index.php/Singlecampdata/<?php echo $cp['id'];?>"><?php echo $cp['name'];?>
									
									</a></li>
								<?php }?>
								</ul>
							</div>
						</div>
						
						<div class=" panel panel-default courseSidebar">
						<div class="pannel-body">
							<select class="DepartmentSelect" onchange="change_dia(this.value)">
								<option value="">Select Camp</option>
								<?php foreach($camp1 as $cp){?>
									<option value="<?php echo $cp['name'];?>"><?php 
									$cp['name'] = str_replace("Radiology & Imaging","Radiology & Imaging Services",$cp['name']); echo $cp['name'];?></option>
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
								<span class="color-4" style="font-size:24px !important;"> <?php echo str_replace("Department","",$row['name']);?></span>
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
					<img src="<?php echo base_url();?>data/uploads/campdata/<?php echo $img[$i];?>" class="img-responsive" style="height:300px;width:100%">
					</div>
					<?php } } else {?>
					<img src="<?php echo base_url();?>data/uploads/campdata/<?php echo $row['image'];?>" class="img-responsive" style="height:300px;width:100%">
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
	