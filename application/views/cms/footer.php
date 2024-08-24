<div style="width: 100%" class="row footRow">
    <div style="text-align: center;" class="col-lg-12">
        <a class="<?php echo base_url();?>index.php/About_Us" target="_blank">About Us</a> |
        <a class="<?php echo base_url();?>index.php/contact" target="_blank">Contact Us</a>
    </div>
</div>

<div style="width: 100%;padding-bottom: 5px;" class="row footRow">
    <div style="text-align: center;" class="col-lg-12">
        <a href="http://www.mavericksoftware.in">Maverick Software (I) Pvt. Ltd.</a>  <i class="fa fa-copyright"></i>  Copy rights Reserved 2023
    </div>
</div> 		


 		
        <script src="<?php echo base_url();?>data/dist/assets/bs3/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>data/dist/assets/plugins/jquery-navgoco/jquery.navgoco.js"></script>
        <script src="<?php echo base_url();?>data/dist/js/main.js"></script>

        <!--[if lt IE 9]>
        <script src="dist/assets/plugins/flot/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>data/dist/assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo base_url();?>data/demo/js/demo.js"></script>

        <script src="<?php echo base_url();?>data/dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url();?>data/dist/assets/plugins/jquery-jvectormap/maps/world_mill_en.js"></script>

        <!--[if gte IE 9]>-->
        <script src="<?php echo base_url();?>data/dist/assets/plugins/rickshaw/js/vendor/d3.v3.js"></script>
        <script src="<?php echo base_url();?>data/dist/assets/plugins/rickshaw/rickshaw.min.js"></script>
        <!--<![endif]-->

        <script src="<?php echo base_url();?>data/dist/assets/plugins/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url();?>data/dist/assets/plugins/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url();?>data/dist/assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url();?>data/dist/assets/plugins/morris/morris.min.js"></script>
		 <script src="<?php echo base_url();?>data/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>data/js/jquery.slimscroll.min.js"></script> 

		<script src="<?php echo base_url();?>data/ckeditor/ckeditor.js"></script>
		<script>
			var j =jQuery.noConflict();
			j(document).ready(function(){
				
			j(".subMenuSwitch1").click(function(e) {
				e.stopPropagation(), "-226px" == j("#subMenuProfile").css("left") ? j("#subMenuProfile").animate({
					left: "0"
				}, "1000") : j("#subMenuProfile").animate({
					left: "-226px"
				}, "1000")
				
			});
			
			
			});
		</script>

    </body>
</html>