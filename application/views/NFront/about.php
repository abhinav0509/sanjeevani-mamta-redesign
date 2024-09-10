<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8M2EKL5HY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8M2EKL5HY2');
</script>
<script>
$(document).ready(function(){
	$(".about").addClass('active');
	var Pageindex = $("#pindex").val();
	   var rcount = $("#rcount").val();
	   $("#sub_mnu1").val($("#page").val());
	   $("#sub_mnu2").val($("#title1").val());
	   
	   if(Pageindex=="")
		 Pageindex=1;
	   if(rcount=="")
		  rcount=0; 
	   $(".pager").ASPSnippets_Pager({
            ActiveCssClass: "current",
            PagerCssClass: "pager",
            PageIndex: parseInt(Pageindex),
            PageSize: 4,
            RecordCount: parseInt(rcount)

        });
        
	  $(".page").click(function () {
		  var pageindex = $(this).attr('page');          
		  $('#pindex').val(pageindex);
		  $('#hfield').submit();
	   });
});
</script>

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>About Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- About Section Start -->
                <section class="about-wrap style1 ptb-100">
                    <div class="container">
                    <?php if(!empty($who)){?>
                        <div class="row gx-5 align-items-center">
                        <?php foreach($who as $df){?>
                            <div class="col-lg-6" style="position: relative; top:-10px;">
                                <div class="about-img-wrap">
                                    
                                    <img src="<?php echo base_url();?>data/uploads/banner/brouchurepic.jpg" alt="Image" >
                                    
                                     <!--<img src="<?php echo base_url();?>data/uploads/banner/<?php echo $df['image'];?>">-->
                                     
                                     <!--<img src="<?php echo base_url();?>data/uploads/banner/brouchurepic.jpg" alt="Image" class="about-img-two">-->
                                     
                                </div>
                            </div>
                            <div class="col-lg-6" style="margin-top: -303px;">
                                <div class="about-content">
                                    <div class="content-title style1">
                                    <h4 style="font-size:20px; color: #0d6efd;"><?php echo $df['title'];?></h4>
                                    <span> "A Unit of Mamta & Madhusudan Agrawal Foundation"</span>
                                       
                                       
                                    </div>
                                      <p><?php echo $df['pdesc'];?></p>
                                       <?php }?>
                                    <?php }?>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ul class="content-feature-list list-style">
                                                <li><i class="ri-checkbox-circle-line"></i>Empanelled with all TPA’s for smooth cashless benefits.
                                                </li>
                                                <li><i class="ri-checkbox-circle-line"></i>Centralized HIMS (Hospital Information System).
                                                </li>
                                                <li><i class="ri-checkbox-circle-line"></i>Computerized health records available via website (In progress).
                                                </li>
                                                <li><i class="ri-checkbox-circle-line"></i>Minimum waiting time for Inpatient and Outpatient.
                                                </li>
                                                <li><i class="ri-checkbox-circle-line"></i>Round-the-clock guidance from highly qualified surgeons and physicians.
                                                </li>
                                                <li><i class="ri-checkbox-circle-line"></i>Standardization of ethical medical care.
                                                </li>
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
                                    <!-- <div class="ceo-msg">
                                        <div class="ceo-img">
                                            <img src="assets/img/about/doctor-2.jpg" alt="Image">
                                        </div>
                                        <p>"Think Hard And Focus On The Patient's Well-Being"</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About Section End -->
            </div>
            <!-- Content wrapper end -->
