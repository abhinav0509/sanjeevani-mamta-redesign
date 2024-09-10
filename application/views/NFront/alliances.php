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
	$(".allian").addClass('active');
});
</script>
<style>
/* Tooltip text */
.tooltip1 .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1000;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip1:hover .tooltiptext {
    visibility: visible;
}
</style>
<!-- PAGE TITLE SECTION-->
    <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Alliance</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>Alliance</li>
                            </ul>
                        </div>
                    </div>
                </div>
<section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
		  <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              <div class="panel panel-default eventSidebar">
                  <div class="panel-heading bg-color-4 border-color-4">
                    <h3 class="panel-title">Patient Activity</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list">
                      <!--<li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h5 class="media-heading color-2"><a href="http://localhost/inlaksmvc/index.php/patientresponsibility" class="color-2">Patient Responsibility</a></h5>
                        </div>
                      </li>
					  <hr>
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h5 class="media-heading color-1"><a href="javascript:;" class="color-1">Patient Education</a></h5>
                        </div>
                      </li>
					  <hr>-->
                      <li class="media iconContet">
                        <div class="media-left iconContent bg-color-3">
                          <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h5 class="media-heading color-3"><a href="<?php echo base_url();?>newFront/alliance.pdf" download="" target="_blank" class="color-3">Information for TPA Insurance</a></h5>
                        </div>
                      </li>
                  </ul></div>
              </div>
            </aside>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-12">
		  <?php if(!empty($result)){?>
		  <?php $ty = str_replace("Corporate","Insurance Company",$ty);?>
			<div class="sectionTitle text-center timeTablepd">
				<h2>
					<span class="shape shape-left bg-color-4"></span>
					<span class="color-2" style="font-size:24px !important;"><?php echo $ty;?></span>
					<span class="shape shape-right bg-color-4"></span>
				</h2>
			</div>
			<?php if($parts[3]=="Corporate"){?>
			<?php foreach($result as $row){?>
			
			<div class="row my-thumb" style="margin:0px;">
			
			<?php if($row['image']!=""){?>
				<div class="col-sm-6 col-md-3" >
					<div class="f1_container" >
						<div class="f1_card ">
							<div class="front face">
								<img src="<?php echo base_url();?>data/uploads/alliances/<?php echo $row['image'];?>">
							</div>
							<div class="back face center">
								<p style="text-align: center;"><?php echo $row['pdesc'];?></p>
							</div>
						</div>
					</div>
				</div>	
			<?php } } } ?>
			</div>
			<?php if($parts[3]=="TPA"){?>
			<div class="col-md-9 col-sm-7 col-xs-12">
			<h4><b>Government Insurance Companies</b></h4>
			<?php foreach($result as $row){?>
			
			<div class="row my-thumb" style="margin:0px;">
			
			<?php if($row['image']!="" && $row['category']=="Government"){?>
				<div class="col-sm-6 col-md-3" >
					<div class="f1_container" >
						<div class="f1_card ">
							<div class="front face">
								<img src="<?php echo base_url();?>data/uploads/alliances/<?php echo $row['image'];?>">
							</div>
							<div class="back face center">
								<p style="text-align: center;"><?php echo $row['pdesc'];?></p>
							</div>
						</div>
					</div>
				</div>	
			<?php } } ?>
			</div>
			</br>
			<h4><b>Private Insurance Companies</b></h4>
			<?php foreach($result as $row){?>
			
			<div class="row my-thumb" style="margin:0px;">
			
			<?php if($row['image']!="" && $row['category']=="Private"){?>
				<div class="col-sm-6 col-md-3" >
					<div class="f1_container" >
						<div class="f1_card ">
							<div class="front face">
								<img src="<?php echo base_url();?>data/uploads/alliances/<?php echo $row['image'];?>">
							</div>
							<div class="back face center">
								<p style="text-align: center;"><?php echo $row['pdesc'];?></p>
							</div>
						</div>
					</div>
				</div>	
				
			<?php } } } ?>
			</div>
			</div>
			<p style="">Note :</p>
			<?php  } else{?>
				<code>No Data Available......</code>
			<?php }?>
			
		  </div>
		</div>
      </div>
</section>
	