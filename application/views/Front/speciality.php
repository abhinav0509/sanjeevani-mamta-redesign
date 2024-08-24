<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
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
	font-size: 12px;
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
</style>
<!--breadcrum style-->
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
ul.ct_lis li {
    margin: 7px 0;
}
.ct_lis.cat_line_icon > li {
    border-bottom: 1px solid #e7e7e7;
    padding: 2px;
}
.breadcrumb_area ul li {
    color: #404040;
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-right: 10px;
}
.about-countinner .row {
  border: 1px solid #ddd;
  box-shadow: 1px 1px 6px #ddd;
  margin-bottom: 10px;
  padding: 10px 0;
}.pager
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
</style>
<script>
$(document).ready(function(){
   $(".about-countinner ul").addClass("choose-list");
   $(".about-countinner ol").addClass("choose-list");
   $(".hospital").addClass("active");
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
            PageSize: 3,
            RecordCount: parseInt(rcount)

        });
        
	  $(".page").click(function () {
		  var pageindex = $(this).attr('page');          
		  $('#pindex').val(pageindex);
		  $('#hfield').submit();
	   });
});
</script>
<div class="breadcrumb_area" style="margin-top: 127px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="pull-right">
					<li><a href="<?php echo base_url();?>index.php/Welcome">Home</a></li>
					<li>&gt;</li>
					<li>About</li>
				</ul>
			</div>
		</div>
	</div>
</div> 
<!-- END BREADCRUMB AREA -->
        
<!-- SLIDER START -->           
<section class="about_area section-padding" style="padding-top:16px;">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php $this->load->view('Front/sidebar');?>
			</div>
			
			<div class="col-md-9">
				<div class="about_cont" style="display:none;">
				<?php if(!empty($result)){?>
					 <div class="about-countinner">
						<!--<h5>Welcome To Our</h5>-->
						<h2 class="sec_Hd">Careers</h2>
						<?php foreach($result as $row){?>
						<div class="row" style="margin-left:-8px;margin-right:-8px;padding:8px">
							<h4 style="text-decoration:underline;"><?php echo $row['title'];?> </h4>
							<p><?php echo $row['pdesc'];?></p>
						</div>
						<?php }?>
					 </div>						
				<?php } else {?>		
					<code>No Data Available.....</code>
				<?php } ?>
				<?php if(isset($links)){?>
					<div class="pager">
						<?php echo $links;?>
					</div>
				<?php }?> 
				</div>
				
				<div class="about_cont">
					<div class="about-countinner md-services">
							<!--<h5>Welcome To Our</h5>
							<h2 class="sec_Hd">Careers</h2>-->							
					<?php if(!empty($result)){?>
						<div class="panel-group area_content" id="accordion" role="tablist" aria-multiselectable="true">
						<?php $cnt=0; foreach($result as $row){?>
						<?php if($cnt==0){?>
							<div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['id'];?>" aria-expanded="true" aria-controls="collapseOne">
                                           <?php echo $row['title'];?>
                                            <span class="fa fa-plus open-icon floatright"></span>
                                            <span class="fa fa-minus close-icon floatright"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row['id'];?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" style="border:1px solid #f5f5f5;padding-left:15px;padding-top:10px;background:#F9F9F9">
                                    <?php if($row['image']!=""){?>
									<div class="row">
										<div class="col-sm-4">
											<img src="<?php echo base_url();?>/data/uploads/speciality/<?php echo $row['image'];?>" style="width:377px;height:180px">
										</div>
										<div class="col-sm-8">
											<p><?php echo strip_tags($row['pdesc'],"<p>");?></p>
										</div>
									</div>	
									<?php } else {?>
										<p><?php echo strip_tags($row['pdesc'],"<p>");?></p>
									<?php }?>
								</div>
                            </div>
                        <?php } else {?>
							<div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['id'];?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                           <?php echo $row['title'];?>
                                            <span class="fa fa-plus open-icon floatright"></span>
                                            <span class="fa fa-minus close-icon floatright"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row['id'];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="border:1px solid #f5f5f5;padding-left:15px;padding-top:10px;background:#F9F9F9">
                                    <?php if($row['image']!=""){?>
									<div class="row">
										<div class="col-sm-4">
											<img src="<?php echo base_url();?>/data/uploads/speciality/<?php echo $row['image'];?>" style="width:377px;height:180px">
										</div>
										<div class="col-sm-8">
											<p><?php echo strip_tags($row['pdesc'],"<p>");?></p>
										</div>
									</div>	
									<?php } else {?>
										<p><?php echo strip_tags($row['pdesc'],"<p>");?></p>
									<?php }?>
								</div>
                            </div>
						<?php } $cnt++; }?>   					 
				<?php } else {?>		
					<code>No Data Available.....</code>
				<?php } ?>
				</div>
					<?php if(isset($links)){?>
						<div class="pager">
							<?php echo $links;?>
						</div>
					<?php }?> 
					</div>
				</div>					
			</div>
		</div>
	</div>
</section>
<!-- SLIDER END -->
<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Welcome/speciality/<?php echo $urll;?>">
	<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>">
	<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
</form>       