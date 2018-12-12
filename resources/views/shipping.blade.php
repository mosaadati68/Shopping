@extends('layouts.app')
@section('title', 'تماس با ما')
@inject('Cart','Gloudemans\Shoppingcart\Facades\Cart')
@inject('Auth','Illuminate\Support\Facades\Auth')
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
    {{ Breadcrumbs::render('cart', 'سبد خرید') }}

    <div class="card card-ecommerce mb-5">
        <div class="card-body">
            <ul class="c-checkout-steps">
                <li class="is-active is-completed">
                    <div class="c-checkout-steps__item c-checkout-steps__item--summary"
                         data-title="اطلاعات ارسال"></div>
                </li>
                <li class="is-completed">
                    <div class="c-checkout-steps__item c-checkout-steps__item--delivery" data-title="پرداخت"></div>
                </li>
                <li class="">
                    <div class="c-checkout-steps__item c-checkout-steps__item--payment"
                         data-title="اتمام خرید و ارسال"></div>
                </li>
            </ul>
        </div>
    </div>
    <form action="{{route('checkout.order')}}" method="POST">
        @csrf
        <div class="row" id="cart_content">
            <div class="col-8">
                <!-- Section cart -->
                <section class="section pb-5">
                    <h3 class="text-muted text-right mb-3 pr-4">انتخاب آدرس تحویل سفارش</h3>
                    <div class="card card-ecommerce">
                        <div class="card-body">
                            @foreach($addresses as $address)
                                <div class="pr-4"
                                     style="border-right-width: 7px;border-right-color: rgb(141, 212, 220);border-right-style: solid;">
                                    <div class="row">
                                        <div class="col-4">
                                            <h4 class="text-muted text-right mb-4">
                                                گیرنده: {{$address->full_name_transferee}} </h4>
                                        </div>
                                        <div class="col-8">
                                            <a class="text-right float-right" href="#"
                                               style="border-bottom: dashed;border-bottom-width: 2px;color: #00bfd6">اطلاح
                                                این آدرس </a>
                                            <button href="http://localhost:8000/panel/checkout" type="button"
                                               class="float-left btn waves-effect waves-light font-weight-bold checkout-btn">
                                                تغییر آدرس ارسال
                                                <i class="fa fa-angle-left left"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <h5 class="text-muted text-right mb-4">شماره تماس: {{$address->contact_no}} | کد
                                        پستی: {{$address->zip_code}}</h5>
                                    <h5 class="text-muted text-right mb-4">
                                        @php
                                            echo ' آدرس : استان' . ' ' . $address->state_province . ' , ' . 'شهر ' . $address->city . ' , ' . $address->address
                                        @endphp
                                    </h5>
                                    <h4 class="text-muted text-right mb-4">آدرس الکترونیکی
                                        : {{Auth::user()->email}}</h4>
                                </div>
                            @endforeach
                        </div>
                        <div class="c-checkout-contact__badge"></div>
                    </div>

                    <h3 class="text-muted text-right mb-3 mt-4 pr-4">انتخاب نحوه ارسال</h3>
                    <div class="card card-ecommerce text-right">
                        <div class="card-body">
                            <div class="custom-control custom-checkbox form-group mr-5  mb-3">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       value="1" name="transmission-type"
                                       id="transmission-type-1"
                                       width="30">
                                <label class="custom-control-label" for="transmission-type-1"><h5
                                            class="text-muted">سریع‌ (مرسوله‌ها در سریع‌ترین زمان ممکن ارسال
                                        می‌شوند)</h5></label>
                            </div>
                            <div class="custom-control custom-checkbox form-group mr-5">
                                <input type="checkbox" name="transmission-type"
                                       value="0" class="custom-control-input"
                                       id="transmission-type-0"
                                       width="30" checked>
                                <label class="custom-control-label" for="transmission-type-0"><h5
                                            class="text-muted">عادی</h5></label>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-muted text-right mt-4 pr-4"> مرسوله {{Cart::count()}}</h3>
                    <div class="card card-ecommerce mt-4">
                        <div class="card-body">
                            @foreach(Cart::content() as $cart)
                                <div class="pr-4"
                                     style="border-right-width: 7px;border-right-color: rgb(141, 212, 220);border-right-style: solid;">
                                    <div class="col">
                                        <div class="row">
                                            <img class="float-right mb-4" width="150" height="150"
                                                 src="{{$cart->options->image}}" style="border-radius: 5px">
                                        </div>
                                        <div class="row">
                                            <h5 class="text-muted text-right mb-4"> {{$cart->name}} </h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <hr class="text-muted" width="100%">
                            <h6 class="text-muted text-right mb-4 mt-4 pr-4">لطفا زمان ارسال را انتخاب بفرمایید:</h6>
                            <h6 class="text-muted text-right mb-4 pr-4">تحویل اکسپرس دیجی‌کالا | هزینه ارسال:
                                رایگان</h6>

                            <!-- Classic tabs -->
                            <div class="classic-tabs mx-2">

                                <ul class="nav nav-tabs p-0" id="myClassicTabShadow" role="tablist">
                                    <li class="nav-item" style="width: 20%; margin: 0px">
                                        <a class="nav-link  waves-light active show text-muted"
                                           id="profile-tab-classic-shadow"
                                           data-toggle="tab" href="#profile-classic-shadow"
                                           role="tab" aria-controls="profile-classic-shadow"
                                           aria-selected="true">

                                            <h6>{{verta(now())->formatWord('l')}}</h6>
                                            <br>
                                            <h6>{{verta(now())->day . ' ' . verta(now())->formatWord('F')}}</h6>

                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 20%; margin: 0px">
                                        <a class="nav-link waves-light text-muted" id="follow-tab-classic-shadow"
                                           data-toggle="tab" href="#follow-classic-shadow" role="tab"
                                           aria-controls="follow-classic-shadow" aria-selected="false">

                                            <h6>{{verta(now()->addDay(1))->formatWord('l')}}</h6>
                                            <br>
                                            <h6>{{verta(now()->addDay(1))->day . ' ' . verta(now()->addDay(1))->formatWord('F')}}</h6>

                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 20%; margin: 0px">
                                        <a class="nav-link waves-light text-muted" id="contact-tab-classic-shadow"
                                           data-toggle="tab" href="#contact-classic-shadow" role="tab"
                                           aria-controls="contact-classic-shadow" aria-selected="false">
                                            <h6>{{verta(now()->addDay(2))->formatWord('l')}}</h6>
                                            <br>
                                            <h6>{{verta(now()->addDay(2))->day . ' ' . verta(now()->addDay(2))->formatWord('F')}}</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 20%; margin: 0px">
                                        <a class="nav-link waves-light text-muted" id="awesome-tab-classic-shadow"
                                           data-toggle="tab" href="#awesome-classic-shadow" role="tab"
                                           aria-controls="awesome-classic-shadow" aria-selected="false">
                                            <h6>{{verta(now()->addDay(3))->formatWord('l')}}</h6>
                                            <br>
                                            <h6>{{verta(now()->addDay(3))->day . ' ' . verta(now()->addDay(3))->formatWord('F')}}</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 20%; margin: 0px">
                                        <a class="nav-link waves-light text-muted" id="awesome-tab-classic-shadow"
                                           data-toggle="tab" href="#awesome-classic-shadow" role="tab"
                                           aria-controls="awesome-classic-shadow" aria-selected="false">
                                            <h6>{{verta(now()->addDay(4))->formatWord('l')}}</h6>
                                            <br>
                                            <h6>{{verta(now()->addDay(4))->day . ' ' . verta(now()->addDay(4))->formatWord('F')}}</h6>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content card text-right" id="myClassicTabContentShadow">
                                    <div class="tab-pane fade active show" role="tabpanel"
                                         aria-labelledby="profile-tab-classic-shadow">
                                        <div class="custom-control custom-radio form-group" style="margin-right: 80px">
                                            <input type="radio" value="{{verta(now())}}" class="custom-control-input"
                                                   id="1day" name="shipping-time">
                                            <label class="custom-control-label text-right text-muted"
                                                   for="1day"> ساعت 9 تا 22</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel"
                                         aria-labelledby="follow-tab-classic-shadow">
                                        <div class="custom-control custom-radio form-group" style="margin-right: 100px">
                                            <input type="radio" value="{{verta(now()->addDay(1))}}"
                                                   class="custom-control-input"
                                                   id="2day" name="shipping-time">
                                            <label class="custom-control-label text-right text-muted"
                                                   for="2day"> ساعت 9 تا 22</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel"
                                         aria-labelledby="contact-tab-classic-shadow">
                                        <div class="custom-control custom-radio form-group" style="margin-right: 100px">
                                            <input type="radio" value="{{verta(now()->addDay(2))}}"
                                                   class="custom-control-input"
                                                   id="3day" name="shipping-time">
                                            <label class="custom-control-label text-right text-muted"
                                                   for="3day"> ساعت 9 تا 22</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel"
                                         aria-labelledby="awesome-tab-classic-shadow">
                                        <div class="custom-control custom-radio form-group" style="margin-right: 100px">
                                            <input type="radio" value="{{verta(now()->addDay(3))}}"
                                                   class="custom-control-input"
                                                   id="shipping-time" name="shipping-time">
                                            <label class="custom-control-label text-right text-muted"
                                                   for="shipping-time"> ساعت 9 تا 22</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel"
                                         aria-labelledby="awesome-tab-classic-shadow">
                                        <div class="custom-control custom-radio form-group" style="margin-right: 100px">
                                            <input type="radio" value="{{verta(now()->addDay(4))}}"
                                                   class="custom-control-input"
                                                   id="4day" name="shipping-time">
                                            <label class="custom-control-label text-right text-muted"
                                                   for="4day"> ساعت 9 تا 22</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Classic tabs -->

                        </div>
                    </div>

                    <h4 class="text-muted text-right mt-4 pr-4"> صدور فاکتور </h4>
                    <div class="card card-ecommerce mt-4">
                        <div class="card-body">
                            <div class="form-check text-right mr-5 ">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input form-group" name="print-invoice"
                                           id="print-invoice"
                                           width="30">
                                    <label class="custom-control-label" for="print-invoice"><h5
                                                class="text-muted">درخواست ارسال فاکتور</h5></label>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /Section cart -->
            </div>
            <div class="col-4">
                <div class="col">
                    <div class="row">
                        <section class="mx-4 mb-6 pb-3">

                            <div class="card" style="width: 35rem;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="text-right">مبلغ کل ({{Cart::count()}})</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5 class=" text-muted float-left">{{Cart::total()}} تومان </h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="text-right">هزینه ارسال : </h5>
                                        </div>
                                        <div class="col-6">
                                            <h5 class=" text-muted float-left">وابسته به آدرس</h5>
                                        </div>
                                    </div>
                                    <div style="width: 100%; border: 1px solid #e6e6e6; height: 4px; border-right: none; border-left: none;margin-top: 10px"></div>
                                    <div class="col text-center">
                                        <div class="row-6 mt-4">
                                            <h5 class="text-center">مبلغ قابل پرداخت : </h5>
                                        </div>
                                        <div class="row-12">
                                            <h5 class="text-muted text-center red-text lighten-2">{{Cart::total()}}
                                                تومان </h5>
                                        </div>
                                        <div class="row-6">
                                            <h6 class="text-muted text-center pr-1 mt-3">
                                                <button type="submit"
                                                        class="btn btn-primary btn-rounded waves-effect waves-light font-weight-bold"
                                                        style="font-family: IRANSansWeb">تایید
                                                    و ثبت سفارش
                                                    <i class="fa fa-angle-left left"></i>
                                                </button>
                                            </h6>
                                        </div>
                                        <div class="row-6">
                                            <h6 class="text-muted text-right pr-1 mt-3">کالاهای موجود در سبد شما ثبت و
                                                رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید. </h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="row">
                        <section class="mx-4 mb-6 pb-3">

                            <div class="card" style="width: 35rem;">
                                <div class="card-body">
                                    <div class="col text-center">
                                        <div class="row-6 mt-4">
                                            <h5 class="text-muted text-right"><img width="25" height="25" class="ml-2"
                                                                                   src="/img/svg/a8d65c7a.svg">هفت روز
                                                ضمانت
                                                تعویض </h5>
                                        </div>
                                        <div class="row-12">
                                            <h5 class="text-muted text-right"><img width="25" height="25" class="ml-2"
                                                                                   src="/img/svg/3e2ec4e5.svg">پرداخت در
                                                محل
                                                با کارت بانکی</h5>
                                        </div>
                                        <div class="row-6">
                                            <h6 class="text-muted text-right pr-1 mt-3"><img width="25" height="25"
                                                                                             class="ml-2"
                                                                                             src="/img/svg/0e30c4eb.svg">تحویل
                                                اکسپرس</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Section products -->
    <section class="mt-5">
        <h4 class="font-weight-bold mt-4 title-1 text-right">
            <strong>محصولات مرتبط</strong>
        </h4>
        <hr class="blue mb-5">

        <!-- Grid row -->
        <div class="row mb-3">

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg"
                             class="img-fluid" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Category & Title-->

                        <h5 class="card-title mb-1">
                            <strong>
                                <a href="" class="dark-grey-text">Sony D74v</a>
                            </strong>
                        </h5>
                        <span class="badge badge-info mb-2">new</span>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                        </ul>

                        <!--Card footer-->
                        <div class="card-footer pb-0">
                            <div class="row mb-0">
                    <span class="float-left">
                      <strong>1439$</strong>
                    </span>
                                <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                            </div>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg"
                             class="img-fluid" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Category & Title-->

                        <h5 class="card-title mb-1">
                            <strong>
                                <a href="" class="dark-grey-text">Samsung V54</a>
                            </strong>
                        </h5>
                        <span class="badge badge-info mb-2">new</span>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                        </ul>

                        <!--Card footer-->
                        <div class="card-footer pb-0">
                            <div class="row mb-0">
                    <span class="float-left">
                      <strong>1439$</strong>
                    </span>
                                <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                            </div>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">
                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg"
                             class="img-fluid" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Category & Title-->

                        <h5 class="card-title mb-1">
                            <strong>
                                <a href="" class="dark-grey-text">Dell 786i</a>
                            </strong>
                        </h5>
                        <span class="badge badge-info mb-2">new</span>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star grey-text"></i>
                            </li>
                        </ul>

                        <!--Card footer-->
                        <div class="card-footer pb-0">
                            <div class="row mb-0">
                    <span class="float-left">
                      <strong>1439$</strong>
                    </span>
                                <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                            </div>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg"
                             class="img-fluid" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Category & Title-->

                        <h5 class="card-title mb-1">
                            <strong>
                                <a href="" class="dark-grey-text">Canon 675-D</a>
                            </strong>
                        </h5>
                        <span class="badge badge-info mb-2">new</span>
                        <span class="badge badge-success mb-2 ml-2">SALE</span>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                        </ul>

                        <!--Card footer-->
                        <div class="card-footer pb-0">
                            <div class="row mb-0">
                                <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                      <span class="red-text">
                        <strong>$1199</strong>
                      </span>
                                    <span class="grey-text">
                        <small>
                          <s>$1520</s>
                        </small>
                      </span>
                                </h5>

                                <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                            </div>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->


        <!--Grid row-->
        <div class="row flex-center mb-5">

            <p>
                <a class="btn btn-primary btn-rounded mb-5 waves-effect waves-light" data-toggle="collapse"
                   href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">More products</a>
            </p>
            <div class="collapse" id="collapseExample1">

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg"
                                     class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Asus GR-597</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating text-left">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                        <span class="float-left">
                          <strong>1439$</strong>
                        </span>
                                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title=""
                             data-original-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg"
                                     class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Asus CT-567</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating text-left">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                        <span class="float-left">
                          <strong>1439$</strong>
                        </span>
                                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title=""
                             data-original-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                     class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">iPad PRO</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-success mb-2 ml-2">SALE</span>
                                <!-- Rating -->
                                <ul class="rating text-left">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star grey-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                          <span class="red-text">
                            <strong>$699</strong>
                          </span>
                                            <span class="grey-text">
                            <small>
                              <s>$920</s>
                            </small>
                          </span>
                                        </h5>

                                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title=""
                             data-original-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg"
                                     class="img-fluid" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">Dell V-964i</a>
                                    </strong>
                                </h5>
                                <span class="badge badge-danger mb-2">bestseller</span>
                                <!-- Rating -->
                                <ul class="rating text-left">
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star blue-text"></i>
                                    </li>
                                </ul>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                        <span class="float-left">
                          <strong>1439$</strong>
                        </span>
                                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title=""
                             data-original-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                    </div>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>

        </div>
        <!--Grid row-->

    </section>
    <!-- Section products -->

@endsection
@section('footerScripts')
    @parent
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection