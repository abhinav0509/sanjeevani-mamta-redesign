 <style>
.slider_wrapper .owl-carousel .owl-item img {
	height: 450px;
	width: 100%;
 }
 .section-padding {
	padding-bottom: 40px;
	padding-top: 40px;
 }
 .choose-list li {
   line-height: 25px;
   font-size: 13px;
}	
p {
	color: #777777;
	font-family: "Raleway",sans-serif;
	font-size: 13px;
	font-weight: 300;
	line-height: 25px;
	text-align: justify;
}
.area_content {
	margin-top: 9px;
}
</style>
	<!-- Common Style Ends-->
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
.patient_comment a.care_bt {
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
    border: 1px solid #3397b1;
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
.footer_bottom p{
   color: #2d75a7;
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
</style>
<script>
$(document).ready(function(){
	$(".home").addClass("active");
	$(".welcontent ul").addClass('choose-list');
	$(".welcontent ol").addClass('choose-list');
});
</script> 
<!-- SLIDER START -->           
<section class="slider_area">
	<div class="container-fluid">
		<div class="row slider_wrapper">
			<div class="main_slider">
			<?php foreach($banner as $bn){?>
				<figure class="item">
					<figcaption class="caption">
						<h1 class="fadeInDown_slide animated" style="animation-delay: .2s"><?php echo $bn['cap1']?></h1>
						<p class="fadeInDown_slide animated" style="animation-delay: .4s"><?php echo $bn['cap2']?></p>
						<p class="fadeInDown_slide animated" style="animation-delay: .4s"><?php echo $bn['cap3']?></p>
					</figcaption>
					<img alt="slider" src="<?php echo base_url();?>data/uploads/banner/<?php echo $bn['image'];?>">
				</figure>	
			<?php }?>				
			</div>
			<div class="mainslider_nav">
				<i class="fa fa-angle-left testi_prev"></i>
				<i class="fa fa-angle-right testi_next"></i>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
        
<!-- TOP SIDEBAR START --> 
<section class="top_sidebar" style="display:none;">
	<div class="container" style="width:100%;">
		<div class="row topsidebar_wrapper">
			<div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-ambulance"></i></span></span>
					<h3>Ambulance</h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9717</span></p>
				</div> 
			</div>
		    <div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-medkit"></i></span>
					<h3>Emergency </h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9719</span></p>
				</div> 
			</div>
			<div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-tint"></i></span>
					<h3>Blood Bank</h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9727</span></p>
				</div> 
			</div>
			<div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-flask"></i></span>
					<h3>Pathology</h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9725</span></p>
				</div> 
			</div>
			<div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-toggle-on"></i></span>
					<h3>Pharmacy</h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9724</span></p>
				</div> 
			</div>
			<div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-heartbeat"></i></span>
					<h3>Radiology</h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9729</span></p>
				</div> 
			</div>
			<div class="col-sm-2 fix_p" style="width: auto;">
				<div class="topsider_box">
					<span class="iconn"><i class="fa fa-clipboard"></i></span>
					<h3>Reception</h3>
					<p class="colorWhite"><span><span class="fa fa-phone"></i> 6609 9910</span></p>
				</div> 
			</div>
		</div>
	</div>
</section>
<!-- TOP SIDEBAR END -->
        
<!-- WELCOME AREA START --> 
<section class="welcome_area section-padding">
	<div class="container" style="background:#fff;">
		<div class="row">
			<div class="col-sm-12">
				<div style="background: #fbfbfb; padding: 10px">
				 <?php if(!empty($who)){?>
				 <?php foreach($who as $row){?>
					<div class="section_title">
						<h2 class="sec_Hd" style="font-size: 20px;"><?php echo $row['title'];?></h2>
					</div>
					<div class="welcontent">
						<div class="row">
							<div class="col-sm-12">
								<p>
								<?php if($row['image']!=""){?>
								<?php $imgg = explode(",",$row['image']);
								for($i=0;$i<count($imgg);$i++){
									if($imgg[$i]!="No Image"){?>
									
										<img src="<?php echo base_url();?>data/uploads/about/<?php echo $imgg[$i];?>" class="img-responsive singlebanner" style="width:100%;height:300px;">
									
								<?php } } } ?>
								<?php echo $row['pdesc'];?>
								</p>
							</div>
							<div class="col-sm-5">
								
							</div>
						</div>
					</div>	
				 <?php } } else {?>	
					<code>No Data Available.....</code>
				 <?php } ?>
				</div>	
			</div>
				
			<div class="col-sm-3 dnone">
			  <?php $this->load->view('Front/sidebar');?>
			</div>
		</div>
	</div>
</section>
<!-- WELCOME AREA END -->

<!-- CLINICAL SERVICES START --> 
<section class="clinical_services section-paddingB">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_title">
					<h2 class="sec_Hd">Clinical <span>Services</span></h2>
				</div>
			</div>
		</div>
		<div class="row area_content">
			<div class="col-md-12">
				<div class="item_clinicalservice">
					<div class="clinicalServices_nav">
						<i class="fa fa-angle-left testi_prev"></i>
						<i class="fa fa-angle-right testi_next"></i>
					</div>
					<div class="clinicalServices_inner">
						<div class="item">
							<figure>
								<img alt="slider" src="<?php echo base_url();?>front/img/service_neuro.jpg">
								<figcaption>
									<i class="flaticon-science110"></i>
									<h4><a href="javascript:;">Neurology Clinic</a></h4>
									<h5><a href="javascript:;">Neurology</a></h5>
									<p>Wether you need to create a site for a medical center, spa, gym, vet shop; It also work for many other different types of businesses.</p>
								</figcaption> 
							</figure>
						</div>
						<div class="item">
							<figure>
								<img alt="slider" src="<?php echo base_url();?>front/img/service_cardio.jpg">
								<figcaption>
									<i class="flaticon-lifeline5"></i>
									<h4><a href="javascript:;">Cardiology Clinic</a></h4>
									<h5><a href="javascript:;">Cardiology</a></h5>
									<p>Wether you need to create a site for a medical center, spa, gym, vet shop; It also work for many other different types of businesses.</p>
								</figcaption> 
							</figure>
						</div>
						<div class="item">
							<figure>
								<img alt="slider" src="<?php echo base_url();?>front/img/service_drug.jpg">
								<figcaption>
									<i class="flaticon-healthclinic6"></i>
									<h4><a href="javascript:;">Drugstore</a></h4>
									<h5><a href="javascript:;"> Diagnosis, Pharmacy </a></h5>
									<p>Wether you need to create a site for a medical center, spa, gym, vet shop; It also work for many other different types of businesses.</p>
								</figcaption> 
							</figure>
						</div>
						<div class="item">
							<figure>
								<img alt="slider" src="<?php echo base_url();?>front/img/service_ophta.jpg">
								<figcaption>
									<i class="flaticon-pharmacy2"></i>
									<h4><a href="javascript:;">Ophthalmology Clinic</a></h4>
									<h5><a href="javascript:;">Ophthalmology, Therapy </a></h5>
									<p>Wether you need to create a site for a medical center, spa, gym, vet shop; It also work for many other different types of businesses.</p>
								</figcaption> 
							</figure>
						</div>
						<div class="item">
							<figure>
								<img alt="slider" src="<?php echo base_url();?>front/img/service1.jpg">
								<figcaption>
									<i class="flaticon-halloween250"></i>
									<h4><a href="javascript:;">Diagnosis Clinic</a></h4>
									<h5><a href="javascript:;">Diagnosis, Therapy </a></h5>
									<p>Wether you need to create a site for a medical center, spa, gym, vet shop; It also work for many other different types of businesses.</p>
								</figcaption> 
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- CLINICAL SERVICES AREA END -->

<!-- OUR SERVICES START --> 
<section class="ourServices section-paddingB dnone">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section_title">
					<h2 class="sec_Hd">Our Services</h2>
				</div>
			</div>
		</div>
		<div class="row area_content">
			<div class="col-sm-3">
				<div class="service_box">
					<div class="service_icon">
						<i class="fa fa-ambulance"></i>
					</div>
					<h3><a href="javascript:;">Emergency Services</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur  
					Quisquam doloribus dolorem libero.</p>
					<a class="care_bt" href="javascript:;">Read More</a>
				</div> 
			</div>
			<div class="col-sm-3">
				<div class="service_box">
				   <div class="service_icon">
					  <i class="fa fa-user-md"></i>
				   </div>
					<h3><a href="javascript:;">Qualified Doctors</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur 
					Quisquam doloribus dolorem libero.</p>
					<a class="care_bt" href="javascript:;">Read More</a>
				</div> 
			</div>
			<div class="col-sm-3">
				<div class="service_box">
					<div class="service_icon">
						<i class="fa fa-stethoscope"></i>
					</div>
					<h3><a href="javascript:;">Medical Counseling</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur 
					Quisquam doloribus dolorem libero.</p>
					<a class="care_bt" href="javascript:;">Read More</a>
				</div> 
			</div>
			<div class="col-sm-3">
				<div class="service_box">
					<div class="service_icon">
						<i class="fa fa-user-plus"></i>
					</div>
					<h3><a href="javascript:;">Out patient service</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur 
					Quisquam doloribus dolorem libero.</p>
					<a class="care_bt" href="javascript:;">Read More</a>
				</div> 
			</div>
		</div>
	</div>
</section>
<!-- OUR SERVICES END -->

<!-- OUR DOCTORS STAET -->
        <section class="tab-area section-paddingB dnone">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section_title">
                            <h2 class="sec_Hd">Meet our <span>doctors</span></h2>
                        </div>
                    </div>
                </div>
                <!-- Nav tabs -->
                <div class="row area_content">
                    <div class="col-md-2 fix_p_r">
                        <ul class="doctor_catagory" role="tablist">
                            <li class="active">
                                <a href="#cardiology" data-toggle="tab">Cardiology</a>
                            </li>
                            <li>
                                <a href="#neurology" data-toggle="tab">Neurology</a>
                            </li>
                            <li>
                                <a href="#drugstore" data-toggle="tab">Drugstore</a>
                            </li>
                            <li>
                                <a href="#general" data-toggle="tab">General</a>
                            </li>
                            <li>
                                <a href="#Pediatrics" data-toggle="tab">Pediatrics</a>
                            </li>
                            <li>
                                <a href="#dental" data-toggle="tab">Dental</a>
                            </li>
                            <li>
                                <a href="#x-ray" data-toggle="tab">X-Ray</a>
                            </li>
                            <li>
                                <a href="#ophthalmology" data-toggle="tab">Ophthalmology</a>
                            </li>
                        </ul> 
                    </div>
                    <!-- Tab panes -->
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="cardiology">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="<?php echo base_url();?>front/img/doc2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. James Jones</a></h4>
                                            <h5>Professor of Cardiology</h5>                                               
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doc2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Oliver Brown</a></h4>
                                               <h5>Consultant of Cardiology</h5>
                                               <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                                <ul class="doctor_social">
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-facebook"></i>
                                                          <i class="fa fa-facebook hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-twitter"></i>
                                                          <i class="fa fa-twitter hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-tumblr"></i>
                                                          <i class="fa fa-tumblr hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-pinterest-p"></i>
                                                          <i class="fa fa-pinterest-p hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-skype"></i>
                                                          <i class="fa fa-skype hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-google-plus"></i>
                                                          <i class="fa fa-google-plus hovereffect"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/founder-2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Noah Thomas</a></h4>
                                               <h5>Cardiology</h5>
                                               <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                                <ul class="doctor_social">
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-facebook"></i>
                                                          <i class="fa fa-facebook hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-twitter"></i>
                                                          <i class="fa fa-twitter hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-tumblr"></i>
                                                          <i class="fa fa-tumblr hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-pinterest-p"></i>
                                                          <i class="fa fa-pinterest-p hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-skype"></i>
                                                          <i class="fa fa-skype hovereffect"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                          <i class="fa fa-google-plus"></i>
                                                          <i class="fa fa-google-plus hovereffect"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="neurology">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doc2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Oliver Brown</a></h4>
                                            <h5>Professor of neurology</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                  </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct3.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Michael Ryan</a></h4>
                                            <h5>Consultant of neurology</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
											<ul class="doctor_social">
												<li>
													<a href="#">
													  <i class="fa fa-facebook"></i>
													  <i class="fa fa-facebook hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-twitter"></i>
													  <i class="fa fa-twitter hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-tumblr"></i>
													  <i class="fa fa-tumblr hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-pinterest-p"></i>
													  <i class="fa fa-pinterest-p hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-skype"></i>
													  <i class="fa fa-skype hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-google-plus"></i>
													  <i class="fa fa-google-plus hovereffect"></i>
													</a>
												</li>
											</ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct5.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Lucas Williams</a></h4>
                                            <h5> Dept of neurology</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
											<ul class="doctor_social">
												<li>
													<a href="#">
													  <i class="fa fa-facebook"></i>
													  <i class="fa fa-facebook hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-twitter"></i>
													  <i class="fa fa-twitter hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-tumblr"></i>
													  <i class="fa fa-tumblr hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-pinterest-p"></i>
													  <i class="fa fa-pinterest-p hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-skype"></i>
													  <i class="fa fa-skype hovereffect"></i>
													</a>
												</li>
												<li>
													<a href="#">
													  <i class="fa fa-google-plus"></i>
													  <i class="fa fa-google-plus hovereffect"></i>
													</a>
												</li>
											</ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="drugstore">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct4.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Michael White</a></h4>
                                            <h5>Professor of neurology</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                  </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct6.png" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. William Ryan</a></h4>
                                            <h5>Consultant</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/founder-2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Noah Thomas</a></h4>
                                            <h5>drugstore Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="general">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct7.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Noah Walker</a></h4>
                                            <h5>Consultant</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct8.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Summer Martinn</a></h4>
                                            <h5>Medical Officer</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct9.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Mia Martinr</a></h4>
                                            <h5>Department Head</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Pediatrics">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct10.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Thomas Anderson</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct11.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Lily King</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/founder-2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Noah Thomas</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dental">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doc2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Oliver Brown</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct6.png" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Ethan Nguyen</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct7.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Noah Walker</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="x-ray">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct9.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Mia Martin</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doc2.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Oliver Brown</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct11.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Lily King</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ophthalmology">
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct10.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Thomas Anderson</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                              <li>
                                                  <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                  </a>
                                                  </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                  </a>
                                              </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct8.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Oliver Ryan</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tab-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/doct11.jpg" alt="">
                                        </a>
                                        <figcaption>
                                            <h4><a href="dotor_details.html">Dr. Lily King</a></h4>
                                            <h5>Pediatric Clinic</h5>
                                            <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                            <ul class="doctor_social">
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-facebook"></i>
                                                      <i class="fa fa-facebook hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                      <i class="fa fa-twitter hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-tumblr"></i>
                                                      <i class="fa fa-tumblr hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-pinterest-p"></i>
                                                      <i class="fa fa-pinterest-p hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-skype"></i>
                                                      <i class="fa fa-skype hovereffect"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                      <i class="fa fa-google-plus"></i>
                                                      <i class="fa fa-google-plus hovereffect"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div> 
                            </div>
                        </div>
                        <div class="tab_area_nav">
                            <i class="fa fa-angle-left testi_prev"></i>
                            <i class="fa fa-angle-right testi_next"></i>
                        </div> 
                    </div>
                </div> 
            </div>
        </section>
        <!-- OUR DOCTORS END -->
        
        <!-- LATEST NEWS START --> 
        <section class="latestNews section-paddingB">
            <div class="container" style="background:#fff;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section_title">
                            <h2 class="sec_Hd">Latest <span>News</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row all_news area_content">
                    <div class="col-sm-6">
                        <div class="single_news row fix_m">
                            <figure class="col-xs-12 col-sm-4 fix_p">
                                <img src="<?php echo base_url();?>front/img/latest_news0.jpg" />
                                <figcaption>
                                    <p class="colorWhite text-center">21<span>Feb</span></p>
                                </figcaption>
                            </figure>
                            <div class="news_txt col-xs-12 col-sm-8">
                                <h4><a href="#">Diabetes Patient Care</a></h4>
                                <p>Voluptatem accusantium doloremque totam rem aperiam, eaque ipsa quae ab illo invento veritatis et quasi architecto beatae vitae dicta.gjh iryw e wure er rhf jrf fj sfsuhruqr ywiuewhr ruhuerhu uhrrfuh.</p>
                                <a class="care_bt" href="single_page.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single_news row fix_m">
                            <figure class="col-xs-12 col-sm-4 fix_p">
                                <img src="<?php echo base_url();?>front/img/latest_news_2.jpg" />
                                <figcaption>
                                    <p class="colorWhite text-center">07<span>Mar</span></p>
                                </figcaption>
                            </figure>
                            <div class="news_txt col-xs-12 col-sm-8">
                                <h4><a href="#">Diabetes Patient Care</a></h4>
                                <p>Voluptatem accusantium doloremque totam rem aperiam, eaque ipsa quae ab illo invento veritatis et quasi architecto beatae vitae dicta.gjh iryw e wure er rhf jrf fj sfsuhruqr ywiuewhr ruhuerhu uhrrfuh.</p>
                                <a class="care_bt" href="single_page.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single_news row fix_m">
                            <figure class="col-xs-12 col-sm-4 fix_p">
                                <img src="<?php echo base_url();?>front/img/latest_news_3.jpg" />
                                <figcaption>
                                    <p class="colorWhite text-center">26<span>Mar</span></p>
                                </figcaption>
                            </figure>
                            <div class="news_txt col-xs-12 col-sm-8">
                                <h4><a href="#">Diabetes Patient Care</a></h4>
                                <p>Voluptatem accusantium doloremque totam rem aperiam, eaque ipsa quae ab illo invento veritatis et quasi architecto beatae vitae dicta.gjh iryw e wure er rhf jrf fj sfsuhruqr ywiuewhr ruhuerhu uhrrfuh.</p>
                                <a class="care_bt" href="single_page.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single_news row fix_m">
                            <figure class="col-xs-12 col-sm-4 fix_p">
                                <img src="<?php echo base_url();?>front/img/latest_news_4.jpg" />
                                <figcaption>
                                    <p class="colorWhite text-center">16<span>Dec</span></p>
                                </figcaption>
                            </figure>
                            <div class="news_txt col-xs-12 col-sm-8">
                                <h4><a href="#">Diabetes Patient Care</a></h4>
                                <p>Voluptatem accusantium doloremque totam rem aperiam, eaque ipsa quae ab illo invento veritatis et quasi architecto beatae vitae dicta.gjh iryw e wure er rhf jrf fj sfsuhruqr ywiuewhr ruhuerhu uhrrfuh.</p>
                                <a class="care_bt" href="single_page.html">Read More</a>
                            </div>
                        </div>
                    </div>
                
				</div>
				<div class="row" style="text-align: center; padding-top:17px;">
					<a class="care_bt" href="<?php echo base_url();?>index.php/Welcome/allnews" style="background: #F25D30">View More</a>
				</div>
			</div>
        </section>
        <!-- LATEST NEWS END -->
        
		
<!-- PATIENTS SAYING START 
<section class="patients_part">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section_title">
					<h2 class="sec_Hd">What Our Patients Are <span>Saying</span></h2>
				</div>
			</div>
		</div>
		<div class="patientslide_item">
			<div id="patient_slide">
				<div class="item">
					<div class="patient_comment">
						<p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
					</div>
					<div class="content mt-20">
						<div class="thumb">
							<img class="thumb_circle" alt="" src="<?php echo base_url();?>front/img/s1.jpg">
						</div>
						<div class="patient-details">
							<h5 class="author"><a href="#">Jonathan Smith</a></h5>
							<h6 class="title">cici inc.</h6>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="patient_comment">
						<p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
					</div>
					<div class="content mt-20">
						<div class="thumb">
							<img class="thumb_circle" alt="" src="<?php echo base_url();?>front/img/s2.jpg">
						</div>
						<div class="patient-details">
							<h5 class="author"><a href="#">Jonathan Smith</a></h5>
							<h6 class="title">cici inc.</h6>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="patient_comment">
						<p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
					</div>
					<div class="content mt-20">
						<div class="thumb">
							<img class="thumb_circle" alt="" src="<?php echo base_url();?>front/img/s3.jpg">
						</div>
						<div class="patient-details">
							<h5 class="author"><a href="#">Jonathan Smith</a></h5>
							<h6 class="title">cici inc.</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- PATIENTS SAYING END--> 
