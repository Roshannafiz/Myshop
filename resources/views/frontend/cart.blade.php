@extends('frontend.Layouts')
@section('content')
    <div class="body-content outer-top-xs">
        <div class="container">
            <div id="AppendCartItems">
                @include('frontend.ajax_cart_items')
            </div>
        </div>
    </div>
@endsection
