@extends('layouts.app')
@section('title', 'تماس با ما')
@section('Styles')
    @parent
@endsection
@section('content')
    {{ Breadcrumbs::render('contact') }}
    <section class="my-5 p-1">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5"> تماس با همه چی کالا
        </h2>
        <!-- Section description -->
        <p class="text-right w-responsive mx-auto pb-2">
            کاربر گرامی، لطفاً در صورت وجود هرگونه سوال یا ابهامی، پیش از ارسال ایمیل یا تماس تلفنی با همه چی کالا، بخش
            پرسش‏های متداول را ملاحظه فرمایید و در صورتی که پاسخ خود را نیافتید، با ما تماس بگیرید.</p>

        <p class="text-right w-responsive mx-auto pb-5">
            مشتری گرامی، اگر انتقاد یا شکایتی از همه چی کالا دارید برای دریافت پاسخ سریع‌تر، لطفا به آدرس
            support@hamehchikala.com ایمیل ارسال کنید.</p>

        <!-- Grid row -->
        <div class="row mr-5">
            <!-- Grid column -->
            <div class="col-lg-6 mb-lg-0 mb-6 mr-1">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="form-header blue accent-1" style="border-radius: 5px">
                            <h3 class="mt-2"><i class="fa fa-envelope"></i> فرم تماس با ما</h3>
                        </div>
                        <!-- Body -->
                        <div class="md-form">
                            <i class="fa fa-user prefix ml-5 grey-text contact-icon"></i>
                            <input type="text" style="font-family: IRANSansWeb" id="form-name"
                                   value="<?php if (Auth::check()) {
                                       echo Auth::user()->name ? Auth::user()->name : '';
                                   }?>" class="form-control">
                            <label for="form-name">نام کاربری</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix ml-5 grey-text contact-icon"></i>
                            <input type="text" style="font-family: IRANSansWeb" id="form-email"
                                   value="<?php if (Auth::check()) {
                                       echo Auth::user()->email ? Auth::user()->email : '';
                                   }?>"
                                   class="form-control">
                            <label for="form-email">ایمیل</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-tag prefix grey-text contact-icon"></i>
                            <input type="text" style="font-family: IRANSans" id="form-Subject" class="form-control">
                            <label for="form-Subject">موضوع</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text contact-icon"></i>
                            <textarea type="text" style="font-family: IRANSans" id="form-text"
                                      class="form-control md-textarea" rows="3"></textarea>
                            <label for="form-text" class="">متن پیام</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light-blue waves-effect waves-light"
                                    style="font-family: IRANSansWeb">
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoliAneRffQDyA7Ul9cDk3tLe7vaU4yP8&callback=myMap"></script>
@endsection