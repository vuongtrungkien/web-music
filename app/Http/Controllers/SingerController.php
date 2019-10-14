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
}
