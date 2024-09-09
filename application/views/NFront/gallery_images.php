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
<style>
.profile {
  background-color: #428bca;
  bottom: 0;
  height: 53px;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  text-align: center;
  transition: all 0.2s cubic-bezier(0.17, 0.67, 0.84, 0.57) 0s;
  width: 100%;
}
.profileoptions:hover
.profile{
	opacity:0.6;
	bottom:0;
}
.selopt{
	color:black;
	background-color:white;
}
</style>
<script>
$(document).ready(function(){
	$(".gallry").addClass("active");
});
</script>
<script>
function getVal(val){
			var options = $('select[name=sub_mnu1]').val();
			//alert(options);
		location.href = '<?php echo base_url();?>' + "index.php/Galleryimages/"+options;
			
		};
</script>
<script>
function getVal1(val){
			var options = $('select[name=category]').val();
			//alert(options);
		location.href = '<?php echo base_url();?>' + "index.php/SinglealbumNews/"+options;
		};
</script>
<script>
function changeurl(){			
		location.href = '<?php echo base_url();?>' + "index.php/gallery";
		};
</script>
<!-- PAGE TITLE SECTION-->

<div class="content-wrapper">

          <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                        <div class="breadcrumb-title" style="top:-49px;">
                            <h2>Gallery Images</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Gallery Images</li>
                            </ul>
                        </div>
                    </div>
                </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix homeGallerySection" style="padding-top: 50px;">
      <div class="container">
		<div class="sectionTitle text-center">

    <div class="sidebar col-xl-3">

        <div class="sidebar-widget" style="margin-top: -33px;margin-bottom: 25px;">

        <select class="healthGropdown form-control border-color-4" name="sub_mnu1" id="sub_mnu1" required  onchange="getVal(this);" style="width: 222px;margin-bottom: -10px;margin-top: -10px;">
            <option value="volvo">Oral Screening Camp</option>
            <?php if(!empty($result2)){?>
				       <?php foreach($result2 as $row){?>

                <option value="<?php echo $row['aid'];?>"><?php echo $row['title'];?></option>

            <?php } } else { ?>
					   <code>No Data Available...</code>
			         <?php } ?>
        </select>
         
        </div>

        </div>
	
			    <div class="section-title style1 text-center mb-40">
				</h2>
				<?php foreach($album  as $al){?>
            <span class="" style="font-size:24px !important;color: #121213e0;"><?php echo $al['title'];?></span>
			<?php }?>
			    </h2>
				</div>
			
        </div>
        <div class="row justify-content-center">
            <?php if(!empty($result)){?>
				<?php foreach($result as $row){?>
					<div class="col-md-4 col-sm-3 col-xs-12">
						<a class="popup-box" data-lightbox="image" href="<?php echo base_url()?>data/uploads/gallery/<?php echo $row['image'];?>"><br>
							<img src="<?php echo base_url()?>data/uploads/gallery/<?php echo $row['image'];?>" alt="image" class="popup-box" style="">
						</a>
					</div>
				<?php } } else {?>
					<code>No Data Available...</code>
				<?php } ?>
        </div>
      </div>
	</section>

</div>
