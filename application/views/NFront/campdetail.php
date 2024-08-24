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
<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<script type="text/javascript">
<script>
var _URL = window.URL || window.webkitURL;
var j = jQuery.noConflict();
var Frarr =[];
var wordCountConf2 = {
    showParagraphs: false,
    showWordCount: true,
    showCharCount: true,
    countSpacesAsChars: false,
    countHTML: false,
    maxWordCount: -1,
    maxCharCount: 1000
  };
j(document).ready(function(){
	 j("#datepicker").datepicker();
	j("#alert").delay(2000).fadeOut(300);
	j(".patient").addClass("active");
	j(".td_text").slimscroll({
		  height: '70px',
		  wheelStep: 1
	   });
	   CKEDITOR.replace("pdisc",{
		   wordcount: wordCountConf2
	   });
	   var Pageindex = j("#pindex").val();
	   var rcount = j("#rcount").val();
	   j("#sub_mnu1").val(j("#page").val());
	   
	  if(Pageindex=="")
		 Pageindex=1;
	   if(rcount=="")
		  rcount=0; 
	   j(".pager").ASPSnippets_Pager({
            ActiveCssClass: "current",
            PagerCssClass: "pager",
            PageIndex: parseInt(Pageindex),
            PageSize: 5,
            RecordCount: parseInt(rcount)

        });
        
        
	  j(".page").click(function () {
		  var pageindex = j(this).attr('page');          
		  j('#pindex').val(pageindex);
		  j("#page").val(j("#sub_mnu1").val());
		  j('#hfield').submit();
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
	border: 1px solid;
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
.alert {
  border: 1px solid transparent;
  border-radius: 4px;
  margin-bottom: 0;
  padding: 5px;
}
</style>
 <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Camp</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>Camp</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Blog Details Section Start -->
                <div class="blog-details-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
                                <div class="sidebar">
                                    <!--<div class="sidebar-widget">-->
                                    <!--    <div class="search-box">-->
                                    <!--        <div class="form-group">-->
                                    <!--            <input type="search" placeholder="Search">-->
                                    <!--            <button type="submit"> -->
                                    <!--                <i class="flaticon-search"></i>-->
                                    <!--            </button>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                        
                                        <div class="pricing-card">
                                            <h4>Mobile Screening Van</h4>
                                <div class="pricing-header">
                                    <div class="pricing-header-right">
                                       <i class="flaticon-ambulance"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <img src="<?php echo base_url()?>front/img/van1.jpg" alt="image" class="img-responsive" style="border-radius:5px;"><br><br>
                                    <!--<li class="checked" style="margin-left: 43px;"><span><i class="ri-phone-fill"></i></span> +91 9324896812</li>-->
                                    <a href="tel:9324896812" class="btn style2"><span><i class="ri-phone-fill"></i></span> +91 9324896812</a>
                                </ul>
                                 <!--<a href="tel:9324896812" class="btn style2"><span><i class="ri-phone-fill"></i></span> Contact Now</a>-->
                            </div>
                          
                           </div>
                            </div>
                            <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
                                <?php if(!empty($cammp)){?>
		                         <?php foreach($cammp as $fd){?>
                                <article>
                                <div class="post-meta-option">
                                    <div class="row gx-0 align-items-center">
                                       
                                     <div class="service-desc">
                                         <a class="fancybox-pop GlImgs" rel="portfolio-1" href="<?php echo base_url();?>data/uploads/camp/<?php echo $fd['image'];?>" alt="image" class="img-responsive">
                                          <img src="<?php echo base_url();?>data/uploads/camp/<?php echo $fd['image'];?>" alt="image" class="img-responsive" style="width: 700px;height: 300px;float:left;margin-right: 20px;margin-top:6px;border-radius:10px;"></a> <h4 style="margin-top: 95px;"><b style="color: #121213e0;"><?php echo $fd['title'];?></b></h4>
                                        </div>
                                       
                                    </div>
                                </div>
                                    <div class="post-para">
                                        <blockquote class="wp-block-quote">
                                            <span class="wp-quote-icon"><i class="flaticon-straight-quotes"></i></span>
                                            <br><br>
                                            <p><?php echo $fd['name'];?></p>
                                             <?php if($fd['insert_date']!="")
                                    			  {
                                    			    $mon = date("M", strtotime($fd['insert_date'])); $dt = date("j", strtotime($fd['insert_date']));
                                    			  }
                                    			 ?>
                                    		<p><?php echo $fd['pdesc'];?></p>
                                    		<!--<p style="margin: 0px;margin-left: 33px;">Total Case: <?php echo $fd['total'];?></p>-->
                                        </blockquote>
                                    </div>
                                </article>
                                  <?php } } else {?>
			                     <code>No Data Available...</code>
		                        <?php }?>	
                            </div>
                   <!--             <div class="row">-->
            			    <!--  	  <?php if(isset($links)){?>-->
            						 <!-- <div class="panel-body">-->
            							<!--<div class="pager">-->
            							<!--	<?php echo $links;?>-->
            							<!--</div>-->
            						 <!-- </div>	-->
            					  <!--<?php }?>-->
			                <!--</div>-->
                        </div>
                    </div>
                </div>
                <!-- Blog Details Section End -->
                            <form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/camp">
								<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
								<input type="hidden" id="page" name="page" value="<?php if(isset($dt['page'])){ echo $dt['page']; }?>">
								<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
								<input type="hidden" id="storeArrayvalue" value="<?php if(isset($dt['storeArrayvalue'])){echo $dt['storeArrayvalue']; } ?>" name="storeArrayvalue"/> 
						    </form>
</div>