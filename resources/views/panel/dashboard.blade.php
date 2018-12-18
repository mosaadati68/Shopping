@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">صفحه اصلی</a></li>
                <li class="breadcrumb-item active">پنل کاربری</li>
            </ol>
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
    @if(auth()->user()->can('edit products'))
        <div class="card-group">
            <!-- Column -->
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="text-center">Unique Visit</h4>
                    <div id="spark8">
                        <canvas width="99" height="70"
                                style="display: inline-block; width: 99px; height: 70px; vertical-align: top;"></canvas>
                    </div>
                </div>
                <div class="box b-t text-center">
                    <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 12456</h4></div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="text-center">کل بازدیدکنندگان</h4>
                    <div id="spark9">
                        <canvas width="99" height="70"
                                style="display: inline-block; width: 99px; height: 70px; vertical-align: top;"></canvas>
                    </div>
                </div>
                <div class="box b-t text-center">
                    <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="text-center">Bounce rate</h4>
                    <div id="spark10">
                        <canvas width="99" height="70"
                                style="display: inline-block; width: 99px; height: 70px; vertical-align: top;"></canvas>
                    </div>
                </div>
                <div class="box b-t text-center">
                    <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 12456</h4></div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="text-center">Page Views</h4>
                    <div id="spark11">
                        <canvas width="99" height="70"
                                style="display: inline-block; width: 99px; height: 70px; vertical-align: top;"></canvas>
                    </div>
                </div>
                <div class="box b-t text-center">
                    <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
            </div>
            <!-- Column -->
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Visits</h4>
                    <div id="visitfromworld" style="width:100%!important; height:415px"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Browser Stats</h4>
                    <table class="table browser m-t-30 no-border">
                        <tbody>
                        <tr>
                            <td style="width:40px"><img src="/img/panel/chrome-logo.png" alt=logo/></td>
                            <td>Google Chrome</td>
                            <td class="text-right"><span class="label label-light-info">23%</span></td>
                        </tr>
                        <tr>
                            <td><img src="/img/panel/firefox-logo.png" alt=logo/></td>
                            <td>Mozila Firefox</td>
                            <td class="text-right"><span class="label label-light-success">15%</span></td>
                        </tr>
                        <tr>
                            <td><img src="/img/panel/safari-logo.png" alt=logo/></td>
                            <td>Apple Safari</td>
                            <td class="text-right"><span class="label label-light-primary">07%</span></td>
                        </tr>
                        <tr>
                            <td><img src="/img/panel/internet-logo.png" alt=logo/></td>
                            <td>Internet Explorer</td>
                            <td class="text-right"><span class="label label-light-warning">09%</span></td>
                        </tr>
                        <tr>
                            <td><img src="/img/panel/opera-logo.png" alt=logo/></td>
                            <td>Opera mini</td>
                            <td class="text-right"><span class="label label-light-danger">23%</span></td>
                        </tr>
                        <tr>
                            <td><img src="/img/panel/internet-logo.png" alt=logo/></td>
                            <td>Microsoft edge</td>
                            <td class="text-right"><span class="label label-light-megna">09%</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">Total Revenue</h4>
                        <div class="ml-auto">
                            <ul class="list-inline">
                                <li>
                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5"
                                                              style="color:#51bdff"></i>2015</h6>
                                </li>
                                <li>
                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5"
                                                              style="color:#11a0f8"></i>2016</h6>
                                </li>
                                <li>
                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>2017</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="total-sales" style="height: 365px;"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sales Prediction</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6 text-primary">$3528</span>
                                    <h6 class="text-muted">10% Increased</h6>
                                    <h5>(150-165 Sales)</h5>
                                </div>
                                <div class="ml-auto">
                                    <div id="gauge-chart" style=" width:150px; height:150px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sales Difference</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6 text-success">$4316</span>
                                    <h6 class="text-muted">10% Increased</h6>
                                    <h5>(150-165 Sales)</h5>
                                </div>
                                <div class="ml-auto">
                                    <div class="ct-chart" style="width:120px; height: 120px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="calendar"></div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="my-event">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add Event</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white waves-effect"
                                            data-dismiss="modal">Close
                                    </button>
                                    <button type="button"
                                            class="btn btn-success save-event waves-effect waves-light">Create
                                        event
                                    </button>
                                    <button type="button"
                                            class="btn btn-danger delete-event waves-effect waves-light"
                                            data-dismiss="modal">Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-new-event">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name"
                                                       type="text" name="category-name"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white"
                                                        data-placeholder="Choose a color..."
                                                        name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                    <option value="inverse">Inverse</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                            class="btn btn-danger waves-effect waves-light save-category"
                                            data-dismiss="modal">Save
                                    </button>
                                    <button type="button" class="btn btn-white waves-effect"
                                            data-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Chats</h4>
                    <div class="chat-box">
                        <!--chat Row -->
                        <ul class="chat-list">
                            <!--chat Row -->
                            <li>
                                <div class="chat-img"><img src="/img/panel/1.jpg" alt="user"/></div>
                                <div class="chat-content">
                                    <h5>James Anderson</h5>
                                    <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the
                                        printing & type setting industry.
                                    </div>
                                </div>
                                <div class="chat-time">10:56 am</div>
                            </li>
                            <!--chat Row -->
                            <li>
                                <div class="chat-img"><img src="/img/panel/2.jpg" alt="user"/></div>
                                <div class="chat-content">
                                    <h5>Bianca Doe</h5>
                                    <div class="box bg-light-success">It’s Great opportunity to work.</div>
                                </div>
                                <div class="chat-time">10:57 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">I would love to join the team.</div>
                                    <br/>
                                </div>
                                <div class="chat-time">10:58 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                    <br/>
                                </div>
                                <div class="chat-time">10:59 am</div>
                            </li>
                            <!--chat Row -->
                            <li>
                                <div class="chat-img"><img src="/img/panel/3.jpg" alt="user"/></div>
                                <div class="chat-content">
                                    <h5>Angelina Rhodes</h5>
                                    <div class="box bg-light-primary">Well we have good budget for the project
                                    </div>
                                </div>
                                <div class="chat-time">11:00 am</div>
                            </li>
                            <!--chat Row -->
                        </ul>
                    </div>
                </div>
                <div class="card-body b-t">
                    <div class="row">
                        <div class="col-8">
                            <textarea placeholder="Type your message here" class="form-control b-0"></textarea>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-info btn-circle btn-lg"><i
                                        class="far fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Messages</h4>
                    <div class="message-box">
                        <div class="message-widget">
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"><img src="/img/panel/1.jpg" alt="user" class="img-circle">
                                    <span class="profile-status online pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span>
                                    <span class="time">9:30 AM</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"><img src="/img/panel/2.jpg" alt="user" class="img-circle">
                                    <span class="profile-status busy pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Sonu Nigam</h5> <span
                                            class="mail-desc">I've sung a song! See you at</span> <span
                                            class="time">9:10 AM</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"><span class="round">A</span> <span
                                            class="profile-status away pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span>
                                    <span class="time">9:08 AM</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"><img src="/img/panel/4.jpg" alt="user" class="img-circle">
                                    <span class="profile-status offline pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"><img src="/img/panel/1.jpg" alt="user" class="img-circle">
                                    <span class="profile-status online pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span
                                            class="mail-desc">Welcome to the Elite Admin</span> <span
                                            class="time">9:30 AM</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"><img src="/img/panel/2.jpg" alt="user" class="img-circle">
                                    <span class="profile-status busy pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Sonu Nigam</h5> <span
                                            class="mail-desc">I've sung a song! See you at</span> <span
                                            class="time">9:10 AM</span></div>
                            </a>
                            <!-- Message -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
            </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                    </li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                    </li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                    </li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/1.jpg" alt="user-img"
                                                          class="img-circle"> <span>Varun Dhavan <small
                                        class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/2.jpg" alt="user-img"
                                                          class="img-circle"> <span>Genelia Deshmukh <small
                                        class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/3.jpg" alt="user-img"
                                                          class="img-circle"> <span>Ritesh Deshmukh <small
                                        class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/4.jpg" alt="user-img"
                                                          class="img-circle"> <span>Arijit Sinh <small
                                        class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/5.jpg" alt="user-img"
                                                          class="img-circle"> <span>Govinda Star <small
                                        class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/6.jpg" alt="user-img"
                                                          class="img-circle"> <span>John Abraham<small
                                        class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/7.jpg" alt="user-img"
                                                          class="img-circle"> <span>Hritik Roshan<small
                                        class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="/img/panel/8.jpg" alt="user-img"
                                                          class="img-circle"> <span>Pwandeep rajan <small
                                        class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <footer class="footer">
        © 1397 فروشگاه اینترنتی همه چی کالا
    </footer>
@endsection
@section('Scripts')
    @parent

@endsection
