@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
    <link href="/css/panel/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
    </style>

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
<div class="table-responsive m-t-40">
    <div id="example23_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable"
               cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
            <thead>
            <tr role="row">
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Name: activate to sort column ascending" style="width: 131px;">#
                </th>
                <th class="sorting_asc text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Position: activate to sort column descending" style="width: 205px;"
                    aria-sort="ascending">شماره سفارش
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Office: activate to sort column ascending" style="width: 94px;">مهلت پرداخت
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Age: activate to sort column ascending" style="width: 32px;">مبلغ قابل پرداخت
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Start date: activate to sort column ascending" style="width: 82px;">عملیات پرداخت
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Salary: activate to sort column ascending" style="width: 60px;">جزییات
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr role="row" class="odd">
                    <td class="text-center">{{$order->id}}</td>
                    <td class="sorting_1 text-center" style="text-align: center">{{$order->order_number}}</td>
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
                    <td class="text-center">{{$order->amount}} تومان</td>
                    <td class="text-center">
                        <a href="{{route('payment.order',['order_id'=>$order->id])}}" type="button" class="btn waves-effect waves-light btn-success">پرداخت</a>
                    </td>
                    <td class="text-center data_order"><a class="data_order"
                                                          data-toggle="modal"
                                                          data-target=".orderModel"
                                                          data-id={{$order->order_number}}><i
                                    class="mdi mdi-arrow-expand"></i></a></td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr role="row">
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Name: activate to sort column ascending" style="width: 131px;">#
                </th>
                <th class="sorting_asc text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Position: activate to sort column descending" style="width: 205px;"
                    aria-sort="ascending">شماره سفارش
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Office: activate to sort column ascending" style="width: 94px;">مهلت پرداخت
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Age: activate to sort column ascending" style="width: 32px;">مبلغ قابل پرداخت
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Start date: activate to sort column ascending" style="width: 82px;">عملیات پرداخت
                </th>
                <th class="sorting text-center" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                    aria-label="Salary: activate to sort column ascending" style="width: 60px;">جزییات
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
@endsection
@section('footer')
    <footer class="footer">
        © 2018 Material Pro Admin by wrappixel.com
    </footer>
@endsection
@section('Scripts')
    @parent
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        $(document).on("click", ".data_order", function () {
            var order_number = $(this).data('id');
            $("#order_table tbody tr").remove();
            axios.get('/panel/getOrder/' + order_number)
                .then(function (response) {
                    console.log(response.data);
                    var cartItem = JSON.parse(response.data[0].cart);
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

            var dead_line = document.getElementById("dead_line").innerHTML;
            if (parseInt(dead_line) < 0) {
                axios.get('/panel/orders/delete')
                    .then(function (response) {
                        console.log(response.message);
                    });
            }
        });
    </script>
@endsection
