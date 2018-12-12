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
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="افزودن به سبد خرید"
                       onclick="addCart({{ $product->id }})">
                      <i class="fa fa-shopping-cart grey-text ml-3"></i>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Share">
                      <i class="fa fa-share-alt grey-text ml-3"></i>
                    </a>
                                @if($wishlist ==null)
                                    <a onclick="addWishlist({{ $product->id }})" class="active"
                                       data-toggle="tooltip"
                                       data-placement="top" title=""
                                       data-original-title="افزودن به علاقه مندی ها">
                          <i class="fa fa-heart-o ml-3"></i>
                                        @else
                                            @if(!in_array($product->id,$wishlist))
                                                <a onclick="addWishlist({{ $product->id }})"
                                                   class="active"
                                                   data-toggle="tooltip"
                                                   data-placement="top" title=""
                                                   data-original-title="افزودن به علاقه مندی ها">
                          <i class="fa fa-heart-o ml-3"></i>
                        </a>
                                            @else
                                                <a onclick="addWishlist({{ $product->id }})"
                                                   class="active"
                                                   data-toggle="tooltip"
                                                   data-placement="top" title=""
                                                   data-original-title="افزودن به علاقه مندی ها">
                          <i class="fa fa-heart ml-3"></i>
                        </a>
                                @endif
                  </span>
                            @endif

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