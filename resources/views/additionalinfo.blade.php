@extends('layouts.app')
@section('title', 'تماس با ما')
@section('Styles')
    @parent
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
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
    {{--    {{ Breadcrumbs::render('product', $product) }}--}}
    <div class="classic-tabs">

        <!-- Nav tabs -->
        <div class="tabs-wrapper">
            <ul class="nav tabs-primary" role="tablist">
                <li class="nav-item">
                    <a class="nav-link waves-light active waves-effect waves-light" data-toggle="tab" href="#panel83"
                       role="tab">
                        <i class="fa fa-user fa-2x mb-2" aria-hidden="true"></i>
                        <br> پروفایل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel84"
                       role="tab">
                        <i class="fas fa-shopping-cart fa-2x mb-2" aria-hidden="true"></i>
                        <br> همه سفارش ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel85"
                       role="tab">
                        <i class="fa fa-heart fa-2x mb-2 mb-2" aria-hidden="true"></i>
                        <br> لیست علاقه مندی ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel86"
                       role="tab">
                        <i class="fas fa-thumbs-up fa-2x mb-2" aria-hidden="true"></i>
                        <br> نقد و نظرات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel86"
                       role="tab">
                        {{--<i class="fa fa-map-marker-alt fa-2x" aria-hidden="true"></i>--}}
                        <i class="far fa-address-book fa-2x mb-2" aria-hidden="true"></i>
                        <br> آدرس ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel86"
                       role="tab">
                        <i class="fas fa-bell fa-2x mb-2" aria-hidden="true"></i>
                        <br>اطلاع رسانی ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel86"
                       role="tab">
                        <i class="far fa-envelope fa-2x mb-2" aria-hidden="true"></i>
                        <br>پیغام های من</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel86"
                       role="tab">
                        <i class="fa fa-info fa-2x mb-2" aria-hidden="true"></i>
                        <br>اطلاعات شخصی</a>
                </li>
            </ul>
        </div>
        <!-- Tab panels -->
        <div class="tab-content card">
            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel83" role="tabpanel">
                <div class="col-lg-10 col-md-6 ml-auto mr-auto">

                    <div class="avatar mx-auto white text-center mb-5" style="width: 200px">
                        {{--<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"--}}
                        <img src="{{$userProfile ? $userProfile->avatar : ""}}"

                             class="rounded-circle img-fluid">
                        <div data-toggle="tooltip" data-placement="bottom" title="ویرایش تصویر پروفایل">
                            <button class="btn-floating btn-sm blue-gradient" data-toggle="modal" data-target="#basicExampleModal">
                                <i class="fa fa-edit"></i>
                            </button>
                        </div>

                    </div>

                    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">

                                    <!--Panel content-->
                                    <div class="card-body pr-5">
                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-md-12">
                                                <form action="{{route('uploadAvatar')}}" class="dropzone"
                                                      style="width: 200px; height: 200px;margin: auto">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple/>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--Grid column-->

                                        </div>
                                        <!--Grid row-->

                                    </div>
                                    <!--Panel content-->

                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="font-weight-bold text-center mb-5">{{$userProfile ? $userProfile->first_name . " " .$userProfile->last_name : auth()->user()->name}}</h4>
                    <hr>
                    <form class="text-center m-5" style="color: #757575; "method="POST" action="{{route('save.profile')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form ml-5">
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{$userProfile ? $userProfile->first_name : ""}}">
                                    <label for="first_name" class="">نام</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{$userProfile ? $userProfile->last_name : ""}}">
                                    <label for="last_name">نام خانوادگی</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form ml-5">
                                    <input type="text" id="contact_no" name="contact_no" class="form-control" value="{{$userProfile ? $userProfile->contact_no : ""}}">
                                    <label for="" class="contact_no">شماره موبایل</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input type="text" id="national_code" name="national_code" class="form-control" value="{{$userProfile ? $userProfile->national_code : ""}}">
                                    <label for="national_code">کد ملی</label>
                                </div>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="email" id="email" name="email" class="form-control" value="{{$userProfile ?  $userProfile->email: ""}}">
                            <label for="email">آدرس ایمیل</label>
                        </div>

                        <!-- Password -->
                        <div class="md-form mt-0">
                            <input type="text" id="card_number" name="card_number" class="form-control" value="{{$userProfile ? $userProfile->card_number : ""}}">
                            <label for="card_number">شماره کارت</label>
                        </div>

                        <div class="col-md-6 text-right">
                            <div class="form-check mt-0">
                                <input class="form-check-input" type="checkbox" name="newsletters" id="newsletters" {{$userProfile->newsletters ? "checked" : ""}}>
                                <label class="form-check-label" for="newsletters">
                                    <p style="margin-right: 25px">اشتراک در خبرنامه دیجی‌کالا</p>
                                </label>
                            </div>
                        </div>
                        <!-- Sign up button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 mr-auto ml-auto"
                                onclick="registerProfile()" style="font-family: IRANSans; width: 200px" type="submit">ثبت اطلاعات کاربری
                        </button>
                    </form>

                </div>
            </div>
            <!--/.Panel 1-->
            <!--Panel 2-->
            <div class="tab-pane fade" id="panel84" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat
                    ratione porro voluptate odit minima.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat
                    ratione porro voluptate odit minima.</p>
            </div>
            <!--/.Panel 2-->
            <!--Panel 3-->
            <div class="tab-pane fade" id="panel85" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat
                    ratione porro voluptate odit minima.</p>
            </div>
            <!--/.Panel 3-->
            <!--Panel 4-->
            <div class="tab-pane fade" id="panel86" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat
                    ratione porro voluptate odit minima.</p>
            </div>
            <!--/.Panel 4-->
        </div>

    </div>
@endsection
@section('footerScripts')
    @parent
    <script type="text/javascript" src="/js/dropzone.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection