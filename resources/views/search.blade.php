@extends('layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
@endsection
{{--@section('header')--}}
{{--@endsection--}}
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
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg"
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
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">Tempora incidunt ut
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
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg"
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
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">Tempora incidunt ut
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
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg"
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
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">محصولات</a>
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
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
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
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Accesories</h6>
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
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
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
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Bestseller</h6>
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
                        <form style="width: 800px;margin-right:20px;"
                              class="form-inline md-form active-cyan active-cyan-2 mt-2" role="search"
                              action="{{route('searchProduct')}}" method="post">
                            @csrf
                            <input class="white-text typeahead form-control form-control-sm ml-3 w-75"
                                   style="font-family: IRANSans" name="search" type="text" placeholder="جستجو..."
                                   aria-label="Search" autocomplete="off">
                            <button class="btn btn-primary"  style="font-family: IRANSans"><i class="fa fa-search ml-2" aria-hidden="true"></i> جستجو </button>

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
    <!-- Main Container -->
    <div class="container-fluid">
        <div class="mt-0"> {{ Breadcrumbs::render('home') }} </div>
        <!-- Grid row -->
        <div class="row pt-4">
            <!-- Content -->
            <div class="col-lg-12">
                <!--Section: product list-->
                <section class="mb-5">

                    <section class="text-center p-1 productlist">

                        <!-- Grid row -->
                        <div class="row">
                        @foreach ($products->chunk(4) as $chunk)
                            @foreach ($chunk as $product)
                                <!-- Grid column -->
                                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5 mt-5">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce">
                                            <!-- Card image -->
                                            <div class="view view-cascade overlay">
                                                <img src="{{ $product->image }}"
                                                     class="card-img-top" alt="sample photo">
                                                <a>
                                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                </a>
                                            </div>
                                            <!-- Card image -->
                                            <!-- Card content -->
                                            <div class="card-body card-body-cascade text-center">
                                                <!-- Category & Title -->
                                                <a href="" class="grey-text">
                                                    <h5>Denim</h5>
                                                </a>
                                                <h4 class="card-title">
                                                    <strong>
                                                        <a href="{{ route('product.show',['slug'=>$product->slug]) }}">{{ $product->name }}</a>
                                                    </strong>
                                                </h4>
                                                <!--Rating-->
                                                <ul class="rating">
                                                    @for ($i = 0; $i < $product->rate ; $i++)
                                                        <li>
                                                            <a onclick='ratingPost( {{ $i }},{{ $product->id }} )'><i
                                                                        class="fa fa-star"></i></a>
                                                        </li>
                                                    @endfor
                                                    @for ($i = 0; $i < 5 - $product->rate ; $i++)
                                                        <li>
                                                            <a onclick='ratingPost( {{ $i + $product->rate }},{{ $product->id }} )'><i
                                                                        class="fa fa-star-o"></i></a>
                                                        </li>
                                                    @endfor
                                                </ul>
                                                <!-- Description -->
                                                <p class="card-text text-right">
                                                    {{ str_limit($product->description , 100 , '...')}}
                                                </p>
                                                <!-- Card footer -->
                                                <div class="card-footer px-1">
                  <span class="float-left font-weight-bold">
                    <strong>{{ $product->price }} تومان </strong>
                  </span>
                                                    <span class="float-right">
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="افزودن به سبد خرید" onclick="addCart({{ $product->id }})">
                      <i class="fa fa-shopping-cart grey-text ml-3"></i>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Share">
                      <i class="fa fa-share-alt grey-text ml-3"></i>
                    </a>
                                                        @if(!$wishlist->search($product->id))
                                                            <a onclick="addWishlist({{ $product->id }})" class="active"
                                                               data-toggle="tooltip"
                                                               data-placement="top" title=""
                                                               data-original-title="افزودن به علاقه مندی ها">
                          <i class="fa fa-heart-o ml-3"></i>
                        </a>
                                                        @else
                                                            <a onclick="addWishlist({{ $product->id }})" class="active"
                                                               data-toggle="tooltip"
                                                               data-placement="top" title=""
                                                               data-original-title="افزودن به علاقه مندی ها">
                          <i class="fa fa-heart ml-3"></i>
                        </a>
                                                        @endif
                  </span>
                                                </div>
                                            </div>
                                            <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- Grid column -->
                                @endforeach
                            @endforeach
                        </div>
                        <!-- Grid row -->
                        <div class="d-flex justify-content-center mt-4">{{ $products->links() }}</div>
                    </section>


                </section>
                <!--/Section: product list-->

                <section class="mb-1 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="card-body">

                        <p class="mb-4 lead font-weight-bold">Trusted by 500 000 + developers &amp; designers</p>

                        <!-- Logo carousel -->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                             data-interval="3000">
                            <div class="carousel-inner">
                                <!-- First slide -->
                                <div class="carousel-item active carousel-item-left">
                                    <!--Grid row-->
                                    <div class="row">

                                        <!--First column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/nike.png"
                                                 class="img-fluid px-4" alt="Nike - logo" style="max-height: 70px">
                                        </div>
                                        <!--/First column-->

                                        <!--Second column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/amazon.png"
                                                 class="img-fluid px-4" alt="Amazon - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Second column-->

                                        <!--Third column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/sony.png"
                                                 class="img-fluid px-4" alt="Sony - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Third column-->

                                        <!--Fourth column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/samsung.png"
                                                 class="img-fluid px-4" alt="Samsung - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Fourth column-->

                                    </div>
                                    <!--/Grid row-->
                                </div>
                                <!-- First slide -->

                                <!-- Second slide -->
                                <div class="carousel-item carousel-item-next carousel-item-left">
                                    <!--Grid row-->
                                    <div class="row">

                                        <!--First column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/airbus.png"
                                                 class="img-fluid px-4" alt="Airbus - logo" style="max-height: 70px">
                                        </div>
                                        <!--/First column-->

                                        <!--Second column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/yahoo.png"
                                                 class="img-fluid px-4" alt="Yahoo - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Second column-->

                                        <!--Third column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/deloitte.png"
                                                 class="img-fluid px-4" alt="Deloitte - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Third column-->

                                        <!--Fourth column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/ge.png" class="img-fluid px-4"
                                                 alt="GE - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Fourth column-->

                                    </div>
                                    <!--/Grid row-->
                                </div>
                                <!-- Second slide -->

                                <!-- Third slide -->
                                <div class="carousel-item">
                                    <!--Grid row-->
                                    <div class="row">

                                        <!--First column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/kpmg.png"
                                                 class="img-fluid px-4" alt="KPMG - logo" style="max-height: 70px">
                                        </div>
                                        <!--/First column-->

                                        <!--Second column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/unity.png"
                                                 class="img-fluid px-4" alt="Unity - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Second column-->

                                        <!--Third column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/ikea.png"
                                                 class="img-fluid px-4" alt="Ikea - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Third column-->

                                        <!--Fourth column-->
                                        <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/aegon.png"
                                                 class="img-fluid px-4" alt="Aegon - logo" style="max-height: 70px">
                                        </div>
                                        <!--/Fourth column-->

                                    </div>
                                    <!--/Grid row-->
                                </div>
                                <!-- Third slide -->
                            </div>
                        </div>
                        <!-- Logo carousel -->

                    </div>
                </section>

            </div>
            <!-- /.Content -->

        </div>
        <!-- /Grid row -->
    </div>
    <!-- /.Main Container -->
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
                    document.getElementById("cartCount").innerHTML = data.cart.count;

                }
            });
        }
    </script>
@endsection

