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

        $songsTopVNI = $this->songService->getTopSongs(5, self::VIETNAM);
        $songsTopUs = $this->songService->getTopSongs(5, self::US_UK);
        $songRandom = $this->songService->getSongRandom();
        $songsNewVNI = $this->songService->getSongNew(ParametersInterface::VIETNAM);
        $songsNewUs = $this->songService->getSongNew(ParametersInterface::US_UK);


        return view('index', compact('songRandom', 'songsNewVNI', 'songsNewUs', 'songsTopVNI', 'songsTopUs'));
    }


    public function playSong($song_id)
    {
        $song = $this->songService->findById($song_id);
        return view('play',compact('song'));
    }

    public function store(Request $request)
    {


    }


}
