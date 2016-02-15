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
            <div class="col-md-6"><h1>Products We Endorse</h1></div>
            <div class="col-md-6 text-right"><div class="breadcrumbs"><a href="/">Home</a><a href="/store">Store</a></div></div>
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
                        <div class="col-md-12 col-xs-12">

                            <!-- ToolBar -->  
                            <div class="toolbar">
                                <p class="amount pull-left">
                                    <strong>SHOWING ALL {{ count($products) }} RESULTS</strong>
                                </p>
                                <div class="sorter pull-right">
                                    <div class="sort-by">
                                        <select onchange="setLocation(this.value)">
                                            <option selected="selected" value="">Default sorting</option>
                                            <option value="">Position</option>
                                            <option value="">Name</option>
                                            <option value="">Price</option>
                                        </select>
                                    </div>                                                
                                </div>
                                <div class="clear"></div>
                            </div>
                            
                            <div class="row masonry">
                            @foreach($products as $product)
                                <!-- Item -->
                                <div class="col-sm-6 masonry-item">
                                    <a href="/products/{{ $product->id }}" class="product_item text-center">
                                    <span class="product_photo bordered_wht_border"><img src="{{ $product->image_path }}" alt=""></span>
                                    <span class="product_title">{{ $product->name }}</span>
                                    <span class="product_price">${{ $product->price }}</span>
                                    @if($product->is_on_sale)
                                        <span class="sale">Sale</span>
                                    @endif
                                    @if($product->is_new)
                                        <span class="new">New</span>
                                    @endif
                                    </a>
                                </div>                            
                            @endforeach
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

    <!-- even though a footer exists for the store, we use the home footer because they're the same thing -->
	@include('partials.home.footer')
</div>
<!-- Page End -->
@endsection

@section('scripts')

@endsection
