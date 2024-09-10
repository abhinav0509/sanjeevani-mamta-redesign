<!--Start Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8M2EKL5HY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8M2EKL5HY2');
</script>
<!--  /Start Google Analytics -->
<style>
.profile {
  background-color: #000;
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
		location.href = '<?php echo base_url();?>' + "index.php/Singlealbum/"+options;
			
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
  <section>
      <div class="breadcrumb-wrap" style="height: 0px;">
                    <div class="container">
                        <div class="breadcrumb-title" style="top: 1px;">
                            <h2>Image Gallery</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li> Image Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix homeGallerySection" style="padding-top: 50px;padding-bottom: 20px;">
      <div class="container">
		<div class="sectionTitle text-center">
          <h2 class="posRelHead">
			<div class="mySelectPosition">
				<div class="myMenuSelect">
					<select class="form-control" name="sub_mnu1" id="sub_mnu1" required  onchange="getVal(this);">
						<option value="" class="selopt" onclick="changeurl();">Select Department</option>
						<?php foreach($department as $dp){?>
								<option value="<?php echo $dp['id'];?>" class="selopt"><?php echo $dp['name'];?></option>	
						<?php }?>
					</select>
					<!--<span class="departArrow"><i class="fa fa-caret-down"></i></span>-->
				</div>
				<div class="myMenuSelect">
				<select class="form-control" name="category" id="category" required  onchange="getVal1(this);">
					<option value="" class="selopt" onclick="changeurl();">Select News & Events</option>
					<?php 
						$requestUri = $_SERVER['REQUEST_URI'];
						$parts = explode('/', $requestUri);	
						$url=$parts[4];
						?>
						<?php foreach($news as $cat1){
							if($cat1['id']==$url){		
						?>	
							<option value="<?php echo $cat1['id'];?>" class="selopt" selected><?php echo $cat1['title'];?></option>		
						<?php }else{?>
							<option value="<?php echo $cat1['id'];?>" class="selopt"><?php echo $cat1['title'];?></option>
						<?php } }?>
				</select>
				<!--<span class="departArrow"><i class="fa fa-caret-down"></i></span>-->
				</div>
			</div>
            <span class="shape shape-left bg-color-4"></span>
			<?php foreach($news as $cat1){
				if($cat1['id']==$url){		
			?>	
            <span class="color-2"><?php echo $cat1['title'];?></span>
			<?php } }?>
            <span class="shape shape-right bg-color-4"></span>
			
			
          </h2>
        </div>
		
        <div class="row" id="">
            <?php if(!empty($result)){ ?>
				<?php foreach($result as $row){?>
					<div class="col-md-4 col-sm-6 col-xs-12 isotopeSelector profileoptions">
						<div class="single_news galleryImg">
							<figure>
								<a href="<?php echo base_url();?>index.php/Galleryimages/<?php echo $row['aid'];?>"><img src="<?php echo base_url()?>data/uploads/gallery/<?php echo $row['image'];?>"  style=""/></a>
								<a class="profile" style="" href="<?php echo base_url();?>index.php/Galleryimages/<?php echo $row['title'];?>">
									 <span><?php echo $row['title']?></span>
								</a>
							</figure> 
						</div>
					</div>
				<?php } } else { ?>
					<code>No Data Available...</code>
				<?php } ?>
        </div>
	
      </div>
    </section>
