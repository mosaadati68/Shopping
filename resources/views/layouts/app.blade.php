<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'صفحه اصلی') | فروشگاه اینترینتی شیک پوشان </title>

@section('Styles')
    <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-notifications.min.css') }}">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/fontiran.css') }}" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="{{ asset('/css/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @show
</head>

<body class="homepage-v1 hidden-sn white-skin animated">
@routes
<!--Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light text-muted font-weight-bold" style="font-size: 12px"
                           href="{{route('contact')}}">
                            <i class="fa fa-envelope blue-text"></i> تماس با ما
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link waves-effect waves-light text-muted font-weight-bold " href="#"
                           style="font-size: 12px">
                            <i class="fa fa-gear blue-text"></i> تنظیمات</a>
                    </li>
                    <li class="nav-item dropdown ml-3" style="font-size: 12px">
                        <a class="nav-link dropdown-toggle waves-effect waves-light text-muted font-weight-bold"
                           id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user blue-text"></i> ورود / عضویت </a>
                        <div class="dropdown-menu dropdown-menu-right" style="width: 250px"
                             aria-labelledby="navbarDropdownMenuLink-4">
                            <div class="text-center mb-4 mt-4">
                                <a style="font-family: IRANSansWeb; font-size: 15px; border-radius: 5px"
                                   href="{{route('login')}}"
                                   class="btn btn-info btn-sm waves-effect waves-light text-center font-weight-bold"
                                   type="submit">
                                    ورود به همه
                                    چی کالا
                                </a>
                            </div>
                            <div class="text-center">
                                <p class="text-right text-muted mr-2 d-inline-block ml-2" style="font-size: 15px">کاربر
                                    جدید هستید؟ </p>
                                <a class="waves-effect waves-light text-muted"
                                   style="font-size: 15px; display:unset;color: #157ca1 !important; border-bottom: 1px dashed #008ec9;"
                                   href="{{route('register')}}">ثبت‌نام</a>
                            </div>
                            <hr class="text-muted" style="height: 2px;">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <a class="waves-effect waves-light text-muted text-right" style="font-size: 15px"
                                       href="{{route('profile')}}">پروفایل</a>
                                </div>
                                <div class="col-6 text-center">
                                    <a class="waves-effect waves-light text-muted text-right" style="font-size: 15px"
                                       href="{{route('logout')}}">خروج</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.Navbar -->
</header>
<div style="margin-top: 100px" class="container-fluid">
    <div class="row">
        <div class="col-2"><img class="mr-5" src="{{asset('/img/logo.png')}}" width="200" height="45"></div>
        <div class="col-7">
            <div class="c-header__search mr-5">
                <div class="c-search js-search is-active" data-event="using_search_box"
                     data-event-category="header_section">
                    <input type="text" name="q" height="15" style="font-family: IRANSansWeb"
                           placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…"
                           class="js-search-input" autocomplete="off">
                    <button class="c-search__button js-header-search-button"></button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="nav-item dropdown float-left ml-5" style="font-family: IRANSansWeb" id="cartMenu">
                <button class="btn btn-cyan dropdown-toggle dropdown-toggle-cart"
                        style="border-radius: 5px; font-family: IRANSansWeb;padding: 5px;margin-top: 0px;"
                        type="button" id="dropdownMenu3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-cart" style="font-size: 15px; margin-left: 10px"
                       aria-hidden="true"></i>
                    سبد خرید
                    <span id="cartCount" class="badge badge-pill mr-3 mt-2"
                          style="font-family: IRANSans_Num">{{Cart::content()->count()}}</span>
                </button>
                <div class="dropdown-menu text-right" aria-labelledby="dropdownMenu3"
                     style="width: 400px; font-family: IRANSansWeb">
                    <h5 class="text-muted mt-2 mr-2 font-weight-bold d-inline-block" style="font-size: 15px">مبلغ کل
                        خرید :
                        <span class="font-weight-bold" style="font-family: IRANSans_Num; color:#fb3449"> {{Cart::total()}}
                            تومان </span>
                    </h5>
                    <a href="{{route('cart')}}"><h5 class="font-weight-bold d-inline-block mt-2 ml-2 float-left"
                                                    style="font-family: IRANSans_Num;font-size: 15px"> مشاهده سبد
                            خرید</h5></a>
                    @php
                        $carts = Cart::content()
                    @endphp
                    @foreach($carts as $item)
                        <div class="row mb-2 mt-3 mr-3">
                            <div class="col-2">
                                <img width="70" height="70" src="{{$item->options['image']}}"
                                     style="border-radius: 5px;display: inline-block">
                            </div>
                            <div class="col-10">
                                <div class="col">
                                    <div class="row-6 mb-2 text-muted">
                                        <h6 class="font-weight-bold"
                                            style="display: inline-block; font-size: 15px">{{$item->name}}</h6>
                                    </div>
                                    <div class="row-6">
                                        <div class="col-12 font-weight-bold text-muted"
                                             style="font-family: IRANSans_Num">
                                            <h6 style="display: inline-block">{{$item->qty}} عدد</h6>
                                            <h6 style="display: inline-block"> | {{$item->options['color']}}
                                                رنگ </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{route('login')}}"
                       style="font-family: IRANSansWeb; font-size: 15px; border-radius: 5px; width: 380px;margin: 0px;"
                       class="btn btn-info btn-sm waves-effect waves-light text-center" type="submit">
                        ورود و ثبت سفارش
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.Navigation -->
</div>
@yield('intro')
<div class="container-fluid">
    @yield('content')
</div>
<!--Footer-->
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0 mt-3">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-right">
        <div class="row">
            <div class="col-md-4 col-lg-5 col-xl-4 mb-4 mt-4">
                <div class="visible-print text-right mr-4">
                    {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(100)->color(0,0,0)->backgroundColor(61,68,81)->generate(Request::url());  !!}
                </div>
                <p style="margin-top: 20px">برای بازگشت به صفحه اصلی بارکد زیر را اسکن نمایید.</p>
            </div>
            <div class="col-md-4 col-lg-5 col-xl-4 mb-4">
                <div class="mt-4">
                    <a href="https://cafebazaar.ir/app/com.digikala/?l=fa" rel="nofollow" target="_blank"
                       data-event="footer_links" data-snt-event="dkFooterClick"
                       data-snt-params="{&quot;item&quot;:&quot;download-app&quot;,&quot;item_option&quot;:&quot;android&quot;}"
                       data-event-category="footer_section"
                       data-event-label="link: https://cafebazaar.ir/app/com.digikala/?l=fa - current_page: /">
                        <img alt=""
                             width="159"
                             src="https://www.digikala.com/static/files/b72a0683.png">
                    </a>
                    <a href="https://new.sibapp.com/applications/digikala" rel="nofollow" target="_blank"
                       class="c-footer__address-appstore" data-snt-event="dkFooterClick"
                       data-snt-params="{&quot;item&quot;:&quot;download-app&quot;,&quot;item_option&quot;:&quot;ios&quot;}"
                       data-event-category="footer_section"
                       data-event-label="link: https://new.sibapp.com/applications/digikala - current_page: /">
                        <img alt=""
                             width="159"
                             src="https://www.digikala.com/static/files/c4abfc14.png">
                    </a>
                    <div class="mt-2">
                        <img class="ml-3" src="/img/namad_kabokar.png" width="150" height="150"
                             style="cursor:pointer"></li>
                        <img src="/img/namad.png" width="150" height="150"
                             style="cursor:pointer; border-radius: 5px"></li>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-5 col-xl-4 mb-4">
                <div class="col mr-5">
                    <div class="col-12">
                        <p class="text-right mt-4">از تخفیف‌ها و جدیدترین‌های شیک پوشان باخبر شوید:</p>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="email" style="border-radius: 0px 3px 3px 0px;font-family: IRANSansWeb"
                                   id="SubscriptionFormEmail" class="form-control mb-4"
                                   placeholder="آدرس ایمیل خود را وارد نمایید...">
                            <button onclick="SubscriptionFormEmail()"
                                    style="height: calc(2.25rem + 2px);
                                    font-family: IRANSansWeb;
                                    width: 100px;font-size: 15px"
                                    class="btn btn-info btn-sm" type="submit">ارسال
                            </button>
                        </div>
                        <div class="col-12 text-right">
                            <p class="text-right">شیک پوشان را در شبکه‌های اجتماعی دنبال کنید:</p>
                            <a class="btn_instagram text-center" href="https://www.instagram.com/digikalacom/">
                                <img width="25"
                                     src="https://www.digikala.com/static/files/0ae6d682.svg">
                                اینستاگرام شیک پوشان
                            </a>
                            <a class="text-right" href="https://www.instagram.com/digikalacom/">
                                <button class="btn blue-gradient font-weight-bold"
                                        style="border-radius: 10px;font-family: IRANSansWeb;font-size: 15px"><i
                                            class="fa fa-facebook ml-1"></i> فیس بوک
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mr-1 ml-1" style="height: 1px;background-color: #505b6e">
        <div class="row mt-3 text-right mr-4">
            <!--First column-->
            <div class="col-md-4 col-lg-5 col-xl-4 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>درباره شرکت</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="justify-content-start">{{ str_limit('دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل کلیدی، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به دیجی‌کالا با یک سایت پر از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد. مشاهده بیشتر' , 300 , '...')}}
                    <a style="color: #0d5bdd" href="{{route('contact')}}">جزئیات بیشتر</a></p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mr-5 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>محصولات</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">پاسخ به پرسش‌های متداول</a>
                </p>
                <p>
                    <a href="#!">رویه‌های بازگرداندن کالا</a>
                </p>
                <p>
                    <a href="#!">شرایط استفاده</a>
                </p>
                <p>
                    <a href="#!">حریم خصوصی</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>راهنمای خرید از دیجی‌کالا</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">نحوه ثبت سفارش</a>
                </p>
                <p>
                    <a href="#!">رویه ارسال سفارش</a>
                </p>
                <p>
                    <a href="#!">شیوه‌های پرداخت</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>تماس با ما</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> مشهد - بلوار فردوسی - خیابان فرامرز عباسی - پلاک 188</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            استفاده از مطالب فروشگاه اینترنتی شیک پوشان فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این
            سایت متعلق به شرکت سبز رایانه (فروشگاه آنلاین شیک پوشان) می‌باشد.
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->
<!-- SCRIPTS -->
@section('footerScripts')

    <!-- JQuery -->
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap3-typeahead.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>--}}

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/toastr.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>

    <script type="text/javascript" src="/js/wow.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/js/app.js"></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
            source: function (query, process) {
                return $.get(path, {query: query}, function (data) {
                    return process(data);
                });
            }
        });

        function SubscriptionFormEmail() {
            var SubscriptionFormEmail = $('#SubscriptionFormEmail').val();
            axios.post('/newsletter', {email: SubscriptionFormEmail})
                .then(function (response) {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "rtl": true,
                        "newestOnTop": false,
                        "progressBar": true,
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
                    toastr.success(response.data)
                });
        }
    </script>
    <script>
        $(function () {
            $(".title").typed({
                strings: ["شما می توانید با خرید از سایت ما "],
                // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
                stringsElement: null,
                // typing speed
                typeSpeed: 30,
                // time before typing starts
                startDelay: 1200,
                // backspacing speed
                backSpeed: 20,
                // time before backspacing
                backDelay: 500,
                // loop
                loop: true,
                // false = infinite
                loopCount: 5,
                // show cursor
                showCursor: false,
                // character for cursor
                cursorChar: "|",
                // attribute to type (null == text)
                attr: null,
                // either html or text
                contentType: 'html',
                // call when done callback function
                callback: function () {
                },
                // starting callback function before each string
                preStringTyped: function () {
                },
                //callback for every typed string
                onStringTyped: function () {
                },
                // callback for reset
                resetCallback: function () {
                }
            });
        });

    </script>
@show
</body>
</html>
