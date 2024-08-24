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
.myhospital-list ul li a {
	color: #F26529;
	line-height: 22px;
}
table.doctable{
	border-collapse : collapse;
	background-color : #E5F2FF;
	width:100%;
}
	   
.doctable td { border:1px solid #330099; color : #330099; padding : 5px;}
.doctable th { background-color:#6C3611; color:#fff; border : 0px;}
.doctable .tdhead { color : Black; font-weight : bold; text-align :left;}
.doctable .insti  {color :#7E4026; font-weight : bold; text-align :left;}
.doctable tr td:nth-of-type(1) { width : 145px; }       
.doctable tr td:nth-of-type(2) { width : 154px; } 
.doctable tr td:nth-of-type(3) { width : 146px; } 
.doctable .tdhead { padding-left : 2px !important;} 
.doctable thead, .doctable tbody { display  : block;  }
.dvtab {       
	height: 480px;
	overflow-y : auto;   
	display : inline-block;              
}
.doctable tbody:nth-of-type(4) td{ width : 100%; }
.doctable tbody:nth-of-type(4) td p{ display : list-item; list-style : disc inside; }
.dvtab .doctable thead tr th {
	width: 33% !important;
	/* border: 1px solid #ddd; */
	text-align: center;
}
.doctable tbody tr {
	width: 100% !important;
	display: inline-block;
}
.fristable tbody tr td {
	width: 32.9% !important;
	display: inline-block;
	border-collapse: collapse !important;
}
.secondtable tbody tr td, .thrdtable tbody tr td {
	width: 49.7% !important;
	display: inline-block;
}
.siderbar-widget.myhospital-list{
	margin-top:45px;
}
thead, tbody {
    font-size: 13px;
}
tbody p{
  line-height:15px;
}
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
.test{
    -moz-column-count: 3;
    -moz-column-gap: 30px;
    -webkit-column-count: 3;
    -webkit-column-gap: 30px;
}
.hlth > li::before {
    color: #219BC4;
}
</style>
<script>
$(document).ready(function(){
	$(".health").addClass("active");
	$(".categories").slimscroll({
		  height: '200px',
		  wheelStep: 1
	   });
	$(".about-countinner ul").addClass("choose-list");
	$(".about-countinner ol").addClass("choose-list");
})
</script>
<!-- START BREADCRUMB AREA -->
<div class="breadcrumb_area" style="margin-top: 127px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="pull-right">
					<li><a href="#">Home</a></li>
					<li>&gt;</li>
					<li>Health-checkups</li>
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
			<div class="col-md-3 ">
				<div class="sided" style="padding: 10px;margin-bottom:5px">
					<div class="sidebar-widget">							
							<h4 class="sec_Hd">Quick Links</h4>
					</div>
					<div class="categories area_content">
						<ul class="ct_lis cat_line_icon">
							<?php foreach($package as $dt){?>
							<li><a href="<?php echo base_url();?>index.php/Welcome/Health_checkup/<?php echo $dt['id'];?>"> <?php echo $dt['name'];?></a></li>
							<?php } ?>									
						</ul>
					</div>
				</div>		
				<?php $this->load->view('Front/sidebar');?>
			</div>
			
			<div class="col-md-9">
			<?php if(!empty($result)){?>
				<div class="about_cont hlthck">
					<div class="about-countinner">
					 <?php foreach($result as $row){?>
						<h2 class="sec_Hd"><?php echo $row['name'];?></h2>
						<h3 style="color:red;margin:0px"><i class="fa fa-rupee"></i> <?php echo $row['sp'];?></h3>
						<div class="row">
							<?php if($row['image']!=""){?>
							<div class="col-md-3">
								<img class="img-responsive singlebanner" src="<?php echo base_url();?>/data/uploads/package/<?php echo $row['image'];?>" style="width:170px;height:100px;margin-bottom: 0px;margin-top:20px;">
							</div>
							<?php }?>
							<?php if($row['pdesc']!=""){?>
							<div class="col-md-9">
								<p  class="area_content">
								  <?php echo $row['pdesc'];?> 
								</p>
							</div>
							<?php }?>
						</div>
						<h4 style="margin-top:20px">Tests</h4>
						<ul class="test">
						<?php $test = explode(",",$row['testname']);?>
						<?php for($i=0; $i<count($test); $i++){?>
							<li><?php echo $test[$i];?></li>
						<?php }?>
						</ul>
					 <?php }?>
						<h4 style="margin-top:30px">Instructions for Health Check-up</h4>
						<ul class="hlth">
							<li>Please take a prior appointment (020-66099751) before coming for Health Check up.</li>
							<li>Kindly observe fasting for 12 to 14 hours before coming for the health check up. (no solid or liquids to be consumed in this period other than plain water)</li>
							<li>Please report to Health Check-up Department between 9.00am to 11.00am. (Patients coming after 11.00 am have to come on the next day for some test)</li>
							<li>Please collect a sterilized container from the pathology lab on previous day.</li>
							<li>You can collect your report on next day and then proceed for physician consultation.</li>
							<li>Kindly bring old report or details of any past medical history.</li>
							<li>If you are using any contact lenses, Kindly do not wear your lenses 24 hours before coming for health checkup.</li>
						</ul>
					</div>	
				</div>
			<?php } else {?>
				<code>No Data Available....</code>
			<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
       