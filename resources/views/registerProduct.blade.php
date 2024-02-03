{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <title>Register Product</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div>--}}
{{--        <h1>Register Product</h1>--}}
{{--        <form method="post" action="" >--}}
{{--        @csrf--}}
{{--            <label for="name" class="block">--}}
{{--                Product name--}}
{{--            </label>--}}
{{--                <input id="name" type="text" name="product_name" value="{{ old("product_name") }}">--}}
{{--                @error("product_name")--}}
{{--                    {{ $message }}--}}
{{--                @enderror--}}

{{--            <label class="block" for="price">--}}
{{--                Price--}}
{{--            </label>--}}
{{--                <input id="price" type="number" name="price">--}}
{{--                @error("price")--}}
{{--                    {{ $message }}--}}
{{--                @enderror--}}


{{--            <label for="qty">--}}
{{--                Quantity stock--}}

{{--            </label>--}}
{{--                <input id="qty" type="number" name="quantity_in_stock">--}}
{{--                @error("quantity_in_stock")--}}
{{--                    {{ $message }}--}}
{{--                @enderror--}}

{{--            <label for="category">--}}
{{--                Category--}}
{{--                <select name="category" id="category">--}}
{{--                    <option value="1">aliment</option>--}}
{{--                    <option value="2">device</option>--}}
{{--                    <option value="3">metal</option>--}}
{{--                </select>--}}
{{--            </label><br>--}}


{{--            <label for="supplier">--}}
{{--                Supplier--}}

{{--                <select name="supplier" id="supplier">--}}
{{--                    @foreach($category as $it)--}}
{{--                        <option value="{{ $it->id }}">{{ $it->name }}</option>--}}
{{--                    @endforeach--}}

{{--                </select><br>--}}

{{--            </label>--}}



{{--            <button>Register</button>--}}

{{--        </form>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}

    <!doctype html>
<html lang="en">

<!-- Mirrored from epicurean.netlify.app/epicurean/reservation by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2024 06:15:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Epicurean - Food & Restaurant Html Template</title>

    <link rel="icon" href="assets/images/fav.png" type="image/gif" sizes="20x20">

    <!-- Box Icon CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- Swiper Carousel CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Wow CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/YouTubePopUp.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="assets/css/datepicker.css">


    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>

<!-- Custom Cursor -->

<div class="cursor d-none d-lg-block"></div>

<!-- Custom Cursor End -->

<!-- Preloader -->

<div class="intro_sec ">
    <div class="intro_screen animate">
        <svg width="607" height="834" viewBox="0 0 607 834" fill="none" xmlns="../../www.w3.org/2000/svg.html">
            <path d="M470.286 344.294C465.31 342.22 460.75 340.145 455.774 338.485C435.873 331.846 415.971 327.282 396.484 325.208C385.704 323.963 374.924 323.548 364.558 323.548C323.926 323.548 287.854 331.846 256.343 348.443C217.369 368.775 185.858 396.99 163.054 431.014C159.323 436.408 156.006 441.802 153.104 447.196L113.715 322.718C120.763 321.473 127.812 320.229 134.86 317.739C158.079 310.685 178.81 297.823 194.98 279.981C221.101 284.13 247.636 282.47 273.343 274.172C299.049 265.873 321.853 252.181 340.925 233.924C364.144 238.903 388.606 237.658 411.825 230.605C418.873 228.53 425.507 225.626 432.141 222.306L470.286 344.294Z" fill="currentColor"/>
            <path d="M345.486 21.4822C335.121 24.8016 325.584 29.7807 317.292 36.0046C284.123 4.47029 235.198 -8.80732 188.346 6.13C141.909 20.6524 109.154 59.6554 100.447 104.467C90.0817 104.467 79.7162 105.712 68.9362 109.032C17.109 125.629 -11.9142 180.814 4.67046 233.094C21.2552 284.96 76.3993 314.005 128.641 297.408C153.104 289.524 172.591 272.927 184.614 252.181C209.906 261.309 238.929 262.554 266.709 253.426C294.903 244.712 317.292 226.87 333.047 204.879C354.608 215.252 379.899 217.742 404.776 209.858C456.604 193.261 485.627 138.076 469.042 85.7957C452.872 33.93 397.728 5.30014 345.486 21.4822Z" fill="currentColor"/>
            <path d="M605.036 652.169C606.695 646.36 607.11 640.551 606.695 635.572C606.695 635.157 606.695 634.742 606.695 633.912L606.28 634.327C605.866 629.763 604.622 625.198 601.72 621.879C601.72 621.879 579.745 662.957 552.38 696.151C535.795 716.067 514.65 732.249 494.334 744.282C474.432 756.315 451.213 762.539 425.922 762.539C397.313 762.539 372.021 756.315 350.876 744.282C330.145 732.664 315.219 717.312 305.683 698.64C296.146 679.554 294.903 662.957 302.366 648.019C311.487 631.422 329.73 618.145 357.095 607.772C372.851 601.548 391.509 596.569 412.654 592.419C433.799 588.27 453.701 582.461 473.188 574.992C492.675 567.109 508.845 556.321 522.528 542.213C536.21 528.106 544.088 507.775 545.746 480.804C545.746 460.473 541.185 442.631 532.064 427.279C522.942 411.512 510.918 398.234 496.407 387.446C481.895 376.658 465.31 367.945 447.482 361.306C429.653 354.667 411.825 350.518 393.996 348.858C345.071 344.709 302.78 351.763 267.538 370.019C231.881 388.691 204.101 413.587 183.371 444.706C162.64 475.825 149.372 511.094 143.567 550.097C137.348 589.515 139.421 627.688 148.957 664.201C158.493 700.715 175.907 733.909 201.614 762.539C227.32 791.583 261.319 811.915 303.195 823.533C313.56 827.267 324.34 829.757 335.535 831.416C346.73 833.076 357.924 833.906 369.119 833.906C395.24 833.906 421.361 829.342 447.482 819.384C475.676 809.01 577.257 757.975 605.036 652.169ZM275.001 618.145C270.855 598.643 267.953 576.652 267.123 552.586C266.294 528.521 268.782 504.87 274.172 482.049C279.976 458.813 288.683 438.482 300.707 420.225C312.731 401.969 330.145 388.691 352.12 380.807C363.315 377.073 373.68 374.998 384.045 374.998C400.215 374.998 414.312 379.563 426.751 388.276C439.19 397.404 447.482 411.097 451.213 430.184C453.287 450.515 451.628 467.527 446.653 482.049C441.677 496.572 434.629 508.604 425.507 518.978C415.971 529.351 405.191 538.479 392.752 546.363C380.314 554.246 367.461 562.13 355.022 570.013C342.584 577.482 330.145 585.366 318.536 593.249C306.512 601.133 296.561 610.676 288.683 621.464C282.049 630.178 277.489 628.933 275.001 618.145Z" fill="currentColor"/>
        </svg>
    </div>
</div>

<!-- Preloader End -->

<!-- back to to button start-->
<a href="#" id="scroll-top" class="back-to-top-btn"><i class="bi bi-arrow-up"></i></a>
<!-- back to to button end-->

<!-- Header area -->


<div class="site-wrapper">

    <header>

        <!-- Menu -->

        <div class="menu-area menu-area-two">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="mainmenu">
                            <ul>
                                <li class="has-child-menu"><a href="javascript:void(0)">Home</a>
                                    <ul>
                                        <li><a href='index.html'>Home One</a></li>
                                        <li><a href='home-02.html'>Home Two</a></li>
                                        <li><a href='home-03.html'>Home Three</a></li>
                                        <li><a href='home-04.html'>Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu"><a href="javascript:void(0)">Blog</a>
                                    <ul>
                                        <li><a href='blog-grid-01.html'>Blog Grid One</a></li>
                                        <li><a href='blog-grid-02.html'>Blog Grid Two</a></li>
                                        <li><a href='blog-standard.html'>Blog Standard</a></li>
                                        <li><a href='blog-details.html'>Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu"><a href="javascript:void(0)">Pages</a>
                                    <ul>
                                        <li><a href='about.html'>About</a></li>
                                        <li><a href='chefs.html'>Chefs</a></li>
                                        <li><a href='faq.html'>FAQ</a></li>
                                        <li><a href='reservation.html'>Reservation</a></li>
                                        <li class="has-child-menu"><a href="javascript:void(0)">Food Menu</a>
                                            <ul>
                                                <li><a href='food-menu-01.html'>Food Menu 01</a></li>
                                                <li><a href='food-menu-02.html'>Food Menu 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-child-menu"><a href="javascript:void(0)">Contact</a>
                                    <ul>
                                        <li><a href='contact-01.html'>Contact One</a></li>
                                        <li><a href='contact-02.html'>Contact Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="menu-btn-wrap flex-shrink-0 d-lg-none pb-5">
                                <a class="sign-btn common-btn mt-4" href="#">
                                    <i class="bi bi-person-circle"></i>
                                    <span>Sign in</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 ">
                        <div class="menu-logo-wrap text-center">
                            <a href='index.html'><img src="assets/images/logo-two.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5 hamburger-menu position-relative col-md-12">
                        <div class="d-flex menu-info-item align-items-center justify-content-lg-end">
                            <div class="menu-meta d-flex align-items-center">
                                <div class="search-wrap position-relative order-2 order-lg-0">
                                    <div class="search-icon">
                                        <i class="bi bi-search search"></i>
                                        <i class="bi bi-x-octagon cancel"></i>
                                    </div>
                                    <div class="search-field">
                                        <form action="#">
                                            <input type="search" placeholder="Search">
                                            <i class="bi bi-search search"></i>
                                        </form>
                                    </div>
                                </div>
                                <a class="cart-icon order-lg-1" href="#"><i class="bi bi-heart"><span>1</span></i></a>
                                <a class="cart-icon order-lg-2" href="#"><i class="bi bi-cart3"><span>5</span></i></a>
                            </div>
                            <div class="menu-btn-wrap flex-shrink-0 d-none d-lg-block">
                                <a class="sign-btn common-btn" href="#">
                                    <i class="bi bi-person-circle"></i>
                                    <span>Sign in</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu end -->


    </header>


    <!-- Breadcrumb -->

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-info text-center">
                        <h1 class="text-white">Reservation</h1>
                        <p class="text-white mt-3"><a href='index.html'>Home</a><i class="bi bi-chevron-right ms-2 me-2"></i>Reservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb End -->



    <!-- Address -->

    <div class="address-area">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="address-box text-center">
                        <div class="address-icon d-flex align-items-center justify-content-center">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <p>Email Us</p>
                        <a class="address-link" href="mailto:support@epicurean.com">support@epicurean.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="address-box text-center">
                        <div class="address-icon d-flex align-items-center justify-content-center">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <p>Call Us</p>
                        <a class="address-link" href="tel:5550102">(684) 555-0102</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="address-box text-center">
                        <div class="address-icon d-flex align-items-center justify-content-center">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <p>Location</p>
                        <span class="address-link">1616 Broadway NY, New York</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Address End -->


    <!-- Reservation -->

    <div class="reservation-page-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="section-title text-center">
                        <span>Reservation</span>
                        <h2 class="mt-2">Create Unforgettable Moments By Reserve a Table Now</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-60 justify-content-center">
                <div class="col-lg-8">
                    <form class="booking-form booking-form-two">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <input type="text" class="input" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <input type="text" class="input" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <input type="email" class="input" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input1_wrapper position-relative">
                                    <input type="text" class="input datepicker" placeholder="Date" required>
                                    <svg class="form-icon" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                        <path d="M1.3438 0.0778494C0.71405 0.296936 0.213223 0.871428 0.0545455 1.56277C0.0247934 1.68448 0 2.45858 0 3.32032V4.86853H11.9554H23.9058L23.8909 3.27164L23.876 1.67961L23.7322 1.3875C23.5388 1.00288 23.0281 0.511153 22.6116 0.301804C22.0463 0.0242949 21.8826 -4.76837e-05 20.4198 -4.76837e-05H19.0959L19.081 1.22683C19.0661 2.37095 19.0612 2.46832 18.9669 2.59004C18.8628 2.73609 18.5256 2.9211 18.3719 2.9211C18.2182 2.9211 17.881 2.73609 17.7769 2.59004C17.6826 2.46832 17.6777 2.37095 17.6628 1.22683L17.6479 -4.76837e-05H11.6529H5.65289V1.17328C5.65289 2.29305 5.64793 2.35634 5.5438 2.53648C5.40992 2.77017 5.07769 2.94544 4.84959 2.90162C4.61157 2.85781 4.38347 2.69228 4.29422 2.51214C4.22975 2.37582 4.21488 2.15186 4.21488 1.17328V-4.76837e-05H2.89091C1.82479 0.00482082 1.51736 0.0194263 1.3438 0.0778494Z" fill="currentColor"/>
                                        <path d="M0 13.3253C0 18.9729 0.014876 20.3215 0.0694215 20.5211C0.233058 21.1296 0.6 21.5776 1.13058 21.8258L1.46281 21.9816L11.6529 21.9962C20.8661 22.006 21.8678 22.0011 22.1157 21.9281C22.9636 21.6895 23.6479 21.0858 23.8959 20.3604C24 20.0634 24 20.005 24 13.2182V6.37785H12H0V13.3253ZM6.9124 9.17242C7.00165 9.2065 7.12066 9.299 7.18017 9.37203C7.2843 9.49861 7.28926 9.55217 7.28926 10.5502C7.28926 11.7041 7.26942 11.8063 6.97686 11.9767C6.83306 12.0644 6.72397 12.0741 5.77686 12.0741C4.6562 12.0741 4.57686 12.0595 4.39339 11.8161C4.29421 11.6846 4.28926 11.6164 4.28926 10.5892C4.28926 9.07018 4.24959 9.10913 5.79174 9.10913C6.49587 9.10426 6.78843 9.12373 6.9124 9.17242ZM12.8083 9.17242C12.8975 9.2065 13.0116 9.28439 13.0661 9.34768C13.1603 9.44993 13.1653 9.52295 13.1653 10.6184V11.782L13.0264 11.9134L12.8926 12.0497H11.7074H10.5223L10.3934 11.9329C10.1851 11.7382 10.1554 11.5483 10.1752 10.4821C10.195 9.08478 10.1702 9.10913 11.6926 9.10913C12.3917 9.10426 12.6893 9.12373 12.8083 9.17242ZM18.8281 9.18215C19.1504 9.33795 19.1653 9.3915 19.1653 10.5648C19.1653 11.1393 19.1504 11.6749 19.1256 11.7479C19.1058 11.8209 19.0165 11.9232 18.9273 11.9767C18.7835 12.0644 18.6744 12.0741 17.6876 12.0741C16.1008 12.0741 16.1653 12.1374 16.1653 10.5746C16.1653 9.55217 16.1702 9.49861 16.2744 9.37203C16.4628 9.13347 16.6017 9.10913 17.6678 9.10426C18.486 9.10426 18.6843 9.11886 18.8281 9.18215ZM6.99174 15.7986C7.27438 15.9397 7.29421 16.0566 7.27934 17.225C7.2595 18.7197 7.30909 18.671 5.72727 18.671C4.72066 18.671 4.68099 18.6661 4.52727 18.559C4.28926 18.3935 4.25455 18.1939 4.27438 17.0839C4.28926 16.1978 4.29917 16.1101 4.39339 15.9836C4.57686 15.7401 4.6562 15.7255 5.79174 15.7255C6.63967 15.7255 6.87769 15.7401 6.99174 15.7986ZM12.8926 15.7986C13.1653 15.9397 13.1901 16.0517 13.1901 17.2202C13.1901 18.7538 13.2397 18.7148 11.5736 18.6856C10.1455 18.6661 10.1702 18.6905 10.1702 17.1958C10.1653 16.1686 10.195 16.0176 10.438 15.8326C10.5719 15.7304 10.6215 15.7255 11.6628 15.7255C12.5355 15.7255 12.7785 15.7401 12.8926 15.7986ZM18.838 15.7888C18.9025 15.818 19.0066 15.9105 19.0612 15.9836C19.1603 16.115 19.1653 16.1832 19.1653 17.2104C19.1653 18.7294 19.205 18.6905 17.6628 18.6905C16.6165 18.6954 16.4628 18.6661 16.2744 18.4276C16.1702 18.2961 16.1653 18.2474 16.1653 17.225C16.1653 15.6671 16.1008 15.7304 17.6529 15.7304C18.4017 15.7255 18.7537 15.745 18.838 15.7888Z" fill="currentColor"/>
                                    </svg>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="select1_wrapper">
                                    <div class="select1_inner persons">
                                        <select class="select2 select">
                                            <option value="0">Persons</option>
                                            <option value="1">1 Person</option>
                                            <option value="2">2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4">4 People</option>
                                            <option value="5">5 People</option>
                                            <option value="6">6 People</option>
                                            <option value="7">7 People</option>
                                        </select>
                                        <svg class="form-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="21" viewBox="0 0 25 21" fill="none">
                                            <path d="M12.9983 0.0441589C14.4247 0.193534 15.7583 1.10424 16.3934 2.37634C16.7255 3.02685 16.8477 3.57134 16.8477 4.35195C16.8428 6.28419 15.5238 7.96105 13.5991 8.47663C13.2816 8.56337 13.0764 8.58264 12.5 8.58264C11.9236 8.58264 11.7184 8.56337 11.4009 8.47663C9.47619 7.96105 8.15724 6.28419 8.15235 4.35195C8.15235 3.78818 8.21586 3.37378 8.35752 2.95939C8.92418 1.33071 10.3311 0.222445 12.0652 0.03934C12.3193 0.0152473 12.544 -0.00402641 12.5733 0.00079155C12.5977 0.00079155 12.7931 0.0200663 12.9983 0.0441589Z" fill="currentColor"/>
                                            <path d="M20.6383 4.03389C21.3222 4.14472 21.9035 4.43865 22.4213 4.94941C23.032 5.55173 23.3299 6.21669 23.3788 7.0744C23.4814 8.90545 21.9915 10.4474 20.1205 10.4474C19.3194 10.4474 18.528 10.1438 17.9418 9.61378C16.7205 8.51033 16.5056 6.7901 17.4191 5.42645C17.8294 4.81449 18.5622 4.29891 19.2852 4.11099C19.6564 4.01943 20.2964 3.98088 20.6383 4.03389Z" fill="currentColor"/>
                                            <path d="M5.2948 4.01943C6.79938 4.26035 7.91805 5.36862 8.11345 6.81419C8.21603 7.55625 8.03529 8.33685 7.62006 8.96809C6.70657 10.3462 4.91866 10.8377 3.4385 10.1149C2.74971 9.7776 2.28076 9.3102 1.94369 8.6356C1.68478 8.10556 1.59197 7.65744 1.62128 7.07439C1.67013 6.21669 1.96811 5.55173 2.57874 4.94941C3.18937 4.35191 3.84884 4.05798 4.69883 4.01943C4.94797 4.00979 5.21176 4.00979 5.2948 4.01943Z" fill="currentColor"/>
                                            <path d="M15.1772 9.48369C16.0175 9.59934 16.6476 9.90773 17.268 10.5197C17.6344 10.8763 17.7516 11.0304 17.9324 11.3967C18.3525 12.2158 18.3378 12.0568 18.3378 16.5188C18.3378 20.3833 18.3378 20.4507 18.2401 20.6146C18.1815 20.7061 18.0643 20.8218 17.9715 20.8796C17.8005 20.976 17.7419 20.976 12.5003 20.976C7.25864 20.976 7.20002 20.976 7.02905 20.8796C6.93623 20.8218 6.81899 20.7061 6.76037 20.6146C6.66267 20.4507 6.66267 20.3833 6.66267 16.5188C6.66267 12.0568 6.64802 12.2158 7.06813 11.3967C7.371 10.7992 7.98162 10.1824 8.57759 9.87881C9.38362 9.46924 9.39339 9.46442 12.3049 9.45478C13.7166 9.44996 15.0063 9.46442 15.1772 9.48369Z" fill="currentColor"/>
                                            <path d="M22.0697 11.3677C23.1933 11.5845 24.1215 12.2832 24.6393 13.2999C25.0056 14.0227 25.0105 14.0806 24.9959 16.909L24.9812 19.3906L24.8005 19.752C24.5709 20.2146 24.2485 20.5326 23.799 20.7446C23.3203 20.9711 23.0614 20.9952 21.2002 21H19.6224L19.6614 20.8169C19.6859 20.7205 19.7054 18.7497 19.7054 16.4465V12.2543L19.5931 11.8592C19.5344 11.6424 19.4709 11.4303 19.4563 11.3918C19.427 11.3243 19.554 11.3147 20.6384 11.3195C21.3077 11.3243 21.9525 11.3436 22.0697 11.3677Z" fill="currentColor"/>
                                            <path d="M5.54385 11.387C5.52919 11.4303 5.46569 11.6424 5.40707 11.8592L5.29471 12.2543V16.4465C5.29471 18.7497 5.31425 20.7205 5.33868 20.8217L5.37776 21H3.7999C1.93872 20.9952 1.67981 20.9711 1.20108 20.7446C0.751661 20.5326 0.429251 20.2146 0.199656 19.752L0.0189104 19.3906L0.00425577 16.909C-0.0103993 14.0806 -0.00551462 14.0227 0.360861 13.2999C0.820051 12.3989 1.5528 11.7821 2.55911 11.4544C2.87664 11.3532 3.00365 11.3436 4.23955 11.3243C5.47057 11.3099 5.57316 11.3147 5.54385 11.387Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="select1_wrapper">
                                    <div class="select1_inner">
                                        <select class="select2 select">
                                            <option value="0">Time</option>
                                            <option value="1">10:00 am</option>
                                            <option value="2">11:00 am</option>
                                            <option value="3">12:00 pm</option>
                                            <option value="4">14:00 pm</option>
                                            <option value="5">16:00 pm</option>
                                            <option value="6">18:00 pm</option>
                                            <option value="7">20:00 pm</option>
                                        </select>
                                        <svg class="form-icon" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                            <path d="M11.745 0.0708084C7.10438 0.729124 3.25688 3.53118 1.2825 7.68363C0.410625 9.51228 0 11.3803 0 13.4903C0 15.1277 0.18 16.2642 0.675 17.7778C2.15438 22.2791 5.94 25.6832 10.6088 26.7072C11.9363 26.9998 13.8769 27.0842 15.2269 26.9098C19.9237 26.2909 23.9231 23.32 25.8469 19.0213C26.3869 17.8116 26.7356 16.5568 26.9156 15.2177C27.0281 14.3456 27.0281 12.6351 26.9156 11.7629C26.1394 5.86623 21.6788 1.20176 15.8063 0.155209C14.9063 -0.00796509 12.6169 -0.0529766 11.745 0.0708084ZM14.9063 2.29895C18.675 2.76033 22.0388 5.19666 23.6756 8.65141C24.7894 11.009 25.065 13.7041 24.4406 16.1911C23.4225 20.2479 20.2556 23.4157 16.2 24.4341C14.9006 24.7604 13.275 24.8505 11.9644 24.6648C8.20688 24.1359 4.93875 21.7389 3.32438 18.3292C2.58188 16.7537 2.23875 15.2402 2.23875 13.4903C2.23875 10.4632 3.3975 7.67238 5.54063 5.52863C7.53188 3.53118 10.0125 2.42836 12.9656 2.21455C13.3538 2.18642 14.3269 2.23143 14.9063 2.29895Z" fill="currentColor"/>
                                            <path d="M12.0209 4.12189C10.564 4.3582 9.20836 4.91524 7.97086 5.78174C7.30711 6.24875 6.26648 7.28967 5.78273 7.97612C5.06836 8.98329 4.48336 10.3224 4.20773 11.594C4.09523 12.0948 4.08398 12.3311 4.08398 13.4902C4.08398 14.6493 4.09523 14.8856 4.20773 15.3864C4.48898 16.6693 5.06273 17.9859 5.78273 19.0043C6.26648 19.6908 7.30148 20.726 7.98773 21.2099C8.99461 21.9245 10.3334 22.5097 11.6046 22.7854C12.1052 22.8979 12.3415 22.9092 13.5002 22.9092C14.659 22.9092 14.8952 22.8979 15.3959 22.7854C16.6671 22.5097 18.0059 21.9245 19.0127 21.2099C19.6934 20.726 20.734 19.6908 21.2234 19.0043C21.9265 18.014 22.5171 16.658 22.7927 15.3864C22.9052 14.8856 22.9165 14.6493 22.9165 13.4902C22.9165 12.3368 22.9052 12.0948 22.7927 11.5997C21.9715 7.83546 19.159 5.01089 15.4296 4.20066C14.704 4.04311 12.7746 3.9981 12.0209 4.12189ZM13.9502 6.47381C14.0571 6.54133 14.1921 6.68763 14.254 6.79453C14.3665 6.98584 14.3721 7.08149 14.389 10.0467L14.4059 13.0963L16.0877 14.3623C17.2465 15.2288 17.8034 15.6846 17.8652 15.8084C18.1465 16.3542 17.7302 17.035 17.1171 17.035C16.9821 17.035 16.8134 17.0069 16.7459 16.9675C16.6784 16.9337 15.7727 16.2641 14.7265 15.482C13.444 14.5199 12.7971 13.9966 12.7296 13.8728C12.634 13.6984 12.6284 13.4452 12.6284 10.3393C12.6284 7.06461 12.6284 6.98584 12.7465 6.79453C12.9152 6.50757 13.1852 6.3444 13.5002 6.3444C13.6802 6.3444 13.8265 6.38379 13.9502 6.47381Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="common-btn border-radius-0 border-0 text-capitalize mt-2"><span>Book Now</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservation End -->


    <!-- Instagram -->

    <div class="instagram-area pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="swiper instagram-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-1.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-2.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-3.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-4.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-5.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-6.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="swiper-slide instagram-img-wrap position-relative ">
                                <img src="assets/images/instagram/instagram-3.png" alt="">
                                <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram End -->


    <!-- Footer -->

    <div class="footer-area">
        <div class="container">
            <div class="row justify-content-between copyright-wrap">
                <div class="col-lg-2 col-md-6">
                    <div class="footer-box">
                        <h2 class="h2 text-white footer-title">Product</h2>
                        <ul class="footer-list custom-ul">
                            <li><a href="#">Breakfast</a></li>
                            <li><a href="#">Lunch</a></li>
                            <li><a href="#">Desserts</a></li>
                            <li><a href="#">Dinner</a></li>
                            <li><a href="#">Book a table</a></li>
                            <li><a href="#">Our Chefs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-box">
                        <h2 class="h2 text-white footer-title">Information</h2>
                        <ul class="footer-list custom-ul">
                            <li><a href='faq.html'>FAQ</a></li>
                            <li><a href='blog-standard.html'>Blog</a></li>
                            <li><a href='contact-01.html'>Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-box">
                        <h2 class="h2 text-white footer-title">Company</h2>
                        <ul class="footer-list custom-ul">
                            <li><a href='about.html'>About us</a></li>
                            <li><a href='reservation.html'>Our Menu</a></li>
                            <li><a href='contact-01.html'>Contact us</a></li>
                            <li><a href='index.html'>Epicurean</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-box">
                        <div class="footer-subscribe">
                            <div class="footer-subscribe-img position-relative">
                                <img class="w-100" src="assets/images/footer-subscribe-bg.png" alt="">
                                <div class="section-title ps-4 position-absolute top-50 start-50 translate-middle w-100">
                                    <span class="text-white">Subscribe</span>
                                    <h2 class="mt-2 text-white">Our News letter</h2>
                                    <p class="mt-3 text-white">To Get Regular Update</p>
                                </div>
                            </div>
                            <form class="footer-subscribe-form mt-4 d-flex justify-content-between align-items-center" action="#">
                                <input class="w-100 border-0 h-100 ps-3 pe-3" type="email" placeholder="Enter your mail">
                                <button class="common-btn h-100 flex-shrink-0 border-0 border-radius-0 ms-lg-4 ms-2" type="submit"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-4 text-center text-lg-start">
                    <a class='footer-logo ' href='index.html'><img src="assets/images/logo-two.svg" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <ul class="footer-menu custom-ul d-flex justify-content-center mt-3 mb-3 mt-lg-0 mb-lg-0">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="custom-ul social-list chefs-social-list d-flex justify-content-center justify-content-lg-end align-items-center">
                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


</div>

<!-- Jquery JS -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Swiper Carousel JS -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<!-- Mean menu JS -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- YouTubePopUp JS -->
<script src="assets/js/YouTubePopUp.js"></script>
<!-- Datepicker JS -->
<script src="assets/js/datepicker.js"></script>
<!-- Select2 JS -->
<script src="assets/js/select2.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from epicurean.netlify.app/epicurean/reservation by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2024 06:16:21 GMT -->
</html>

