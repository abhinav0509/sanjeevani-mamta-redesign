<div style="background: #FDF5EF; padding: 10px">
					<div class="sidebar-widget">							
						<h4 class="sec_Hd">Latest News</h4>
						<div class="latest-news area_content" style="height: 190px;">
						  <marquee id="newsmarquee" scrollamount="2" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0)" onmouseout="this.setAttribute('scrollamount', 2, 0)">
						  <?php foreach($news as $nw){?>
							<article class="post news_post clearfix">
							<?php if($nw['image']!=""){?>
							<?php $imgg = explode(",",$nw['image']);?>
							<?php if(count($imgg)>1){?>
								<a class="news_thumb" href="#">
									<img src="<?php echo base_url();?>data/uploads/news/<?php echo $imgg[0];?>" alt="" style="height:40px;width:40px;">
								</a>
							<?php } else {?>
								<a class="news_thumb" href="#">
									<img src="<?php echo base_url();?>data/uploads/news/<?php echo $nw['image'];?>" alt="" style="height:40px;width:40px;">
								</a>
							<?php } }?>
								<div class="post-right">
									<h6 class="post-title"><a href="#"><?php echo $nw['title'];?></a></h6>
									<p><?php echo substr($nw['pdesc'],0,60);?>....</p>
									<a class="care_bt pull-right" href="<?php echo base_url();?>index.php/Welcome/news/<?php echo $nw['id'];?>">Read More</a>
								</div>
							</article>
						  <?php } ?>
						  </marquee>
						</div>
					</div>
			  </div>
			  <div style="background: #FDF5EF; padding: 10px; margin-top: 5px;">
					<div class="siderbar-widget">
						<h4 class="sec_Hd">Patient Testimonial</h4>
						 <div class="patientslide_item">
							<div id="patient_slide">
								<?php foreach($testi as $test){?>
								<div class="item">
									<div class="patient_comment">
										<?php echo substr($test['pdesc'],0,60);?>.....
									</div>
									<div class="content mt-20">
										<div class="thumb">
										<?php if($test['image']!=""){?>
											<img class="thumb_circle" alt="" src="<?php echo base_url();?>data/uploads/testimonial/<?php echo $test['image']?>">
										<?php } else {?>
											<img class="thumb_circle" alt="" src="<?php echo base_url();?>data/uploads/testimonial/13.jpg">
										<?php }?>
										</div>
										<div class="patient-details">
											<h5 class="author"><a href="#"><?php echo $test['dr_id'];?></a></h5>											
											<a class="care_bt" href="<?php echo base_url();?>index.php/Welcome/testimonial/<?php echo $test['id'];?>">Read More</a>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
						 </div>
					</div>
			  </div>	
			