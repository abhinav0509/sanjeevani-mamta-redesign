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
	$(".Acad ul").addClass("myhealthList");
	$(".Acad ul li").prepend('<i class="fa fa-check-square"></i>');
	$(".Acad ol").addClass("myhealthList");
	$(".Acad ol li").prepend('<i class="fa fa-check-square"></i>');
	$(".academ").addClass('active');
});
</script>
 <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Founder & Chairman</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Founder & Chairman</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

              <section class="about-wrap style1 ptb-100">
                    <div class="container">
                        <div class="row gx-5 align-items-center">
                            
                                  <?php if(!empty($founder)){?>
		                         <?php foreach($founder as $fd){?>
		                         
		                   <div class="col-lg-6">
                                <div class="about-img-wrap">
                                <!--<img src="<?php echo base_url();?>data/uploads/about/Hospital1.jpg" alt="Image" class="about-img-one" style="top: -690px;">-->
                                    <img src="<?php echo base_url();?>data/uploads/founder/<?php echo $fd['image'];?>" alt="Image" class="about-img-two" style="top: -690px;">
                                    <!-- <div class="about-doctor-box">
                                        <div class="doctor-img">
                                            <img src="assets/img/about/doctor-1.jpg" alt="Image">
                                        </div>
                                        <div class="doctor-info">
                                            <h5>Dr. Kate Winslet</h5>
                                            <span>Radiology</span>
                                        </div>
                                        <button type="button" class="btn style1">Select</button>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <div class="content-title style1">
                                        <span>Founder:- Mamta & Madhusudan Agrawal Foundation</span>
                                        <h3>Mr. Madhusudan Agrawal</h3>    
                                        
                                  <div class="post-meta-option" style="text-align: justify;">
                                    <div class="row gx-0 align-items-center">
                                        <div class="col-md-6 col-12">
                                            <div class="post-tag">
                                                <span><i class="ri-price-tag-2-line"></i></span>
                                                <ul class="tag-list style2 list-style">
                                                    <li><a href="<?php echo base_url();?>index.php/founder">Co-Founder & Vice Chairman of Ajanta Pharma Ltd</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-12 text-md-end text-start">
                                            <div class="post-share w-100">
                                                <ul class="social-profile style1 list-style">
                                                    <li>
                                                        <a href="https://facebook.com">
                                                            <i class="ri-facebook-fill"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com">
                                                            <i class="ri-twitter-fill"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://instagram.com">
                                                            <i class="ri-instagram-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://linkedin.com">
                                                            <i class="ri-linkedin-fill"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                     <div style="text-align: justify;">
                                         <p><?php echo $fd['pdesc'];?></p>    
                                    </div>                                              
                                    </div>
                                    
                                     <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <ul class="content-feature-list list-style">
                                                <li><i class="ri-checkbox-circle-line"></i>Provide More Potential Health
                                                </li>
                                                <li><i class="ri-checkbox-circle-line"></i>Operational Research Transformation
                                                </li>
                                                <!--<li><i class="ri-checkbox-circle-line"></i>Mental health Solution-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                        <!-- <div class="col-md-5">
                                            <div class="about-promo-video bg-f">
                                                <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                                    <i class="ri-play-fill"></i>
                                                    <span class="ripple"></span>
                                                </a>
                                            </div>
                                        </div> -->
                                    </div>
                                      <div class="ceo-msg">
                                         <div class="ceo-img">
                                            <!-- <img src="assets/img/about/doctor-2.jpg" alt="Image"> -->
                                         </div>
                                          <p>"Think Hard And Focus On The Patient's Well-Being"</p>
                                      </div>
                                    
                               </div>
                            </div>
		                         
		                         

                                 <?php } } else {?>
			                     <code>No Data Available...</code>
		                        <?php }?>
                        </div>

                    </div>
                </section>

            </div>