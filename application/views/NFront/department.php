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

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                 <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Department</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Department</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Service Section Start -->
               <section class="whiteSection full-width clearfix coursesSection" id="ourGallery">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class=""></span>
            <span class="" style="color:#085479;">Our Department</span>
            <span class=""></span>
          </h2>
        </div>
          
        <div class="row">
		<?php $cl=1; foreach($result as $row){ if($cl>6){$cl=1;}?>
			<div class="col-sm-4 col-xs-12 block">
				<div class="thumbnail thumbnailContent">
				<!--<h3><a href="javascript:;" class="blog-metainfo  list-style" style="text-align:center"> <?php echo $row['name'];?></a></h3>-->
					<a href="<?php echo base_url();?>index.php/SingleDept/<?php echo $row['name'];?>" class="btn btn-link" title="<?php echo $row['name'];?>"><img src="<?php echo base_url();?>data/uploads/department/<?php echo $row['image'];?>" alt="image" class="img-responsive"></a>
					<!-- <div class="sticker bg-color-4"><i class="fa fa-rupee"></i><?php echo $row['sp'];?></div> -->
					<div class="caption border-color-2">
						<h4><a href="javascript:;" class="color-2"> <?php echo $row['name'];?></a></h3>
						<ul class="list-unstyled">
						<!-- <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Mon-Sat</li> -->
						</ul>

						<p class="clrr"></p>
					<div class="about-countinner md-services">
						 <!--<?php echo $row['pdesc'];?> -->
					</div>
						<!-- <ul class="myhealthList">
							<?php $test = explode(",",$row['name']);?>
							<?php for($i=0; $i<3; $i++){?>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo substr($test[$i],0,30);?></li>
							<?php }?>
						</ul> -->
						<ul class="list-inline btn-yellow">
							<li><a href="<?php echo base_url();?>index.php/SingleDept/<?php echo $row['name'];?>" class="link style2">Read More <i class="flaticon-right-arrow" aria-hidden="true"></i></a></li>
							<!--<li><a href="javascript:;" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a></li>-->
						</ul>
					</div>
				</div>
			</div>
		<?php $cl++; }?>
        </div>
		<!--<?php if(isset($links)){?>
			<div class="pager">
				<?php echo $links;?>
			</div>
		<?php }?>-->
        </div>
		
	  </div>
    </section>
    <form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/SingleDept">
		<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>"> 
		<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
	</form>
                <!-- Service Section End -->

            </div>
            <!-- Content wrapper end -->
