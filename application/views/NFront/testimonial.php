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
	$(".home").addClass('active');
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
            PageSize: 6,
            RecordCount: parseInt(rcount)

        });
        
	  $(".page").click(function () {
		  var pageindex = $(this).attr('page');          
		  $('#pindex').val(pageindex);
		  $('#hfield').submit();
	   });
});
</script>
<style>
.pager
{
	height: 18px;
	margin: 16px;
}
.pager .page
{
	cursor: pointer;
	border: 1px solid #253544;
	margin: 3px;
	padding: 5px;
	background: #E8EEF4;
}
.pager .page:hover
{
	cursor: pointer;
	border: 1px solid #1a0f49;
	margin: 3px;
	padding: 5px;
	background: #253544;
	color: #fff;
}

.pager span
{
	cursor: pointer;
	border: 1px solid #1a0f49;
	margin: 3px;
	padding: 5px;
	background: #253544;
	color: #fff;
}
.page {
  color: #253544;
}
</style>

<div class="content-wrapper">

             <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrap">
                 <div class="container">
                     <div class="breadcrumb-title">
                         <h2>Testimonials</h2>
                          <ul class="breadcrumb-menu list-style">
                             <li><a href="index.html">Home </a></li>
                             <li>Testimonials</li>
                          </ul>
                      </div>
                  </div>
              </div>

              <section class="testimonial-wrap style2 ptb-100">
                    <div class="container" style="">
                        <div class="row justify-content-center">

                        <?php if(!empty($testimonial)){?>
		                         <?php foreach($testimonial as $fd){?>

                          <div class="col-xl-4 col-lg-6 col-md-6" style="max-height: 280px;min-height: 200px;">
                                <div class="testimonial-card style2">
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                               <img src="<?php echo base_url();?>data/uploads/testimonial/<?php echo $fd['image'];?>" style="max-width: 70px;max-height: 70px;min-width: 70px;min-height: 70px;">
                                            </div>
                                            <div class="client-info">
                                                <h3><?php echo $fd['name'];?></h3>
                                                <span><?php echo $fd['designation'];?></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-straight-quotes"></i>
                                        </div>
                                    </div>

                                    <br>
                                    <p class="client-quote"><?php echo $fd['pdesc'];?></p>
                                </div>
                            </div>

                            <?php } } else {?>
			                     <h5><code>No Data Available...</code></h5>
                                 <?php }?>	                                 
                        </div>
                    </div>
                </section>



</div>             