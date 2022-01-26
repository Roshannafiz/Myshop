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

    <!------- Include Navbar file -------->
    @include('frontend.include.navbar')
    <!------- Include Navbar file -------->

    <div class="breadcrumb-area" style="background-image: url({{ asset('frontend/assets/img/bg1632034097.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> User Dashboard
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item"><a> User Dashboard
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="user-dashboard-wrapper">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="mobile_nav">
                                <i class="las la-cogs"></i>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-info text-white"><i class="lar la-user-circle"></i>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/my_account') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/edit_profile') }}">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/change_password') }}">Change
                                    Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('all_orders') }}">My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('shipping_address') }}">Shipping
                                    Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('support_ticket') }}">Support
                                    Ticket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/logout') }}">
                                    Logout
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel">
                                <div class="message-show margin-top-10">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="user-dashboard-card style-01 ">
                                            <div class="icon"><i class="las la-calendar-alt"></i></div>
                                            <div class="content">
                                                <h4 class="title">Total Orders</h4>
                                                <span class="number">{{ $orders->count() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="user-dashboard-card style-01 ">
                                            <div class="icon"><i class="las la-calendar-alt"></i></div>
                                            <div class="content">
                                                <h4 class="title">Support Tickets</h4>
                                                <span class="number">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!------- Include Footer file -------->
    @include('frontend.include.footer')
    <!------- Include Footer file -------->

    <!------- Include Script file -------->
    @include('frontend.script')
    <!------- Include Script file -------->


</body>

</html>
