<header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="pocaNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{route('index')}}"><img style="width: 80px; height: 80px" src="{{asset('./storage/img/logo.png')}}" alt=""></a>

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
                            <li class="current-item"><a href="{{route('index')}}">Trang chủ</a></li>
                            <li><a href="#">Bài Hát</a>
                                <ul class="dropdown">
                                    <li><a href="./index.html">- Nightcore Việt</a></li>
{{--                                    <li><a href="./podcast.html">- Nightcore Trung </a></li>--}}
                                    <li><a href="./single-podcast.html">- Nightcore Âu mĩ</a></li>
{{--                                    <li><a href="./about.html">- Nightcore nhật Bản</a></li>--}}
{{--                                    <li><a href="./blog.html">- Nightcore Hàn Quốc</a></li>--}}
                                </ul>
                            </li>
                            <li><a href="./podcast.html">Video</a></li>
                            <li><a href="#">BXH</a>
                                <ul class="dropdown">
                                    <li><a href="./index.html">- Nightcore Việt</a></li>
{{--                                    <li><a href="./podcast.html">- Nightcore Trung </a></li>--}}
                                    <li><a href="./single-podcast.html">- Nightcore Âu mĩ</a></li>
{{--                                    <li><a href="./about.html">- Nightcore nhật Bản</a></li>--}}
{{--                                    <li><a href="./blog.html">- Nightcore Hàn Quốc</a></li>--}}
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a style="width: 50px" href="#" class="fa fa-user" aria-hidden="true"></a>
                                @if(Route::has('login'))
                                    @auth
                                        <ul class="dropdown">
                                            <li><a href="./index.html">- Hồ Sơ Cá Nhân</a></li>
                                            <li><a href="./podcast.html">- Playlist </a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                >- Đăng Xuất </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>

                                            </li>

                                        </ul>
                                    @else
                                        <ul class="dropdown">
                                            <li><a href="{{ route('register') }}">- Đăng Ký</a></li>
                                            <li><a href="{{ route('login') }}">- Đăng Nhập</a></li>
                                        </ul>
                                    @endauth
                                @endif
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

                        <!-- Top Social Area -->
                        <div class="top-social-area">
                            <a href="https://www.facebook.com/nightcorezsoledadz/" target="_blank"
                               class="fa fa-facebook" aria-hidden="true"></a>

                            <a href="https://www.youtube.com/c/ZsoledadZ9x" target="_blank" class="fa fa-youtube-play"
                               aria-hidden="true"></a>
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
