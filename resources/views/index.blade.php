@extends('layouts.home')
@section('title','NightCore Z')
@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <!-- Welcome Slides -->
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/bgtest.jpg')}});">
                <div class="container h-100" style="position: relative;top: -100px" >
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h2 data-animation="fadeInUp" data-delay="100ms">NightCore Z</h2>
                                <h5 data-animation="fadeInUp" data-delay="300ms">Chào mừng các bạn đến với thế giới âm nhạc của tôi.</h5>
                            </div>
                            <!-- Welcome Music Area -->
                            <div class="poca-music-area mt-70 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                                <div class="poca-music-thumbnail">
                                    <img src="./img/core-img/logo.png" alt="">
                                </div>
                                <div class="poca-music-content">


                                    @foreach($songTopOne as $song)
                                        <span class="music-published-date">{{@date_format($song->created_at,'d-m-Y')}}</span>
                                        <h2>{{$song->name}} - {{$song->singer->name}}</h2>
                                        <div class="music-meta-data">
                                            <p>By <a href="#" class="music-author">Admin</a> 
                                        </div>
                                        <!-- Music Player -->
                                        <div class="poca-music-player">
                                            <audio preload="auto" controls>
                                                <source src="{{asset('storage/'.$song->url)}}">
                                            </audio>
                                        </div>

                                <!-- Likes, Share & Download -->
                                    <div class="likes-share-download d-flex align-items-center justify-content-between">
                                        <span href="#"><i class="fa  fa-eye" aria-hidden="true"></i> Lượt Xem {{$song->view}}</span>
                                        @endforeach
                                        <div>
                                            <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
                                            <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
@endsection
