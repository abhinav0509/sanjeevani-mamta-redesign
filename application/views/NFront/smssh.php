<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
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
                            <h2>Hospital Facilities</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>Hospital Facilities</li>
                            </ul>
                        </div>
                    </div>
                </div>
               
		 <section class="pricing-wrap pt-100 pb-75">
                    <div class="container">
                        <div class="row justify-content-center">
                             <h2 style="text-align:center;">Hospital Facilities</h2>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-card" style="box-shadow: 7px 5px 11px #75b8f2;">
                                    <div class="pricing-header">
                                        <div class="pricing-header-left">
                                            <h5>Outpatient Services</h5>
                                            <h2><span>Outpatient </span></h2>
                                        </div>
                                        <div class="pricing-header-right">
                                        <i class="flaticon-home"></i>
                                        </div>
                                    </div>
                                    <ul class="pricing-features list-style">
                                       <li class="checked">24 Hour Emergency Services <i class="ri-check-line"></i></li>
                                       <li class="checked">Pharmacy <i class="ri-check-line"></i></li>
                                       <li class="checked">Pathology <i class="ri-check-line"></i></li>
                                       <li class="checked">Ambulance <i class="ri-check-line"></i></li>
                                       <li class="checked">Coming soon <i class="ri-check-line"></i></li>
                                       <li class="checked">Coming soon <i class="ri-check-line"></i></li>
                                    </ul>
                                    <a href="#" class="btn style2">Get Now</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-card" style="box-shadow: 7px 5px 11px #75b8f2;">
                                    <div class="pricing-header">
                                        <div class="pricing-header-left">
                                            <h5>Inpatient Services</h5>
                                            <h2><span>Inpatient </span></h2>
                                        </div>
                                        <div class="pricing-header-right">
                                        <i class="flaticon-user-2"></i>
                                        </div>
                                    </div>
                                    <ul class="pricing-features list-style">
                                        <li class="checked">General Ward 12 beds<i class="ri-check-line"></i></li>
                                        <li class="checked">Twin sharing rooms 12 beds<i class="ri-check-line"></i></li>
                                        <!--<li class="checked">Twin-Sharing AC rooms 4 beds<i class="ri-check-line"></i></li>-->
                                        <li class="checked">Deluxe Rooms 4 beds<i class="ri-check-line"></i></li>
                                        <li class="checked">ICU beds – 8 <i class="ri-check-line"></i></li>
                                        <li class="checked">Day Care beds - 2<i class="ri-check-line"></i></li>
                                        <li class="checked">Operating Rooms - 3<i class="ri-check-line"></i></li>
                                    </ul>
                                    <a href="#" class="btn style2">Get Now</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-card" style="box-shadow: 7px 5px 11px #75b8f2;">
                                    <div class="pricing-header">
                                        <div class="pricing-header-left">
                                            <h5>Hospital Facilities</h5>
                                            <h2><span>Facilities</span></h2>
                                        </div>
                                        <div class="pricing-header-right">
                                        <i class="flaticon-clipboard"></i>
                                        </div>
                                    </div>
                                    <ul class="pricing-features list-style">

                                        <!--<li class="checked">Chemotherapy 10 recliner<i class="ri-check-line"></i></li>-->
                                        <li class="checked">Dialysis centre 5 recliners<i class="ri-check-line"></i></li>
                                        <li class="checked">Executive Health Checkup Lounge<i class="ri-check-line"></i></li>
                                        <li class="checked">Sports Medicine Centre<i class="ri-check-line"></i></li>
                                        <li class="checked">Imaging Centre<i class="ri-check-line"></i></li>
                                        <li class="checked">Coming soon <i class="ri-check-line"></i></li>
                                        <li class="checked">Coming soon <i class="ri-check-line"></i></li>
                                    </ul>
                                    <a href="#" class="btn style2">Get Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- Content wrapper end -->