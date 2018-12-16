@extends('layouts.app')
@section('title', 'تماس با ما')
@section('Styles')
    @parent
@endsection
@section('content')
    <div class="mt-3" style="font-size: 12px">
        {{ Breadcrumbs::render('product', $product) }}
    </div>
    <section id="productDetails" class="pb-5">
        <!--News card-->
        <div class="card mt-3 hoverable">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="row mx-2">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">
                                    favorite_border
                                </i>
                            </div>
                            <div class="col-10">
                                <!--Carousel Wrapper-->
                                <div id="carousel-thumb"
                                     class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4"
                                     data-ride="carousel">

                                    <!--Slides-->
                                    <div class="carousel-inner text-center text-md-left" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                                 alt="First slide" class="img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                                 alt="Second slide" class="img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                                 alt="Third slide" class="img-fluid">
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Thumbnails-->
                                    <a class="carousel-control-prev" href="#carousel-thumb" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-thumb" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Thumbnails-->

                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                        </div>
                    </div>

                    <!--Grid row-->
                    <div class="row mb-4">

                        <div class="col-md-12">

                            <div id="mdb-lightbox-ui"><!-- Root element of PhotoSwipe. Must have class pswp. -->
                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" style="">

                                    <!-- Background of PhotoSwipe.
                                                 It's a separate element, as animating opacity is faster than rgba(). -->
                                    <div class="pswp__bg"></div>

                                    <!-- Slides wrapper with overflow:hidden. -->
                                    <div class="pswp__scroll-wrap">

                                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                        <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="pswp__item"
                                                 style="display: block; transform: translate3d(-1511px, 0px, 0px);">
                                                <div class="pswp__zoom-wrap"
                                                     style="transform: translate3d(300px, 44px, 0px) scale(1);"><img
                                                            class="pswp__img"
                                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                                            style="opacity: 1; width: 748px; height: 499px;"></div>
                                            </div>
                                            <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="pswp__zoom-wrap"
                                                     style="transform: translate3d(119.5px, 381.328px, 0px) scale(0.240556);">
                                                    <img class="pswp__img pswp__img--placeholder"
                                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                                         style="width: 748px; height: 499px; display: none;"><img
                                                            class="pswp__img"
                                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                                            style="display: block; width: 748px; height: 499px;"></div>
                                            </div>
                                            <div class="pswp__item"
                                                 style="display: block; transform: translate3d(1511px, 0px, 0px);">
                                                <div class="pswp__zoom-wrap"
                                                     style="transform: translate3d(300px, 44px, 0px) scale(1);"><img
                                                            class="pswp__img"
                                                            src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                                            style="opacity: 1; width: 748px; height: 499px;"></div>
                                            </div>
                                        </div>

                                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">

                                            <div class="pswp__top-bar">

                                                <!--  Controls are self-explanatory. Order can be changed. -->

                                                <div class="pswp__counter">1 / 3</div>

                                                <button class="pswp__button pswp__button--close"
                                                        title="Close (Esc)"></button>

                                                <!--<button class="pswp__button pswp__button--share" title="Share"></button>-->

                                                <button class="pswp__button pswp__button--fs"
                                                        title="Toggle fullscreen"></button>

                                                <button class="pswp__button pswp__button--zoom"
                                                        title="Zoom in/out"></button>

                                                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                        <div class="pswp__preloader__cut">
                                                            <div class="pswp__preloader__donut"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--
                                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                        <div class="pswp__share-tooltip"></div>
                                                    </div>
                                                       -->

                                            <button class="pswp__button pswp__button--arrow--left"
                                                    title="Previous (arrow left)">
                                            </button>

                                            <button class="pswp__button pswp__button--arrow--right"
                                                    title="Next (arrow right)">
                                            </button>

                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="mdb-lightbox no-margin" data-pswp-uid="1">

                                <!--Grid column-->
                                <figure class="col-md-4">
                                    <!--Large image-->
                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                       data-size="1600x1067">
                                        <!-- Thumbnail-->
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                             class="img-fluid">
                                    </a>
                                </figure>
                                <!--Grid column-->

                                <!--Grid column-->
                                <figure class="col-md-4">
                                    <!--Large image-->
                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                       data-size="1600x1067">
                                        <!-- Thumbnail-->
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                             class="img-fluid">
                                    </a>
                                </figure>
                                <!--Grid column-->

                                <!--Grid column-->
                                <figure class="col-md-4">
                                    <!--Large image-->
                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                       data-size="1600x1067">
                                        <!-- Thumbnail-->
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                             class="img-fluid">
                                    </a>
                                </figure>
                                <!--Grid column-->
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                </div>
                <div class="col-lg-8 text-right">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="text-right text-md-right product-name font-weight-bold text-muted mb-1 ml-xl-0 ml-4">
                                <strong>{{ $product->name }} </strong>
                            </h5>
                        </div>
                        <div class="col-4">
                            <p class="text-right text-md-right product-name text-muted mb-1 ml-xl-0 ml-4 pl-3"
                               style="font-size: 12px">
                                بیش از 120 نفر از خریداران این محصول را پیشنهاد داده اند.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="ml-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted" style="display: inline-block">برند: </p>
                                    <a class="waves-effect waves-light text-muted"
                                       style="font-size: 10px; display: unset; color: #008ec9 !important; border-bottom: 1px dashed #008ec9;"
                                       href="http://localhost:8000/register"><p
                                                style="display: inline-block">{{$product->brand->name}}</p>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted " style="display: inline-block">دسته بندی: </p>
                                    <a class="waves-effect waves-light text-muted"
                                       style="font-size: 10px; display: unset; color: #008ec9 !important; border-bottom: 1px dashed #008ec9;"
                                       href="http://localhost:8000/register"><p
                                                style="display: inline-block"> {{$product->category_id}} </p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <section class="color mt-2">
                                        <p class="grey-text text-right">انتخاب رنگ :</p>
                                        <div class="row text-right text-md-right mr-3">
                                            @foreach($product->colors as $color)
                                                <div class="col-md-4">
                                                    <!--Radio group-->
                                                    <div class="form-group">
                                                        <input class="form-check-input" name="group100" type="radio"
                                                               id="radio100"
                                                               checked="checked">
                                                        <label for="radio100"
                                                               class="form-check-label text-muted">{{$color->name}}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted mt-3 mb-1">گارانتی 36 ماهه داده پرداز رایانه متین </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="ml-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted mt-3 mb-1" style="display: inline-block">فروشنده: </p>
                                    <a class="waves-effect waves-light text-muted"
                                       style="font-size: 10px; display: unset; color: #008ec9 !important; border-bottom: 1px dashed #008ec9;"
                                       href="http://localhost:8000/register"><p
                                                style="display: inline-block">
                                            @foreach($product->sellers as $seller)
                                                {{$seller->name}}
                                            @endforeach
                                        </p>
                                    </a>
                                    <p class="text-muted mb-1 mr-5">رضایت خرید: 99% </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="waves-effect waves-light text-muted"
                                       style="font-size: 10px;color: #008ec9 !important;"
                                       href="http://localhost:8000/register"><p class="mt-3"
                                                                                style="display: inline-block">حافظه
                                            طلائی تهران</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="ml-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="text-right text-md-right mb-4 ml-xl-0 ml-4">
                                         <span class="red-text font-weight-bold">
                                <strong>قیمت محصول : {{ $product->price }} تومان </strong>
                            </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center text-md-left text-md-right">
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                       onclick='addToCart({{$product->id}})'
                                       style="font-family: IRANSansWeb">
                                        <i class="fa fa-cart-plus mr-2" aria-hidden="true"></i> افزودن به سبد
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <h6 class="text-right text-md-right ml-xl-0 ml-4">
                                        <p class="text-muted ml-3" style="display: inline-block">آیا از قیمت راضی
                                            هستید؟ </p>
                                        <a class="waves-effect waves-light text-muted"
                                           style="font-size: 10px; display: unset; color: #008ec9 !important;"
                                           href="http://localhost:8000/register"><p style="display: inline-block">بله
                                                |</p>
                                        </a>
                                        <a class="waves-effect waves-light text-muted"
                                           style="font-size: 10px; display: unset; color: #008ec9 !important;"
                                           href="http://localhost:8000/register"><p style="display: inline-block">
                                                خیر</p>
                                        </a>
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <a class="waves-effect waves-light text-muted"
                                       style="font-size: 10px; color: #008ec9 !important;"
                                       href="http://localhost:8000/register">
                                        <p class="text-right text-md-right ml-xl-0">
                                            کالای خود را در همه چی کالا بفروشید
                                        </p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card ml-3 pr-2 pl-2 hoverable">
                                <a class="waves-effect waves-light text-muted"
                                   style="font-size: 10px;color: #008ec9 !important;"
                                   href="http://localhost:8000/register"><p class="mt-3" style="display: inline-block">
                                        {{$product->sellers->count()}} فروشنده / گارانتی این کالا </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--News card-->
        <h6 class="text-muted mt-3 text-right mr-3">لیست فروشنده / گارانتی های این محصول</h6>
        <div class="card mt-3 hoverable pr-3 pl-3">
            <table class="table table-hover mt-3">
                <thead class="text-muted" style="background-color: #5cb2c9;">
                <th style="border-top-right-radius: 5px">نام فروشنده</th>
                <th>زمان ارسال</th>
                <th>گارانتی</th>
                <th>قیمت</th>
                <th style="border-top-left-radius: 5px"></th>
                </thead>
                <tbody>
                <tr>
                    <td>ldfgf</td>
                    <td>ldfgf</td>
                    <td>ldfgf</td>
                    <td>ldfgf</td>
                    <td>dfsf</td>
                </tr>
                <tr>
                    <td>ldfgf</td>
                    <td>ldfgf</td>
                    <td>ldfgf</td>
                    <td>ldfgf</td>
                    <td>dfsf</td>
                </tr>
                </tbody>
            </table>
        </div>

        <h6 class="text-muted mt-4 text-right mr-4">محصولات مرتبط</h6>
        <hr width="120" class="red lighten-2 float-right mr-3 mt-0">
        <div class="row mb-3 mt-4" style="display: initial;">
        @foreach($interested->chunk(3) as $chunk)
            <!--Grid column-->
                @foreach ($chunk as $product)
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
                            <div class="card-body text-right">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1">
                                    <strong>
                                        <a href="" class="dark-grey-text">{{ $product->slug }}</a>
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
                @endforeach

            <!--Grid column-->
            @endforeach
        </div>

        <div class="row mb-3 mt-4">
            <!-- Classic tabs -->
            <div class="classic-tabs mx-2">

                <ul class="nav tabs-light" id="myClassicTabShadow" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link waves-light text-muted" id="awesome-tab-classic-shadow" data-toggle="tab"
                           href="#awesome-classic-shadow" role="tab" aria-controls="awesome-classic-shadow"
                           aria-selected="true">نقد و بررسی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light text-muted" id="awesome-tab-classic-shadow" data-toggle="tab"
                           href="#awesome-classic-shadow" role="tab" aria-controls="awesome-classic-shadow"
                           aria-selected="false">مشخصات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light text-muted" id="awesome-tab-classic-shadow" data-toggle="tab"
                           href="#awesome-classic-shadow" role="tab" aria-controls="awesome-classic-shadow"
                           aria-selected="false">نظرات کاربران</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light text-muted" id="awesome-tab-classic-shadow" data-toggle="tab"
                           href="#awesome-classic-shadow" role="tab" aria-controls="awesome-classic-shadow"
                           aria-selected="false">پرسش و پاسخ</a>
                    </li>
                </ul>

                <div class="tab-content card" id="myClassicTabContentShadow">
                    <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel"
                         aria-labelledby="profile-tab-classic-shadow">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                            vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                            quia
                            non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                    </div>
                    <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel"
                         aria-labelledby="follow-tab-classic-shadow">
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                            nisi ut
                            aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
                            velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas
                            nulla
                            pariatur?</p>
                    </div>
                    <div class="tab-pane fade" id="contact-classic-shadow" role="tabpanel"
                         aria-labelledby="contact-tab-classic-shadow">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                            non
                            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                            dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                            cum
                            soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                            possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                    </div>
                    <div class="tab-pane fade" id="awesome-classic-shadow" role="tabpanel"
                         aria-labelledby="awesome-tab-classic-shadow">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

            </div>
            <!-- Classic tabs -->
        </div>
        <h6 class="text-muted mt-3 text-right mr-3">خریداران این محصول, محصولات زیر را نیز خریداری نموده اند</h6>
        <hr width="400" class="red lighten-2 float-right mr-3 mt-0">

        <!-- Grid row -->
        <div class="row mb-3" style="display: initial;">
        @foreach($interested->chunk(3) as $chunk)
            <!--Grid column-->
                @foreach ($chunk as $product)
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
                                        <a href="" class="dark-grey-text">{{ $product->slug }}</a>
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
                @endforeach

            <!--Grid column-->
            @endforeach

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row flex-center mb-5">

            <p>
                <a class="btn btn-primary btn-rounded mb-5 waves-effect waves-light" data-toggle="collapse"
                   href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"
                   style="font-family: IRANSansWeb">محصولات بیشتر</a>
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
    <section>


    </section>

@endsection
@section('footerScripts')
    @parent
    <script>
        function addCart(productId) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                /* the route pointing to the post function */
                url: '/cart/add',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: CSRF_TOKEN, id: productId},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
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
                    toastr.success(data.message)
                    console.log(data.cart);
                }
            });
        }
    </script>
@endsection