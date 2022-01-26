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
                                <a class="nav-link active">sign in</a>
                            </li>
                        </ul>

                        <!------ Login Area ------>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active "id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <form action="{{ url('/login') }}" method="POST" class="register-form"
                                    id="LoginForm">
                                    @csrf
                                    <div class="error-wrap"></div>
                                    <div class="row">

                                        <div class="form-group col-12">
                                            <label for="login_email">Email Address
                                                <span class="ex">*</span></label>
                                            <input type="email" name="email" id="email">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="login_password">Password<span
                                                    class="ex">*</span></label>
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>

                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" name="remember" class="form-check-input"
                                                id="login_remember">
                                            <label class="form-check-label" for="remember">Remember me </label>
                                        </div>
                                    </div>
                                    <div class="btn-pair">
                                        <a id="forgot-password" href="{{ url('/forgot-password') }}" class="forgot-btn">
                                            forgot password?
                                        </a>

                                        <div class="btn-wrapper">
                                            <button type="submit" class="default-btn" id="login_btn">SIGN IN</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bar-wrap">
                                    <span class="bar"></span>
                                    <p class="or">or</p>
                                    <span class="bar"></span>
                                </div>
                                <div class="sin-in-with">
                                    <a href="#" class="sign-in-btn">
                                        <img src="#"
                                            alt="icon">
                                        Sign in with Google
                                    </a>
                                    <a href="#" class="sign-in-btn">
                                        <img src="#"
                                            alt="icon">
                                        Sign in with Facebook
                                    </a>
                                </div>
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
