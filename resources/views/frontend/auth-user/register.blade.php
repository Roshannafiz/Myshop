<!------- Include head file -------->
@include('frontend.head')
<!------- Include head file -------->

<body>
    <div class="preloader-inner">
        <ul class="preloader-main">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <body>
        <div class="preloader-inner">
            <ul class="preloader-main">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!-- register form area start -->
        <div class="register-form-area-wrapper">
            <div class="register-bg"
                style="background-image: url({{ asset('frontend/assets/img/image1634455326.jpg') }});">
            </div>
            <div class="custom-container-1720 container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-top">
                            <div class="left">
                                <div class="logo-wrapper">
                                    <a href="{{ url('/') }}" class="logo">
                                        <img src="{{ asset('frontend/assets/img/logo1634455321.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5">
                        <div class="register-form-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active">sign up</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div>
                                    <form id="RegisterForm" action="{{ url('/register') }}" method="POST"
                                        class="register-form">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="name">Name
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="text" name="name" id="name">
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="email">Email<span class="ex">*</span></label>
                                                <input type="email" name="email" id="email">
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="mobile">Phone
                                                    <span class="ex">*</span></label>
                                                <input type="number" name="mobile" id="mobile">
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="address">Address
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="text" name="address" id="address">
                                            </div>

                                            <div class="form-group col-lg-6 col-12">
                                                <label for="state">State
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="text" name="state" id="state">
                                            </div>

                                            <div class="form-group col-lg-6 col-12">
                                                <label for="city">City
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="text" name="city" id="city">
                                            </div>

                                            <div class="form-group col-lg-6 col-12">
                                                <label for="country">Country
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="text" name="country" id="country">
                                            </div>

                                            <div class="form-group col-lg-6 col-12">
                                                <label for="pincode">Pin Code
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="text" name="pincode" id="pincode">
                                            </div>

                                            <div class="form-group col-lg-6 col-12">
                                                <label for="password">Password
                                                    <span class="ex">*</span>
                                                </label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <div class="btn-wrapper btn-top">
                                            <input type="submit" value="register" class="default-btn submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register form area end -->

        <!------- Include Script file -------->
        @include('frontend.script')
        <!------- Include Script file -------->
    </body>

    </html>
