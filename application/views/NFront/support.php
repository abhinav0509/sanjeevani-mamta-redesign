         <style>
         .post-img{
             float: inherit;
            text-align: center;
            border: 1px solid #0055A2;
            height: 465px;
            padding: 43px 38px 38px 38px;
            margin-top: 50px;
            background-image: url(hp1-cause-bg-right.png);
            background-size: cover;
            background-position: center left;
            border-radius: 10px; 
          }
                .theme-blue {
                    color: #427bb8;
                  }
                  .theme-orange {
                    color: #cc851c;
                  }
                  .theme-green {
                   color: #8ab042;
                  }
                  .theme-grey {
                    color: #666666;
                  }
                  .theme-white {
                    color: #fff;
                  }
                  .theme-background-blue {
                    background-color: #427bb8;
                    color: #fff;
                  }
                  .theme-background-orange {
                    background-color: #cc851c;
                    color: #fff;
                  }
                  .theme-background-green {
                    background-color: #8ab042;
                    color: #fff;
                  }
                  .theme-background-grey {
                    background-color: #666666;
                    color: #fff;
                  }
                  .theme-background-white {
                    background-color: #fff;
                    color: #4c4c4c;
                  }
                  .donate-bar {
                    padding: 32px 23px 28px;
                  }
                  .donate-bar > div:first-child {
                    font-family: 'Roboto Condensed', sans-serif;
                    font-weight: bold;
                    border-right: 1px dotted #2a4f76;
                    margin-top: 19px;
                    font-size: 25px;
                    padding: 0;
                  }
                  .donate-buttons>li>a {
                    font-size: 17px;
                    font-family: 'Roboto Condensed', sans-serif;
                    font-weight: bold;
                    position: relative;
                    display: block;
                    padding: 10px 3px;
                    border-radius: 5px;
                  }
                  .btn-blue-other,
                  .btn-blue {
                    font-family: 'Roboto Condensed', sans-serif;
                    font-weight: bold;
                    background-color: #427bb8;
                    color: #fff;
                    border-radius: 5px;
                    border: 0;
                    padding: 0;
                    width: 75px;
                    height: 37px;
                    margin-top: 8px;
                  }
                  .btn-green {
                    font-family: 'Roboto Condensed', sans-serif;
                    font-weight: bold;
                    background-color: #8ab042;
                    color: #fff;
                    border-radius: 5px;
                    border: 0;
                    padding: 0;
                    width: 114px;
                    height: 37px;
                    margin-top: 8px;
                  }
                  #other-input {
                    display: none;
                  }
                  #other-input input {
                    position: relative;
                    font-weight: bold;
                    background-color: #fff;
                    color: #427bb8;
                    border-radius: 5px;
                    border: 0;
                    border: 5px solid #427bb8;
                    padding: 0 0 3px 15px;
                    width: 75px;
                    height: 37px;
                    margin: 18px 3px 0;
                  }
                  input[type=number]::-webkit-inner-spin-button, 
                  input[type=number]::-webkit-outer-spin-button { 
                  -webkit-appearance: none; 
                   margin: 0; 
                  }
                  #other-input span {
                    font-family: inherit;
                    font-weight:bold;
                    color: #427bb8;
                    position: absolute;
                    padding: 23px 12px;
                    z-index: 10;
                    pointer-events: none;
                  }
                  .impact {
                    font-size: 1.1em;
                    font-weight: bold;
                    clear: both;
                  }
                  .nav>li>a:hover, .nav>li>a:focus {
                    text-decoration: none;
                    background-color: transparent;
                  }
                  .donate-buttons .active {
                    background-color: #fff;
                    border: 5px solid #427bb8;
                    color: #427bb8;
                  }
                  .donate-buttons:focus {
                  outline: -webkit-focus-ring-color auto 0px;
                  }
                  .donate-buttons li:last-child {
                    font-size: 17px;
                    line-height: 37px;
                    padding-left: 20px;
                    padding-top: 15px;
                  }

        </style>
             <script>
                     $(document).ready(function(){
            
                    $('#searchbar').focus();
            
                    $('#donate-buttons').on('click', '.btn-blue', function(e) {
                      e.preventDefault();
                      $('.active').removeClass('active');
                      $('#other-input').hide().siblings('#other').show();
                      $(this).filter('.btn-blue').addClass("active");
                      var value = $(this).data('impact');
                      $(this).closest('div').find('p').text("" + value);
                      $('#other-input').find('input').val('');  
                    });
                      
                    $('.btn-green').on('click', function() {
                      var dollar;
                       //alert(dollar);
                      var input = $('#other-input').find('input').val();
                      if ( !input ) {
                        dollar = $('.active').data('dollars');
                       } else if ( $.trim(input) === '' || isNaN(input)) {
                        // empty space leaves value = 'undefined'. 
                        // Have to fix $.trim(input) == '' above so that it works.
                        console.log('Yes');
                        dollar = "Please enter a number."; 
                      } else {
                        dollar = input;
                      }
                      $('#price').text(""+dollar);
                    });
            
                    $('#other').on('click', function(e) {
                      e.preventDefault(); 
                      var buttons = $(this).parent('#donate-buttons');
                      buttons.find('.active').removeClass('active');
                      var other = $(this).hide().siblings('#other-input');
                      other.show();
                      other.find('input').focus();
                      var pText = buttons.siblings('p');
                      pText.text("Thank you!");
                      var oValue = other.find('input');
                      oValue.keyup(function() {
                        if ( oValue.val() > 50 ) {
                          pText.text("Thank you!" + " You\'re donation covers housing and counseling services for " + oValue.val()/25 + " people.");
                        } else {
                          pText.text("Thank you!");
                        }
                      });
                    }); 
            
                  });
         </script>
            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="bg-f br-1" style="background-position: center center;background-size: cover;min-height: 400px !important;padding: 14% 0 !important;">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Support Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li><a href="blog-no-sidebar.html">Support Us</a></li>
                                <li>Support Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Blog Details Section Start -->
                <div class="blog-details-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-12 col-lg-12">
                                <p><span style="color:red;">Important Note : </span>For secure donations, please use only the official Sanjeevani Mamta Charity Foundation website or its authorized platforms. Donations made elsewhere are at your own risk, and SCF assumes no responsibility for such transactions.</p>
                            </div>
                            <div class="col-xl-10 offset-xl-1 col-lg-12">
                                <!--<article>-->
                                <!--    <div class="post-img">-->
                                <!--       <a class="single-service-img" data-fancybox="gallery" href="<?php echo base_url();?>data/uploads/charity.png"><img src="<?php echo base_url();?>data/uploads/charity.png" alt="Image" style="width:317px;height:300px;margin-left:-408px;"></a>-->
                                <!--<div id="cmt-form" style="margin-top: -295px;width: 329px;margin-left: 463px;background-color: white;border-radius: 5px;height: 299px;">-->
                                <!--    <div class="comment-box-title mb-25">-->
                                <!--        <h4>Donate</h4><br>-->
                                <!--        <p><b>Donation Amount ( ₹ )</b></p>-->
                                <!--    </div>-->
                                <!--    <form action="#" class="comment-form">-->
                                <!--        <div class="row">-->
                                <!--            <div class="col-md-3">-->
                                <!--                <div class="form-group" style="width: 280px;">-->
                                <!--                    <input type="text" name="name" id="name" required placeholder="Amount*">-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="row align-items-center">-->
                                <!--            <div class="col-md-12">-->
                                <!--                <button class="btn style1">Continue</button>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </form>-->
                                <!--</div>-->
                                <!--    </div>-->
                                <!--</article>-->
                                
                                <div class="post-meta-option">
                                        <div class="container theme-background-white main-body">
                                  <div class="col-md-12 col-sm-6">
                                    <div class="row donate-bar">  
                                      <div class="col-md-4 col-sm-6 theme-blue">
                                        GIVE WHERE NEEDED MOST
                                         <a class="single-service-img" data-fancybox="gallery" href="<?php echo base_url();?>data/uploads/charity.png"><img src="<?php echo base_url();?>data/uploads/charity.png" alt="Image" style="width:317px;height:300px;margin-left:-105px;"></a>
                                      </div>
                                      <div class="col-md-8 col-sm-6">
                                        <ul class="nav navbar-nav navbar-left donate-buttons" id="donate-buttons">
                                          <!--<li><a href="#">-->
                                          <!--  <button class="btn-blue active" data-dollars='25' data-impact="Covers housing or counseling services for one person">-->
                                          <!--    $25-->
                                          <!--  </button>-->
                                          <!--</a></li>-->
                                          <!--<li><a href="#">-->
                                          <!--  <button class="btn-blue" data-dollars='50' data-impact="Covers housing or counseling services for two people">-->
                                          <!--    $50-->
                                          <!--  </button>-->
                                          <!--</a></li>-->
                                          <!--<li><a href="#">-->
                                          <!--  <button class="btn-blue" data-dollars='100' data-impact="Covers housing or counseling services for four people">-->
                                          <!--    $100-->
                                          <!--  </button>-->
                                          <!--</a></li>-->
                                          <li><a href="#">
                                            <button class="btn-blue" data-dollars='5000' data-impact="Covers housing or counseling services for twenty people" style="width: 115px;">
                                              ₹5000
                                            </button>
                                          </a></li>
                                          <li id="other"><a href="#">
                                            <button class="btn-blue-other" data-dollars='other' data-impact="Thank you!" style="width: 115px;">
                                             Other
                                            </button>
                                          </a></li>
                                          <li id="other-input">
                                            <span>₹</span>
                                           <input data-impact="That’s great. Thank you!" style="width: 115px;">
                                          </li>
                                          <li><a href="#">
                                            <button class="btn-green" data-toggle="modal" data-target="#myModal">
                                              DONATE
                                            </button>
                                          </a></li>
                                          <li style="display: none;"><a href="#">
                                            LEARN MORE<i class="fa fa-chevron-right margin-left"></i>
                                          </a></li>
                                        </ul>
                                        <p class="impact">
                                          Covers housing or counseling services for one person
                                        </p>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content" style="top: 109px;">
                                              <div class="modal-header well text-center theme-background-blue">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 style="color: white;">You’re Donating:</h4>
                                                <h1 style="font-size: 2.5em; margin-top: 0;color: white;">₹<span id="price"></span></h1>
                                                <em>Thank you!</em>
                                              </div>
                                              <div class="modal-body">
                                                <div class="row">  
                                                  <section class="col-md-12">
                                                    <form>
                                                      <fieldset class="col-md-12">
                                                        <legend>
                                                          Your personal info
                                                        </legend>
                                                        <label>Your Name</label>
                                                        <input type="string" class="form-control">
                                                        <label>Your email</label>
                                                        <input type="email" class="form-control">
                                                        <label>Address</label>
                                                        <input type="email" class="form-control">
                                                        <label>City, State, Zip Code</label>
                                                        <input type="email" class="form-control">
                                                      </fieldset>
                                                      <fieldset class="col-md-12">
                                                        <legend>
                                                          Credit Card Information
                                                        </legend>
                                                        <label for="card-number">Credit Card Number</label>
                                                        <input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="form-control card-number" id="card-number">
                                                        <label for="card-number">Expiration Date</label>
                                                        <input placeholder="MM/YY" pattern="[0-9]*" type="text" class="form-control card-expiration" id="card-expiration">
                                                        <label for="card-number">CVV Number</label>
                                                        <input placeholder="CVV" pattern="[0-9]*" type="text" class="form-control card-cvv" id="card-cvv">
                                                        <label for="card-number">Billing Zip Code</label>
                                                        <input placeholder="ZIP" pattern="[0-9]*" type="text" class="form-control card-zip" id="card-zip">
                                                      </fieldset>
                                                    </form>
                                                  </section>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                                                <button type="button" class="btn-green">CONTINUE</button>
                                              </div>
                                            </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                      </div>
                                    </div><!--/.donate-bar-->
                                  </div><!-- /.col-md-12 -->
                                </div>
                                <div class="post-author">
                                    <div class="post-author-img">
                                        <img src="<?php echo base_url();?>assets/img/testimonials/client-1.jpg" alt="Image">
                                    </div>
                                    <div class="post-author-info">
                                        <h4>TEST DATA</h4>
                                        <p>Claritas est etiam amet sinicus, qui sequitur lorem ipsum semet coui lectorum. Lorem ipsum dolor voluptatem corporis blanditiis sadipscing elitr sed diam nonumy eirmod amet sit lorem.</p>
                                        <ul class="social-profile style1 list-style">
                                            <li>
                                                <a href="https://facebook.com">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com">
                                                    <i class="ri-twitter-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                              
                                <div id="cmt-form">
                                    <div class="comment-box-title mb-25">
                                        <h4>Leave A Comment</h4>
                                        <p>Your email address will not be published. Required fields are marked.</p>
                                    </div>
                                    <form action="#" class="comment-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" required placeholder="Name*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" required placeholder="Email Address*">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="url" name="website" id="website" placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Please Enter Your Comment Here"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" type="checkbox" id="test_2"
                                                    >
                                                    <label class="form-check-label" for="test_2">
                                                        Save my info for the next time I commnet.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn style1">Post A Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Details Section End -->

            </div>
            <!-- Content wrapper end -->