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
.md-services .img-responsive {
	padding: 0px 5%;
}
.md-services ul {
	display: inline-block;
	font-size: 12px !important;
	padding-left: 15px;
}
.md-services  p, .md-services ul li, .md-services p b, .md-services p span {	
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
.about-countinner > .img-responsive, .singlebanner {
	display:block;
    height: auto;
    margin-bottom: 20px;
    width: 100%;
}
</style>
<script>
 $(document).ready(function(){
   $(".hospital").addClass("active");
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
					<li>Hospital services</li>
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
							<li><a href="<?php echo base_url();?>index.php/Welcome/medicalservices"> Medical Services</a></li>
							<li><a href="#"> Diagnostics</a></li>
							<li><a href="#"> Specialties</a></li>
							<li><a href="#"> Infrastructure</a></li>
							<li><a href="#"> Superior Technology</a></li>
							<li><a href="<?php echo base_url();?>index.php/Welcome/patientresponsibility"> Patient Responsibility</a></li>
							<li><a href="<?php echo base_url();?>index.php/Welcome/patienteducation"> Patient  Education</a></li>
						</ul>
					</div>
				 </div>		
				 <?php $this->load->view('Front/sidebar');?>
			</div>
			
			<div class="col-md-9">
				<div class="about_cont medd">
					 <div class="about-countinner md-services">
						<h2 class="sec_Hd"> Anesthesia</h2>
						<img src="<?php echo base_url();?>front/img/title_anaesthesie.jpg" class="img-responsive">
						<p>
							Anesthesia controls pain during surgery or other medical procedures. It includes using medicines, and sometimes close monitoring, to keep you comfortable. It can also help control breathing, blood pressure, blood flow, and heart rate and rhythm, when needed.
							An anesthesiologist or a nurse anesthetist takes charge of your comfort and safety during surgery. 
							This topic focuses on anesthesia care that you get from these specialists. Anesthesia may be used to:
							<ul>
								<li>Relax you.</li>
								<li>Block pain.</li>
								<li>Make you sleepy or forgetful.</li>
								<li>Make you unconscious for your surgery.</li>
							</ul>
							Other medicines also may be used to relax your muscles during surgery.
						</p>
						<p>
							<b>
								What are the types of anesthesia?
							</b>
							<ul>
								<li>Local anesthesia numbs a small part of the body. 
								You get a shot of medicine (anesthetic) directly into the surgical 
								area to block pain. Sometimes the doctor will apply a numbing medicine 
								to part of your body, such as your nose or mouth. Local anesthesia is used only for minor procedures. You may stay awake during the procedure,
								or you may get medicine to help you relax or sleep. </li>
								<li>
									Regional anesthesia blocks pain to a larger part of your body. Anesthetic is injected around major nerves or the spinal cord. 											
								</li>
							</ul>
							<p style="padding-top: 5px;"><b>Major types of regional anesthesia include:</b></p>
							<ul>
								 <li>													
									Peripheral nerve blocks. A nerve block is a shot of anesthetic near a specific nerve or group of nerves. It blocks pain in the part of the body supplied by the nerve. 
									Nerve blocks are most often used for procedures on the hands, arms, feet, legs, or face.
								</li>
								<li>
									Epidural and spinal anesthesia. This is a shot of anesthetic near the spinal cord and 
									the nerves that connect to it. 
									It blocks pain from an entire region of the body, such as the belly, hips, or legs.
								</li>
							</ul>
							 <ul>	
								<li>
								General anesthesia affects the brain as well as the entire body. You may get it through a vein (intravenously, or IV), or you may breathe it in. With general anesthesia, you are completely unaware and do not feel pain during the surgery.
								General anesthesia often causes you to forget the surgery and the time right after it.
								</li>										
							</ul>
						</p>
						<p>
							<b>What determines the type of anesthesia used?</b></br>
							<sapn>The type of anesthesia used depends on several thing</sapn></br>
							<ul>
								
								<li>Your past and current health. The doctor or nurse will consider other surgeries you have had and the health
								problems you have,
								such as heart disease, lung disease, or diabetes. 
								You also will be asked whether you or any family members have had an allergic reaction to any anesthetics or 
								other medicines.</li>
								<li>
									The reason for your surgery and the type of surgery.
								</li>
								<li>
									The results of tests, such as blood tests or an electrocardiogram (EKG, ECG).
								</li>
							</ul>
						</p>
						<p>
							Your doctor or nurse may prefer one type of anesthesia over another for your surgery. In some cases,
							your doctor or nurse may let you choose which type to have. Sometimes, such as in an emergency, 
							you do not get to choose. 
						</p>
					 </div>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
        