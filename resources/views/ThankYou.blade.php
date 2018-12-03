@extends('panel.layouts.app')
@section('title', 'صفحه اصلی')
@section('Styles')
    @parent
@endsection
@section('content')
@section('header')
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="/img/panel/logo-icon.png" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="/img/panel/logo-light-icon.png" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                         <!-- dark Logo text -->
                        </img/panel/img src="/img/panel/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="/img/panel/logo-light-text.png" class="light-logo" alt="homepage"/></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="mdi mdi-menu"></i></a></li>
                    <li class="nav-item"><a
                                class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item hidden-sm-down search-box">
                        <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i
                                        class="ti-close"></i></a></form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"><a
                                class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="mdi mdi-view-grid"></i></a>
                        <div class="dropdown-menu scale-up-left">
                            <ul class="mega-dropdown-menu row">
                                <li class="col-lg-3 col-xlg-2 m-b-30">
                                    <h4 class="m-b-20">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container"><img class="d-block img-fluid"
                                                                            src="/img/panel/img1.jpg" alt="First slide">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid"
                                                                            src="/img/panel/img2.jpg"
                                                                            alt="Second slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid"
                                                                            src="/img/panel/img3.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                           data-slide="prev"> <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span> <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                           data-slide="next"> <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span> <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id="accordion" class="nav-accordion" role="tablist"
                                         aria-multiselectable="true">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne" aria-expanded="true"
                                                       aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h5></div>
                                            <div id="collapseOne" class="collapse show" role="tabpanel"
                                                 aria-labelledby="headingOne">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseTwo" aria-expanded="false"
                                                       aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </h5></div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel"
                                                 aria-labelledby="headingTwo">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseThree" aria-expanded="false"
                                                       aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </h5></div>
                                            <div id="collapseThree" class="collapse" role="tabpanel"
                                                 aria-labelledby="headingThree">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1"
                                                   placeholder="Enter Name"></div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"></div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                                      placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </li>
                                <li class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You
                                                can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give
                                                link</anav-link dropdown-toggle text-muted text-muted waves-effect
                                                waves-dark></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth
                                                link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-message"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span
                                                        class="mail-desc">Just see the my new admin!</span> <span
                                                        class="time">9:30 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span>
                                                <span class="time">9:10 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span>
                                                <span class="time">9:08 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span
                                                        class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span></div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                            notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-email"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="/img/panel/1.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                        class="profile-status online pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span
                                                        class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:30 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="/img/panel/2.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span
                                                        class="mail-desc">I've sung a song! See you at</span> <span
                                                        class="time">9:10 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="/img/panel/3.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                        class="profile-status away pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span
                                                        class="time">9:08 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="/img/panel/4.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span
                                                        class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span></div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all
                                            e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/panel/1.jpg"
                                                                                                  alt="user"
                                                                                                  class="profile-pic"/></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="/img/panel/1.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p><a href="profile.html"
                                                                                        class="btn btn-rounded btn-danger btn-sm">View
                                                Profile</a></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> پروفایل </a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="flag-icon flag-icon-us"></i></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up"><a class="dropdown-item" href="#"><i
                                        class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i
                                        class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item"
                                                                                          href="#"><i
                                        class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i
                                        class="flag-icon flag-icon-de"></i> Dutch</a></div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
@endsection
@section('left-sidebar')
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile" style="background: url(/img/panel/user-info.jpg) no-repeat;">
                <!-- User profile image -->
                <div class="profile-img"><img src="/img/panel/profile.png" alt="user"/></div>
                <!-- User profile text-->
                <div class="profile-text"><a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                                             role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                    <div class="dropdown-menu animated flipInY">
                        <a href="#" class="dropdown-item"><i class="ti-user"></i> پروفایل </a>
                        <a href="#" class="dropdown-item"><i class="ti-wallet"></i> حساب های مالی </a>
                        <a href="#" class="dropdown-item"><i class="ti-email"></i> پیام ها </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> حساب کاربری </a>
                        <div class="dropdown-divider"></div>
                        <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> خروج</a>
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarna">
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('profile')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-account-outline"></i><span class="hide-menu">پروفایل </span></a>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="{{route('orders')}}" aria-expanded="false"><i
                                    class="mdi mdi-cart-outline"></i><span class="hide-menu">همه سفارش ها</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('orders_return')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-keyboard-return"></i><span
                                    class="hide-menu">درخواست مرجوعی</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('favorites')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-heart-outline"></i><span class="hide-menu">لیست علاقه مندی ها</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('comments')}}" aria-expanded="false"><i
                                    class="mdi mdi-comment-account-outline"></i><span
                                    class="hide-menu">نقد و نظرات</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('giftcards')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-gift"></i><span class="hide-menu">کارت های هدیه</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('addresses')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-map-marker-multiple"></i><span class="hide-menu">آدرس ها</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('notifierlist')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-bell-outline"></i><span class="hide-menu">اطلاع رسانی ها</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('notification')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-message-outline"></i><span class="hide-menu">پیغام های من</span></a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="{{route('personal_info')}}"
                           aria-expanded="false"><i
                                    class="mdi mdi-information-outline"></i><span class="hide-menu">اطلاعات شخصی</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>
@endsection
    <div class="row">
        @include('partials.alert')
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
        var dead_line = document.getElementById("dead_line").innerHTML;
        const $button = document.getElementById('submit-files')
        $(document).ready(function () {
            const dropzoneFileUpload = new Dropzone('#dropzoneFileUpload', {
                url: "/uploadAvatar",
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

            if (parseInt(dead_line) < 0) {
                axios.get('/orders/delete')
                    .then(function (response) {
                        console.log(response.message);
                    });
            }
        });
    </script>
@endsection
