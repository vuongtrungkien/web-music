<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Interfaces\ParametersInterface;
use App\Http\Services\Interfaces\SongService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Date;

class SongController extends Controller implements ParametersInterface
{
    protected $songService;

    public function __construct(SongService $songService)
    {
        $this->songService = $songService;
    }


    public function getTopOne(Request $request)
    {

//        $songTopOne = $this->songService->getTopSongs(1);
       $songTopOne = $this->songService->getSongRandom();
        $songsNewVNI = $this->songService->getSongNew(ParametersInterface::VIETNAM);



        return view('index', compact('songTopOne','songsNewVNI'));
    }

    public function store(Request $request){


    }




}
