@extends('layouts.home')
@section('title','NightCore Z')
@section('content')

    <div class="breadcumb-area single-podcast-breadcumb bg-img bg-overlay" style="background-image: url({{asset('./storage/img/thum.jpg')}});position: relative;top: 0px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Music Area -->
                    <div class="poca-music-area style-2 bg-transparent mb-0">
                        <div class="poca-music-content text-center">
                            <span class="music-published-date mb-2">{{@date_format($song->created_at,'d-m-Y')}}</span>
                            <h2 class="text-white">{{$song->name}} </h2>
                            <div class="music-meta-data">
                                <p class="text-white">By <a href="#" class="text">{{$song->singer->name}}</a> </p>
                            </div>
                            <!-- Music Player -->
                            <div class="poca-music-player style-2">
                                <audio preload="auto" controls>
                                    <source src="{{asset('storage/'.$song->url)}}">
                                </audio>
                            </div>
                            <!-- Likes, Share & Download -->
                            <div class="likes-share-download d-flex align-items-center justify-content-between">
                                <span class="text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lượt Xem ({{$song->view}})</span>
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

@endsection
