<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo" />
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                <!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                    <form>
                        <div class="control-group">
                            <input class="search-field" placeholder="Search here..." />
                            <a class="search-button" href="#"></a>
                        </div>
                    </form>
                </div>
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                <div class="dropdown dropdown-cart">
                    <a href="javascript:avoid(0)" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="basket"></div>
                            <div class="basket-item-count">
                                <span class="count">2</span>
                            </div>
                            <div class="total-price-basket">
                                <span class="lbl"></span>
                                <span class="total-price">
                                    <span class="sign">$</span><span class="value">600.00</span>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="cart-item product-summary">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="image">
                                            <a href="detail.html"><img
                                                    src="{{ asset('frontend/assets/images/cart.jpg') }}" alt="" /></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <h3 class="name">
                                            <a href="index8a95.html?page-detail">Simple Product</a>
                                        </h3>
                                        <div class="price">$600.00</div>
                                    </div>
                                    <div class="col-xs-1 action">
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.cart-item -->
                            <div class="clearfix"></div>
                            <hr />
                            <div class="clearfix cart-total">
                                <div class="pull-right">
                                    <span class="text">Sub Total :</span><span
                                        class="price">$600.00</span>
                                </div>
                                <div class="clearfix"></div>
                                <a href="{{ url('/cart') }}" class="btn btn-upper btn-primary btn-block m-t-20">View CART</a>
                                <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                            </div>
                            <!-- /.cart-total-->
                        </li>
                    </ul>
                    <!-- /.dropdown-menu-->
                </div>
                <!-- /.dropdown-cart -->

                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
            </div>
        </div>
    </div>
</div>
