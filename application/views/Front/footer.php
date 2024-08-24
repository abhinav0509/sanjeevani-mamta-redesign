<footer class="footer_area">
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="scroll_area">
						<div class="scroll_top">
							<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="footer_Widgets">
						<h5>About Us</h5>
						<div class="widget_text" style="color: #fff;font-size: 13px">
							Sadhu Vaswani Mission, Pune named after its founder Sadhu T.L. Vaswani has been serving the humanity for over 5 decades in the field of education, medical relief, cultural and spiritual advancement. The Mission is registered as a Public Charitable Trust under The Bombay Public Trust Act, 1950 and under The Societies Registration Act, 1860.
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="col-sm-3 col-md-3">
					</div>
					<div class="col-sm-9 col-md-9">				
						<div class="footer_Widgets">
							<h5>Useful links</h5>
							<div class="patient_info" >
								<ul style="padding-left:0px;">
									<li><i class="fa fa-angle-right"></i><a href="<?php echo base_url();?>index.php/Welcome/about_us">About Us</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo base_url();?>index.php/Welcome/department">Department</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo base_url();?>index.php/Welcome/medicalservices">Medical Facility</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo base_url();?>index.php/Welcome/career">Careers</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo base_url();?>index.php/Login" target="_blank">Login</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="footer_Widgets">
						<h5>Contact Us</h5>
						<div class="widget_text">
							<ul style="padding-left:0px;">
							<?php foreach($contact as $row){?>
								<li><i class="fa fa-building-o"></i> <?php echo strip_tags($row['address']);?> </li>
								<li><i class="fa fa-whatsapp"></i> <?php echo $row['telephone'];?> </li>
								<li><i class="fa fa-envelope"></i> <?php echo $row['email'];?></li>
								<li><i class="fa fa-desktop"></i><?php echo $row['urll'];?> </li>
							<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<p style="color: #fff;">Mavericksoftware. Copyright 2017. All Rights Reserved.</p>
				</div>
				<div class="col-sm-6">
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
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER AREA END --> 

<!-- ====jQuery Latest version==== -->
<script src="<?php echo base_url();?>front/js/vendor/jquery-1.12.0.min.js"></script>

<!-- ====Google Maps API==== 
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- ====Bootstrap JS==== -->
<script src="<?php echo base_url();?>front/js/bootstrap.min.js"></script>

<!-- ====jQuery Counterup==== -->
<script src="<?php echo base_url();?>front/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>front/js/waypoints.min.js"></script>

<!-- ====jQuery sticky==== -->
<script src="<?php echo base_url();?>front/js/jquery.sticky.js"></script>

<!-- =====jQuery easing==== -->
<script src="<?php echo base_url();?>front/js/jquery.easing.1.3.min.js"></script>

<!-- ====jQuery owl carousel==== -->
<script src="<?php echo base_url();?>front/js/owl.carousel.min.js"></script>

<!-- ====jQuery countdown==== -->
<script src="<?php echo base_url();?>front/js/jquery.lwtCountdown-1.0.js"></script>

<!-- ====jQuery Meanmenu==== -->
<script src="<?php echo base_url();?>front/js/jquery.meanmenu.min.js"></script>

<!-- ====jQuery parallax==== -->
<script src="<?php echo base_url();?>front/js/jquery.parallax-1.1.3.js"></script>

<!-- ====jQuery Mixitup==== -->
<script src="<?php echo base_url();?>front/js/jquery.mixitup.min.js"></script>

<!-- ====jQuery flickrfeed==== -->
<script src="<?php echo base_url();?>front/js/jflickrfeed.min.js"></script>

<!-- jQuery VenoBox -->
<script src="<?php echo base_url();?>front/js/venobox.min.js"></script>

<!-- ====WOW Animation==== -->
<script src="<?php echo base_url();?>front/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>front/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>front/js/jquery.slimscroll.min.js"></script>  
   
<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->
<script type="text/javascript">new WOW().init();</script>
<!--<![endif]-->		

<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
<!--[if gte IE 9]>
	<script type="text/javascript">new WOW().init();</script>
<![endif]-->		 

<!--Opacity & Other IE fix for older browser-->
<!--[if lte IE 8]>
	<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
<![endif]-->	    

<!-- ====jQuery main script==== -->
<script src="<?php echo base_url();?>front/js/main.js"></script>
</body>

<script>
var j = jQuery.noConflict();
$(document).ready(function(){
	$('.latest-news .post:last').css('border-bottom','0px');
	$('.topsidebar_wrapper .topsider_box:last').css('border-right','0px');
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 250) {
        $(".scroll_area").addClass("dib");
    } else {
        $(".scroll_area").removeClass("dib");
    }
});

</script>	

<!-- Mirrored from themeebit.com/demos/html/careplus-demo/careplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Aug 2016 06:06:39 GMT -->
</html>