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
	$(".home").addClass('active');
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
        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .filters select, .filters button {
           width: 187px;
           display: inline-block;
          /*float: left;*/
           margin: 0 5px;
           overflow: hidden;
           border-radius: 4px;
           position: relative;
        }
        .packages {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .package {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
        }
        .package img {
            max-width: 100%;
            height: 263px;
            border-radius: 5px;
        }
        .package h3 {
            margin: 10px 0;
        }
        .package p {
            margin: 5px 0;
        }
        .package button {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .package .book-now {
            background-color: #008CBA;
            color: white;
        }
        .package .compare {
            background-color: #008CBA;
            color: white;
        }
            #sub_mnu1 {
          background-color: rgb(255 255 255);
          border: 1px solid rgb(15 113 183);
          color: #0c0b0b;
          width: 180px;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
        }
</style>
<!-- <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>Health Checkup Packages</h2>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Health Checkup Packages</li>
          </ol>
        </div>
      </div>
    </section> -->
	  <!-- Breadcrumb Start -->
	  <div class="breadcrumb-wrap" style="height:0px;">
                    <div class="container">
                       
                        <div class="breadcrumb-title" style="top:20px;">
                            <h2>Health Checkup </h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="">Home</a></li>
                                <li>Health Checkup Packages</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

	 <section class="whiteSection full-width clearfix coursesSection" id="ourGallery">
      <div class="container">
	  <div class="filters">
            <select id="sub-mnu1" class="form-control sub_mnu1">
                <option>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
                
            </select>
            <!--<select id="sub-mnu1" class="form-control sub_mnu1">-->
            <!--    <option>Select Age</option>-->
            <!--    <option>01-18</option>-->
            <!--    <option>18-35</option>-->
            <!--    <option>35-60</option>-->
            <!--</select>-->
            <button class="form-control sub_mnu1">Search</button>
            <button type="button" class="btn btn-danger">Reset</button>
        </div>
        <br><br>
        <div class="row">
		<?php $cl=1; foreach($result as $pack){ if($cl>6){$cl=1;}?>
		<div class="col-md-4 col-sm-6 col-xs-12 block">
         
				<div class="package">
					<a href="<?php echo base_url();?>index.php/Singlecheckup/<?php echo $pack['id'];?>" class="btn btn-link" title="<?php echo $pack['name'];?>"><img src="<?php echo base_url();?>data/uploads/package/<?php echo $pack['image'];?>" alt="image" class="img-responsive">
					</a>										
						<h3 style="font-family: auto;font-size: 18px;"><?php echo $pack['name'];?></h3>
						<ul class="list-unstyled">
						<li><i class="fa fa-calendar-o" aria-hidden="true"></i>Mon-Sat</li>
						</ul>
						<ul class="myhealthList">
							<?php $test = explode(",",$pack['testname']);?>
							<?php for($i=0; $i<1; $i++){?>
								<i class="fa fa-check-square" aria-hidden="true"></i> <?php echo substr($test[$i],0,30);?>
							<?php }?>
						</ul>
						<p>Rs.<?php echo $pack['sp'];?>.00</p>
						<button class="book-now"><a href="<?php echo base_url();?>index.php/Singlecheckup/<?php echo $pack['id'];?>" class="book-now" title="<?php echo $pack['name'];?>">Book Now </a></button>
				</div>
				<br>
			</div>
		<?php $cl++; }?>
        </div>
		<!--<?php if(isset($links)){?>
			<div class="pager">
				<?php echo $links;?>
			</div>
		<?php }?>-->
        </div>
		
	  </div>
    </section>
    <form id="hfield" name="hfield" method="post" action="<?php echo base_url();?>index.php/Health_checkup">
		<input type="hidden" id="pindex" name="pindex" value="<?php if(isset($dt['pindex'])){ echo $dt['pindex']; }?>"> 
		<input type="hidden" id="rcount" name="rcount" value="<?php echo $rowcount;?>">
	</form>