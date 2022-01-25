<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Irma.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by NGOMA DigiTech
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{asset('images/dashboard/layouts/layout-1.png')}}" class="img-thumbnail" alt="layout-1">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('images/dashbaord/layouts/layout-2.png')}}" class="img-thumbnail" alt="layout-2">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('images/dashbaord/layouts/layout-3.png')}}" class="img-thumbnail" alt="layout-3">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('css/dashboard/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('css/dashboard/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('css/dashboard/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('css/dashboard/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('css/dashboard/libs/node-waves/waves.min.js')}}"></script>

<!-- apexcharts js -->
<script src="{{asset('css/dashboard/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- jquery.vectormap map -->
<script src="{{asset('css/dashboard/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('css/dashboard/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('js/dashbaord/pages/dashboard.init.js')}}"></script>

<!-- Table Editable plugin -->
<script src="{{asset('css/dashboard/libs/table-edits/build/table-edits.min.js')}}"></script>

<script src="{{asset('js/dashboard/pages/table-editable.init.js')}}"></script>

<script src="{{asset('js/dashbaord/app.js')}}"></script>
