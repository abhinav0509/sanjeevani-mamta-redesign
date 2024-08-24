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
                            <h2>Patient Education</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Patient Education</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Blog Details Section Start -->
                <div class="blog-details-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <!-- <div class="col-xl-3 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
                                <div class="sidebar">
                                    <div class="sidebar-widget categories">
                                        
                                        <div class="category-box">
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </div> -->

                            <?php $this->load->view('NFront/sidebar');?>

                            <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
                                <?php if(!empty($patient)){?>
		                         <?php foreach($patient as $fd){?>
                                <article>

                                    <!-- <div class="post-para">

                                        <blockquote class="wp-block-quote">

                                        
                                                <div class="post-img">
                                                    
                                                   <img src="<?php echo base_url();?>data/uploads/patient/<?php echo $fd['image'];?>" alt="image" class="img-responsive" style="float: right; width: 40%; margin-left: 20px;">
                                                   
                                                </div>
                                            

                                            <span class=""><i class="flaticon-straight-quotes"></i><p><?php echo $fd['name'];?></p></span>

                                            <p><?php echo $fd['pdesc'];?></p>
                                        </blockquote>
                                    </div> -->

                                                <div class="post-meta-option">
                                                    <div class="single-product-text" style="text-align: justify">
                                                             <div class="row">
                                                             <!-- <a class="" data-fancybox="" href="<?php echo base_url();?>data/uploads/patient/<?php echo $fd['image'];?>" alt="image" class="img-responsive"> -->
                                							     <img src="<?php echo base_url();?>data/uploads/patient/<?php echo $fd['image'];?>" style="float: right; width: 50%,height: 294px;padding: 15px;
                                                                     border-radius: 30px 5px 30px 5px;max-height: 300px;width: 90%;margin-left: 15px;"
                                                                     
                                                                     class="single-service-img" data-fancybox="gallery" href="<?php echo base_url();?>data/uploads/patient/<?php echo $fd['image'];?>" alt="image" class="img-responsive">
                                                            </div>
                                                       <p style="padding-top:0px;">

                                                            <?php echo $fd['name'];?>
                                							<?php echo $fd['pdesc'];?>

                                						</p>
                                                    </div>
                                                </div>


                                </article>
                                  <?php } } else {?>
			                     <h5><code>No Data Available...</code></h5>
		                        <?php }?>	
                                <!-- <div class="post-meta-option">
                                    <div class="row gx-0 align-items-center">
                                        <div class="col-md-7 col-12">
                                            <div class="post-tag">

                                            </div>
                                        </div>
                                        <div class="col-md-5 col-12 text-md-end text-start">
                                            <div class="post-share w-100">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Blog Details Section End -->

            </div>