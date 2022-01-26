 <!-- JavaScripts placed at the end of the document so the pages load faster -->
 <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/echo.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/jquery.rateit.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>

 <!------------ Toastr Message---------->
 <script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>

 <!-------------------- Change Size To Update Price --------------------->
 <script src="{{ asset('frontend/assets/js/change_size_to_update_price.js') }}"></script>

 <!-------------- Change Cart Quantity Usign Ajax ----------->
 <script src="{{ asset('frontend/assets/js/change_cart_qty.js') }}"></script>

 <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
 <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>


 <!-- Hot Deals Timer 1-->
 <script>
     var dthen1 = new Date("12/25/17 11:59:00 PM");
     start = "08/04/15 03:02:11 AM";
     start_date = Date.parse(start);
     var dnow1 = new Date(start_date);
     if (CountStepper > 0) ddiff = new Date(dnow1 - dthen1);
     else ddiff = new Date(dthen1 - dnow1);
     gsecs1 = Math.floor(ddiff.valueOf() / 1000);

     var iid1 = "countbox_1";
     CountBack_slider(gsecs1, "countbox_1", 1);

     var dthen1 = new Date("05/25/17 11:59:00 PM");
     start = "08/04/15 03:02:11 AM";
     start_date = Date.parse(start);
     var dnow1 = new Date(start_date);
     if (CountStepper > 0) ddiff = new Date(dnow1 - dthen1);
     else ddiff = new Date(dthen1 - dnow1);
     gsecs1 = Math.floor(ddiff.valueOf() / 1000);

     var iid1 = "countbox_2";
     CountBack_slider(gsecs1, "countbox_2", 1);
 </script>



 <!----- Success Message ------>
 @if (session('message')) {
     <script>
         toastr.options = {
             "closeButton": false,
             "debug": false,
             "newestOnTop": false,
             "progressBar": false,
             "positionClass": "toast-top-right",
             "preventDuplicates": false,
             "onclick": null,
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "3000",
             "extendedTimeOut": "1000",
             "showEasing": "swing",
             "hideEasing": "linear",
             "showMethod": "fadeIn",
             "hideMethod": "fadeOut"
         }
         toastr["success"]("{{ session('message') }}")
     </script>
     }

 @endif

 <!------ Error Message -------->
 @if (session('error_message')) {
     <script>
         toastr.options = {
             "closeButton": false,
             "debug": false,
             "newestOnTop": false,
             "progressBar": false,
             "positionClass": "toast-top-right",
             "preventDuplicates": false,
             "onclick": null,
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "3000",
             "extendedTimeOut": "1000",
             "showEasing": "swing",
             "hideEasing": "linear",
             "showMethod": "fadeIn",
             "hideMethod": "fadeOut"
         }
         toastr["error"]("{{ session('error_message') }}")
     </script>
     }

 @endif
 </body>

 </html>
