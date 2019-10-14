<?php

namespace App\Http\Controllers;

use App\Http\Services\Interfaces\VideoService;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    protected $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }
}
