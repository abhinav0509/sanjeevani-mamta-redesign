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
</style>
<script>
$(document).ready(function(){
	$(".categories").slimscroll({
		  height: '200px',
		  wheelStep: 1
	   });
   $(".academic").addClass("active");
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
				 <?php $this->load->view('Front/sidebar');?>
			</div>
			
			<div class="col-md-9">
				<div class="about_cont acid">
				<?php if(!empty($result)){?>
					 <div class="about-countinner md-services">
					 <?php foreach($result as $row){?>
						<h2 class="sec_Hd"> <?php echo $row['title'];?></h2>
						<?php if($row['image']!=""){
						$img = explode(",",$row['image']);
						if(count($img)>1){
						for($i=0; $i<count($img);$i++)	{	?>
						<div class="col-sm-6" style="padding:0px;">
						<img src="<?php echo base_url();?>data/uploads/department/<?php echo $img[$i];?>" class="img-responsive" style="height:250px;">
						</div>
						<?php } } else {?>
						<img src="<?php echo base_url();?>data/uploads/department/<?php echo $row['image'];?>" class="img-responsive" style="height:250px;">
						<?php } }?>
						
						<?php echo $row['pdesc'];?>
					 <?php }?>
					 </div>
				<?php } else {?>	
					<code>No Data Available.....</code>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
       