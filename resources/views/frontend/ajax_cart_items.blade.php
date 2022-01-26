<?php use App\Models\Product; ?>
<div class="shopping-cart">
    <div class="shopping-cart-table">
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
                                    <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update
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

                            <td class="romove-item">
                                <button data-cartid="{{ $userCartItem['id'] }}" type="button" class="icon btnItemDelete" style="border: none; font-size: 20px">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>

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
                                <div class="row">
                                    <input value="{{ $userCartItem['quantity'] }}"
                                        style="border: none; outline: none; width: 33.33%; float: left;">

                                    <!---------- Button Quantity Minus ------>
                                    <div data-cartid="{{ $userCartItem['id'] }}"
                                        class="btnItemUpdate qtyMinus col-md-3 btn-success btn-sm" type="button"
                                        style="cursor: pointer; margin-right: 10px; margin-left: 10px">
                                        <i class="fa fa-minus"></i>
                                    </div>

                                    <!---------- Button Quantity Minus ------>
                                    <div data-cartid="{{ $userCartItem['id'] }}"
                                        class="btnItemUpdate qtyPlus col-md-3 btn-success btn-sm" type="button"
                                        style="cursor: pointer;">
                                        <i class="fa fa-plus"></i>
                                    </div>

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

    <div class="col-md-6 col-sm-12 estimate-ship-tax">
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
            </tbody>
        </table>
    </div>

    <div class="col-md-6 col-sm-12">
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
                </thead>
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
                </tbody>
            </table>
        </div>
    </div>
</div>
