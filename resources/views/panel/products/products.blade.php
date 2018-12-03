@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
    <link href="/css/panel/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            {{--<ol class="breadcrumb">--}}
            {{--<li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>--}}
            {{--<li class="breadcrumb-item active">پنل کاربری</li>--}}
            {{--</ol>--}}
            <div class="mt-0"> {{ Breadcrumbs::render('orders') }} </div>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0">
                            <small>THIS MONTH</small>
                        </h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0">
                            <small>LAST MONTH</small>
                        </h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">
                        <i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="m-t-40">
        <a class="show_product"
           data-toggle="modal"
           data-target=".addProduct">
            <button class="btn waves-effect waves-light btn-block btn-info"
                    style="font-family: IRANSansWeb; width: 200px;margin-top: 20px">افزودن محصول
            </button>
        </a>
        <table id="productsTable" class="display nowrap table table-hover table-striped table-bordered dataTable"
               style="width:100%">
            <thead>
            <tr>
                <th class="text-center">تصویر محصول</th>
                <th class="text-center">نام محصول</th>
                <th class="text-center">دسته بندی</th>
                <th class="text-center">قیمت</th>
                <th class="text-center">تاریخ ایجاد</th>
                <th class="text-center">آخرین بروزرسانی</th>
                <th class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="text-center"><img width="120" height="120" src="{{$product->image}}"
                                                 style="border-radius: 5px"></td>
                    <td class="text-center">{{$product->name}}</td>
                    <td class="text-center">{{$product->category_id}}</td>
                    <td class="text-center">{{$product->price}} تومان</td>
                    <td class="text-center"><?php echo verta($product->created_at);?></td>
                    <td class="text-center"> <?php echo verta($product->updated_at);?></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a class="show_product"
                               data-toggle="modal"
                               data-target=".showProduct"
                               data-id={{$product->id}}>
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="edit_product"
                               data-toggle="modal"
                               data-target=".editProduct"
                               data-id={{$product->id}}>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a>
                                <button type="button" class="btn btn-danger" onclick="deleteProduct({{$product->id}})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th class="text-center">تصویر محصول</th>
                <th class="text-center">نام محصول</th>
                <th class="text-center">دسته بندی</th>
                <th class="text-center">قیمت</th>
                <th class="text-center">تاریخ ایجاد</th>
                <th class="text-center">آخرین بروزرسانی</th>
                <th class="text-center">عملیات</th>
            </tr>
            </tfoot>
        </table>
        <div class="modal fade showProduct" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true"
             style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3"><img width="150" height="150" style="border-radius: 5px"
                                                    id="product_img"></div>
                            <div class="col-9">
                                <p class="text-muted">نام محصول :</p>
                                <h6 class="text-muted" id="product_name"></h6>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted p-t-30 db">تعداد موجودی :</p>
                                        <h6 class="text-muted" id="product_stock_count"></h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted p-t-30 db">وضعیت موجودی :</p>
                                        <h6 class="text-muted font-weight-bold" id="product_stock_status"></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted p-t-30 db">قیمت :</p>
                                        <h6 class="text-muted" id="product_price"></h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted p-t-30 db">دسته بندی :</p>
                                        <h6 class="text-muted" id="product_category"></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted p-t-30 db"> رتبه یندی :</p>
                                        <h6 class="text-muted" id="product_rate"></h6>
                                    </div>
                                    <div class="col-6">
                                        <div class="switch">
                                            <label>بله<input type="checkbox" id="featured"><span class="lever"></span>خیر</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 justify-content-end">
                                <p class="text-muted p-t-30 db">توضیحات محصول :</p>
                                <div id="product_description"></div>
                            </div>
                            <div class="col-5" id="product_image"></div>
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
        <div class="modal fade addProduct" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true"
             style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="add_modal_title">افزودن محصول جدید</h4>
                    </div>
                    <div class="modal-body">
                        <img id="add_product_img" width="150" height="150"
                             style="border-radius: 5px;margin-bottom: 20px">
                        <form class="floating-labels" style="color: #757575;margin-top: 20px" method="POST"
                              id="addForm">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="add_product_name" name="add_product_name"
                                               class="form-control">
                                        <span class="bar"></span>
                                        <label for="add_product_name">نام محصول</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="add_price" name="add_price" class="form-control">
                                        <span class="bar"></span>
                                        <label for="add_price">قیمت محصول</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="add_product_stock_count" name="add_product_stock_count"
                                               class="form-control">
                                        <span class="bar"></span>
                                        <label for="add_product_stock_count" class="product_count">تعداد محصول</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="form-group m-b-40">
                                        <select id="add_product_category" name="add_product_category"
                                                class="form-control"
                                                style="padding: 3px">
                                            <?php $categorys = \App\Category::all();?>
                                            <option value="0" selected>دسته بندی مورد نظر را انتخاب نمایید...</option>
                                            @foreach($categorys as $category )
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="form-group m-b-40">
                                <input type="text" id="add_product_rate" name="add_product_rate"
                                       class="form-control">
                                <span class="bar"></span>
                                <label for="add_product_rate">رتبه بندی محصول</label>
                            </div>

                            <!-- Password -->
                            <div class="form-group m-b-40">
                                <div class="col">
                                    <div class="row">
                                        <p class="text-muted p-t-30 db">محصول ویژه : </p>
                                    </div>
                                    <div class="row">
                                        <div class="switch">
                                            <label>بله<input type="checkbox" id="add_featured" name="add_featured"><span
                                                        class="lever"></span>خیر</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-b-40">
                                <textarea rows="5" id="add_product_description"
                                          name="add_product_description"
                                          class="form-control"></textarea>
                                <span class="bar"></span>
                                <label for="add_product_description">توضیحات محصول : </label>
                            </div>

                            <div class="col-md-12">
                                <div class='dropzone' id='AddFileUpload'></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 offset-md-6"></div>
                                <button type="submit"
                                        class="btn waves-effect waves-light btn-block btn-info"
                                        style="font-family: IRANSansWeb; width: 200px;margin-top: 20px">افزودن محصول
                                </button>
                            </div>
                        </form>
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
        <div class="modal fade editProduct" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true"
             style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="edit_modal_title"></h4>
                        {{--<h4 class="modal-title" style="display: none" id="form_product_id"></h4>--}}
                    </div>
                    <div class="modal-body">
                        <img id="edit_product_img" width="150" height="150"
                             style="border-radius: 5px;margin-bottom: 20px">
                        <form class="floating-labels" style="color: #757575;margin-top: 20px" method="POST"
                              id="editForm" st>
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="form_product_name" name="form_product_name"
                                               class="form-control">
                                        <span class="bar"></span>
                                        <label for="form_product_name">نام محصول</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="form_price" name="form_price" class="form-control">
                                        <span class="bar"></span>
                                        <label for="form_price">قیمت محصول</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="form-group m-b-40">
                                        <input type="text" id="form_product_stock_count" name="form_product_stock_count"
                                               class="form-control">
                                        <span class="bar"></span>
                                        <label for="form_product_stock_count" class="product_count">تعداد محصول</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="form-group m-b-40">
                                        <select id="form_product_category" name="form_product_category"
                                                class="form-control"
                                                style="padding: 3px">
                                            <?php $categorys = \App\Category::all();?>
                                            <option value="0" selected>دسته بندی مورد نظر را انتخاب نمایید...</option>
                                            @foreach($categorys as $category )
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="form-group m-b-40">
                                <input type="text" id="form_product_rate" name="form_product_rate"
                                       class="form-control">
                                <span class="bar"></span>
                                <label for="form_product_rate">رتبه بندی محصول</label>
                            </div>

                            <!-- Password -->
                            <div class="form-group m-b-40">
                                <div class="col">
                                    <div class="row">
                                        <p class="text-muted p-t-30 db">محصول ویژه : </p>
                                    </div>
                                    <div class="row">
                                        <div class="switch">
                                            <label>بله<input type="checkbox" id="form_featured"><span
                                                        class="lever"></span>خیر</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-b-40">
                                <textarea rows="5" id="form_product_description"
                                          name="form_product_description"
                                          class="form-control"></textarea>
                                <span class="bar"></span>
                                <label for="form_product_description">توضیحات محصول : </label>
                            </div>

                            <div class="col-md-12">
                                <div class='dropzone' id='dropzoneFileUpload'></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 offset-md-6"></div>
                                <button type="submit"
                                        class="btn waves-effect waves-light btn-block btn-info"
                                        style="font-family: IRANSansWeb; width: 200px;margin-top: 20px">ثبت اطلاعات
                                    کاربری
                                </button>
                            </div>
                        </form>
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
@endsection
@section('footer')
    <footer class="footer">
        © 2018 Material Pro Admin by wrappixel.com
    </footer>
@endsection
@section('Scripts')
    @parent
    <!--Data Table-->
    {{--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>--}}
    <script type="text/javascript" src="/js/panel/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/dropzone.js"></script>

    <script>

        $(document).ready(function () {
            $('#productsTable').DataTable({
                // "paging":   false,
                "ordering": true,
                // "info":     false
            });
        });
        // Show Product *********************************************

        $(document).on("click", ".show_product", function () {
            var product_id = $(this).data('id');
            document.getElementById("modal_title").innerText = 'محصول شماره : ' + product_id;
            axios.get('/panel/products/' + product_id)
                .then(function (response) {
                    $("#product_img").attr("src", response.data.image);
                    $("#product_name").text(response.data.name);
                    $("#product_slug").text(response.data.slug);
                    $("#product_price").text(response.data.price);
                    $("#product_rate").text(response.data.rate);
                    $("#product_category").text(response.data.category_id);
                    if (response.data.stock_status) {
                        $('#product_stock_status').html('<div class="badge badge-info" style="border-radius: 2px">موجود می باشد</div>');
                    } else {
                        $('#product_stock_status').html('<div class="badge badge-danger" style="border-radius: 2px">موجود نمی باشد</div>');
                    }
                    $("#product_stock_count").text(response.data.stock_count);
                    $("#product_description").text(response.data.description);
                    if (response.data.featured) {
                        $('#featured').prop('checked', true);
                    } else {
                        $('#featured').prop('checked', false);
                    }
                });
        });

        // Edit Product *********************************************

        var token = "{!! csrf_token() !!}";
        Dropzone.autoDiscover = false;
        $(document).on("click", ".edit_product", function () {
            var product_id = $(this).data('id');
            $('#editForm label').css('top', '-20px');
            $('#editForm label').css('font-size', '12px');
            $('#editForm label').css('color', '#263238');
            document.getElementById("edit_modal_title").innerText = 'محصول شماره : ' + product_id;
            axios.get(route('products.edit', {id: product_id}))
                .then(function (response) {
                    $("#edit_product_img").attr("src", response.data.image);
                    $("#form_product_name").val(response.data.name);
                    $("#form_price").val(response.data.price);
                    axios.get(route('getCategoryName', {category_name: response.data.category_id}))
                        .then(function (response) {
                            $('#form_product_category').val(response.data.category_id).prop('selected', true);
                        });
                    $("#form_product_rate").val(response.data.rate);
                    $("#form_product_stock_count").val(response.data.stock_count);
                    $("#form_product_description").text(response.data.description);
                    if (response.data.featured) {
                        $('#form_featured').prop('checked', true);
                    } else {
                        $('#form_featured').prop('checked', false);
                    }
                });
            $("#editForm").submit(function (e) {
                var form = $(this);
                var url = "/panel/products/" + product_id;
                axios.post(url, form.serialize()).then(function (response) {
                    console.log(response.data);
                });
                e.preventDefault();
            });
                const dropzoneFileUpload = new Dropzone('#dropzoneFileUpload', {
                    url: route('ProductImagesUpload'),
                    paramName: "file",
                    maxFilesize: 5,
                    params: {
                        _token: token,
                        id: product_id
                    },
                    init: function () {
                        this.on("addedfile", function (file) {
                        }),
                            this.on("success", function (file, response) {
                                console.log(response);
                                document.getElementById("edit_product_img").src = response.path;
                            }),
                            this.on("complete", function (file) {
                                this.removeAllFiles(true);
                            })
                    }
                });
        });

       // Add Product ***************************************

        $("#addForm").submit(function (e) {
            var form = $(this);
            var url = route('products.store');

            axios.post(url, form.serialize()).then(function (response) {
                console.log(response.data);
            });
            e.preventDefault();
        });
            const AddFileUpload = new Dropzone('#AddFileUpload', {
                url: route('ProductImagesUpload'),
                paramName: "file",
                maxFilesize: 5,
                params: {
                    _token: token
                },
                init: function () {
                    this.on("addedfile", function (file) {
                    }),
                        this.on("success", function (file, response) {
                            console.log(response);
                            document.getElementById("add_product_img").src = response.path;
                        }),
                        this.on("complete", function (file) {
                            this.removeAllFiles(true);
                        })
                }
            });

        // Delete Product **************************************

        function deleteProduct(product_id) {
            axios.delete('products/' + product_id)
                .then(function (response) {
                    console.log(response.data);
                });
        }
    </script>
@endsection
