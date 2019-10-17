<?php

namespace App\Http\Controllers;

use App\Http\Services\Interfaces\SingerService;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    protected $singerService;

    public function __construct(SingerService $singerService)
    {
        $this->singerService = $singerService;
    }

    public function showPageAddSinger()
    {
        return view('admin.singer.add');

    }

    public function storeSinger(Request $request)
    {
        $this->singerService->create($request);
        return back();
    }

    public function showPageListSinger()
    {
        $singers = $this->singerService->getAll();
        return view('admin.singer.list',compact('singers'));
    }


}
