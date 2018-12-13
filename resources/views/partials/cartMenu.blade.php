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
    <h5 class="text-muted mt-2 mr-2 font-weight-bold d-inline-block" style="font-size: 15px">مبلغ کل خرید :
        <span class="font-weight-bold" style="font-family: IRANSans_Num; color:#fb3449"> {{Cart::total()}}
            تومان </span>
    </h5>
    <a href="{{route('cart')}}"><h5 class="font-weight-bold d-inline-block mt-2 ml-2 float-left"
                                    style="font-family: IRANSans_Num;font-size: 15px"> مشاهده سبد خرید</h5></a>
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