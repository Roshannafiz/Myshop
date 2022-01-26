<?php use App\Models\Product; ?>
@extends('frontend.Layouts')
@section('content')
    <div class="body-content outer-top-xs">
        <div class="container">
            <div>
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Remove</th>
                                        <th class="cart-description item">Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-edit item">Edit</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Price</th>
                                        <th class="cart-discount item">Discount</th>
                                        <th class="cart-total last-item">Grandtotal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="{{ url('/') }}"
                                                        class="btn btn-upper btn-primary outer-left-xs">Continue
                                                        Shopping</a>
                                                    <a href="#"
                                                        class="btn btn-upper btn-primary pull-right outer-right-xs">Update
                                                        shopping cart</a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $total_price = 0; ?>
                                    @foreach ($userCartItems as $userCartItem)
                                        <?php $attrPrice = Product::getDiscountedAttrPrice($userCartItem['product_id'], $userCartItem['size']); ?>
                                        <tr>
                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                        class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="detail.html">
                                                    <img src="{{ asset('admin/images/upload-product/small/' . $userCartItem['product']['main_image']) }}"
                                                        alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'>
                                                    <a href="detail.html">
                                                        {{ $userCartItem['product']['product_name'] }}
                                                    </a>
                                                </h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="rating rateit-small"></div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="reviews">
                                                            (06 Reviews)
                                                        </div>
                                                    </div>
                                                </div><!-- /.row -->
                                                <div class="cart-product-info">
                                                    <span class="product-color">COLOR:
                                                        <span>
                                                            {{ $userCartItem['product']['product_color'] }}
                                                        </span>
                                                    </span><br><br>
                                                    <span class="product-size">SIZE:
                                                        <span>
                                                            {{ $userCartItem['size'] }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                                            <td class="cart-product-quantity">
                                                <div class="quant-input">
                                                    <input type="number" min="1" value="{{ $userCartItem['quantity'] }}">
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total">
                                                <span class="cart-sub-total-price">
                                                    ${{ $attrPrice['product_price'] }}
                                                </span>
                                            </td>
                                            <td class="cart-product-discount">
                                                <div class="discount-input">
                                                    ${{ $attrPrice['discount'] }}
                                                </div>
                                            </td>
                                            <td class="cart-product-grand-total">
                                                <span class="cart-grand-total-price">
                                                    ${{ $attrPrice['final_price'] * $userCartItem['quantity'] }}</span>
                                            </td>
                                        </tr>
                                        <?php $total_price = $total_price + $attrPrice['final_price'] * $userCartItem['quantity']; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">Estimate shipping and tax</span>
                                        <p>Enter your destination to get shipping and tax.</p>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="info-title control-label">Country <span>*</span></label>
                                            <select class="form-control unicase-form-control selectpicker">
                                                <option>--Select options--</option>
                                                <option>India</option>
                                                <option>SriLanka</option>
                                                <option>united kingdom</option>
                                                <option>saudi arabia</option>
                                                <option>united arab emirates</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">State/Province <span>*</span></label>
                                            <select class="form-control unicase-form-control selectpicker">
                                                <option>--Select options--</option>
                                                <option>TamilNadu</option>
                                                <option>Kerala</option>
                                                <option>Andhra Pradesh</option>
                                                <option>Karnataka</option>
                                                <option>Madhya Pradesh</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control unicase-form-control text-input"
                                                placeholder="">
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">Discount Code</span>
                                        <p>Enter your coupon code if you have one..</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control unicase-form-control text-input"
                                                placeholder="You Coupon..">
                                        </div>
                                        <div class="clearfix pull-right">
                                            <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12">
                        <div class="cart-shopping-total">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="cart-sub-total">
                                                Subtotal<span class="inner-left-md">${{ $total_price }}</span>
                                            </div>
                                            <div class="cart-grand-total">
                                                Grand Total<span class="inner-left-md">${{ $total_price }}</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead><!-- /thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-checkout-btn pull-right">
                                                <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO
                                                    CHEKOUT</button>
                                                <span class="">Checkout with multiples address!</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody><!-- /tbody -->
                            </table><!-- /table -->
                        </div>
                    </div><!-- /.cart-shopping-total -->
                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand1.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand2.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand3.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand4.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand5.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand6.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand2.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand4.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand1.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="{{ asset('frontend/assets/images/brands/brand5.png') }}"
                                    src="{{ asset('frontend/assets/images/blank.gif') }}" alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection
