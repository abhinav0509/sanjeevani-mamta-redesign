<script src="<?php echo base_url();?>data/js/ASPSnippets_Pager.min.js" type="text/javascript"></script>
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
	$(".service").addClass('active');
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

 <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Diagnostics</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Diagnostics</li>
                            </ul>
                        </div>
                    </div>
                </div>
	
	<section class="mainContent full-width clearfix">
      <div class="container">
	  <?php if(!empty($result)){?>
        <div class="sectionTitle text-center">
          <h2>
            <span class=""></span>
            <span class="color-4">Diagnostics</span>
            <span class=""></span>
          </h2>
        </div>
          
        <div class="row md">
		<?php $cl=1; foreach($result as $row){ if($cl>6){$cl=1;}?>
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesStyle">
              <span class="media-left bg-color-<?php echo $cl;?>">
                <i class="fa fa-plus-square bg-color-<?php echo $cl;?>" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-<?php echo $cl;?>"><?php echo $row['name'];?> </h3>
                <p><?php echo substr(strip_tags($row['pdesc']),0,100);?></br><a href="<?php echo base_url();?>index.php/Singlediagnostic/<?php echo $row['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> More...</a></p>
              </div>
            </div>
			<a href="javascript:;"></a>
		 </div>
		 <?php $cl++; }?>
        </div>
		<?php if(isset($links)){?>
			<div class="pager">
				<?php echo $links;?>
			</div>
		<?php }?>
		<?php } else {?>
			<code>No Data Available....</code>
		<?php }?>
      </div>
    </section>
	<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/diagnostics">
		<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>"> 
		<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
	</form>
	