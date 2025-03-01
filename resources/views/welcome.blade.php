<!DOCTYPE html>
<html lang="en">
{{-- {{ dd($services); }} --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
    <meta name="keywords"
        content="admin template, ra-admin admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="la-themes">
    <link rel="icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">

    <title>Landing | Askly - Ask, Connect, Solve</title>

    <!--font-awesome-css-->
    {{--
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">


    <!-- Josefin font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&amp;display=swap"
        rel="stylesheet">

    <!--animation-css-->
    <link rel="stylesheet" href="../assets/vendor/animation/animate.min.css">

    <!-- devicon css -->
    <link rel="stylesheet" href="../assets/vendor/devicon/devicon.min.css">

    <!-- tabler icons-->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/vendor/tabler-icons/tabler-icons.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.28.1/tabler-icons.min.css" integrity="sha512-UuL1Le1IzormILxFr3ki91VGuPYjsKQkRFUvSrEuwdVCvYt6a1X73cJ8sWb/1E726+rfDRexUn528XRdqrSAOw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--flag Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/flag-icons-master/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- aos css-->
    <link rel="stylesheet" href="../assets/vendor/aos/aos.css">

    <!-- slick css -->
    <link rel="stylesheet" href="../assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="../assets/vendor/slick/slick-theme.css">

    <!-- Selecrt css -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/select/select2.min.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../assets/images/icons/themify-icons/themify-icons.css">

</head>

<body class="bg-white landing-page">
    <!-- Landing page start -->
    <div class="app-wrapper flex-column">

        <!-- cursor  -->
        <div class="circle-cursor">
        </div>

        <!-- cursor -->

        <div class="landing-wrapper">
            <!-- Header start -->
            <div class="navbar navbar-expand-lg sticky-top landing-nav_main px-3 position-fixed w-100">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="#home">
                        <img src="../assets/images/logo/1.png" alt="#">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#landing_nav"
                        aria-controls="landing_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="landing_nav">

                        <ul class="navbar-nav m-auto">

                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-bs-toggle="modal"
                                    data-bs-target="#postRequestModal">Post a request</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Cards">Join as a Pro</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#Features">Features</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="document.html" target="_blank">Document</a>
                            </li> --}}
                        </ul>
                        <a href="" target="_blank" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i>
                            Login</a>

                    </div>
                </div>
            </div>

            <!-- Header end -->

            <!-- landing first section start -->

            <section class="landing-section p-0" id="home">
                <div class="container-fluid">
                    <div class="row landing-content mg-t-50">
                        <div class="col-md-8 offset-md-2 mb-5">
                            <div class="landing-heading text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="mt-4">
                                            <label class="form-label text-white">Get Started, What do you need?</label>
                                            <select class="select-example form-select select-basic" name="state"
                                                onchange="requestModal()" id="service">
                                                @foreach ($services as $service)
                                                <option value="{{ $service['name'] }}">{{ $service['name'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <div class="landing-heading text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h1> Find Trusted Professionals <br> for any Task <span class="highlight-text"
                                            id="highlight-text">Anywhere</span></h1>

                                </div>
                            </div>
                            <div class="rotated-text">
                                <p>Receive custom offers from verifi-ed service providers...!</p>
                            </div>
                            <div class="landing-img">
                                <div class="img-box">
                                    <img src="../assets/images/landing/home-img-1.png" alt="img" class="box-img-1">
                                    <img src="../assets/images/landing/home-mobile.png" alt="img" class="box-img-2">
                                    <img src="../assets/images/landing/hom-tab.gif" alt="img" class="box-img-3">
                                    <div class="rotated-circle-text">
                                        {{-- <img src="../assets/images/landing/circle-text.png"
                                            class="w-150 h-150 img-rotated" alt="img"> --}}
                                        <img src="../assets/images/logo/3.png" alt="img"
                                            class="bg-light-primary p-4 b-r-50 b-1-primary">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- landing first section end -->
        </div>


        <section class="p-0 overflow-visible">
            <div class="container">
                <div class="language-box">
                    <div class="language-box-item">
                        <a href="" target="_blank" class="info-box bg-info h-60 w-60 d-flex-center b-r-50"
                            data-bs-toggle="tooltip" data-bs-custom-class="custom-dark" data-bs-html="true"
                            data-bs-original-title="Home Services">
                            <i class="fa-solid fa-house fa-2x"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="https://phpstack-426242-2145512.cloudwaysapps.com/RaAdmin-PHP/template/index.php"
                            class="danger-box bg-danger h-60 w-60 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            target="_blank" data-bs-custom-class="custom-dark" data-bs-html="true"
                            data-bs-original-title="Tech and Web Services">
                            <i class="devicon-amazonwebservices-plain-wordmark f-s-30 align-middle"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="index.html" class="primary-box bg-primary h-60 w-60 d-flex-center b-r-50"
                            target="_blank" data-bs-toggle="tooltip" data-bs-custom-class="custom-dark"
                            data-bs-html="true" data-bs-original-title="Business Services">
                            <i class="fa-solid fa-business-time fa-2x"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="https://www.figma.com/design/BwsML2vqoiWf764OVrymN3/RA-ADMIN?node-id=0-1&amp;node-type=canvas&amp;t=JJ14dHmrXRZ33NQ1-0"
                            target="_blank" class="warning-box bg-warning h-60 w-60 d-flex-center b-r-50"
                            data-bs-toggle="tooltip" data-bs-custom-class="custom-dark" data-bs-html="true"
                            data-bs-original-title="Creative and Event Services">
                            <i class="fa-solid fa-calendar fa-2x"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="index.html" target="_blank"
                            class="success-box bg-success h-60 w-60 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-custom-class="custom-dark" data-bs-html="true" data-bs-original-title="Automotive">
                            <i class="fa-solid fa-car-side fa-2x"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="index.html" target="_blank" class="dark-box bg-dark h-60 w-60 d-flex-center b-r-50"
                            data-bs-toggle="tooltip" data-bs-custom-class="custom-dark" data-bs-html="true"
                            data-bs-original-title="Personal Services">
                            <i class="fa-solid fa-person fa-2x"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="https://phpstack-426242-2145512.cloudwaysapps.com/RaAdmin-PHP/template/index.php"
                            class="danger-box bg-danger h-60 w-60 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            target="_blank" data-bs-custom-class="custom-dark" data-bs-html="true"
                            data-bs-original-title="Construction and Maintenance">
                            <i class="fa-solid fa-trowel-bricks fa-2x"></i>
                        </a>
                    </div>
                    <div class="language-box-item">
                        <a href="https://phpstack-426242-2145512.cloudwaysapps.com/RaAdmin-PHP/template/index.php"
                            class="warning-box bg-warning h-60 w-60 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            target="_blank" data-bs-custom-class="custom-dark" data-bs-html="true"
                            data-bs-original-title="Moving and Logistics">
                            <i class="fa-solid fa-truck-fast fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Demos section start -->
        <section class="demos-section" id="Demo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="landing-title text-md-center">
                            <h2 class=""><span class="highlight-title">150+</span> providers</h2>
                            <p>Get leads from a selected list of pros that will make your project a success!</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="demos-tab-section ">

                            <ul class="nav nav-tabs app-tabs-dark" id="v-bg" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboard-tab-pane" type="button" role="tab"
                                        aria-controls="dashboard-tab-pane" aria-selected="true">
                                        <i class="fa-solid fa-house"></i> Home Services
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="apps-tab" data-bs-toggle="tab"
                                        data-bs-target="#apps-tab-pane" type="button" role="tab"
                                        aria-controls="apps-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="fa-brands fa-aws"></i> Tech and Web Design
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ui-tab" data-bs-toggle="tab"
                                        data-bs-target="#ui-tab-pane" type="button" role="tab"
                                        aria-controls="ui-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-first-aid-kit pe-2 ps-1"></i> UI Kits
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="advance-ui-tab" data-bs-toggle="tab"
                                        data-bs-target="#advance-ui-tab-pane" type="button" role="tab"
                                        aria-controls="advance-ui-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-briefcase pe-2 ps-1"></i> Advance UI
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="icons-tab" data-bs-toggle="tab"
                                        data-bs-target="#icons-tab-pane" type="button" role="tab"
                                        aria-controls="icons-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-icons pe-2 ps-2"></i> Icons
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="table-tab" data-bs-toggle="tab"
                                        data-bs-target="#table-tab-pane" type="button" role="tab"
                                        aria-controls="table-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-table pe-2 ps-2"></i> Tables
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="forms-tab" data-bs-toggle="tab"
                                        data-bs-target="#forms-tab-pane" type="button" role="tab"
                                        aria-controls="forms-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-forms pe-2 ps-2"></i> Forms
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ready-touse-tab" data-bs-toggle="tab"
                                        data-bs-target="#ready-touse-tab-pane" type="button" role="tab"
                                        aria-controls="ready-touse-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-table-import pe-2 ps-2"></i> Ready To Use
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="auth-tab" data-bs-toggle="tab"
                                        data-bs-target="#auth-tab-pane" type="button" role="tab"
                                        aria-controls="auth-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-news pe-2 ps-2"></i> Auth Pages
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="error-tab" data-bs-toggle="tab"
                                        data-bs-target="#error-tab-pane" type="button" role="tab"
                                        aria-controls="error-tab-pane" aria-selected="false" tabindex="-1">
                                        <i class="ti ti-news pe-2 ps-2"></i> Error Pages
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">


                        <div class="tab-content mt-3">
                            <!-- Dashboard tab start -->
                            <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/ecommerce-dashboard.jpg"
                                                    alt="demo-img" class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Ecommerce</h6>
                                                    <a href="index.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/project-dashboard.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Project</h6>
                                                    <a href="project_dashboard.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/crypto.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Crypto</h6>
                                                    <a href="crypto_dashboard.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/education-dashboard.jpg"
                                                    alt="demo-img" class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Education</h6>
                                                    <a href="education.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard tab end -->

                            <!--  Apps tab start -->
                            <div class="tab-pane fade" id="apps-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/calander.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Calender</h6>
                                                    <a href="calendar.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/profile.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Profile</h6>
                                                    <a href="profile.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/team.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Team</h6>
                                                    <a href="team.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/chat.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Chat</h6>
                                                    <a href="chat.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/email.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Email</h6>
                                                    <a href="email.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/ecommerce.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Ecommerce</h6>
                                                    <a href="product.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/todo.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Todo</h6>
                                                    <a href="to_do.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/file-manager.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">File manager</h6>
                                                    <a href="file_manager.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/blog.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Blog</h6>
                                                    <a href="blog.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Apps tab end -->

                            <!--UI Kits tab  -->
                            <div class="tab-pane fade" id="ui-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/alert.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Alert</h6>
                                                    <a href="alert.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/badges.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Badges</h6>
                                                    <a href="badges.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/buttons.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Buttons</h6>
                                                    <a href="buttons.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/dropdown.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Dropdown</h6>
                                                    <a href="dropdown.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/avtar.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Avtar</h6>
                                                    <a href="avtar.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/accordions.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Accordions</h6>
                                                    <a href="accordions.html" target="_blank" role="button"
                                                        class="btn btn-warning  icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/progress.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Progress</h6>
                                                    <a href="progress.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/notification.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Notifications</h6>
                                                    <a href="notifications.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--UI Kits end  -->

                            <!--Advance UI tab  -->
                            <div class="tab-pane fade" id="advance-ui-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/modal.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Modals</h6>
                                                    <a href="modals.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/sweet-alert.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Sweetalert</h6>
                                                    <a href="sweetalert.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/animation.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Animation</h6>
                                                    <a href="animation.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/video-embaded.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Video embaded</h6>
                                                    <a href="video_embed.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/tour.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Tour</h6>
                                                    <a href="tour.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/slider.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Slider</h6>
                                                    <a href="slick.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/rating.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Rating</h6>
                                                    <a href="ratings.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/count-down.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Count Down</h6>
                                                    <a href="count_down.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Advance UI end  -->

                            <!-- Icons tab start -->
                            <div class="tab-pane fade" id="icons-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/font-awesome.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Fontawesome Icons</h6>
                                                    <a href="fontawesome.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/flag.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Flag Icons</h6>
                                                    <a href="flag_icons.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/animated.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Animated Icons</h6>
                                                    <a href="animated_icon.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/weather.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Whether Icons</h6>
                                                    <a href="weather_icon.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Icons tab end -->

                            <!-- Table tab start -->
                            <div class="tab-pane fade" id="table-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/basic-table.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Basic Table</h6>
                                                    <a href="basic_table.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/data-table.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Data Table</h6>
                                                    <a href="data_table.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/list-js.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">List Js</h6>
                                                    <a href="list_table.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/advance-table.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Advance Table</h6>
                                                    <a href="advance_table.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table tab end -->

                            <!-- form tab start -->
                            <div class="tab-pane fade" id="forms-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/base-input.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Basic input</h6>
                                                    <a href="base_inputs.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/form-validation.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Form Validation</h6>
                                                    <a href="form_validation.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/checkbox.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Checkbox & Radio</h6>
                                                    <a href="checkbox_radio.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/input-mask.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Input Mask</h6>
                                                    <a href="input_masks.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/floating-lable.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Floating Labels</h6>
                                                    <a href="floating_labels.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/select.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Select</h6>
                                                    <a href="select.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/range-slider.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Range Slider</h6>
                                                    <a href="range_slider.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/clip-board.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Clipboard</h6>
                                                    <a href="clipboard.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/file-upload.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">File Upload</h6>
                                                    <a href="file_upload.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/duel-list-box.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Dual Listbox</h6>
                                                    <a href="dual_list_boxes.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/default-form.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Default Forms</h6>
                                                    <a href="default_forms.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- form tab end -->

                            <!-- Ready to use tab start -->
                            <div class="tab-pane fade" id="ready-touse-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/form-wizard.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Form Wizards</h6>
                                                    <a href="form_wizards.html" target="_blank" role="button"
                                                        class="btn btn-secondary icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/form-wizard-1.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Form Wizards 1</h6>
                                                    <a href="form_wizard_1.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/form-wizard-2.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Form Wizards 2</h6>
                                                    <a href="form_wizard_2.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/ready-to-use-form.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Ready To Use Form</h6>
                                                    <a href="ready_to_use_form.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">
                                                        <i class="ti ti-chevrons-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/ready-to-use-table.jpg"
                                                    alt="demo-img" class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Ready To Use table</h6>
                                                    <a href="ready_to_use_table.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ready to use tab end -->

                            <!-- Auth page tab start -->
                            <div class="tab-pane fade" id="auth-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-1.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Sign In</h6>
                                                    <a href="sign_in.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-2.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Sign In With Bgimage</h6>
                                                    <a href="sign_in_1.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-3.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Sign-up</h6>
                                                    <a href="sign_up.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-4.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Sign Up With Bgimage</h6>
                                                    <a href="sign_up_1.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-5.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Password Create</h6>
                                                    <a href="pwd_create.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-6.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Password reset</h6>
                                                    <a href="pwd_reset.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-7.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Lock Screen</h6>
                                                    <a href="lock_screen.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/auth-8.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Tow Step Verification</h6>
                                                    <a href="two_step_verification.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">

                                                        <i class="ti ti-chevrons-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Auth page tab end -->

                            <!-- Error tab start -->
                            <div class="tab-pane fade" id="error-tab-pane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">

                                                <img src="../assets/images/landing/error-400.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Bad Request</h6>
                                                    <a href="error_400.html" target="_blank" role="button"
                                                        class="btn btn-danger icon-btn b-r-22">
                                                        <i class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/error-403.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Forbidden</h6>
                                                    <a href="error_403.html" target="_blank" role="button"
                                                        class="btn btn-success icon-btn b-r-22">
                                                        <i class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/error-404.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Not Found</h6>
                                                    <a href="error_404.html" target="_blank" role="button"
                                                        class="btn btn-primary icon-btn b-r-22">
                                                        <i class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/error-500.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Internal Server</h6>
                                                    <a href="error_500.html" target="_blank" role="button"
                                                        class="btn btn-warning icon-btn b-r-22">
                                                        <i class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card demo-card">
                                            <div class="card-body">
                                                <img src="../assets/images/landing/error-503.jpg" alt="demo-img"
                                                    class="img-fluid b-r-8">
                                                <div class="demo-box">
                                                    <h6 class="m-0 f-w-500 f-s-18">Service Unavailable</h6>
                                                    <a href="error_503.html" target="_blank" role="button"
                                                        class="btn btn-info icon-btn b-r-22">
                                                        <i class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Error tab end -->

                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- Demos section end  -->

        <!-- Features section start -->
        <section class="features-section" id="Features">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="landing-title text-md-center">
                            <h2 class=""> Core <span class="highlight-title">features</span></h2>
                            <p class="text-secondary">Admin features, developers can easily customize the appearance and
                                behavior of
                                their applications,
                                ensuring a consistent and visually appealing experience across different devices and
                                screen
                                sizes.</p>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col">
                        <ul class="row features-list">

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-brands fa-aws fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Tech and Web Services</h5>
                                        <span class="badge bg-light-info mt-1">Web Design</span>
                                    </div>

                                </div>
                            </li>

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">
                                    <i class="fa-solid fa-home fa-2x"></i>
                                    <div class="features-content">
                                        <h5> Home Services</h5>
                                        <span class="badge bg-light-success mt-1">Plumbing</span>
                                    </div>

                                </div>
                            </li>

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-solid fa-truck-fast fa-2x"></i>

                                    <div class="features-content">
                                        <h5>Moving and Logistics</h5>
                                        <span class="badge bg-light-danger mt-1">Deliveries</span>
                                    </div>

                                </div>
                            </li>
                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-solid fa-weight-scale fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Health and Wellness</h5>
                                        <span class="badge bg-light-secondary mt-1">Nutritionists</span>
                                    </div>

                                </div>
                            </li>
                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-solid fa-person-digging fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Construction and Maintenence</h5>
                                        <span class="badge bg-light-primary mt-1">Building</span>
                                    </div>
                                </div>

                            </li>


                            <li class="col-6 col-md-3 col-xl-2">

                                <div class="features-icon">
                                    <i class="fa-solid fa-car-side fa-2x"></i>

                                    <div class="features-content">
                                        <h5>Automotive Services</h5>
                                        <span class="badge bg-light-warning mt-1">Car Repairs</span>
                                    </div>
                                </div>
                            </li>

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">
                                    <i class="fa-solid fa-camera fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Creative and Event Services</h5>
                                        <span class="badge bg-light-warning mt-1">Photograohy</span>
                                    </div>
                                </div>
                            </li>

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">
                                    <i class="fa-solid fa-business-time fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Business Services</h5>
                                        <span class="badge bg-light-dark mt-1">Marketing</span>
                                    </div>

                                </div>
                            </li>
                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">
                                    <i class="fa-solid fa-person fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Personal Services</h5>
                                        <span class="badge bg-light-primary mt-1">Babysitting</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-solid fa-lock fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Specialized Trades</h5>
                                        <span class="badge bg-light-success mt-1">Locksmith</span>
                                    </div>
                                </div>
                            </li>

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-solid fa-graduation-cap fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Education and Training</h5>
                                        <span class="badge bg-light-danger mt-1">Tutor</span>
                                    </div>

                                </div>
                            </li>

                            <li class="col-6 col-md-3 col-xl-2">
                                <div class="features-icon">

                                    <i class="fa-solid fa-cloud-sun fa-2x"></i>
                                    <div class="features-content">
                                        <h5>Outdoor Services</h5>
                                        <span class="badge bg-light-info mt-1">Pool Cleaning</span>
                                    </div>

                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features section end -->

        <!-- Faq section start -->
        <section class="faq-section">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="landing-title text-md-center">
                            <h2>Inquired <span class="highlight-title"> Queries</span></h2>
                            <p class="text-light">Everything You Need to Know About Using Askly to Find Trusted
                                Professionals.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 mb-3">
                                <div class="card-boxs">
                                    <div class="icon-boxs">
                                        <i class="ti ti-book-2"></i>
                                    </div>
                                    <div class="box-content">
                                        <h4>Simplified Leads</h4>
                                        <p>All these leads are almost guaranteed</p>
                                        <a role="button" target="_blank" class="btn btn-primary"
                                            href="document.html">Check
                                            Document</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="card-boxs">
                                    <div class="icon-boxs">
                                        <i class="ti ti-headphones"></i>
                                    </div>
                                    <div class="box-content">
                                        <h4>Committed Assistance</h4>
                                        <p>Require assistance? Send us a ticket. We're here to help!</p>
                                        <a role="button" target="_blank" class="btn btn-primary"
                                            href="mailto:teqlathemes@gmail.com.">Get
                                            Support</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="landing-accordion">
                            <div class="accordion app-accordion accordion-flush accordion-light-dark app-accordion-plus"
                                id="nestingExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#nestingcollapseOne" aria-expanded="true"
                                            aria-controls="nestingcollapseOne">
                                            How does Askly work?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>Simply post your request, and we'll connect you with verified
                                                professionals who can help. Compare quotes, chat with providers, and
                                                choose the best fit for your needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#nestingcollapseTwo"
                                            aria-expanded="false" aria-controls="nestingcollapseTwo">
                                            Is Askly free to use?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, signing up and posting a request on Askly is completely free! You
                                                only pay when you hire a professional.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#nestingcollapseFour"
                                            aria-expanded="false">
                                            How do I trust the professionals on Askly?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>
                                                We carefully verify our professionals and display customer ratings and
                                                reviews to help you make informed decisions.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#nestingcollapseFive"
                                            aria-expanded="false">
                                            What type of services can I find on Askly?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>
                                                Askly covers a wide range of services, from home repairs to event
                                                planning, business support, and more. Check out our popular categories
                                                to explore.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#nestingcollapseSix"
                                            aria-expanded="false">
                                            What happens if I’m not satisfied with the service?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>
                                                We encourage open communication between customers and professionals. If
                                                issues arise, our support team is here to help resolve them.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#nestingcollapseSeven"
                                            aria-expanded="false">
                                            Can I cancel my request?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseSeven" class="accordion-collapse collapse"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, you can cancel a request at any time before hiring a professional.
                                                Simply go to your dashboard to manage your requests.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#nestingcollapseEight"
                                            aria-expanded="false">
                                            How do I handle user access permissions?
                                        </button>
                                    </h2>
                                    <div id="nestingcollapseEight" class="accordion-collapse collapse"
                                        data-bs-parent="#nestingExample">
                                        <div class="accordion-body">
                                            <p>
                                                Website design projects can vary depending on their scale and
                                                complexity—making it hard to
                                                generalize about project timelines. Ideally, a typical website design
                                                project should take
                                                between 6 and 12 weeks.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Faq section end -->

        <!-- Customization  options section end -->

        <!-- modal here -->
        <div class="modal fade" id="postRequestModal" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Askly needs analysis</h5>
                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 ps-4">
                                <h5 id="service-title" class="mb-2"></h5>
                                <p class="mt-2">Provide some details, and we’ll match you with the perfect
                                    professionals.</p>
                                <div class="form-wizard">
                                    <div class="form-wizard-header">
                                        <ul class="form-wizard-steps">
                                            <li class="active">
                                                <span class="wizard-steps">1</span>
                                            </li>
                                            <li>
                                                <span class="wizard-steps">2</span>
                                            </li>
                                            <li>
                                                <span class="wizard-steps">3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wizard-fieldset show" id="#mybtn">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3" id="service-checkboxes">

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button type="button"
                                                            class="btn btn-lg btn-primary next-btn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="wizard-fieldset">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="address"
                                                            class="form-label form-label wizard-form-text-label">Address</label>
                                                        <textarea class="form-control wizard-required" id="address1"
                                                            placeholder="2107 Deer Ridge Drive Succasunna, NJ 07876"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="mb-3">
                                                        <label for="address"
                                                            class="form-label form-label wizard-form-text-label">City</label>
                                                        <input type="text" class="form-control wizard-required"
                                                            id="address" placeholder="US">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="mb-3">
                                                        <label for="state"
                                                            class="form-label form-label wizard-form-text-label">State</label>
                                                        <input type="text" class="form-control wizard-required"
                                                            id="state1" placeholder="Enter State">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="mb-3">
                                                        <label for="zip"
                                                            class="form-label form-label wizard-form-text-label">Zip</label>
                                                        <input type="text" class="form-control wizard-required" id="zip"
                                                            maxlength="5" placeholder="Enter Zip">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3 text-end">
                                                        <button type="button"
                                                            class="btn btn-primary pre-btn">Previous</button>
                                                        <button type="button"
                                                            class="btn btn-primary next-btn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="wizard-fieldset">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label wizard-form-text-label">Email*</label>
                                                        <input type="email" class="form-control wizard-required"
                                                            placeholder="CheriDMorrow@teleworm.us" id="email2">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label wizard-form-text-label">Password*</label>
                                                        <input type="password" class="form-control wizard-required"
                                                            placeholder="******" id="pwd3">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label wizard-form-text-label">Confirm
                                                            Password*</label>
                                                        <input type="password" class="form-control wizard-required"
                                                            placeholder="******" id="pwd1">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3 text-end">
                                                        <button type="button"
                                                            class="btn btn-primary pre-btn">Previous</button>
                                                        <button type="submit"
                                                            class="btn btn-primary next-btn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary">Save changes</button>
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Purchase Plans section end  -->

        <!-- footer -->
        <section class="landing-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content text-center">
                            <img src="../assets/images/logo/3.png" alt="logo">
                            <h1>Build something remarkable with <span class="highlight-title"> Askly </span></h1>
                            <p class="txt-ellipsis-3">At Askly, we believe in simplifying the way you connect with
                                trusted professionals for any service you need. Our platform empowers you to create
                                opportunities, solve challenges, and bring your ideas to life by matching you with the
                                right experts. Whether it's home repairs, business support, or creative projects, Askly
                                is here to make every interaction seamless, reliable, and remarkable.</p>
                            <div class="footer-btn">
                                <a href="#" class="btn btn-primary btn-lg" target="_blank">Join Now</a>
                                <a href="mailto:teqlathemes@gmail.com." target="_blank"
                                    class="btn btn-danger btn-lg">Need Help ?</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- footer -->
    </div>
    <!-- Landing page end -->


    <!-- tap on top -->
    <div class="go-top">
        <span class="progress-value">
            <i class="ti-arrow-up"></i>
        </span>
    </div>




    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- phosphor js -->
    <script src="../assets/vendor/phosphor/phosphor.js"></script>


    <!-- select2 -->
    <script src="../assets/vendor/select/select2.min.js"></script>

    <!--js-->
    <script src="../assets/js/select.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- aos js-->
    <script src="../assets/vendor/aos/aos.js"></script>

    <!-- slick-file -->
    <script src="../assets/vendor/slick/slick.min.js"></script>

    <!--js-->
    <script src="../assets/js/landing.js"></script>
    <script src="../assets/js/form_wizard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
        integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>


</html>
