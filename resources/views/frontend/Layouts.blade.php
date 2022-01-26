<!---------- Include Head File ----------->
@include('frontend.include.head')

<body class="cnt-home">
    <header class="header-style-1">
        <!----------- Include Header Topbar File ---------->
        @include('frontend.include.topbar')

        <!----------- Include Header Middle File ---------->
        @include('frontend.include.header-middle')

        <!----------- Include Header Pages File ---------->
        @include('frontend.include.header-pages')

    </header>



    <!------------ Main Body Content --------->
    @yield('content')
    <!------------ Main Body Content --------->


    <!----------- Include Footer File ------------>
    @include('frontend.include.footer')

    <!---------- Include Script File ----------->
    @include('frontend.include.script')
