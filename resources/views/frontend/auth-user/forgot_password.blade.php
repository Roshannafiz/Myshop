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
                                <a class="nav-link active">Forgot Password</a>
                            </li>
                        </ul>

                        <!------ Forgot Password  Area ------>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active " id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <form action="{{ url('/forgot-password') }}" method="POST" class="register-form"
                                    id="LoginForm">
                                    @csrf
                                    <div class="error-wrap"></div>
                                    <div class="row">

                                        <div class="form-group col-12">
                                            <label for="login_email">Email Address
                                                <span class="ex">*</span></label>
                                            <input type="email" name="email" id="email" required>
                                        </div>
                                        <div class="btn-wrapper">
                                            <button type="submit" class="default-btn" id="login_btn">SUBMIT</button>
                                        </div>
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
