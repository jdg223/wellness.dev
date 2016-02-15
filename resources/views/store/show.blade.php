@extends('layouts.main')

@section('head')

@endsection

@section('content')

<!-- Passpartu -->
<div class="passpartu passpartu_left"></div>
<div class="passpartu passpartu_right"></div>
<div class="passpartu passpartu_top"></div>
<div class="passpartu passpartu_bottom"></div>
<!-- Passpartu End -->

<div class="page" id="page">
	@include('partials.store.header')

<!-- Inside Title -->
<div class="inside_title image_bck bordered_wht_border white_txt" data-image="http://placehold.it/1920x800/">
    <!-- Over -->
    <div class="over" data-opacity="0.2" data-color="#000"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6"><h1>Shop Single Sidebar</h1></div>
            <div class="col-md-6 text-right"><div class="breadcrumbs"><a href="#">Home</a><a href="#">Shop</a>Shop Single Sidebar</div></div>
        </div>  
    </div>
</div>
<!-- Inside Title End -->
    
<!-- Content -->
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="bordered_block col-md-12 grey_border">
                
                <div class="container">
                    <div class="row">
                    
                        <!--Sidebar-->
                        <div class="col-md-9 col-md-push-3 col-xs-12">
                            
                            <!-- Carousel and Anons -->
                            <div class="row product_inside">
                                <div class="col-md-6 col-xs-12">
                                    <!-- Carousel -->
                                    <div class="products_inside_wrapper intro_wrapper">
                                        <div class="classes_inside_item bordered_wht_border">
                                            <img src="http://placehold.it/960x640/" alt="">
                                        </div>
                                        <div class="classes_inside_item bordered_wht_border">
                                            <img src="http://placehold.it/960x640/" alt="">
                                        </div>
                                        <div class="classes_inside_item bordered_wht_border">
                                            <img src="http://placehold.it/960x640/" alt="">
                                        </div>
                                        <div class="classes_inside_item bordered_wht_border">
                                            <img src="http://placehold.it/960x640/" alt="">
                                        </div>
                                    </div>
                                    <!-- Carousel End -->
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <h3 class="title">{{ $product->name }}</h3>

                                    <div class="meta-box clearfix">
                                        <div class="price-box">                                                                                                     
                                            <span class="special-price">${{ $product->price }}</span>
                                            <!-- <del class="old-price">$1607.96</del> -->
                                        </div>
                                        <div class="rating-box">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <p>{{ $product->description_short }}</p>
                                
                                    

                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <input type="text" class="form-control qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            <span class="increase-qty"><i class="fa fa-sort-up"></i></span>
                                            <span class="decrease-qty"><i class="fa fa-sort-down"></i></span>
                                        </div>
                                        <button class="button btn btn-default" title="Add to Cart" type="button">
                                            <em class="fa-icon"><i class="fa fa-shopping-cart"></i></em>
                                            <span>Add Cart</span>
                                        </button>
                                        <a class="link-wishlist btn btn-default"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="cat-list">
                                        <label>Categories</label><span>:</span>
                                        <a href="#" class="btn btn-default">Creative</a><a href="#" class="btn btn-default">Lorem</a>
                                    </div>
                                    <div class="tags-list">
                                        <label>Tags</label><span>:</span>
                                        <a href="#" class="btn btn-default">Business</a><a href="#" class="btn btn-default">Lorem</a>
                                    </div>
                                    <div class="social-icon">
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                
                            </div>


                                <ul id="myTab" class="nav nav-tabs" role="tablist">
                                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                                    <p>{{ $product->description }}</p>
                                  </div>
                                  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
                                    <!--  Comments -->
                                    <section class="comments clearfix">
                                        <div class="comments-content">
                                            <div class="answer">
                                                <img class="img-comments" src="http://placehold.it/200x200/" alt=""/>
                                                <div class="content-cmt">
                                                    <span class="name-cmt">Jonh Doe</span>
                                                    <span class="date-cmt">September 16, 2015</span>
                                                    <p class="content-reply">
                                                    Quisque sed metus eu nunc gravida euismod. Vivamus consequat sapien ut tempus hendrerit. Sed blandit vehicula urna sed posuere.
                                                    Praesent commodo, 
                                                    </p>
                                                </div>                                                  
                                            </div>
                                            <div class="answer">
                                                <img class="img-comments" src="http://placehold.it/200x200/" alt=""/>
                                                <div class="content-cmt">
                                                    <span class="name-cmt">Jonh Doe</span>
                                                    <span class="date-cmt">September 16, 2015</span>
                                                    <p class="content-reply">
                                                    Quisque sed metus eu nunc gravida euismod. Vivamus consequat sapien ut tempus hendrerit. Sed blandit vehicula urna sed posuere.
                                                    Praesent commodo, 
                                                    </p>
                                                </div>                                                  
                                            </div>
                                            
                                        </div>                                          
                                    </section>
                                <!-- End Comments -->
                                  </div>
                                  
                                </div>
                            
                            
                        </div>
                        <!--Sidebar End-->
                        


                        <!--Sidebar-->
                        <div class="col-md-3 col-md-pull-9 hidden-xs hidden-sm">
                            

                            <div class="widget">
                                <h6 class="title">Shop Categories</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Creative</a>
                                    </li>
                                    <li>
                                        <a href="#">Photography</a>
                                    </li>
                                    <li>
                                        <a href="#">Freelance</a>
                                    </li>
                                </ul>
                            </div>

                           
                

                            <div class="widget">
                                <h6 class="title">Popular Items</h6>
                                <ul class="list-unstyled recent-posts">
                                    <li>
                                        <a href="#" class="clearfix recent_item">
                                            <span class="recent_photo"><img src="http://placehold.it/200x200/" alt=""></span>
                                            <span class="recent_txt">Oversized Watch in Grey<br />$57.44</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix recent_item">
                                            <span class="recent_photo"><img src="http://placehold.it/200x200/" alt=""></span>
                                            <span class="recent_txt">Gold Digital Watch<br />$37.44</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix recent_item">
                                            <span class="recent_photo"><img src="http://placehold.it/200x200/" alt=""></span>
                                            <span class="recent_txt">Watch And Bracelet Set In Brown<br />$17.44</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <div class="widget">
                                <h6 class="title">Returns Policy</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                          
                            

                        </div>
                        <!--Sidebar End-->
                    </div>
                    <!--Row End-->

                </div>
            </div>
        </div> 
        <!-- Row End -->


    </div>
</div>
<!-- Content End -->

@include('partials.store.footer')

</div>
<!-- Page End -->

@endsection

@section('scripts')

@endsection
