@extends('layouts.main')

@section('head')
@endsection

@section('content')
	<div class="page" id="page">


	@include('partials.home.header')

	    
	<!--Intro-->
	<section class="intro" >

	    <!-- Down Arrow -->
	    <a href="#welcome" class="down_block go"><i class="fa fa-angle-down"></i></a>

	    <!-- Wrapper -->
	    <div class="intro_wrapper">
	        
	        <!-- Item -->
	        <div class="intro_item">
	            <div class="over" data-opacity="0" data-color="#000"></div>
	            <div class="into_back image_bck"  data-image="http://placehold.it/1920x1100/"></div>
	            <div class="text_content">
	                <div class="intro_text intro_text_lc text-left text_up" data-color="#ea2e49">
	                    <span class="great_title">yoga / cardio / <b>power lifting</b> / fitness / aerobics / pilates</span>
	                    <span class="great_subtitle great_subtitle_big">Training Studio</span>
	                    <span class="into_txt">Sale $199/year</span>
	                     <span><a href="#" class="btn btn-white">Membership Card</a></span>
	                </div> 
	            </div>  
	        </div>

	        <!-- Item -->
	        <div class="intro_item">
	            <div class="over" data-opacity="0.3" data-color="#000"></div>
	            <div class="into_back image_bck" data-image="http://placehold.it/1920x1100/"></div>
	            <div class="text_content">           
	                <div class="intro_text intro_text_rc text-left text_up" data-color="#ea2e49">
	                    <span class="great_title great_title_big">Dont't Give <b>Up</b></span>
	                    <span class="great_subtitle great_subtitle_big">yoga / cardio / power lifting / fitness / aerobics / pilates</span>
	                    <span class="great_subtitle">Sale $199/year</span>
	                    <span class="into_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br />
	                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
	                    <span><a href="#" class="btn btn-white">Membership Card</a></span>
	                </div> 
	            </div>  
	        </div>

	        <!-- Item -->
	        <div class="intro_item">
	            <div class="over" data-opacity="0" data-color="#000"></div>
	            <div class="into_back image_bck"  data-image="http://placehold.it/1920x1100/"></div>
	            <div class="text_content">
	                <div class="intro_text intro_text_lc text-left text_up" data-color="#ea2e49">
	                    <span class="great_title">yoga / cardio / <b>power lifting</b> / fitness / aerobics / pilates</span>
	                    <span class="great_subtitle great_subtitle_big">Training Studio</span>
	                    <span class="into_txt">Sale $199/year</span>
	                     <span><a href="#" class="btn btn-white">Membership Card</a></span>
	                </div> 
	            </div>  
	        </div>

	    </div>
	    <!-- Wrapper End -->   
	</section>
	<!-- Intro End -->

	<!-- Schedule -->
	<section class="boxes simple_title" id="schedule">
	    <div class="container-fluid">
	        
	        <div class="row">
	            
	            <div class="col-md-12 bordered_block no-padding image_bck no-cover" data-image="images/black_dust.jpg">
	                
	                <!-- Over -->
	                <div class="over" data-opacity="0.8" data-color="#292929"></div>
	                
	                <div class="simple_block white_txt">
	                    <h3 class="wow fadeInUp">Working Hours</h3>
	                    <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s">Timetable</h4>
	                    
	                    <!-- Stat -->
	                    <div class="simple_stat clearfix" data-color="#ea2e49">
	                        <div class="stat_item">
	                            <b>Sun</b>08:00<br />16:00
	                        </div>
	                        <div class="stat_item">
	                            <b>Sat</b>Closed
	                        </div>
	                        <div class="stat_item">
	                            <b>Mon</b>Appt<br />Only
	                        </div>
	                        <div class="stat_item">
	                            <b>Tue</b>10:00<br />17:00
	                        </div>
	                        <div class="stat_item">
	                            <b>Wed</b>09:00<br />17:00
	                        </div>
	                        <div class="stat_item">
	                            <b>Thu</b>09:00<br />17:00
	                        </div>
	                        <div class="stat_item">
	                            <b>Fri</b>09:00<br />17:00
	                        </div>
	                    </div>
	                </div>               
	            </div>

	        </div>

	    </div>
	</section>
	<!-- Schedule End -->



	<!-- Welcome -->
	<section class="boxes" id="welcome">
	    <div class="container-fluid">
	        <div class="row">
	            
	            <!-- col -->
	            <div class="col-md-12 bordered_block image_bck no-cover white_txt" data-image="images/black_dust.jpg">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-7">
	                            <h2>Welcome to Purpose Wellness</h2>
	                            <h4 class="subtitle">Make You be the Fighter</h4>
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	                            </p>

	                            
	                        </div>
	                    </div>
	                    
	                    
	                </div>
	            </div>
	            <!-- Col End -->
	        </div>

	        <!-- Welcome Image -->
	        <div class="intro_image intro_text_rb text-center z0 wow fadeInUp" data-wow-duration="2s">
	            <img src="images/sportsman.png" alt="">
	        </div> 
	    </div>
	</section>
	<!-- Welcome End -->


	<!-- Title -->
	<section class="boxes simple_title" id="classes">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-12 bordered_block no-padding image_bck no-cover" data-image="images/black_dust.jpg">
	                
	                <!-- Over -->
	                <div class="over" data-opacity="0.8" data-color="#292929"></div>
	                
	                <div class="simple_block white_txt">
	                    <h3 class="wow fadeInUp">Classes</h3>
	                    <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s">Laboris nisi ut aliquip</h4>
	                    <div class="simple_stat" data-color="#ea2e49">
	                        <div class="stat_item"><b>9</b> <span>TRAINING <br />ROOMS</span></div>
	                        <div class="stat_item"><b>10</b> <span>TRAINING <br />CLASSES</span></div>
	                    </div>
	                </div>               
	            </div>
	        </div>

	    </div>
	</section>
	<!-- Title End -->


	<!-- Classes -->
	<section class="boxes classes reviews">
	    <div class="container-fluid">
	        
	        <!-- Wrapper -->
	        <div class="mid_wrapper">

	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0.4" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">FITNESS CLASSES</h5>
	                    <p>A better way to track workouts.</p>
	                    <span class="sport_price">From: <b>$35</b> / day</span>   
	                </div> 
	            </div>

	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0.4" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">YOGA COURSES</h5>
	                    <p>A better way to track workouts.</p>
	                    <span class="sport_price">From: <b>$25</b> / day</span>   
	                </div> 
	            </div>

	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0.4" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">MMA COURSES</h5>
	                    <p>A better way to track workouts.</p>
	                    <span class="sport_price">From: <b>$15</b> / day</span>   
	                </div>  
	            </div>

	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0.4" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">Boxing</h5>
	                    <p>A better way to track workouts.</p>
	                    <span class="sport_price">From: <b>$35</b> / day</span>   
	                </div>  
	            </div>

	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0.4" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">Woman Program</h5>
	                    <p>A better way to track workouts.</p>
	                    <span class="sport_price">From: <b>$25</b> / day</span>   
	                </div>  
	            </div>
	        </div>
	        <!-- Wrapper End -->
	       
	    </div>
	</section>
	<!-- Classes End-->

	<!-- Title -->
	<section class="boxes simple_title" id="pricing">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-12 bordered_block no-padding image_bck no-cover" data-image="images/black_dust.jpg">
	                
	                <!-- Over -->
	                <div class="over" data-opacity="0.8" data-color="#292929"></div>
	                <div class="simple_block white_txt">
	                    <h3 class="wow fadeInUp">Our Pricing</h3>
	                    <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s">Laboris nisi ut aliquip</h4>
	                </div>               
	            </div>
	        </div>

	    </div>
	</section>
	<!-- Title End -->




	<!-- Prices -->

	<section class="boxes" id="welcome">
	    <div class="container-fluid">
	        <div class="row">
	            
	            <!-- col -->
	            <div class="col-md-12 bordered_block image_bck no-cover white_txt" data-image="images/black_dust.jpg">
	                <div class="container">
	                    <div class="row">
	                       <div class="col-md-4 col-sm-6">
	                        <div class="pricing-table text-center">
	                            <h5>Silver</h5>
	                            <span class="price">$15</span>
	                            <p class="lead">Per Month</p>
	                            <a class="btn btn-white" href="#">Buy Now</a>
	                            <p>                       
	                                Cardio<br />
	                                Swimming Pool<br />
	                                Massage<br />
	                                Yoga<br />
	                                Aerobics<br />
	                                Solar
	                            </p>
	                        </div>
	                        <!--end of pricing table-->
	                    </div>
	                    <div class="col-md-4 col-sm-6">
	                        <div class="pricing-table text-center image_bck" data-color="#ea2e49">
	                            <h5>Gold</h5>
	                            <span class="price">$42</span>
	                            <p class="lead">Per Month</p>
	                            <a class="btn btn-white" href="#">Buy Now</a>
	                            <p>
	                                Cardio<br />
	                                Swimming Pool<br />
	                                Massage<br />
	                                Yoga<br />
	                                Aerobics<br />
	                                Solar
	                            </p>
	                        </div>
	                        <!--end of pricing table-->
	                    </div>
	                    <div class="col-md-4 col-sm-6">
	                        <div class="pricing-table text-center">
	                            <h5>Platium</h5>
	                            <span class="price">$23</span>
	                            <p class="lead">Per Month</p>
	                            <a class="btn btn-white" href="#">Buy Now</a>
	                            <p>
	                                Cardio<br />
	                                Swimming Pool<br />
	                                Massage<br />
	                                Yoga<br />
	                                Aerobics<br />
	                                Solar
	                            </p>
	                        </div>
	                        <!--end of pricing table-->
	                    </div>
	                    </div>
	                    
	                    
	                </div>
	            </div>
	            <!-- Col End -->
	        </div>
	        
	    </div>
	</section>

	<!-- Prices End -->


	<!-- Title -->
	<section class="boxes simple_title" id="coaches">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-12 bordered_block no-padding image_bck no-cover" data-image="images/black_dust.jpg">
	                
	                <!-- Over -->
	                <div class="over" data-opacity="0.8" data-color="#292929"></div>
	                <div class="simple_block white_txt">
	                    <h3 class="wow fadeInUp">Meet The Coaches</h3>
	                    <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s">Laboris nisi ut aliquip</h4>
	                    <div class="simple_stat" data-color="#ea2e49">
	                        <div class="stat_item"><b>18</b> <span>SKILLED <br />TRAINERS</span></div>
	                        <div class="stat_item"><b>10</b> <span>TRAINING <br />CLASSES</span></div>
	                    </div>
	                </div>               
	            </div>
	        </div>
	    </div>
	</section>
	<!-- Title End -->




	<!--Trainers-->
	<section class="boxes reviews">
	    <div class="container-fluid">

	        <!-- Wrapper -->
	        <div class="mid_wrapper">
	            
	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">JENIKA</h5>
	                    <span class="sport_price">COACH / FOUNDER</span>   
	                </div> 
	            </div>
	            
	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">Tony</h5>
	                    <span class="sport_price">COACH / GENERAL MANAGER</span>   
	                </div> 
	            </div>

	            <!-- Item -->
	            <div class="bordered_block bordered_left text-left flex_block image_bck height300">
	                <div class="over" data-opacity="0" data-color="#000"></div>
	                <a href="#" class="box_link"></a>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="adds_txt sport_txt">
	                    <h5 class="relative">Alex</h5>
	                    <span class="sport_price">COACH</span>   
	                </div>  
	            </div>
	        </div>
	        <!-- Wrapper End -->

	    </div>
	</section>
	<!-- Trainers End -->

	<!-- Contacts -->
	<section class="boxes" id="contacts">
	    <div class="container-fluid">
	        
	        <div class="row">
	            
	            <!-- Contacts -->
	            <div class="col-md-6 bordered_block image_bck white_txt" data-image="http://placehold.it/1920x1100/">
	                <div class="over" data-opacity="0.7" data-color="#292929"></div>
	                <div class="col-md-12 simple_block text-left">
	                    <h3>Contacts</h3>
	                    <span class="contacts_ti ti-mobile"></span>+11 (0) 200 1111 001<br />
	                    <span class="contacts_ti ti-mobile"></span>+11 (0) 200 1111 002<br />
	                    <span class="contacts_ti ti-email"></span><a href="mailto:support@theberg.com">support@theberg.com</a><br />
	                    <span class="contacts_ti ti-location-pin"></span>Australia place nice, RD nice DHA Road, state pace 786
	                    
	                    <h4 class="newsletter_title">
	                        Stay informed with our newsletter
	                    </h4>
	                            <input placeholder="Enter Your Email" class="form-control form-opacity no-margin newsletter_input" type="email" required/>

	                            <button type="submit" class="btn btn-white">
	                                Subscribe
	                            </button>
	                    <div class="form-tip">
	                        <i class="fa fa-info-circle"></i> Please trust us, we will never send you spam
	                    </div>
	                </div>    
	            </div>
	            
	            <!-- Write Us -->
	            <div class="col-md-6 bordered_block image_bck white_txt" data-image="http://placehold.it/1920x1100/">
	                <div class="over" data-opacity="0.6" data-color="#292929"></div>
	                <div class="col-md-12 simple_block text-left">
	                    <h3>Write Us</h3>
	                    <form id="write_us" class="form">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <input type="text" id="name" class="form-control form-opacity" placeholder="Name*">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" id="surname" class="form-control form-opacity" placeholder="Surname*">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" id="city" class="form-control form-opacity" placeholder="City">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" id="country" class="form-control form-opacity" placeholder="Country">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" id="email" class="form-control form-opacity" placeholder="E-mail*">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" id="phone" class="form-control form-opacity" placeholder="Phone">
	                            </div>
	                            <div class="col-md-12">
	                                <textarea placeholder="Message" id="message" class="form-control form-opacity"></textarea>
	                            </div>
	                            <div class="col-md-12">
	                                <input type="submit" class="btn btn-white submit" value="Send">
	                            </div>
	                        </div>
	                    </form>
	                </div>   
	            </div>
	            <!-- Write Us End -->

	        </div>
	        <!-- Row End -->
	    </div>
	</section>
	<!-- Contacts End -->




	<!-- Title -->
	<section class="boxes simple_title" id="reviews">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-12 bordered_block no-padding image_bck no-cover" data-image="images/black_dust.jpg">
	                
	                <!-- Over -->
	                <div class="over" data-opacity="0.8" data-color="#292929"></div>
	                <div class="simple_block white_txt">
	                    <h3 class="wow fadeInUp">Reviews</h3>
	                    <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s">Laboris nisi ut aliquip</h4>
	                </div>               
	            </div>
	        </div>
	    </div>
	</section>
	<!-- Title End -->


	<!--Reviews-->
	<section class="boxes reviews">
	    <div class="container-fluid">
	        
	        <!-- Wrapper -->
	        <div class="mid_wrapper">
	            
	            <!-- Item -->
	            <div class="bordered_block flex_block image_bck bordered_left">
	                <div class="over" data-opacity="0.3" data-color="#000"></div>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
	                <div class="box_content">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. </p>
	                    <strong>Joe Doe</strong>
	                </div>        
	            </div>

	            <!-- Item -->
	            <div class="bordered_block flex_block image_bck bordered_left">
	                <div class="over" data-opacity="0.3" data-color="#000"></div>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
	                <div class="box_content">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. </p>
	                    <strong>Britney Doe</strong>
	                </div>       
	            </div>

	            <!-- Item -->
	            <div class="bordered_block flex_block image_bck bordered_left">
	                <div class="over" data-opacity="0.3" data-color="#000"></div>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
	                <div class="box_content">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. </p>
	                    <strong>Jessica Doe</strong>
	                </div>     
	            </div>

	            <!-- Item -->
	            <div class="bordered_block flex_block image_bck bordered_left">
	                <div class="over" data-opacity="0.3" data-color="#000"></div>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
	                <div class="box_content">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. </p>
	                    <strong>Tina Doe</strong>
	                </div>     
	            </div>

	            <!-- Item -->
	            <div class="bordered_block flex_block image_bck bordered_left">
	                <div class="over" data-opacity="0.3" data-color="#000"></div>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
	                <div class="box_content">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. </p>
	                    <strong>Anna Doe</strong>
	                </div>     
	            </div>

	            <!-- Item -->
	            <div class="bordered_block flex_block image_bck bordered_left">
	                <div class="over" data-opacity="0.3" data-color="#000"></div>
	                <div class="image_over image_bck" data-image="http://placehold.it/960x640/"></div>
	                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
	                <div class="box_content">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. </p>
	                    <strong>Simona Doe</strong> 
	                </div>     
	            </div>
	            
	        </div>
	        <!-- Wrapper End -->
	    </div>
	</section>
	<!-- Reviews End -->

		@include('partials.home.footer')
	</div>
	<!-- Page End -->
@endsection

@section('scripts')

@endsection