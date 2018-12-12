@inject('Cart','Gloudemans\Shoppingcart\Facades\Cart')
<div class="col-8">
    <!-- Section cart -->
    <section class="section pb-5">

        <div class="card card-ecommerce">
            <div class="card-body">
                <!-- Shopping Cart table -->
                <div class="table-responsive">
                    @if( Cart::count() > 0)
                        <table class="table product-table">

                            <!-- Table head -->
                            <thead class="mdb-color lighten-5">
                            <tr>
                                <th></th>
                                <th class="font-weight-bold text-right">
                                    <strong>نام محصول</strong>
                                </th>

                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>قیمت</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>تعداد</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>مبلغ</strong>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <!-- /.Table head -->

                            <!-- Table body -->
                            <tbody>
                            @php
                                $items = Cart::content();
                            @endphp
                            @foreach($items as $item)

                                <tr>
                                    <th scope="row" class="justify-content-right">
                                        <img width="200" height="200" style="border-radius: 10px"
                                             src="{{$item->options->image}}"
                                             alt="" class="img-fluid z-depth-0">
                                    </th>
                                    <td>
                                        <h5 class="mt-3 text-right">
                                            <strong>{{ $item->name }}</strong>
                                        </h5>
                                    </td>
                                    <td></td>
                                    <td>{{ $item->price }} تومان</td>
                                    <td class="text-center">
                                        <select class="browser-default custom-select"
                                                style="width: 60px;margin:auto"
                                                id="Qty_{{$item->rowId}}"
                                                style="width: 60px"
                                                onchange="updateCart('{{$item->rowId}}')">
                                            @for($i = 1; $i < 15; $i++)
                                                @if( $item->qty == $i)
                                                    <option selected
                                                            value="{{$item->qty}}">{{$item->qty}}</option>
                                                @else
                                                    <option value={{$i}}>{{$i}}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </td>
                                    <td class="font-weight-bold">
                                        <strong id="cartPrice_{{$item->rowId}}">{{$item->total}}</strong>
                                    </td>
                                    <td>
                                        <button onclick="removeItem('{{$item->rowId}}')" type="button"
                                                class="btn btn-sm btn-primary waves-effect waves-light"
                                                data-toggle="tooltip">X
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!-- /.Table body -->
                        </table>
                    @else
                        <h4 class="mt-2 text-center">
                            <strong>سبد خرید شما خالی می باشد</strong>
                        </h4>
                    @endif
                </div>
                <!-- /.Shopping Cart table -->
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
                                <h6 class="text-muted text-center pr-1 mt-3"><a href="{{route('checkout')}}"
                                                                                type="button"
                                                                                class="btn btn-primary btn-rounded waves-effect waves-light font-weight-bold"
                                                                                style="font-family: IRANSansWeb">ادامه
                                        ثبت سفارش
                                        <i class="fa fa-angle-left left"></i>
                                    </a>
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
                                                                       src="/img/svg/a8d65c7a.svg">هفت روز ضمانت تعویض
                                </h5>
                            </div>
                            <div class="row-12">
                                <h5 class="text-muted text-right"><img width="25" height="25" class="ml-2"
                                                                       src="/img/svg/3e2ec4e5.svg">پرداخت در محل با کارت
                                    بانکی</h5>
                            </div>
                            <div class="row-6">
                                <h6 class="text-muted text-right pr-1 mt-3"><img width="25" height="25" class="ml-2"
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