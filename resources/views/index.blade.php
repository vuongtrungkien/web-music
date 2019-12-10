@extends('layouts.home')
@section('title','NightCore Z')
@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <!-- Welcome Slides -->
        <div class="welcome-slides owl-carousel">

          <!-- Single Welcome Slide -->
            <div class="welcome-welcome-slide bg-img bg-overlay"
                 style="background-image: url({{asset('img/bg-img/bgtest.jpg')}});">
                <div class="container h-100" style="position: relative;top: 150px">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h2 data-animation="fadeInUp" data-delay="100ms">NightCore Z</h2>
                                <h5 data-animation="fadeInUp" data-delay="300ms">Chào mừng các bạn đến với thế giới âm
                                    nhạc của tôi.</h5>
                            </div>
                            <!-- Welcome Music Area -->
                            <div class="poca-music-area mt-70 d-flex align-items-center flex-wrap"
                                 data-animation="fadeInUp" data-delay="900ms">
                                <div class="poca-music-thumbnail">
                                    <img src="{{asset('/storage/img/logo2.png')}}" alt="">

                                </div>
                                <div class="poca-music-content">


                                    @foreach($songRandom as $song)
                                        <span
                                            class="music-published-date">{{@date_format($song->created_at,'d-m-Y')}}</span>
                                        <h2>{{$song->name}} </h2>
                                        <div class="music-meta-data">

                                            <p>By <a href="#" class="music-author">{{$song->singer->name}}</a>

                                        </div>
                                        <!-- Music Player -->
                                        <div class="poca-music-player">

                                            <audio preload="auto" controls loop="loop">
                                                <source src="{{asset('storage/'.$song->url)}}">
                                            </audio>
                                        </div>

                                        <!-- Likes, Share & Download -->
                                        <div
                                            class="likes-share-download d-flex align-items-center justify-content-between">
                                            <span href="#"><i class="fa  fa-eye" aria-hidden="true"></i> Lượt Xem {{$song->view}}</span>
                                            @endforeach
                                            <div>
                                                <a href="#" class="mr-4"><i class="fa fa-share-alt"
                                                                            aria-hidden="true"></i> Share</a>
                                                <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="banner"></div>
    </section>
    <section class="poca-latest-epiosodes section-padding-80" style="position: relative; bottom: 300px">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Chúc Các Bạn Nghe Nhạc Vui Vẻ</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="poca-projects-menu mb-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center portfolio-menu">
                    <button class="btn active" data-filter="*">Tất Cả</button>
                    <button class="btn" data-filter=".entre">Nhạc Mới</button>
                    <button class="btn" data-filter=".media">Top Nightcore Việt</button>
                    <button class="btn" data-filter=".tech">Top Nightcore Ngoại</button>
                    <button class="btn" data-filter=".tutor">Video</button>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="position: relative;bottom: 250px">
        <div class=" poca-portfolio">
        {{--            <section class=" single_gallery_item entre    ">Nhạc Mới</section>--}}
        <!-- Single gallery Item -->

            <div class="col-12 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
                <!-- Welcome Music Area -->
                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap nav-link">
                    <div class="poca-music-thumbnail text-center  border-bottom">
                        <h2>Nhạc Việt</h2>
                    </div>
                    <div class="poca-music-content text-left ">
                        <ul class="nav-link">
                            @foreach($songsNewVNI as $song)
                                <li style="margin-bottom: 3px"><a style="font-size: 18px;" href="{{route('song.play',$song->id)}}">{{$song->name}} - {{$song->singer->name}}</a></li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="col-12 col-md-6 single_gallery_item entre  wow fadeInUp" data-wow-delay="0.2s">
                <!-- Welcome Music Area -->
                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                    <div class="poca-music-thumbnail text-center border-bottom">
                        <h2>Nhạc Âu Mĩ</h2>
                    </div>
                    <div class="poca-music-content text-center">
                        <ul>
                            @foreach($songsNewUs as $song)
                                <li style="margin-bottom: 3px"><a style="font-size: 18px" href="{{route('song.play',$song->id)}}">{{$song->name}} - {{$song->singer->name}}</a></li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>
{{--            <div class="col-12 col-md-6 single_gallery_item entre  wow fadeInUp" data-wow-delay="0.2s">--}}

{{--                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">--}}
{{--                    <div class="poca-music-thumbnail text-center border-bottom">--}}
{{--                        <h2>Nhạc Trung</h2>--}}
{{--                    </div>--}}
{{--                    <div class="poca-music-content text-center">--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


            <!-- Single gallery Item -->
            <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp w-100" data-wow-delay="0.2s">

                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap w-100">
                    <div class="poca-music-thumbnail text-center border-bottom">
                        <h2>Top NightCore Việt</h2>
                    </div>
                    <div class="poca-music-content text-center">
                        <ul>
                            @foreach($songsTopVNI as $song)
                                <li class="text" style="margin-bottom: 3px"><a style="font-size: 18px ;" href="{{route('song.play',$song->id)}}">{{$song->name}} - {{$song->singer->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Single gallery Item -->
            <div class="col-12 col-md-6 single_gallery_item tech  wow fadeInUp" data-wow-delay="0.2s">
                <!-- Welcome Music Area -->
                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                    <div class="poca-music-thumbnail text-center border-bottom">
                        <h2>Top NightCore Âu Mĩ</h2>
                    </div>
                    <div class="poca-music-content text-center">
                        <ul>
                            @foreach($songsTopUs as $song)
                                <li style="margin-bottom: 3px"><a style="font-size: 18px" href="{{route('song.play',$song->id)}}">{{$song->name}} - {{$song->singer->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{--            <div class="col-12 col-md-6 single_gallery_item tech  wow fadeInUp" data-wow-delay="0.2s">--}}

            {{--                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">--}}
            {{--                    <div class="poca-music-thumbnail text-center border-bottom">--}}
            {{--                        <h2>Top NightCore Trung</h2>--}}
            {{--                    </div>--}}
            {{--                    <div class="poca-music-content text-center">--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="col-12 col-md-6 single_gallery_item tech  wow fadeInUp" data-wow-delay="0.2s">

                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                    <div class="poca-music-thumbnail text-center border-bottom">
                        <h2>Top NightCore Hàn Quốc</h2>
                    </div>
                    <div class="poca-music-content text-center">
                        <h2>Chưa Có Bài Hát </h2>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            {{--            <div class="col-12 col-md-6 single_gallery_item tutor wow fadeInUp" data-wow-delay="0.2s">--}}
            {{--                <!-- Welcome Music Area -->--}}
            {{--                <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">--}}
            {{--                    <div class="poca-music-thumbnail">--}}

            {{--                    </div>--}}
            {{--                    <div class="poca-music-content text-center">--}}
            {{--                        --}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

        </div>
    </div>
    <!-- ***** Welcome Area End ***** -->
    <!-- *****  End ***** -->

    <!-- Projects Menu -->

@endsection
