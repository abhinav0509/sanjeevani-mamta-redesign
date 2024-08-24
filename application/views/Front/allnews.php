<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<style>
	.menu li a {
	color: #fff;
	display: block;
	font-size: 13px;
	padding: 16px 14px;
	font-weight: 600;
}
.dnone{display:none;}
.content .patient-details > a {
	padding: 0px 5px;
	border: 1px solid #F26529;
	border-radius: 4px;
	color: #fff;
	background-color: #F26529;
	transition: all .6 ease;
}
.content .patient-details > a:hover {
	background-color: #fff;
	color: #F26529;
}
.patient-details {
	margin-bottom: 15px;
}
.opd-table {
	margin-top: 150px;
}
.opd-table .table-bordered {
	border: 1px solid #ddd;
	box-shadow: 1px 1px 6px #ddd;
}
	</style>
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
    border: 1px solid #2986e2;
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
.area_content {
		margin-top: 9px;
	}
	
	p {
		color: #403e3e;
		font-family: "Raleway",sans-serif;
		font-size: 13px;
		font-weight: 300;
		line-height: 25px;
		text-align: justify;
	}
.about_cont h4{
   font-size: 14px;
   margin-top: 20px;
}	
.about_cont .h2, h2 {
    font-size: 20px;
}
.md-services .img-responsive {
	padding: 0px 5%;
}
.md-services ul {
	display: inline-block;
	padding-left: 15px;
}
.md-services  p, .md-services ul li, .md-services p b, .md-services p span {
	
	font-family: "Raleway",sans-serif;
	font-size: 14px;

	line-height: 22px;
	text-align: justify;
}

</style>
<style>
.breadcrumb_area {
    background: none;
    padding: 6px 0;
    position: relative;
}

.breadcrumb_area {
    background: none;
    padding: 6px 0;
    position: relative;
}

.breadcrumb_area::after {
    background-image: none;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.about_page .breadcrumb_area {
    background: none;
    position: relative;
}

.about_page .breadcrumb_area {
    background: none;
}

.breadcrumb_area::after {
    background-color: #f5f5f5;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
ul.ct_lis li::before {
  content: none;
}
ul.ct_lis li {
    margin: 7px 0;
}
.ct_lis.cat_line_icon > li {
    border-bottom: 1px solid #e7e7e7;
    padding: 2px;
}
.md-services p, .md-services ul li, .md-services p b, .md-services p span {
    font-family: "Raleway",sans-serif;
    font-size: 13px;
    line-height: 22px;
    text-align: justify;
}
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
/* ------ marquee style -------- */
.header_top marquee span {
	color: red;
    display: inline-block;
    font-size: 12px;
    width: 100% !important;
}
.myMenu {top: 82px;}
.slider_area {
	margin-top: 134px;
}
.breadcrumb_area{margin-top:129px;}
/* ------ marquee style -------- */

.about_area.section-padding {
	margin-top: 0px;
}

.mytesimonial .row .col-sm-3 {
	text-align: center;
	text-align: center;
}
.mytesimonial .row .col-sm-3 .img-responsive {
	display: inline-block;
}
.mytesimonial .row {
	border: 1px solid #ddd;
	padding: 10px 0px;
	margin-bottom: 10px;
	box-shadow: 1px 1px 6px #ddd;
}
.col-md-9.mytesimonial {
	margin-top: 10px;
}
.mytesimonial .row .col-sm-9 p span {
	text-align: right;
	float: right;
}
</style>
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
.tooltip {
    display: block;
    font-size: 13px;
    line-height: 1.4;
    visibility: visible;
    z-index: 1070;
	opacity: 1;
    position: relative;
}
.tooltip .tooltiptext {
    visibility: hidden;
    width: auto;
    background-color: black;
    color: #fff;
    text-align: justify;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1000;
    top: 100%;
    left: 50%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
.fa{
	cursor:pointer;
}
 a.care_bt {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 50px;
  color: #f25d30;
  font-size: 11px;
  font-weight: 500;
  height: 23px;
  line-height: 22px;
  margin-top: 3px;
  text-transform: uppercase;
  width: 74px;
}
</style>

<script>
 //var j =jQuery.noConflict();
 $(document).ready(function(){
	 $(".fb_news").addClass("active");
	 $(".about-countinner ul").addClass("choose-list");
     $(".about-countinner ol").addClass("choose-list");
	   var Pageindex = $("#pindex").val();
	   var rcount = $("#rcount").val();
	   
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
<div class="breadcrumb_area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="pull-right">
					<li><a href="<?php echo base_url();?>index.php/Welcome/FBHI">Home</a></li>
					<li>&gt;</li>
					<li>News</li>
				</ul>
			</div>
		</div>
	</div>
</div>
 <!-- Inner Area START -->           
        <section class="about_area section-padding" style="padding-top:0px;display:none;">
            <div class="container">
                <div class="row">
					<div class="col-md-3">					     	
                         <?php $this->load->view('Front/sidebar');?>
					</div>                    
                    <div class="col-md-9 mytesimonial">
						<?php foreach($result as $row){?>
						<div class="row">
							<div class="col-sm-2">
							<?php if($row['image']!=""){
								$img = explode(",",$row['image']);?>
								<img src="<?php echo base_url();?>data/uploads/news/<?php echo $img[0];?>" class="img-responsive" style="width:80px;height:100px;margin-left:20px;">
							<?php } else {?>
								<img src="<?php echo base_url();?>front/img/13.jpg" class="img-responsive" style="width:50px;height:50px;margin-left:20px;">
							<?php }?>
							</div>
							<div class="col-sm-10">
								<p>
									<em><?php echo substr($row['pdesc'],0,90);?>......</em>
								</p>
								<a class="care_bt" href="<?php echo base_url();?>index.php/Welcome/news/<?php echo $row['id'];?>" style="float:right;">Read More</a>
							</div>
						</div>
						<?php }?> 
						<?php if(isset($links)){?>
							<div class="pager">
								<?php echo $links;?>
							</div>
						<?php }?>  
					</div>                 
                </div>
            </div>
        </section>
        <!-- Inner Area END -->
		
		<section class="latestNews section-paddingB" style="padding-top:18px">
            <div class="container">
				<div class="col-md-3">					     	
					 <?php $this->load->view('Front/sidebar');?>
				</div>
				<div class="col-sm-9" style="background:#FBFBFB">
				<?php if(!empty($result)){?>
					<div class="row" style="padding-top:9px">
						<div class="col-sm-12">
							<div class="section_title">
								<h2 class="sec_Hd">Latest <span>News</span></h2>
							</div>
						</div>
					</div>
					<div class="row all_news area_content">
					<?php foreach($result as $row){?>
					<?php $img = explode(",",$row['image']); $mon = date("M", strtotime($row['insert_date'])); $dt = date("j", strtotime($row['insert_date']));?>
						<div class="col-sm-6">
							<div class="single_news row fix_m">
								<figure class="col-xs-12 col-sm-4 fix_p">
									<img src="<?php echo base_url();?>data/uploads/news/<?php echo $img[0];?>" style="width:199px;height:165px;"/>
									<figcaption>
										<p class="colorWhite text-center"><?php echo $dt;?><span><?php echo $mon;?></span></p>
									</figcaption>
								</figure>
								<div class="news_txt col-xs-12 col-sm-8" style=" padding: 10px 8px 10px 40px;">
									<h4><a href="#"><?php echo $row['title'];?></a></h4>
									<p><?php echo substr($row['pdesc'],0,170);?>....</p>
									<a class="care_bt" href="<?php echo base_url();?>index.php/Welcome/news/<?php echo $row['id'];?>">Read More</a>
								</div>
							</div>
						</div>
					<?php }?>
					</div>
					<?php if(isset($links)){?>
							<div class="pager">
								<?php echo $links;?>
							</div>
						<?php }?> 
				<?php } else {?>
					<code>No Data Available</code>
				<?php }?>
				
				</div>
			</div>
        </section>
        
<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Welcome/allnews">
	<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
	<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
</form>