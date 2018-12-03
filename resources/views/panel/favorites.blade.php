@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
    {{--<link href="css/panel/plugins/table-footable/footable.bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>--}}
    <link href="css/panel/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
        <div class="mt-0"> {{ Breadcrumbs::render('orders') }} </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table color-table table-striped muted-table">
                                <thead class="m-b-10">
                                <tr>
                                    <th class="text-center" style="border-top-right-radius: 5px;">تصویر محصول</th>
                                    <th class="text-center">نام محصول</th>
                                    <th class="text-center">قیمت</th>
                                    <th class="text-center" style="border-top-left-radius: 5px;">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wishlists as $wishlist)
                                    <tr>
                                        <td>
                                            <img src="{{$wishlist[0]->image}}" width="110" height="100"
                                                 style="border-radius: 5px">
                                        </td>
                                        <td>{{$wishlist[0]->name}}</td>
                                        <td>{{$wishlist[0]->price}} تومان</td>
                                        <td>
                                            <button href="" type="button" class="btn waves-effect waves-light btn-success">حذف محصول</button>
                                            <button href="" type="button" class="btn waves-effect waves-light btn-success">مشاهده محصول</button>
                                        </td>
                                        {{--<td><button href="" type="button" class="btn waves-effect waves-light btn-success"></button></td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
@endsection
