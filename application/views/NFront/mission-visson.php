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
	$(".accordionCommon ul").addClass("myhealthList");
	$(".accordionCommon ul li").prepend('<i class="fa fa-check-square"></i>');
	$(".about").addClass('active');
});
</script>
            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Vission & Mission</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>Vission & Mission</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <section class="pricing-wrap pt-100 pb-75">
                     <div class="container">
                          <?php if(!empty($result)){?>
                           <div class="row justify-content-center">
                              <?php $cl=1; foreach ($result as $row){ if($cl>6){$cl=1;}?>
                              <div class="col-xl-4 col-lg-6 col-md-6">
                                 <div class="pricing-card" style="box-shadow: 3px 8px 10px rgb(0, 58, 134, 0.38);height:600px;">
                                      <div class="pricing-header">

                                       <div class="pricing-header-left">
                                            <h5>
                                                <a class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordionFirst" href="#collapse-<?php echo $row['id'];?>">
                                                    <span style="color: #090909;"><?php echo $row['title'];?> </span>
                                                </a>
                                            </h5>
                                        </div>

                                        <div class="pricing-header-right">

                                        </div>
                                     </div>
                                    <!-- <ul class="pricing-features list-style"> -->
                               
                                    <!-- <i class="ri-check-line"></i><p style="margin-left: 32pt;"><?php echo $row['pdesc']?></p> -->

                                
                                            <span class="wp-quote-icon"><i class="flaticon-straight-quotes"></i></span>
                                            <p><?php echo $row['pdesc'];?></p>
                                  
                                    <!-- </ul> -->


                                   
                                </div>

                            </div>
                            <?php $cl++; }?>
                           </div>
                           <?php } else {?>
				<code>No Data Available.....</code>
			<?php }?>
                     </div>
                </section>
                  