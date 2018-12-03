@extends('layouts.app')
@section('title', 'تماس با ما')
@section('Styles')
    @parent
@endsection
@section('intro')
    <!--Intro-->
    <section>

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100"
                             src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg"
                             alt="First slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 red-text mb-4 mt-5">
                                            <strong>Sale off 30% on every saturday!</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">Tempora incidunt
                                            ut
                                            labore et dolore veritatis et quasi architecto beatae</h5>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/getting-started/"
                                           class="btn btn-danger btn-rounded" rel="nofollow">See more!</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item h-100">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100"
                             src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg"
                             alt="Second slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 dark-grey-text mb-4">
                                            <strong>Nemo enim ipsam voluptatem quia voluptas</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">Tempora incidunt
                                            ut
                                            labore et dolore veritatis et quasi architecto beatae</h5>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
                                           class="btn btn-primary btn-rounded" rel="nofollow">Read more</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100"
                             src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg"
                             alt="Third slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
                                    <li>
                                        <p class="h1 blue-text mb-4 mt-5 pr-lg-5">
                                            <strong>Sale off 20% on every headphones!</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5">Tempora
                                            incidunt ut labore et dolore veritatis et quasi</h5>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        <div class="container-fluid mx-0 px-0">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark primary-color mb-5">
                <div class="container-fluid">

                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                        <!-- Links -->
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown mega-dropdown active">
                                <a class="nav-link dropdown-toggle  no-caret mr-2" id="navbarDropdownMenuLink1"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laptop</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                                     aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brand</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item mb-0" href="">Sony</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Lenovo</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Apple</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Dell</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Asus</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Sales</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Laptops Up to 50% Off </a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Laptops under $399</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Laptops Up to 50% Off</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Laptops for designers</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Laptops for developers</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Processor
                                                Type</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Intel Core i5 4th Gen.</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Intel Core i5 5th Gen.</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Intel Core i5 3th Gen.</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Intel Core i5 6th Gen.</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Intel Core i5 7th Gen.</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Customers
                                                opinions</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Totam rem aperiam eaque</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Beatae vitae dicta sun</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Quae ab illo inventore</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Nemo enim ipsam</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Neque porro quisquam est</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cameras</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                                     aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-12 col-lg-4 sub-menu my-lg-5 mt-5 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                                Featured</h6>
                                            <!--Featured image-->
                                            <div class="view overlay mb-3 z-depth-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg"
                                                     class="img-fluid" alt="First sample image">
                                                <div class="mask flex-center rgba-white-slight">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <h4 class="mb-2">
                                                <a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a>
                                            </h4>
                                        </div>
                                        <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brands</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Canon</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Nikon</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Sony</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">GoPro</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Samsung</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                                Accesories</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Excepteur sint</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Sunt in culpa</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Sed ut perspiciatis</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Mollit anim id est</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Accusantium doloremque</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accesories</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                                     aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                                Featured</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item mb-0" href="">Mouse</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Printer</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Laptop bags</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Software</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Headphones</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Related</h6>
                                            <!--Featured image-->
                                            <div class="view overlay mb-3 z-depth-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(43).jpg"
                                                     class="img-fluid" alt="First sample image">
                                                <div class="mask flex-center rgba-white-slight">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <h4 class="mb-2">
                                                <a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a>
                                            </h4>
                                            <p class="font-small text-uppercase dark-grey-text">
                                                <i class="fa fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 /
                                                <i class="fa fa-comments-o px-1" aria-hidden="true"></i> 20</p>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                                Bestseller</h6>
                                            <!--Featured image-->
                                            <div class="view overlay mb-3 z-depth-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg"
                                                     class="img-fluid" alt="First sample image">
                                                <div class="mask flex-center rgba-white-slight">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <h4 class="mb-2">
                                                <a class="news-title-2 pl-0" href="">Ut labore et dolore magna</a>
                                            </h4>
                                            <p class="font-small text-uppercase dark-grey-text">
                                                <i class="fa fa-clock-o pr-2" aria-hidden="true"></i>July 16, 2017 /
                                                <i class="fa fa-comments-o px-1" aria-hidden="true"></i> 25</p>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                                Customers opinion</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Totam rem aperiam eaque</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Beatae vitae dicta sun</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Quae ab illo inventore</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Nemo enim ipsam</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Neque porro quisquam est</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- Links -->

                        <form class="search-form m" role="search">
                            <div class="form-group md-form my-0 waves-light">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <!-- Collapsible content -->
                </div>
            </nav>
            <!--/.Navbar-->

        </div>

    </section>
    <!--/Intro-->
@endsection
@section('content')
    {{ Breadcrumbs::render('contact') }}
    <section class="my-5 p-1">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">            تماس با شیک پوشان
        </h2>
        <!-- Section description -->
        <p class="text-right w-responsive mx-auto pb-2">
            کاربر گرامی، لطفاً در صورت وجود هرگونه سوال یا ابهامی، پیش از ارسال ایمیل یا تماس تلفنی با دیجی‌کالا، بخش پرسش‏های متداول را ملاحظه فرمایید و در صورتی که پاسخ خود را نیافتید، با ما تماس بگیرید.</p>

        <p class="text-right w-responsive mx-auto pb-5">
            مشتری گرامی، اگر انتقاد یا شکایتی از دیجی‌کالا دارید برای دریافت پاسخ سریع‌تر، لطفا به آدرس complaint@digikala.com ایمیل ارسال کنید.</p>

        <!-- Grid row -->
        <div class="row mr-5">
            <!-- Grid column -->
            <div class="col-lg-6 mb-lg-0 mb-6 mr-1">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="form-header blue accent-1">
                            <h3 class="mt-2"><i class="fa fa-envelope"></i> فرم تماس با ما</h3>
                        </div>
                        <!-- Body -->
                        <div class="md-form">
                            <i class="fa fa-user prefix ml-5 grey-text contact-icon"></i>
                            <input type="text" style="font-family: IRANSans" id="form-name" value="
                            <?php if (Auth::check()) { echo Auth::user()->name ? Auth::user()->name : '';} else {echo '';}?>" class="form-control">
                            <label for="form-name">نام کاربری</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text contact-icon"></i>
                            <input type="text" style="font-family: IRANSans" id="form-email"
                                   value="<?php if (Auth::check()) { echo Auth::user()->email ? Auth::user()->email : '';}?>"
                            <label for="form-email">ایمیل</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-tag prefix grey-text contact-icon"></i>
                            <input type="text" style="font-family: IRANSans" id="form-Subject" class="form-control">
                            <label for="form-Subject">موضوع</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text contact-icon"></i>
                            <textarea type="text" style="font-family: IRANSans" id="form-text" class="form-control md-textarea" rows="3"></textarea>
                            <label for="form-text" class="">متن پیام</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light-blue waves-effect waves-light" style="font-family: IRANSans">
                                ارسال
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form with header -->

            </div>
            <!-- Grid column -->
            <div class="col-lg-5">
                <!-- Google map-->
                <div id="map-container" class="rounded z-depth-1-half map-container"
                     style="height: 400px; position: relative; overflow: hidden;">
                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                        <div class="gm-style"
                             style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                            <div tabindex="0"
                                 style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -72, -84);">
                                                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                        <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;">
                                            <img alt=""
                                                 src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                 draggable="false"
                                                 style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                            <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -72, -84);">
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                        <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -72, -84);">
                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4824!3i6159!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=31713"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4823!3i6158!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=129060"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4824!3i6158!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=19655"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4825!3i6158!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=41321"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4823!3i6159!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=10047"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4825!3i6159!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=53379"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4825!3i6160!4i256!2m3!1e0!2sm!3i440145964!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=7735"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4824!3i6160!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=62255"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4823!3i6160!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=40589"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4822!3i6160!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=18923"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4822!3i6159!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=119452"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                     src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i14!2i4822!3i6158!4i256!2m3!1e0!2sm!3i440145976!2m3!1e2!6m1!3e5!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;key=AIzaSyCTZX7XyFg9IX_yhDJJYZd060PwwNkghIw&amp;token=107394"
                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gm-style-pbc"
                                     style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                    <p class="gm-style-pbt"></p></div>
                                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                    <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                            <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -14px; top: -43px; z-index: 0;">
                                                <img alt=""
                                                     src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                     draggable="false" usemap="#gmimap0"
                                                     style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                <map name="gmimap0" id="gmimap0">
                                                    <area log="miw"
                                                          coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                          shape="poly" title="New York"
                                                          style="cursor: pointer; touch-action: none;">
                                                </map>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <iframe aria-hidden="true" frameborder="0"
                                    style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"
                                    src="about:blank"></iframe>
                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                <a target="_blank" rel="noopener"
                                   href="https://maps.google.com/maps?ll=40.725118,-73.997699&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                   title="Click to see this area on Google Maps"
                                   style="position: static; overflow: visible; float: none; display: inline;">
                                    <div style="width: 66px; height: 26px; cursor: pointer;"><img alt=""
                                                                                                  src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                                                                                  draggable="false"
                                                                                                  style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                    </div>
                                </a></div>
                            <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 216px; top: 110px;">
                                <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                <div style="font-size: 13px;">Map data ©2018 Google</div>
                                <button draggable="false" title="Close" aria-label="Close" type="button"
                                        class="gm-ui-hover-effect"
                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;">
                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                         style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;">
                                </button>
                            </div>
                            <div class="gmnoprint"
                                 style="z-index: 1000001; position: absolute; right: 167px; bottom: 0px; width: 121px;">
                                <div draggable="false" class="gm-style-cc"
                                     style="user-select: none; height: 14px; line-height: 14px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <a style="text-decoration: none; cursor: pointer; display: none;">Map
                                            Data</a><span>Map data ©2018 Google</span></div>
                                </div>
                            </div>
                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                    Map data ©2018 Google
                                </div>
                            </div>
                            <div class="gmnoprint gm-style-cc" draggable="false"
                                 style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 96px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank"
                                       rel="noopener"
                                       style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of
                                        Use</a></div>
                            </div>
                            <button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view"
                                    type="button" class="gm-control-active gm-fullscreen-control"
                                    style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                     style="height: 18px; width: 18px; margin: 11px;"><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                        style="height: 18px; width: 18px; margin: 11px;"><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                        style="height: 18px; width: 18px; margin: 11px;"></button>
                            <div draggable="false" class="gm-style-cc"
                                 style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <a target="_blank" rel="noopener"
                                       title="Report errors in the road map or imagery to Google"
                                       href="https://www.google.com/maps/@40.725118,-73.997699,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                       style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report
                                        a map error</a></div>
                            </div>
                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false"
                                 controlwidth="40" controlheight="81"
                                 style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                                <div class="gmnoprint" controlwidth="40" controlheight="81"
                                     style="position: absolute; left: 0px; top: 0px;">
                                    <div draggable="false"
                                         style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                        <button draggable="false" title="Zoom in" aria-label="Zoom in" type="button"
                                                class="gm-control-active"
                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                 style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="height: 18px; width: 18px; margin: 9px 11px 13px;"></button>
                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                        <button draggable="false" title="Zoom out" aria-label="Zoom out" type="button"
                                                class="gm-control-active"
                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                 style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="height: 18px; width: 18px; margin: 13px 11px 9px;"></button>
                                    </div>
                                </div>
                                <div class="gmnoprint" controlwidth="40" controlheight="40"
                                     style="display: none; position: absolute;">
                                    <div style="width: 40px; height: 40px;">
                                        <button draggable="false" title="Rotate map 90 degrees"
                                                aria-label="Rotate map 90 degrees" type="button"
                                                class="gm-control-active"
                                                style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                 style="height: 28px; width: 28px; margin: 6px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="height: 28px; width: 28px; margin: 6px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="height: 28px; width: 28px; margin: 6px;"></button>
                                        <button draggable="false" title="Tilt map" aria-label="Tilt map" type="button"
                                                class="gm-tilt gm-control-active"
                                                style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                 style="width: 18px; height: 16px; margin: 12px 11px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="width: 18px; height: 16px; margin: 12px 11px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                    style="width: 18px; height: 16px; margin: 12px 11px;"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                              draggable="false"
                              style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;">
                    </div>
                    <div style="line-height: 20px; margin: 15px 0px;"><span
                                style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span>
                    </div>
                    <table style="width: 100%;">
                        <tr>
                            <td style="line-height: 16px; vertical-align: middle;"><a
                                        href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors"
                                        target="_blank" rel="noopener"
                                        style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this
                                    website?</a></td>
                            <td style="text-align: right;">
                                <button class="dismissButton">OK</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <!-- Buttons-->
                <div class="row text-center mt-4">
                    <div class="col-md-5">
                        <a class="btn-floating blue accent-1 waves-effect waves-light">
                            <i class="fa fa-map-marker"></i>
                        </a>
                        <p>مشهد - بلوار فردوسی -<br> خیابان فرامرز عباسی - پلاک 188 </p>
                    </div>
                    <div class="col-md-3">
                        <a class="btn-floating blue accent-1 waves-effect waves-light">
                            <i class="fa fa-phone"></i>
                        </a>
                        <p>+ 51 386886406</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1 waves-effect waves-light">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <p> mo.saadati68@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('footerScripts')
    @parent

@endsection