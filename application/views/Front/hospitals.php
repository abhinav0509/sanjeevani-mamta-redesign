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
    font-size: 18px;
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
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
.myhosptlist a{
	font-size:13px;
} 
</style>
<script>
$(document).ready(function(){
	$(".about").addClass("active");
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
					<li><a href="<?php echo base_url();?>index.php/Welcome/about_us">About</a></li>
					<li>&gt;</li>
					<li>Hospitals</li>
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
							<li><a href="<?php echo base_url();?>index.php/Welcome/mission_vission"> Mission & Vision</a></li>
							<li><a href="<?php echo base_url();?>index.php/Welcome/charity"> Charity</a></li>
							<li><a href="<?php echo base_url();?>index.php/Welcome/highlights"> Our Important Highlights</a></li>
							<li><a href="http://www.sadhuvaswani.org/" target="_blank"> Sadhu Vaswani Mission’s</a></li>
							<li><a href="<?php echo base_url();?>index.php/Welcome/hospitals"> Hospitals</a></li>
						</ul>
					</div>
				 </div>		
				<?php $this->load->view('Front/sidebar');?>
			</div>
			
			<div class="col-md-9">
				<img src="<?php echo base_url();?>front/img/inlaksimgs/3.jpg" class="img-responsive singlebanner">
				<div class="about_cont">
					 <div class="about-countinner">
						<h2 class="sec_Hd">Hospitals</h2>
						<ul class="myhosptlist">
							<li>
								<a href="" alt="">
									<strong>INLAKS &amp; BUDHRANI HOSPITAL</strong></br>
									Multi-Specialty Hospital
								</a>
							</li>
							<li>
								<a href="" alt="">
									<strong>M. N. BUDHRANI CANCER INSTITUTE</strong></br>
											Sate-of-the Art Cancer institute            
								</a>
							</li>
							<li>
								<a href="" alt="">
									<strong style="color:#006600;">K. K. EYE INSTITUTE</strong><br>
									Comprehensive Eye care Unit
								</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/Welcome/FBHI" alt="" target="_blank">
									<strong style="color:#FF1919;">FABIANI & BUDHRANI HEART INSTITUTE</strong><br>
										Heart Care Hospital
								</a>
							</li>
						</ul>						
					 </div>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
        