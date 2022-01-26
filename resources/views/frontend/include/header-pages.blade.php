<?php
use App\Models\Section;
$sections = Section::sections();
?>
<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed"
                    type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="active dropdown yamm-fw">
                                <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle">Home</a>
                            </li>
                            @foreach ($sections as $section)
                                <li class="dropdown yamm mega-menu">
                                    <a href="javascript:void(0)" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown">
                                        {{ $section['name'] }}
                                    </a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    @foreach ($section['categories'] as $category)
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">
                                                                {{ $category['category_name'] }}
                                                            </h2>
                                                            @foreach ($category['subcategories'] as $subcategory)
                                                                <ul class="links">
                                                                    <li>
                                                                        <a href="#">
                                                                            {{ $subcategory['name'] }}
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            @endforeach
                                                        </div>
                                                    @endforeach

                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                        <img class="img-responsive"
                                                            src="{{ asset('frontend/assets/images/banners/top-menu-banner.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <!-- /.yamm-content -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            @endforeach
                            <li class="dropdown navbar-right special-menu">
                                <a href="#">Todays offer</a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.nav-outer -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->
</div>
<!-- ============================================== NAVBAR : END ============================================== -->
