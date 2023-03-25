<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - Jova News</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('images/jova-icon.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('images/jova-logo.png') }}" alt="">
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                    </div>
                                    <div class="text-center">
                                        @if ($message = Session::get('login_message'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endif
                                    </div>
                                    <form class="row g-3" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="credits">
                                Develop by <strong>Jovasoftware</strong>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

</body>

</html>
