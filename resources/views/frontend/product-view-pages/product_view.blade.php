<?php use App\Models\Product; ?>
@extends('frontend.Layouts')

@section('content')
    <div>

        <body class="cnt-home">
            <div class="breadcrumb">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <ul class="list-inline list-unstyled">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>
                                <a href="{{ url('/' . $productDetails['category']['url']) }}">
                                    {{ $productDetails['category']['category_name'] }}
                                </a>
                            </li>
                            <li class='active'>{{ $productDetails['product_name'] }}</li>
                        </ul>
                    </div><!-- /.breadcrumb-inner -->
                </div><!-- /.container -->
            </div><!-- /.breadcrumb -->
            <div class="body-content outer-top-xs">
                <div class='container'>
                    <div class='row single-product'>
                        <div class='col-md-9'>
                            <div class="detail-block">
                                <div class="row  wow fadeInUp">

                                    <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                                            <!------- Product Main Image --------->
                                            <div id="owl-single-product">
                                                <div class="single-product-gallery-item"
                                                    id="slide1{{ $productDetails['id'] }}">
                                                    <a data-lightbox="image-1" data-title="Gallery"
                                                        href="{{ asset('admin/images/upload-product/large/' . $productDetails['main_image']) }}">
                                                        <img class="img-responsive" alt=""
                                                            src="{{ asset('admin/images/upload-product/large/' . $productDetails['main_image']) }}"
                                                            data-echo="
                                                                                                                                                                                                        {{ asset('admin/images/upload-product/large/' . $productDetails['main_image']) }}" />
                                                    </a>
                                                </div>
                                            </div>

                                            <!---------- Product Under Images ------>
                                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                                <div id="owl-single-product-thumbnails">
                                                    @foreach ($productDetails['gallery_images'] as $image)
                                                        <div class="item">
                                                            <a class="horizontal-thumb active"
                                                                data-target="#owl-single-product" data-slide="1"
                                                                href="#slide1/{{ $productDetails['id'] }}">
                                                                <img class="img-responsive" width="85" alt=""
                                                                    src="{{ asset('admin/images/upload-product/large/' . $image['image']) }}"
                                                                    data-echo="{{ asset('admin/images/upload-product/large/' . $image['image']) }}" />
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--------- Product Here ------->
                                    <form action="{{ url('add-to-cart') }}" method="post">
                                        @csrf
                                        <div class='col-sm-6 col-md-7 product-info-block'>
                                            <div class="product-info">
                                                <h1 class="name">{{ $productDetails['product_name'] }}</h1>

                                                <div class="rating-reviews m-t-20">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="rating rateit-small"></div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="reviews">
                                                                <a href="#" class="lnk">(13 Reviews)</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.row -->
                                                </div><!-- /.rating-reviews -->

                                                <div class="stock-container info-container m-t-10">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="stock-box">
                                                                <span class="label">Availability :</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="stock-box">
                                                                <span class="value">{{ $total_stock }} In
                                                                    Stock</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="description-container m-t-20">
                                                    {{ $productDetails['description'] }}
                                                </div>

                                                <div class="price-container info-container m-t-20">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="price-box">
                                                                <span class="price getAttrPrice">
                                                                    <?php $discounted_price = Product::getDiscountedPrice($productDetails['id']); ?>

                                                                    @if ($discounted_price > 0)
                                                                        <del>${{ $productDetails['product_seal_price'] }}</del>
                                                                    @else
                                                                        ${{ $productDetails['product_seal_price'] }}
                                                                    @endif

                                                                    @if ($discounted_price > 0)
                                                                        ${{ $discounted_price }}
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="select-size">
                                                                <select name="size" required id="getPrice"
                                                                    product-id="{{ $productDetails['id'] }}"
                                                                    class="form-control">
                                                                    <option value="">Select Size</option>
                                                                    @foreach ($productDetails['attributes'] as $attribute)
                                                                        <option value="{{ $attribute['size'] }}">
                                                                            {{ $attribute['size'] }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6" style="margin-top: 45px">
                                                            <div class="favorite-button m-t-10">
                                                                <a class="btn btn-primary" data-toggle="tooltip"
                                                                    data-placement="right" title="Wishlist" href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a class="btn btn-primary" data-toggle="tooltip"
                                                                    data-placement="right" title="Add to Compare" href="#">
                                                                    <i class="fa fa-signal"></i>
                                                                </a>
                                                                <a class="btn btn-primary" data-toggle="tooltip"
                                                                    data-placement="right" title="E-mail" href="#">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div><!-- /.row -->
                                                </div><!-- /.price-container -->

                                                <div class="quantity-container info-container">
                                                    <div class="row">

                                                        <div class="col-sm-2">
                                                            <span class="label">Qty :</span>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <div class="cart-quantity">
                                                                <div class="quant-input">
                                                                    <input type="number" name="quantity" min="1" value="1"
                                                                        style="outline: none">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!------------------- Here Cart Button ------------------>
                                                        <input type="hidden" value="{{ $productDetails['id'] }}"
                                                            name="product_id">
                                                        <div class="col-sm-7">
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="fa fa-shopping-cart inner-right-vs"></i>
                                                                ADD TO CART
                                                            </button>
                                                        </div>
                                                        <!------------------- Here Cart Button ------------------>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                            <section class="section featured-product wow fadeInUp" style="margin: 80px 60px">
                                <h3 class="section-title">upsell products</h3>
                                <div
                                    class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                                    @foreach ($related_products as $related_product)
                                        <div class="item item-carousel">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a
                                                                href="{{ url('product_view/' . $related_product['id']) }}"><img
                                                                    src="{{ asset('admin/images/upload-product/large/' . $related_product['main_image']) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>


                                                    <div class="product-info text-left">
                                                        <h3 class="name">
                                                            <a
                                                                href="{{ url('product_view/' . $related_product['id']) }}">
                                                                {{ $related_product['product_name'] }}
                                                            </a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <?php $discounted_price = Product::getDiscountedPrice($related_product['id']); ?>

                                                            <span class="price">
                                                                @if ($discounted_price > 0)
                                                                    <del>${{ $related_product['product_seal_price'] }}</del>
                                                                @else
                                                                    $ {{ $related_product['product_seal_price'] }}
                                                                @endif

                                                                @if ($discounted_price > 0)
                                                                    $ {{ $discounted_price }}
                                                                @endif
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add
                                                                        to
                                                                        cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                            <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </div>
@endsection
