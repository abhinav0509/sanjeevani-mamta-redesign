<!--Start Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8M2EKL5HY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8M2EKL5HY2');
</script>

<!--  /Start Google Analytics -->
<script>
$(document).ready(function(){
	$(".home").addClass('active');

});


</script>
<style>
.fancybox-next {
    right: 0;
}
</style>

             <div class="breadcrumb-wrap" style="height:0px;">
                 <div class="container">
                        <div class="breadcrumb-title" style="top:15px;">
                            <h2>News</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
	
	<section class="mainContent full-width clearfix homeGallerySection">
      <div class="container">
        <div class="row">
          <?php $this->load->view('NFront/sidebar');?>
          <div class="col-md-8 col-sm-7 col-xs-12 profileoptions">
		 
	
	<!-- slider of news images-->
	<div class="">
  <h2><?php //$al['title'];?></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
       <?php
	   error_reporting(0);
		 if(!empty($album)){	
			$galimg=array();			
			foreach($album as $al){				
				array_push($galimg,$al['image']);
			}
		 }			
		  ?>
		 	
     <div class="carousel-inner">
		  <?php for($i=0; $i<count($galimg); $i++){ ?>			
			 <?php if($i==0){ ?>
				<div class="item active">			 					
						<div class="row">
							<img src="<?php echo base_url()?>data/uploads/gallery/<?php echo $galimg[$i];?>" alt="Image" style="width:100%;  height:500px;">
						</div>					
				</div>	
		  <?php }else{ ?>
				<!--<div class="item">			 					-->
				<!--		<div class="row">-->
				<!--			<img src="<?php echo base_url()?>data/uploads/gallery/<?php echo $galimg[$i];?>" alt="Image" style="width:100%;  height:500px;">-->
				<!--		</div>					-->
				<!--</div>	-->
		  <?php } } ?>
      </div>
 
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Prev</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  
</div>

		 <?php
		 if(!empty($album)){   ?>
              <div class="caption border-color-1">
                <h3 class="color-1"><?php echo $album[0]['title'];?></h3>
                <?php echo $album[0]['pdesc'];?>
               </div>			   
            </div>
		 <?php }else {?> 
			<code>No Data Available...</code>
		 <?php } ?>				
		  </div>
        </div>
    </section>
	