<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-3/assets/css/blog-3.css">
<style>
    ol,
    ul {
        list-style: none;
    }

    .selopt,
    .sub_mnu1 {
        color: black;
        background-color: white;
    }

    .closePopUp1 {
        position: absolute;
        right: -16px;
        top: -18px;
        font-size: 20px;
        color: #fff;
        background-color: #333;
        padding: 3px 9px 5px 9px;
        border-radius: 100%;
    }

    .mainContaentAB {
        display: none;
    }

    .mainContaentAB.inn {
        display: block
    }

    .popup-box {
        display: none;
        position: fixed;
        text-align: center;
        width: 100%;
        height: 100%;
        z-index: 10;
        top: 0;
        left: 0;
    }

    .popup-inner {
        max-width: 300px;
        min-height: 160px;
        background: white;
        border-radius: 25px;
        padding: 15px;
        margin: auto;
        top: 25%;
        position: relative;
    }



    .popup-msg {
        font-weight: bold;
        color: black;
        padding: 20px 20px 0 20px;
    }

    .next-step-btn {
        margin: 20px auto 0;
        background: linear-gradient(rgb(204, 0, 0), rgb(130, 0, 0));
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#015eab', endColorstr='#10276b');
        border: none !important;
        padding: 10px 40px !important;
        color: #fff !important;
        font-weight: bold;
        border-radius: 3px;
        cursor: pointer;
    }

    .transparent-layer {
        position: fixed;
        width: 100%;
        height: 100%;
        background: #000000;
        opacity: 0.3;
        overflow: hidden;

    }

    .rating {
        margin-top: -25px;

    }
    .ratingg {
        margin-top:5px;
        margin-left:30px;

    }
    #hero-btn-primary {
        margin-right: 16px;
    }

    .cntus_btn {
        border: 2px solid #007c9d;
        margin-top: 30px;
        padding: 24px 0px;
        background: #fff;
        box-shadow: 0px 0px 36px rgb(16 40 81 / 12%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .pg_widget {
        background: #fff;
        box-shadow: 0px 0px 36px rgb(16 40 81 / 12%);
        padding: 16px 10px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        border: 1px solid #fff;
        cursor: pointer;
        /* min-height: 116px; */
    }

    .pg_widget:hover {
        border: 1px solid #E85D21;
    }

    #viewmore-btn {
        border: solid 1px #000;
    }

    #viewmore-btn:hover {
        border: 1px solid #E85D21;
    }

    .why_ah_sec {
        margin-top: 80px;
        /* background-color: #FFFFFF; */
        /* background-color:#F1F6F7; */
    }

    .why_point img {
        width: 72px;
    }

    .why_ah_points div {
        font-size: 16px;
        line-height: 24px;
    }


    .point_icon {

        padding: 12px;
        background-color: #fff;
        box-shadow: 0px 0px 15px #286499;
        border-radius: 9px;
        padding: 12px;

    }

    .why_ah_points h4 {
        color: #E85D21;

        font-weight: 900;
        font-size: 28px;
    }

    .who-card {
        background-color:#fff;
        
        border-radius: 16px;
        position: relative;
        z-index: 9999;
    }

    .who-card-overlay{
        position: absolute;
        top:8%;
        left:8%;
        width:100%;
        background-color:#E85D21;
        height: 500px;
        border-radius: 16px;
        z-index: -22;
    }

    .who-card .card-img {
        border-radius: 16px;
        height: 500px;
        
    }
    .bg-image-community{
        /* filter: blur(2px);
       -webkit-filter: blur(2px); */
     
       box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    }
  
    .hero-image{
      position: relative;  
    }

    .svg-animation{
      top:-18%;
      left:6%;  
      position: absolute;
      animation: spin 40s linear infinite;
      z-index: -11111;
      width:100%;
     }
     @keyframes spin {
      0%{
        transform: rotate(0deg);
      }
      100%{
         transform: rotate(360deg);
      }
      
    }
     #hero-image-doctor{
        z-index: 99999;
     }
    body{
      background-color:#F5F6FA;
     
    } 
    .departments{
        position: relative;
        overflow: hidden;
    }
   
    #dept-tile:hover{
        transform: scale3d(1.1, 1.1, 1.1);
    }
    #knee-div{
      
        background-color:gray;
        height:60vh;
        width:20%;
        background-image:url(assets/img/Core-Departments/Knee-Replacement-Surgery.jpg);
        background-repeat:no-repeat;  
        background-size: cover;
        background-position:right center;
        overflow:hidden;
    }
    #knee-div:hover{
        width:80vw;
        height:
    }


</style>


<!--Hero Section Start-->

<section class="new-hero container" style="margin-top:150px;">
    <div class="row">
        <h6 class="text-primary">A Hub For Clinical Excellence</h5>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1>We are dedicated to Provide
                    <span style="color:#E85D21">accessible and affordable </span>
                    healthcare
                </h1>
                <p>
                    At Sanjeevani Mamta Multi Specialty Hospital, your health and well-being are our
                    top priorities and we are committed to providing exceptional care with compassion,
                    expertise, and innovation
                </p>
                <div class="row">
                    <div class="col">
                        <div class="row d-flex p-2">
                            <a href="https://www.sanjeevanimamtahospital.com/index.php/Doctors"<button id="hero-btn-primary" class="col-sm-10 col-md-10 col-lg-5 btn btn-primary mb-2"
                                style="background-color:#286499;">Book Appointment</button></a>
                             <a href="https://www.sanjeevanimamtahospital.com/index.php/Health_checkup"<button id="secondary-btn" class="col-sm-10 col-md-10 col-lg-5 btn btn-primary ml-10"
                                style="background-color:#fff; border:1px solid #286499; color:#286499;">Book A
                                Test</button></a>
                        </div>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col d-flex flex-column" style="">
                       
                        <p class="rating">Rated <b>4.8</b> &nbsp;<i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i> &nbsp; on <img class="img-fluid"
                                src="assets/img/hero/google-logo.png"
                                style="width:80px; height:auto; object-fit:contain;"></p>
                    </div>
                </div>
            </div>
            <div class="hero-image col-md-6 col-lg-6">
                <div class="svg-animation">
                <img src="assets/img/hero/hero-circle.png">
                </div>
                <img class="img-fluid" id="hero-image-doctor" src="assets/img/hero/doctor-hero.png" alt="hero-image-doctor">

            </div>
    </div>
</section>
<!-- Hero Section End -->

<!--Departments Intro Section Start-->
<section class="container departments" style="margin-top:120px;">
    <div class="bg-picture">
       
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-md-12 aos-init aos-animate"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
            <h3 style="color:#E85D21;">Our Departments</h3>
            <h6 style="color:#666666;">We have team of highly qualified doctors</h6>
            <br>
        </div>
        <div class="col-md-12">
            <div class="text-center pt-lg-0 pt-4">
                <div class="row justify-content-center">

                    <div class="col-md-12">
                        <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-4">
                        
                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Cancer%20-%20Oncology" class="pg_widget" id="COE_Oncology">
                                    <img src="assets/img/Dept/Icons/oncology_icon.svg"
                                        alt="icon">
                                    <h5>Cancer Care</h5>
                                </a>
                            </div>
                            
                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Orthopaedics" class="pg_widget" id="COE_Orthopaedic">
                                    <img src="assets/img/Dept/Icons/Orthopaedic.svg"
                                        alt="icon">
                                    <h5>Orthopaedic</h5>
                                </a>
                            </div>
                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/General%20medicine" class="pg_widget" id="COE_GenMedicine">
                                    <img src="assets/img/Dept/Icons/general_medicine.svg"
                                        alt="icon">
                                    <h5>Gen.Medicine</h5>
                                </a>
                            </div>
                             <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Dental" class="pg_widget" id="COE_Dentistry">
                                    <img src="assets/img/Dept/Icons/dentistry.svg"
                                        alt="icon">
                                    <h5>Dentistry</h5>
                                </a>
                            </div>
                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Nephrology%20-%20Dialysis" class="pg_widget" id="COE_Nephrology">
                                    <img src="assets/img/Dept/Icons/nephrology.svg"
                                        alt="icon">
                                    <h5>Nephrology</h5>
                                </a>
                            </div>
                               <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/General%20Surgery" class="pg_widget" id="COE_GEN_SURGERY">
                                    <img src="assets/img/Dept/Icons/gensurgery.svg"
                                        alt="icon">
                                    <h5>Gen.Surgery</h5>
                                </a>
                            </div>
                               <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/ENT" class="pg_widget" id="COE_ENT">
                                    <img src="assets/img/Dept/Icons/ent.svg"
                                        alt="icon">
                                    <h5>ENT</h5>
                                </a>
                            </div>


                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Neurology" class="pg_widget" id="COE_Neurology">
                                    <img src="assets/img/Dept/Icons/neurology.svg"
                                        alt="icon">
                                    <h5>Neurology</h5>
                                </a>
                            </div>

                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Gastroenterology" class="pg_widget">
                                    <img src="assets/img/Dept/Icons/gastroenterology.svg"
                                        alt="icon">
                                    <h5>Gastroenterology</h5>
                                </a>
                            </div>

                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Gynecology" class="pg_widget">
                                    <img src="assets/img/Dept/Icons/gynecology.svg"
                                        alt="icon">
                                    <h5>Gynecology</h5>
                                </a>
                            </div>

                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Aesthetic" class="pg_widget">
                                    <img src="assets/img/Dept/Icons/dermatology.svg"
                                        alt="icon">
                                    <h5>Aesthetic</h5>
                                </a>
                            </div>

                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Opthalmology" class="pg_widget" id="COE_Ophthalmology">
                                    <img src="assets/img/Dept/Icons/ophthalmology.svg"
                                        alt="icon">
                                    <h5>Ophthalmology</h5>
                                </a>
                            </div>

                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Paediatrics" class="pg_widget" id="COE_Pediatrics">
                                    <img src="assets/img/Dept/Icons/paediatricurology.svg"
                                        alt="icon">
                                    <h5>Pediatrics</h5>
                                </a>
                            </div>
                            <div class="col" id="dept-tile">
                                <a href="https://www.sanjeevanimamtahospital.com/index.php/SingleDept/Urology" class="pg_widget" id="COE_Urology">
                                    <img src="assets/img/Dept/Icons/urology.svg"
                                        alt="icon">
                                    <h5>Urology</h5>
                                </a>
                            </div>
                       </div>
                        
                            
                            <a href="https://www.sanjeevanimamtahospital.com/index.php/department"<button id="viewmore-btn" class="btn text-center mt-20 col-sm-4 col-md-4 col-lg-2"
                            style="background-color:#fff; color:#000; padding:16px;">VIEW MORE</button></a>

                    </div>
                </div>
            </div>

        </div>
        <!-- End COEs -->

    </div>

</section>
<!-- Core Specialised Departments Start -->

 <section class="core-department container" style="margin-top:120px;">
    <div class="row">
        <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
            <h2 class="text-center"  style="color:#E85D21;">Our Core Specialised Departments</h2>
            <h6 class="text-center" style="color:#666666;">We provide world class service with our eminent doctors</h6>
        
        </div>
        
    </div>
    <div class="container">
        <div class="row">
           
              <div class="col"  style="background-image:url(assets/img/Core-Departments/cancer-care.jpg);background-color:green; height:60vh; background-size:cover; background-position:bottom center;">
                <div class="deptc-info d-flex align-items-center justify-content-center">
                        <h6>Cancer Care</h6>
                        <img> 
                </div>
               </div>

            <div class="col" id="knee-div" style="">
                <div class="deptc-info d-flex align-items-center justify-content-center">
                        <h6>Joint Replacement</h6>
                </div>
            </div>
            <div class="col"  style="height:60vh; background-image:url(assets/img/Core-Departments/pediatric-surgery-in-india.jpg);background-color:green; height:60vh; background-size:cover; background-position:bottom center;">
                <div class="deptc-info d-flex align-items-center justify-content-center">
                        <h6>Pediatric Orthopedic</h6>
                        <img> 
                </div>    
           </div>
            <div class="col" style="height:60vh; background-image:url(assets/img/Core-Departments/ent-surgery.jpg);background-color:green; height:60vh; background-size:cover; background-position:left center;">
                <div class="deptc-info d-flex align-items-center justify-content-center">
                                <h6>ENT Surgeries</h6>
                                <img src=""> 
                </div>    
            </div>
            <div class="col" style="height:60vh; background-image:url(assets/img/Core-Departments/cataract-2.jpg);background-color:green; height:60vh; background-size:cover; background-position:bottom center; ">
                    <div class="deptc-info d-flex align-items-center justify-content-center">
                                <h6>Cataract Surgeries</h6>
                                <img> 
                   </div>       
            </div>
            <div class="col" style="height:60vh; background-image:url(assets/img/Core-Departments/dialysis.jpg);background-color:green; height:60vh; background-size:cover; background-position:bottom center;">
                <div class="deptc-info d-flex align-items-center justify-content-center">
                            <h6>Dialysis</h6>
                            <img> 
                    </div>  
                
            </div>
        </div>
    </div>
   

 </section>


<!-- Core Specialised Departments End -->

<!-- Why Choose Us Section Begin"--->

<section class="why_ah_sec">
    <div class="container">
        <div class="row g-lg-5 g-3">
            <div class="col-md-6">
              
                <h3 style="color:#E85D21;" class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Why Choose Sanjeevani Mamta?</h3>
                <p>
                    We offer a wide range of specialized medical services to address your unique
                    healthcare needs. Our experienced team of physicians, nurses and support
                    staff work together to provide exceptional care across multiple disciplines. We
                    have a dedicated OT for Ophthalmology.
                </p>
                <div class="row g-xl-5 g-2 pt-lg-4 pt-2 pb-3 pb-lg-0">
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <!-- <div class="vr"></div> -->
                            <div class="d-flex gap-4 py-2 pt-3 why_point">
                                <div class="flex-shrink-0">
                                    <img src="assets/img/Dept/Icons/Doctors.webp" alt="doctor"
                                        class="point_icon">
                                </div>
                                <div class="flex-grow-1 why_ah_points">
                                    <h4><span class="counter-holder" id="doctorsCounter-why_ah_sec">1</span>+</h4>
                                    <div>Qualified Doctors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <!-- <div class="vr"></div> -->
                            <div class="d-flex gap-4 py-2 pt-3 why_point">
                                <div class="flex-shrink-0">
                                    <img src="assets/img/Dept/Icons/bookhelathchecktpa_icon.svg"
                                        alt="" class="point_icon">
                                </div>
                                <div class="flex-grow-1 why_ah_points">
                                    <h4><span class="counter-holder" id="insuranceCounter-why_ah_sec">1</span>+</h4>
                                    <div>
                                   
                                        <a class="link-opacity-100" style="color:#286499; " href="https://www.sanjeevanimamtahospital.com/index.php/cashless_facility"><u>
                                            </u> TPA Insurance Partners </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <!-- <div class="vr"></div> -->
                            <div class="d-flex gap-4 py-2 pt-3 why_point">
                                <div class="flex-shrink-0">
                                    <img src="assets/img/Dept/Icons/icubed.png"
                                        alt="" class="point_icon">
                                </div>
                                <div class="flex-grow-1 why_ah_points">
                                    <h4><span class="counter-holder" id="ICUbedsCounter-why_ah_sec">1</span>+</h4>
                                    <div>
                                        Modern ICU Beds
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <!-- <div class="vr"></div> -->
                            <div class="d-flex gap-4 py-2 pt-3 why_point">
                                <div class="flex-shrink-0">
                                    <img src="assets/img/Dept/Icons/ambulance.png"
                                        alt="" class="point_icon">
                                </div>
                                <div class="flex-grow-1 why_ah_points">
                                    <h4><span class="counter-holder">24 X 7</span></h4>
                                    <div>Hours Emergency Facilities </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                
                
                <div class="card border-0 who-card">
                    <div class="who-card-overlay">
                   
                  

                    </div>
                    
                    <img src="assets/img/why-choose-us/patient-care-v1.jpg" class="card-img " alt="...">
                </div>
            </div>
          
        </div>
         <a href="https://www.sanjeevanimamtahospital.com/index.php/SMSSH"<button id="viewmore-btn" class="btn text-center mt-20 col-sm-4 col-md-4 col-lg-2"
                            style="background-color:#fff; color:#000; padding:16px;">VIEW MORE</button></a>


        
    </div>
   
</section>

<!--Why Choose Us Section End-->
<!-- Community Section Begin-->

<section class="community" style="margin-top:80px;">
     <div class="container" style="background-color:#fff;">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col p-2" style="width:376px; height: 300px; background-image: url(assets/img/community/sanjevani-camp1.png); background-repeat: no-repeat;">
                     
                    </div>
                    <div class="col p-2" style="width:376px; height: 300px; background-color: #276499;">
                       <h4 class="text-white text-center fw-bold mt-4">MISSION</h4> 
                       <p class="text-white p-1">Delivering high quality affordable healthcare in a safe, ethical environment and
                          developing a network of partner hospitals to enable affordable care delivery beyond city
                          limits</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-2" style="width:376px; height: 300px; background-color: #E75D21;">
                        <h4 class="text-white text-center fw-bold mt-4">VISION</h4>  
                        <p class="text-white p-1">Improving availability and affordability of
high quality healthcare services to patients
across the socio-economic spectrum</p>
                    </div>
                    <div class="col p-2" style="width:376px; height: 300px; background-image: url(assets/img/community/sanjeevani-camp2.png); background-repeat: no-repeat;">
                       
                      
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="row p-2">
                   <h3 style="color: #E75D21;">
                    Our Community Initiatives
                   </h3>
                   <p>
                     WE BELIEVE IN MAKING THE WORLD A BETTER PLACE WE RUN VARIOUS MEDICAL CAMPS IN WHICH WE PROVIDE FREE CHECK-UPS TO CHILDREN WOMEN, AND ELDERLY.WE HAVE MOBILE SCREENING VANS WHICH OFFERS EARLY DETECTION OF CANCER THROUGH WHICH WE DO OUR BIT TO RAISE AWARNESS FOR CANCER.
                   </p>
                       

                    <a href="https://www.sanjeevanimamtahospital.com/index.php/campdetails"<button id="secondary-btn" class="col-sm-10 col-md-10 col-lg-5 btn btn-primary"
                                style="background-color:#fff; border:1px solid #286499; color:#286499;">Know More</button></a>
                </div>
             
                <div class="row p-2 d-flex gap-4">
                     <a href="<?php echo base_url();?>index.php/CSR"><div class="bg-image-community col d-flex justify-content-center align-items-center" style="width:224px; height:310px; color:#fff; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(assets/img/community/community-kids2.png); border-radius: 20px;">
                        <h4 class="text-white">CSR</h4></a>
                    </div></a>
                    <div class="bg-image-community col d-flex justify-content-center align-items-center" style="width:224px; height:310px; color:#fff; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(assets/img/community/donate.png); border-radius: 20px;">
                        <h4 class="text-white">Donate</h4>
                    </div>
                   
                    <div class="bg-image-community col d-flex justify-content-center align-items-center" style="width:224px; height:310px; color:#fff; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(assets/img/community/volunteer-sm.png); border-radius: 20px;">
                        <h4 class="text-white">Volunteer</h4>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </section>
<!--Community Section End -->

<!-- Blog Section Start -->
<section class="py-3 py-md-5">
  <div class="container">
  <div class="row">
            <div class="col-xl-6 offset-xl-3  col-lg-8 offset-lg-2 col-md-10 offset-md-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                     <h3 style="color:#E85D21;">Whats Happening at Sanjeevani Mamta</h3>
                     <h6 class="text-center" style="color:#666666;">Our News and Events</h6>
                </div>
            </div>
        </div>
  </div>
  
  <div class="container overflow-hidden">
  <?php if(!empty($news)){?> 
    <div class="row gy-4 gy-lg-0">
    <?php $ij=1; foreach($news as $nw){?>
      <div class="col-12 col-lg-4">
        <article>
          <div class="card border-0">
            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
              <a href="#!">
              <a href="<?php echo base_url();?>index.php/news/<?php echo $nw['title'];?>"><img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="<?php echo base_url();?>data/uploads/news/<?php echo $nw['image'];?>" alt="Business"></a>
              </a>
              <figcaption>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
                <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
              </figcaption>
            </figure>
            <div class="card-body border bg-white p-4">
              <div class="entry-header mb-3">
                <ul class="entry-meta list-unstyled d-flex mb-2">
                  <li>
                    <a class="link-primary text-decoration-none" href="<?php echo $nw['title'];?>"><i class="fa fa-map-marker"></i>   <?php echo $nw['title'];?></a>
                  </li>
                </ul>
                <h2 class="card-title entry-title h4 mb-0">
                  <a class="link-dark text-decoration-none" href=""></a>
                </h2>
              </div>
              <p class="card-text entry-summary text-secondary"><?php echo substr($nw['pdesc'],0,150);?></p>
            </div>
            <div class="card-footer border border-top-0 bg-white p-4 d-flex justify-content-around">
              <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                <li>
                  <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <?php if($nw['update_date']!="")
                        			  {
                        				$mon = date("M Y", strtotime($nw['update_date'])); $dt = date("j", strtotime($nw['update_date']));
                        			  }
                        			  else{
                        			  $mon = date("M Y", strtotime($nw['insert_date'])); $dt = date("j", strtotime($nw['insert_date'])); }?>
                    <span class="ms-2 fs-7"><?php echo $dt;?>    <?php echo $mon;?></span>
                  </a>
                </li>
                <!--<li>-->
                <!--  <span class="justify-content: space-between"></span>-->
                <!--</li>-->
                <li>
                  <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">           
                    <span class="ms-2 fs-7"><button id="viewmore-btn" class="btn text-center mt-20 col-sm-4 col-md-4 col-lg-2"
                    style="background-color:#fff; color:#000;width: 167px;top: -8px;">Read More</button></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </article>
      </div>
      <?php $ij++; }?>
    </div>
    <?php } else{?>
    <code>Coming Soon!!..</code>
		<?php }?>
  </div>
</section>
<!-- Testimonial Section Start -->

<section class="blog-wrap pt-10 pb-75 bg-f" id="ourGallery">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1" data-aos="fade-up"
                data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                      <h3 style="color:#E85D21;">Our Patient Stories</h3>
                      <h6 class="text-center" style="color:#666666;">Hear it from our satisfied  patient</h6>
                </div>
            </div>
        </div>

        <div class="testimonial-slider-two owl-carousel">
            <?php if (!empty($testimonial3)) { ?>
                <?php $fh = 1;
                foreach ($testimonial3 as $testi) { ?>
                    
                    <div class="testimonial-card style3" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200"
                        style="max-height: 280px;min-height: 200px;width: 350px;">
                        
                        <p class="client-quote" style='color: black;line-height: 1.5;font-family: "Roboto", sans-serif;'>
                            <?php echo $testi['pdesc']; ?></p>
                        <ul class="ratings list-style">
                        </ul>
                        <br>
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="<?php echo base_url(); ?>data/uploads/testimonial/<?php echo $testi['image']; ?>"
                                        style="max-width: 100px;max-height: 100px;min-width: 70px;min-height: 70px;"
                                        alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3 style="font-size: 20px;"><?php echo $testi['name']; ?></h3>
                                    <span style="font-size: 13px;"><?php echo $testi['designation']; ?></span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                        </div>
                         <p class="ratingg">Rated <b>4.8</b> &nbsp;<i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i><i style="color:#F0C24B" class="fa fa-star"
                                aria-hidden="true"></i> &nbsp; on <img class="img-fluid"
                                src="assets/img/hero/google-logo.png"
                                style="width:60px; height:auto; object-fit:container;margin-top: -33px;margin-left: 180px;"></p>
                    </div>
                    <?php $fh++;
                } ?>
            </div>
        <?php } ?>

    </div>
</section>

<!-- Testimonial Section End -->

<script>

    function getVal(val) {
        var opt = $('.sub_mnu1 option:selected').val();
        location.href = '<?php echo base_url(); ?>' + "index.php/Singlecheckup/" + opt;
    };
</script>
<script>
    function getVal1(val) {
        var options = $('.category option:selected').val();
        location.href = '<?php echo base_url(); ?>' + "index.php/Singlecheckuptype/" + options;
    };
</script>
<script>
        $( document ).ready(function() {
    console.log( "ready!" );
    let counter = 1;
        function doctors_counter() {
            document.getElementById("doctorsCounter-why_ah_sec").textContent = counter;

            counter = counter + 1;
            if (counter <= 50) {
                setTimeout(doctors_counter, 100);

            }
            // console.log("doctors="+counter);

        }
        doctors_counter();


        let insurance = 1
        function insurancePartners() {
            document.getElementById("insuranceCounter-why_ah_sec").textContent = insurance;
            insurance++;
            if (insurance <= 40) {
                setTimeout(insurancePartners, 100);
            }
            // console.log("insurance=" +insurance);
        }
        insurancePartners();



        let bedcounter = 1
        function bedCount() {
            document.getElementById("ICUbedsCounter-why_ah_sec").textContent = bedcounter;
            bedcounter++;
            if (bedcounter <= 8) {
                setTimeout(bedCount, 200);
            }
              //  console.log("ICU-Beds = "+bedcounter);
}
 bedCount();
});

</script>