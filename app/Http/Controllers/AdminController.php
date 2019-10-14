<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidation;
use App\Http\Services\Interfaces\CategoryService;
use App\Http\Services\Interfaces\SingerService;
use App\Http\Services\Interfaces\SongService;
use App\Http\Services\Interfaces\UserService;
use App\Http\Services\Interfaces\VideoService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $userService;
    protected $categoryService;
    protected $singerService;
    protected $songService;
    protected $videoService;


    public function __construct(UserService $userService, CategoryService $categoryService,
                                SingerService $singerService, SongService $songService, VideoService $videoService)
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->singerService = $singerService;
        $this->songService = $songService;
        $this->videoService = $videoService;

    }

    public function index()
    {
        return view('admin.index');
    }

    public function getFormUploadMusic()
    {

        $categories = $this->categoryService->getAll();
        $singers = $this->singerService->getAll();
        return view('admin.song.upload', compact('categories', 'singers'));
    }


    public function storeMusic(Request $request)
    {

        $this->songService->create($request);
        return redirect()->route('admin.index');
    }


}
