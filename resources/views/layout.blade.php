<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospitalia</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/image.png')}}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left mx-25">

                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                                    id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-bell mx-0"></i>
                                    <span class="count bg-success">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="notificationDropdown">
                                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="mdi mdi-information mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                Just now
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="mdi mdi-settings mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                Private message
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-account-box mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                2 days ago
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                                    id="messageDropdown" href="#" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-email mx-0"></i>
                                    <span class="count bg-primary">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="messageDropdown">
                                    <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                The meeting is cancelled
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                New product launch
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                Upcoming board meeting
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link count-indicator "><i
                                        class="mdi mdi-message-reply-text"></i></a>
                            </li>
                        </ul>
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo ms-4" href="{{route('home')}}"><img src="images/logo.png"
                                    alt="logo" /></a>
                            <a class="navbar-brand brand-logo-mini ms-4" href="{{route('home')}}"><img
                                    src="images/logo.png" alt="logo" /></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown  d-lg-flex d-none">
                                <a class="btn btn-inverse-primary btn-sm" href="{{route('login')}}">Login </a>
                            </li>
                            <li class="nav-item dropdown d-lg-flex d-none">
                                <a class="btn btn-inverse-primary btn-sm" href="{{route('register')}}">Register</a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name">Johnson</span>
                                    <span class="online-status"></span>
                                    <img src="images/faces/face28.png" alt="profile" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <!--Start Yielding Nav Here-->
            @yield('usernav')



        </div>
        <!--End Nav Here-->

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper row justify-content-center">
                    <!-- Start Yielding Content Here-->


                    @yield('content')




                    <!-- content-wrapper ends -->
                </div>
                <!-- main-panel ends -->


            </div>
            <!-- page-body-wrapper ends -->

        </div>
        <!-- container-scroller -->
        <div>
            <footer class="footer">
                <div class="footer-wrap">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                                href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com
                            </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                                href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                            templates</span>
                    </div>
                </div>

            </footer>
        </div>
        <!-- base:js -->
        <script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{asset('js/template.js')}}"></script>
        <!-- endinject -->
        <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <script src="{{asset('js/chart.js')}}"></script>
        <!-- plugin js for this page -->
        <!-- End plugin js for this page -->
        <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
        <script src="{{asset('vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
        <script src="{{asset('vendors/justgage/raphael-2.1.4.min.js')}}"></script>
        <script src="{{asset('vendors/justgage/justgage.js')}}"></script>
        <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
        <!-- Custom js for this page-->
        <script src="{{asset('js/dashboard.js')}}"></script>
        <!-- End custom js for this page-->
</body>

</html>