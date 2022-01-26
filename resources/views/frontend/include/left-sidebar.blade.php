<?php
use App\Models\Category;
$categories = Category::categories();
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head">
                        <i class="icon fa fa-align-justify fa-fw"></i> Latest Categories
                    </div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">
                            @foreach ($categories as $category)
                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle"><i class="icon fa fa-shopping-bag"
                                            aria-hidden="true"></i>{{ $category['category_name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div>
            <!-- ================================= Include Home Slider  =================================== -->
            @include('frontend.home-partial._home_slider')
            <!-- ================================= Include Home Slider  =================================== -->
        </div>
    </div>
</div>
