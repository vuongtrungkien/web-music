<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Poca - Podcast &amp; Audio Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('./img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
<header style="background-color: black" class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="pocaNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{route('index')}}"><img style="width: 70px;height: 70px" src="{{asset('./img/core-img/logo.png')}}" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav ">
                        <ul id="nav">
                            <li class="current-item"><a href="{{route('admin.index')}}">ADMIN</a></li>
                            <li><a href="#">Tải Lên</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('admin.upload_music')}}">- Nhạc</a></li>
                                    <li><a href="./podcast.html">- Video </a></li>

                                </ul>
                            </li>
                            <li><a href="{{route('admin.list_singers')}}">Ca Sĩ</a></li>
                            <li><a href="#">Thể Loại</a>
                                <ul class="dropdown">
                                    <li><a href="./index.html">- Danh sách Thể Loại</a></li>
                                    <li><a href="./podcast.html">- Thêm Thể Loại </a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Thành Viên </a></li>
                            <li><a style="width: 50px" href="#" class="fa fa-user" aria-hidden="true"></a>

                                <ul class="dropdown">
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        >- Đăng Xuất </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search-bar" class="form-control"
                                       placeholder="Search and hit enter...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="container">
@yield('content')
</div>

<!-- Preloader -->


<!-- ******* All JS ******* -->
<!-- jQuery js -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- All js -->
<script src="{{asset('js/poca.bundle.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/default-assets/active.js')}}"></script>


</body>

</html>
