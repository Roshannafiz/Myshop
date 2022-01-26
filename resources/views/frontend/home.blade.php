@extends('frontend.Layouts')

@section('content')
    <!--=================================== Include Left Sidebar  File ================================ -->
    @include('frontend.include.left-sidebar')
    <!--=================================== Include Left Sidebar  File ================================ -->

    <div class="body-content outer-top-vs" id="top-banner-and-menu">

        <!-- ================================= Include Hot Category Product Tab =================================== -->
        @include('frontend.home-partial._hot_category_tab')
        <!-- ================================= Include Hot Category Product Tab =================================== -->

        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="container">
            <div class="info-boxes wow fadeInUp">
                <div class="info-boxes-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="icon-img"><i class="fa fa-credit-card"></i></div>
                                <div class="icon-text">
                                    <h4 class="info-box-heading green">Money Back Gaurantee</h4>
                                    <h6 class="text">30 Days Money Back Guarantee</h6>
                                </div>
                            </div>
                        </div>
                        <!-- .col -->

                        <div class="hidden-md col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="icon-img"><i class="fa fa-truck"></i></div>
                                <div class="icon-text">
                                    <h4 class="info-box-heading green">
                                        Free Shipping & Return
                                    </h4>

                                    <h6 class="text">Shipping on orders over $99</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-4 col-lg-4">
                            <div class="info-box last">
                                <div class="icon-img"><i class="fa fa-life-ring"></i></div>
                                <div class="icon-text">
                                    <h4 class="info-box-heading green">Online Support</h4>

                                    <h6 class="text">Call us 01678 311 160</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================== INFO BOXES : END ============================================== -->



        <!-- ==================================== Include New Product File ================================= -->
        @include('frontend.home-partial._new_product')
        <!-- ==================================== Include New Product File ================================= -->



        <!-- ==================================== Include Featured Product File ================================= -->
        @include('frontend.home-partial._featured-product')
        <!-- ==================================== Include Featured Product File ================================= -->



        <!-- ==================================== Include Deal Of The Day Product File ================================= -->
        @include('frontend.home-partial._deal_of_the_day')
        <!-- ==================================== Include Deal Of The Day Product File ================================= -->
    </div>


    <!--==================================== Include Bottom Offer File =================================-->
    @include('frontend.home-partial._bottom_offer')
    <!--==================================== Include Bottom Offer File =================================-->

@endsection
