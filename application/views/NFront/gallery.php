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
	color: black;
background-color: white;
}
 .posRelHead #csubject {
	position: absolute;
	width: 237px;
	top: 10px;
	left: 0;
} 
.posRelHead {
	position: relative;
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
		location.href = '<?php echo base_url();?>' + "index.php/Welcome/Singlealbum/"+options;
			
		};
</script>
<script>
function getVal1(val){
			var options = $('select[name=category]').val();
			//alert(options);
		location.href = '<?php echo base_url();?>' + "index.php/Welcome/SinglealbumNews/"+options;
		};
</script>
  <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Gallery</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

       <section class="mainContent full-width clearfix homeGallerySection" style="padding-top: 50px;padding-bottom: 20px">
            <div class="container">

               <div class="row justify-content-center">

                     <?php if(!empty($result)){?>
				       <?php foreach($result as $row){?>

                        <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector profileoptions">

                              <div class="blog-card style2">

                               <div class="single_news galleryImg">
							      <figure>
								      <a href="<?php echo base_url();?>index.php/Galleryimages/<?php echo $row['aid'];?>"><img src="<?php echo base_url()?>data/uploads/gallery/<?php echo $row['image'];?>"  style=""/></a>
  							      </figure> 
						       </div>

                                    <div class="blog-info" style="min-height: 80px;">
                                        <h5 style="margin-top: -23px;"><a href="<?php echo base_url();?>index.php/Galleryimages/<?php echo $row['aid'];?>"><?php echo $row['title']?></a></h5>
                                    </div>
                                </div>
                        </div>
                        
                       <?php } } else { ?>
					   <code>No Data Available...</code>
			         <?php } ?>
               </div>
            </div>
        </section>
</div>