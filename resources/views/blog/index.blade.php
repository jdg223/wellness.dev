@extends('layouts.blog')

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
<div class="inside_title image_bck grey_border" data-color="#f8f8f8">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><h1>Purpose Wellness Blog</h1></div>
            <div class="col-md-6 text-right"><div class="breadcrumbs"><a href="/">Home</a><a href="/blog">Blog</a></div></div>
        </div>        
    </div>
</div>
<!-- Inside Title End -->
    
<!-- Content -->
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="bordered_block col-sm-12 grey_border">
                
                <div class="container">
                    <div class="row">
                    
                        <!--Sidebar-->
                        <div class="col-md-12 col-xs-12">
                            
                            <!--Item-->
                            <div class="post-snippet">
                                <a href="#">
                                    <img alt="Post Image" src="http://placehold.it/960x640/" />
                                </a>
                                <div class="post-title">
                                    <span class="label">10 Nov</span>
                                    <a href="#">
                                        <h4 class="inline-block">Dolor in reprehenderit in voluptate</h4>
                                    </a>
                                </div>
                                <ul class="post-meta list-unstyled list-inline">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <span>by
                                            <a href="#">Mark Den</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="ti-tag"></i>
                                        <span>
                                            <a href="#">Business</a>, <a href="#">Creative</a>
                                        </span>
                                    </li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <a class="btn btn-default no-margin" href="#">Read More</a>
                            </div>


                            <div class="text-center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
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

	@include('partials.home.footer')

</div>
<!-- Page End -->

@endsection

@section('scripts')

@endsection

