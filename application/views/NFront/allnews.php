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
<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$(".home").addClass('active');
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

 <div class="content-wrapper">

                <!-- Breadcrumb Start -->
               <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>All News</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li>All News</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

               <!-- Blog  Section Start -->
                <div class="blog-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <!--<div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">-->
                            <!--    <div class="sidebar">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <?php if(!empty($result)){?>
                            <div class="col-xl-12 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
                                <div class="row justify-content-center">
                                    <?php $cl=1; foreach($result as $nw){ if($cl>6){$cl=1;}?>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="blog-card style2">
                                            <div class="blog-img">
                                                <a class="media-left" href="javascript:;">
                        						<img class="media-object" src="<?php echo base_url();?>data/uploads/news/<?php echo $nw['image'];?>" alt="Image" style="height:265px;">
                        						<?php if($nw['update_date']!=""){
                        							$mon = date("M", strtotime($nw['update_date'])); $dt = date("j", strtotime($nw['update_date'])); }
                        						else {
                        							$mon = date("M", strtotime($nw['insert_date'])); $dt = date("j", strtotime($nw['insert_date'])); }?>
                        						</a>
                                              
                                               <a href="" class="blog-date"><span class="sticker-round"><?php echo $dt;?> <br><?php echo $mon;?></span></a>
                                            </div>
                                            <div class="blog-info">
                                              
                                                <h3><a href="<?php echo base_url();?>index.php/news/<?php echo $nw['title'];?>"><?php echo $nw['title'];?></a></h3>
                                                <p><?php echo substr($nw['pdesc'],0,300);?></p>
                                                <a href="<?php echo base_url();?>index.php/news/<?php echo $nw['title'];?>" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                   <?php $cl++; }?> 
                                </div>
                            </div>
                            <?php } else{?>
            				<code>No Data Available.....</code>
            			<?php }?>
            			<?php if(isset($links)){?>
            				<div class="pager">
            					<?php echo $links;?>
            				</div>
            			<?php }?>
                        </div>
                    </div>
                </div>
                <!-- Blog Section End -->
            </div>
            <form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/allnews">
		<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt1['pindex'])){ echo $dt1['pindex']; }?>"> 
		<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
	</form>	  
	
	