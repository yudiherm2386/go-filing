
<!-- BEGIN: Vendor JS -->
<!-- <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script> -->
<!-- BEGIN Vendor JS-->

@stack('js_vendor')
<!-- BEGIN: Theme JS-->
<!-- <script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script> -->
<!-- <script src="{{ asset('app-assets/js/core/app.js')}}"></script> -->
<!-- <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script> -->
<!-- END: Theme JS-->
@stack('js')
@stack('dynamic_form_js')