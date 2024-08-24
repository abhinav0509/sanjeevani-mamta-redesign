<script src="<?php echo base_url(); ?>front/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>front/js/jquery.slimscroll.min.js"></script> 
<style>
.topsider_box h3 {
	color: #424040;
	font-size: 13px;
	margin-top: 6px;
	margin-bottom: 5px;
	padding-left: 5px;
}
.topsider_box .iconn{
	background: #f9f9f9 none repeat scroll 0 0;
	height: 60px;
	line-height: 55px;
	color: #424040;
}
.topsider_box {
	padding: 13px 59px;
}
.top_sidebar {
	background: #f9f9f9 none repeat scroll 0 0;
}
p.colorWhite {
	color: #424040;
}
.topsider_box.active,.topsider_box .iconn.active {
	background: #e7e7e7 none repeat scroll 0 0;
}
.latest-news p{
	line-height: 20px;
	margin: 0px;
}
.news_thumb img {
	max-width: 50px;
}
.latest-news a.care_bt{
	background-color: #fff;
	border: 1px solid #ddd;
	border-radius: 50px;
	color: #f25d30;
	font-size: 11px;
	font-weight: 500;
	margin-top: 10px;
	text-transform: uppercase;
	width: 100px;
}	
.latest-news a.care_bt {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 50px;
    color: #f25d30;
    font-size: 11px;
    font-weight: 500;
    margin-top: 3px;
    text-transform: uppercase;
    width: 74px;
	height: 23px;
	line-height: 22px;
}
.patient-details a.care_bt {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 50px;
    color: #f25d30;
    font-size: 11px;
    font-weight: 500;
    margin-top: 3px;
    text-transform: uppercase;
    width: 74px;
	height: 23px;
	line-height: 22px;
}
.latest-news .post{
   border-bottom: 1px solid #e7e7e7;
}
.latest-news .post last-child { border-bottom:0px;}
.topsider_box {
   border: 1px solid #e7e7e7;
   border-bottom: 0px;
   border-left: none;
}
.siderbar-widget .patient_comment{
  height: 75px;
}
.siderbar-widget #patient_slide {
    padding: 7px 8px;
}
.siderbar-widget .patient_comment {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #2986e2;
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 8px 12px;
    position: relative;
    text-align: center;
}
.siderbar-widget .patient_comment p {
  font-size: 12px;
}
.siderbar-widget .patient_comment {
    width: 224px;
	margin-bottom: 17px;
}
.siderbar-widget .patient_comment p {
    color: #777;
    font-size: 12px;
    font-weight: 300;
    line-height: 17px;
    margin: 0;
    text-align: justify;
}
.siderbar-widget .thumb img {
    width: 64px !important;
}
.area_content {
	margin-top: 9px;
}	
p {
	color: #403e3e;
	font-family: "Raleway",sans-serif;
	font-size: 13px;
	font-weight: 300;
	line-height: 25px;
	text-align: justify;
}
.about_cont h4{
   font-size: 14px;
   margin-top: 20px;
}	
.about_cont .h2, h2 {
    font-size: 20px;
}
.md-services .img-responsive {
	padding: 0px 5%;
}
.md-services ul {
	display: inline-block;
	padding-left: 15px;
}
.md-services  p, .md-services ul li, .md-services p b, .md-services p span {	
	font-family: "Raleway",sans-serif;
	font-size: 14px;
	line-height: 22px;
	text-align: justify;
}
.fgfg
{
	list-style:none;
}
</style>
<!--breadcrum style-->
<style>
.breadcrumb_area {
    background: none;
    padding: 6px 0;
    position: relative;
}
.breadcrumb_area {
    background: none;
    padding: 6px 0;
    position: relative;
}
.breadcrumb_area::after {
    background-image: none;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.about_page .breadcrumb_area {
    background: none;
    position: relative;
}
.about_page .breadcrumb_area {
    background: none;
}
.breadcrumb_area::after {
    background-color: #f5f5f5;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
ul.ct_lis li {
    margin: 7px 0;
}
.ct_lis.cat_line_icon > li {
    border-bottom: 1px solid #e7e7e7;
    padding: 2px;
}
.md-services p, .md-services ul li, .md-services p b, .md-services p span {
    font-family: "Raleway",sans-serif;
    font-size: 13px;
    line-height: 22px;
    text-align: justify;
}
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
.patient-details a.care_bt {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 50px;
    color: #f25d30;
    font-size: 11px;
    font-weight: 500;
    margin-top: 3px;
    text-transform: uppercase;
    width: 74px;
	height: 23px;
	line-height: 22px;
}
.choose-list li {
   line-height: 25px;
   font-size: 13px;
}	
.choose-list{
    -moz-column-count: 2;
    -moz-column-gap: 100px;
    -webkit-column-count: 2;
    -webkit-column-gap: 100px;
}

.f1_container {
  position: relative;
  height: 120px;
  z-index: 1;
}
.f1_container {
  perspective: 1000;
}
.f1_card {
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: all 0.7s linear;
}
.f1_container:hover .f1_card {
  transform: rotateY(180deg);
  box-shadow: -5px 5px 5px #353535;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.face.back {
  display: block;
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 10px;
  color: white;
  text-align: center;
  background-color:#fff;
}
.front.face {
	box-shadow: 1px 2px 3px grey;
}
</style>
<script>
$(document).ready(function(){
	$(".categories").slimscroll({
		  height: '150px',
		  wheelStep: 1
	   });
   $(".alliance").addClass("active");
   $(".about-countinner ul").addClass("choose-list");
   $(".about-countinner ol").addClass("choose-list");
   
});
</script> 
<!-- START BREADCRUMB AREA -->
<div class="breadcrumb_area" style="margin-top: 127px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="pull-right">
					<li><a href="<?php echo base_url();?>index.php/Welcome">Home</a></li>
					<li>&gt;</li>
					<li><a href="<?php echo base_url();?>index.php/Welcome/services">Hospital services</a></li>
					<li>&gt;</li>
					<li>Department</li>
				</ul>
			</div>
		</div>
	</div>
</div> 
<!-- END BREADCRUMB AREA -->

<!-- SLIDER START -->           
<section class="about_area section-padding" style="padding-top:16px;">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				 <div class="sided" style="padding: 10px;margin-bottom:5px;">
					<div class="sidebar-widget">							
							<h4 class="sec_Hd">Quick Links</h4>
					</div>
					<div class="categories area_content">
						<ul class="ct_lis cat_line_icon">
						<?php foreach($all as $fac){?>
							<li><a href="<?php echo base_url();?>index.php/Welcome/alliances/<?php echo $fac['type'];?>"> <?php echo $fac['type'];?></a></li>
						<?php } ?>
						</ul>
					</div>
				 </div>		
				 <?php $this->load->view('Front/sidebar');?>
			</div>
			
			<div class="col-md-9">
				<div class="about_cont allins">
					 <div class="about-countinner md-services">
					 <h2 class="sec_Hd"><?php echo $ty;?></h2>
					 <div class="row my-thumb" style="margin:0px;">
					 <?php if(!empty($result)){
						 foreach($result as $row){
							 if($row['image']!=""){?>
						  <div class="col-sm-3" style="padding:5px;">
							<div class="f1_container">
								<div class="f1_card ">
									<div class="front face">
										<img src="<?php echo base_url();?>/data/uploads/alliances/<?php echo $row['image'];?>" style="width:250px;height:120px">
									</div>
									<div class="back face center">
										<p style="text-align: center;"><?php echo $row['pdesc']?></p>
									</div>
								</div>
							</div>
						  </div>
					 <?php  } } } else{?>
						 <code>No Data Available...</code>
					 <?php }?>
					 </div>
					 <p style="margin-top:30px;">[Note: The above list is only indicative & it is not absolute.
						Kindly contact the Hospital Insurance Department for latest tie-ups and to check if your TPA is registered with us.]</p>
					 </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
       