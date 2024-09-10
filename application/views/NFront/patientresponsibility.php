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
	$(".panel-body ul").addClass('myhealthList');
	$(".accordionCommon ul li").prepend('<i class="fa fa-check-square"></i>');
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
            PageSize: 5,
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
.accordionCommon .panel-body p {
  margin-bottom: 0px;
}
.myhealthList > li {
  line-height: 20px !important;
  margin-bottom: 6px;
}
.myhealthList li {
  color: #353535 !important;
  font-size: 13px !important;
  line-height: 24px;
  width: 100%;
}
</style>
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

<!-- PAGE TITLE SECTION-->
    <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:-39px;">
                            <h2>Patient Guidance</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Patient Guidance</li>
                            </ul>
                        </div>
                    </div>
                </div>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span class="color-2">Guidance</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
         
        <div class="row">
		<?php $this->load->view('NFront/sidebar');?>
          <div class="col-md-9 col-sm-7 col-xs-12">
		  <?php if(!empty($result)){?>
            <div class="accordionCommon" id="accordionOne">
              <div class="panel-group" id="accordionFirst">
			  <?php $q=0; $cl=1; foreach($result as $row){ if($cl>6){$cl=1;}if($q==0){?>
                <div class="panel panel-default">
                  <a class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordionFirst" href="#collapse-aa">
                    <span><?php echo $row['title'];?></span>
                    <span class="iconBlock"><i class="fa fa-chevron-down"></i></span>
                  </a>                    
                  <div id="collapse-aa" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <?php echo $row['pdesc'];?>
                    </div>
                  </div>
                </div>
				<?php } else {?>
                <div class="panel panel-default">
                  <a class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordionFirst" href="#collapse-<?php echo $row['id']?>">
                    <span><?php echo $row['title'];?></span>
                    <span class="iconBlock"><i class="fa fa-chevron-up"></i></span>
                  </a>
                  <div id="collapse-<?php echo $row['id']?>" class="panel-collapse collapse">
                    <div class="panel-body">
                      <?php echo $row['pdesc'];?>
                    </div>
                  </div>
                </div>
                <?php  }  $cl++; $q++;  }?>
              </div>
            </div>
          <?php } else {?>
			<code>No Data Available....</code>
		  <?php }?>
          <?php if(isset($links)){?>
			<div class="pager">
				<?php echo $links;?>
			</div>
		  <?php }?>
		  </div>
        </div>
      </div>
    </section>
	<form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/patientresponsibility">
		<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>"> 
		<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
	</form>