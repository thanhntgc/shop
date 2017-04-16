@extends('layouts.app')

@section('content')
<!-- START PAGE CONTENT -->
    @foreach($catalogs as $catalog)
    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section section-bg-tb pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">{{$catalog -> name}}</h2>
                        <h6>There are many variations of passages of brands available,</h6>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="pro-tab-menu pro-tab-menu-2 text-right">
                        <!-- Nav tabs -->
                        <ul class="" >
                            <li class="active"><a href="#popular-product" data-toggle="tab">Sản phẩm bán chạy </a></li>
                            <li><a href="#best-seller"  data-toggle="tab">Sản phẩm đang giảm giá</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-tab">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- popular-product start -->
                    <div class="tab-pane active" id="popular-product">
                        <div class="row">
                            @foreach($catalog->products as $product)
                            <!-- product-item start -->
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <img src="{{ URL::asset('/images/product/'.$product->images) }}" alt="" style="max-height: 150px"/>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">{{$product -> name}}</a>
                                        </h6>
                                        <h3 class="pro-price">{{$product -> price}}</h3>
                                    </div>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('cart/'.$product->id)}}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- product-item end -->
                            @endforeach
                        </div>
                    </div>
                    <!-- popular-product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->
    @endforeach
<!-- END PAGE CONTENT -->
@endsection
