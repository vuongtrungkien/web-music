<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('index');
    }




    public function showPageGuest()

    {

        if (!$this->userCan('view-page-guest')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));

        }

        return redirect()->route('index');

    }


    public function showPageAdmin()

    {

        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));

        }

        return view('admin.index');

    }




}
