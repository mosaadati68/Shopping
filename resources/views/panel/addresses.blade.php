@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card m-t-40">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <div id="example23_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row m-b-20">
                            <div class="col-2">
                                <button class="btn waves-effect waves-light btn-block btn-info" data-toggle="modal"
                                        data-target="#responsive-modal">
                                    ثبت آدرس جدید
                                </button>
                            </div>
                            <div class="col-10"></div>
                        </div>
                        @foreach($addresses as $address)
                            <div class="col-lg-6 col-xlg-5 col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="m-t-30">
                                            <img width="150" height="150" id="user-avatar-profile"
                                                 src="/images/avatar/4_avatar1543067684.jpg" alt="user"
                                                 class="img-circle">
                                            <h4 class="card-title m-t-10">{{$address->full_name_transferee}}</h4>
                                            <div class="row text-center justify-content-md-center">
                                                <div class="text-center mb-3 mt-5">
                                                    <i class="fa fa-edit ml-2"></i><a class="data_order"
                                                                                      data-toggle="modal"
                                                                                      data-target=".orderModel"
                                                                                      data-id=>ویرایش اطلاعات شخصی</a>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                    <div>
                                        <hr>
                                    </div>
                                    <div class="card-body" style="padding-left: 30px;padding-right: 30px">
                                        <div class="row">
                                            <div class="col-6 text-muted p-t-0 db">
                                                <small class="m-b-30">شماره موبایل : </small>
                                                <h6 class="p-r-10">{{$address->contact_no}}</h6>
                                            </div>
                                            <div class="col-6 text-muted p-t-0 db"">
                                            <small class="m-b-30">کد پستی : </small>
                                            <h6 class="p-r-10">{{$address->zip_code}}</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-muted p-t-30 db">
                                            <small class="m-b-30">آدرس : </small>
                                            <h6 class="p-r-10"><?php echo $address->country . ' - ' . $address->state_province . ' - ' . $address->city ?></h6>
                                        </div>
                                        <div class="col-6 text-muted p-b-30 p-t-30 db">
                                            <small class="m-b-30">آدرس پستی :</small>
                                            <h6 class="p-r-10">{{$address->address}}</h6>
                                        </div>
                                    </div>
                                    <div class="map-box">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                                width="100%" height="150" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                    </div>
                                    <small class="text-muted p-t-30 db">لینک شبکه های اجتماعی</small>
                                    <br>
                                    <div class="text-center">
                                        <button class="btn btn-facebook waves-effect btn-circle waves-light"
                                                type="button"><i class="icon-social-facebook"></i></button>
                                        <button class="btn btn-twitter waves-effect btn-circle waves-light"
                                                type="button"><i class="icon-social-twitter"></i></button>
                                        <button class="btn btn-youtube waves-effect btn-circle waves-light"
                                                type="button"><i class="icon-social-gplus"></i></button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endforeach
                    <table id="example23"
                           class="display nowrap table table-hover table-striped table-bordered dataTable"
                           cellspacing="0" width="100%" role="grid" aria-describedby="example23_info"
                           style="width: 100%;">
                        <thead>
                        <tr role="row">
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Name: activate to sort column ascending" style="width: 20%;">نام و نام
                                خانوادگی تحویل گیرنده
                            </th>
                            <th class="sorting_asc text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Position: activate to sort column descending" style="width: 10%;"
                                aria-sort="ascending">شماره موبایل
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Office: activate to sort column ascending" style="width: 10%;">کشور
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 10%;">شهر
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Start date: activate to sort column ascending" style="width: 10%;">استان
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 25%;">آدرس پستی
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 10%;">کد پستی
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 5%;">جزئیات
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($addresses as $address)
                            <tr role="row" class="odd">
                                <td class="text-center">{{$address->full_name_transferee}}</td>
                                <td class="sorting_1 text-center"
                                    style="text-align: center">{{$address->contact_no}}</td>
                                <td class="text-center">{{$address->country}}</td>
                                <td class="text-center">{{$address->city}}</td>
                                <td class="text-center">{{$address->state_province}}</td>
                                <td class="text-center">{{$address->address}}</td>
                                <td class="text-center">{{$address->zip_code}}</td>
                                <td class="text-center data_order"><a class="data_order"
                                                                      data-toggle="modal"
                                                                      data-target=".orderModel"
                                                                      data-id=><i
                                                class="mdi mdi-arrow-expand"></i></a></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr role="row">
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Name: activate to sort column ascending" style="width: 20%;">نام و نام
                                خانوادگی تحویل گیرنده
                            </th>
                            <th class="sorting_asc text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Position: activate to sort column descending" style="width: 10%;"
                                aria-sort="ascending">شماره موبایل
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Office: activate to sort column ascending" style="width: 10%;">کشور
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 10%;">شهر
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Start date: activate to sort column ascending" style="width: 10%;">استان
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 30%;">آدرس پستی
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1"
                                colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 10%;">کد پستی
                            </th>
                        </tr>
                        </tfoot>
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
    <div class="col-lg-12 col-md-6">
        <div class="card m-t-40">
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="modal fade" id="responsive-modal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="upload-avatar" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">افزودن آدرس جدید</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                            style="margin-left: 0px"><i class="mdi mdi-close-circle-outline"></i></button>
                </div>
                <div class="modal-body">
                    <div class="p-20">
                        <form class="floating-labels" style="color: #757575; " method="POST"
                              action="{{route('save.address')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="full_name_transferee" name="full_name_transferee"
                                               class="form-control"
                                               value="">
                                        <span class="bar"></span>
                                        <label for="full_name_transferee">نام و نام خانوادگی تحویل گیرنده</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="contact_no" name="contact_no" class="form-control"
                                               value="">
                                        <span class="bar"></span>
                                        <label for="contact_no">شماره موبایل</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group m-b-40">
                                        <select class="form-control" id="provinces" name="state_province">
                                            <option value="0" selected>استان مورد نظر خود را انتخاب نمایید...</option>
                                            @foreach($provinces as $province)
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group m-b-40">
                                        <select class="form-control" id="citis" name="city">
                                            <option value="0" s>شهر مورد نظر خود را انتخاب نمایید...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="form-group m-b-40">
                                <input type="text" id="address" name="address" class="form-control"
                                       value="">
                                <span class="bar"></span>
                                <label for="address">آدرس پستی</label>
                            </div>

                            <!-- Password -->
                            <div class="form-group m-b-40">
                                <input type="text" id="zip_code" name="zip_code" class="form-control"
                                       value="">
                                <span class="bar"></span>
                                <label for="zip_code">کد پستی</label>
                            </div>
                            <div class="row">
                                <div class="col-md-2 offset-md-6"></div>
                                <button type="submit"
                                        class="btn waves-effect waves-light btn-block btn-info"
                                        style="font-family: IRANSansWeb; width: 200px">ثبت آدرس
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <footer class="footer">
        © 2018 Material Pro Admin by wrappixel.com
    </footer>
@endsection
@section('Scripts')
    @parent
    <script>
        $(document).ready(function () {
            var citis = document.getElementById("citis");
            $("#provinces").change(function () {
                $province_id = $(this).val();
                axios.get('/getCity/' + $province_id)
                    .then(function (response) {
                        citis.length = 0;
                        for (var i = 0; i < response.data.length; i++) {
                            var option = document.createElement("option");
                            option.value = response.data[i].id;
                            option.text = response.data[i].name;
                            citis.appendChild(option);
                        }
                        console.log(response.data);
                        $("#citis").val(response.data.id);
                        $("#citis").text(response.data.name);
                        $('#citis option[value="0"]').attr("selected", true);
                        $('#citis option[value="0"]').remove();
                        $('#provinces option[value="0"]').remove();
                    });
            });
        });
    </script>
@endsection
