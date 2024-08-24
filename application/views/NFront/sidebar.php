<div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
                                <div class="sidebar">

                                    <div class="sidebar-widget popular-post">
                                        <h4>Popular Posts</h4>
                                        <div class="popular-post-widget">
										   <?php if(!empty($news)) {?>

                                            <div class="pp-post-item">
											   <marquee direction="up" scrollamount="4" height="400px;" pauseOnHover="true" onmouseover="this.setAttribute('scrollamount', 0, 0)" onmouseout="this.setAttribute('scrollamount', 4, 0)">
											   <!-- <?php foreach($news as $nw){ ?>
                                                <a href="" class="pp-post-img" >
												  <img src="<?php echo base_url();?>data/uploads/news/<?php echo $nw['image'];?>" alt="image" >
                                                </a>
                                                <div class="pp-post-info">
                                                    <span>29 Jun, 2022</span>
                                                    <h6>
                                                        <a href="blog-details-no-sidebar.html">
                                                            3 Tips For Child Health During This Pandemic
                                                        </a>
                                                    </h6>
                                                </div>
												<hr>
												<?php }?> -->

												<?php foreach($news as $nw){ ?>

													<li class="media" >
							                           <div class="media-left" style="width:120px;">
							                              <a href="<?php echo base_url();?>index.php/news/<?php echo $nw['title'];?>"><img src="<?php echo base_url();?>data/uploads/news/<?php echo $nw['image'];?>" alt="image"></a>
							                          </div>
													  <div class="media-body">
													  <?php if($nw['update_date']!="")
							                             {
								                           $yr=date("Y", strtotime($nw['update_date'])); $mon = date("M", strtotime($nw['update_date'])); $dt = date("j", strtotime($nw['update_date']));
							                             }
							                           else{
							                             $yr=date("Y", strtotime($nw['insert_date'])); $mon = date("M", strtotime($nw['insert_date'])); $dt = date("j", strtotime($nw['insert_date'])); }?>
							                             <p><?php echo $mon;?> <?php echo $dt;?>, <?php echo $yr;?></p>

                                                        <h6>
                                                           <a href="<?php echo base_url();?>index.php/news/<?php echo $nw['title'];?>" style="font-size: 15px;"><?php echo $nw['title'];?></a>
                                                        </h6>
                                                </div>
												    </li>

													<hr>

						                        <?php }?>

												</marquee>
                                            </div>

											

											<?php } else {?>
					                            <div class="panel-body" style="padding:30px;">
						                         <code>Coming Soon !!.....</code>
					                            </div>
				                            <?php }?>
                                        </div>
                                    </div>


                                </div>
                            </div>