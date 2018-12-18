@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
    <link href="css/panel/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">

    <style>
        td.details-control {
            background: url('/img/panel/datatable/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('/img/panel/datatable/details_close.png') no-repeat center center;
        }

        tr td {
            text-align: center;
        }

        .dropzone {
            background: white;
            border-radius: 5px;
            border: 2px dashed rgb(0, 135, 247);
            border-image: none;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

@endsection
@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <div class="mt-0"> {{ Breadcrumbs::render('orders') }} </div>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30">
                    <img width="150" height="150" id="user-avatar-profile"
                         src="{{isset($profile->avatar) ? $profile->avatar : "/img/img_avatar.png"}}"
                         alt="user" class="img-circle">
                    <h4 class="card-title m-t-10">{{isset($profile->first_name) ? $profile->first_name : "" }} {{isset($profile->last_name) ? $profile->last_name : ""}}</h4>
                    <h6 class="card-subtitle">{{isset($profile->description) ? $profile->description : "" }}</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="text-center mb-3 mt-5">
                            <i class="fa fa-edit ml-2"></i><a href="{{route('edit.profile')}}">ویرایش اطلاعات شخصی</a>
                        </div>
                    </div>
                </center>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body">
                <small class="text-muted">پست الکترونیک</small>
                <h6>{{isset($profile->email) ? $profile->email : ""}}</h6>
                <small class="text-muted p-t-30 db">موبایل</small>
                <h6>{{isset($profile->contact_no) ? $profile->contact_no : ""}}</h6>
                <small class="text-muted p-t-30 db">آدرس</small>
                <h6>{{isset($profile->address) ? $profile->address : ""}}</h6>
                <small class="text-muted p-t-30 db">کد ملی</small>
                <h6>{{isset($profile->national_code) ? $profile->national_code : ""}}</h6>
                <small class="text-muted p-t-30 db">دریافت خبرنامه</small>
                <h6>{{isset($profile->newsletters) ? $profile->newsletters ? "بله" : "خیر" : "خیر"}}</h6>
                <small class="text-muted p-t-30 db">شماره کارت</small>
                <h6 class="p-b-30">{{isset($profile->card_number) ? $profile->card_number : ""}}</h6>

                <div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                            width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <small class="text-muted p-t-30 db">لینک شبکه های اجتماعی</small>
                <br>
                <div class="text-center">
                    <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"><i
                                class="icon-social-facebook"></i></button>
                    <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"><i
                                class="icon-social-twitter"></i></button>
                    <button class="btn btn-youtube waves-effect btn-circle waves-light" type="button"><i
                                class="icon-social-gplus"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#home" role="tab"
                                        aria-selected="true">لیست آخرین علاقه‌مندی‌ها</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#last_order" role="tab"
                                        aria-selected="false">آخرین سفارش‌ها</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab"
                                        aria-selected="false">ویرایش اطلاعات شخصی</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active show" id="home" role="tabpanel">
                    <div class="card-body">
                        <div class="col-md-12">

                            <!--Panel content-->
                            <div class="card-body pr-5">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table color-table table-striped muted-table"
                                                   style="border-radius: 5px;">
                                                <thead class="m-b-10">
                                                <tr>
                                                    <th class="text-center">تصویر</th>
                                                    <th class="text-center">نام محصول</th>
                                                    <th class="text-center">قیمت</th>
                                                    <th class="text-center">عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($wishlists as $lastWishlist)
                                                    <tr>
                                                        <td><img src="{{$lastWishlist[0]->image}}" width="110"
                                                                 height="100"
                                                                 style="border-radius: 5px"></td>
                                                        <td>{{$lastWishlist[0]->name}}</td>
                                                        <td>{{$lastWishlist[0]->price}} تومان</td>
                                                        <td><a><i class="fas fa-trash-alt red"></i></a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="m-t-20 text-center">
                                                <i class="fa fa-edit m-l-5"></i><a href="{{route('edit.profile')}}">مشاهده
                                                    و ویرایش لیست
                                                    مورد علاقه</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                            </div>
                            <!--Panel content-->

                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="last_order" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                                <!--Panel content-->
                                <div class="card-body pr-5">

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <table class="table table-striped" cellspacing="0"
                                                   width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">شماره سفارش</th>
                                                    <th class="text-center">مهلت پرداخت</th>
                                                    <th class="text-center">مبلغ قابل پرداخت</th>
                                                    <th class="text-center">عملیات پرداخت</th>
                                                    <th class="text-center">جزئیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td class="text-center">{{$order->id}}</td>
                                                        <td class="text-center order_number">{{$order->order_number}}</td>
                                                        <td class="text-center">
                                                            <?php $dead_line = strtotime($order->dead_line);
                                                            $now = strtotime(now());
                                                            $Hours = floor((($dead_line - $now) / 60) / 60);
                                                            $Minutes = floor(fmod((($dead_line - $now) / 60), 60));
                                                            if ($Hours == 0 && $Minutes == 0) {
                                                                echo 'زمان پرداخت سفارش به پایان رسیده است.';
                                                            } else {
                                                                echo $Hours . ' ساعت ' . $Minutes . ' دقیقه ';
                                                            } ?>
                                                            <span id="dead_line" style="display: none">{{$Minutes}}</span>
                                                        </td>
                                                        <td class="text-center">{{$order->amount}}</td>
                                                        <td class="text-center">
                                                            <a href="{{route('payment.order',['order_id'=>$order->id])}}"
                                                                    type="button"
                                                                    class="btn waves-effect waves-light btn-success">پرداخت</a></td>
                                                        <td class="text-center"><a class="data_order"
                                                                                   data-toggle="modal"
                                                                                   data-target=".orderModel"
                                                                                   data-id={{$order->order_number}}><i
                                                                        class="fas fa-angle-left"></i></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal fade orderModel" tabindex="-1" role="dialog"
                                             aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                             style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="modal_title"></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table" id="order_table">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center">تصویر محصول</th>
                                                                    <th class="text-center">نام محصول</th>
                                                                    <th class="text-center">تعداد</th>
                                                                    <th class="text-center">قیمت</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="cart_Table">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="btn btn-danger waves-effect text-left"
                                                                data-dismiss="modal">بستن
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-body">
                        <div class="col-lg-12 col-md-6">

                            <div class="avatar mx-auto white text-center mb-5" style="width: 200px">
                                <img id="user-avatar" style="width: 150px;height: 150px"
                                     src="{{$profile ? $profile->avatar : ""}}"

                                     class="rounded-circle img-fluid">
                                <div data-toggle="tooltip" data-placement="bottom" title="ویرایش تصویر پروفایل">
                                    <button type="button" class="btn btn-success btn-circle"
                                            style="margin-top: -70px;margin-left: 120px" data-toggle="modal"
                                            data-target="#upload-avatar">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="modal fade" id="upload-avatar" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" id="upload-avatar" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <!--Panel content-->
                                            <div class="card-body pr-5">
                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-12">
                                                        <div class='dropzone' id='dropzoneFileUpload'>
                                                            <div class="progress m-t-30">
                                                                <div id="progress-bar-avatar"
                                                                     class="progress-bar bg-info wow animated progress-animated"
                                                                     style="width: 0%; height:8px;" role="progressbar">
                                                                    <span class="sr-only">10% Complete</span></div>
                                                            </div>
                                                        </div>
                                                        <button id="submit-files" type="submit"
                                                                class="btn waves-effect waves-light btn-block btn-info"
                                                                style="font-family: IRANSansWeb; width: 110px;margin-top: 10px">
                                                            بارگذاری تصویر
                                                        </button>
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

                            <h4 class="font-weight-bold text-center mb-5">{{$profile ? $profile->first_name . " " .$profile->last_name : auth()->user()->name}}</h4>
                            <form class="floating-labels" style="color: #757575; " method="POST"
                                  action="{{route('save.profile')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group m-b-40">
                                            <input type="text" id="first_name" name="first_name" class="form-control"
                                                   value="{{$profile ? $profile->first_name : ""}}">
                                            <span class="bar"></span>
                                            <label for="first_name">نام</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <div class="form-group m-b-40">
                                            <input type="text" id="last_name" name="last_name" class="form-control"
                                                   value="{{$profile ? $profile->last_name : ""}}">
                                            <span class="bar"></span>
                                            <label for="last_name">نام خانوادگی</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group m-b-40">
                                            <input type="text" id="contact_no" name="contact_no" class="form-control"
                                                   value="{{$profile ? $profile->contact_no : ""}}">
                                            <span class="bar"></span>
                                            <label for="" class="contact_no">شماره موبایل</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <div class="form-group m-b-40">
                                            <input type="text" id="national_code" name="national_code"
                                                   class="form-control"
                                                   value="{{$profile ? $profile->national_code : ""}}">
                                            <span class="bar"></span>
                                            <label for="national_code">کد ملی</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- E-mail -->
                                <div class="form-group m-b-40">
                                    <input type="email" id="email" name="email" class="form-control"
                                           value="{{$profile ?  $profile->email: ""}}">
                                    <span class="bar"></span>
                                    <label for="email">آدرس ایمیل</label>
                                </div>

                                <!-- Password -->
                                <div class="form-group m-b-40">
                                    <input type="text" id="card_number" name="card_number" class="form-control"
                                           value="{{$profile ? $profile->card_number : ""}}">
                                    <span class="bar"></span>
                                    <label for="card_number">شماره کارت</label>
                                </div>
                                <div class="offset-sm-3 col-sm-9 m-b-40">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" id="newsletters"
                                               name="newsletters" {{$profile->newsletters ? "checked" : ""}}>
                                        <label for="newsletters">اشتراک در خبرنامه</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 offset-md-7"></div>
                                    <button type="submit"
                                            class="btn waves-effect waves-light btn-block btn-info"
                                            style="font-family: IRANSansWeb; width: 200px">ثبت اطلاعات کاربری
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection
@section('footer')
    <footer class="footer">
        © 2018 Material Pro Admin by wrappixel.com
    </footer>
@endsection
@section('Scripts')
    @parent
    <script type="text/javascript" src="/js/dropzone.js"></script>
    <script>
        $(document).on("click", ".data_order", function () {
            var order_number = $(this).data('id');
            $("#order_table tbody tr").remove();
            axios.get('/getOrder/' + order_number)
                .then(function (response) {
                    var cartItem = JSON.parse(response.data[0].cart)
                    var table = document.getElementById("cart_Table");
                    document.getElementById("modal_title").innerText = 'سفارش شماره : ' + order_number;
                    var len = cartItem.length;
                    for (index = 0; index < len; index++) {
                        var imgage = document.createElement("IMG");
                        imgage.setAttribute("src", cartItem[index].options.image);
                        imgage.setAttribute("width", "100");
                        imgage.setAttribute("height", "100");
                        imgage.setAttribute("style", "border-radius:5px");
                        var row = table.insertRow(0);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        cell1.appendChild(imgage);
                        cell2.innerHTML = cartItem[index].name;
                        cell4.innerHTML = cartItem[index].qty;
                        cell3.innerHTML = cartItem[index].price;
                    }
                });
        });

        Dropzone.autoDiscover = false;
        var token = "{!! csrf_token() !!}";
        var upload_avatar = document.getElementById("upload-avatar");
        const $button = document.getElementById('submit-files')
        $(document).ready(function () {
            const dropzoneFileUpload = new Dropzone('#dropzoneFileUpload', {
                url: "/panel/uploadAvatar",
                paramName: "file",
                autoProcessQueue: false,
                maxFilesize: 2,
                params: {
                    _token: token
                },
                init: function () {
                    this.on("addedfile", function (file) {
                    }),
                        this.on("success", function (file, response) {
                            document.getElementById("user-avatar").src = response.path;
                            document.getElementById("user-avatar-profile").src = response.path;
                            document.getElementById("progress-bar-avatar").style.width = "100%";
                        }),
                        this.on("complete", function (file) {
                            this.removeAllFiles(true);
                        })
                }
            })
            $button.addEventListener('click', function () {
                const acceptedFiles = dropzoneFileUpload.getAcceptedFiles()
                for (let i = 0; i < acceptedFiles.length; i++) {
                    setTimeout(function () {
                        dropzoneFileUpload.processFile(acceptedFiles[i])
                    }, i * 1000)
                }
            })
            var dead_line = document.getElementById("dead_line").innerHTML;
            if (parseInt(dead_line) < 0) {
                axios.delete('/orders/delete')
                    .then(function (response) {
                        console.log(response.message);
                    });
            }
        });
    </script>
@endsection
