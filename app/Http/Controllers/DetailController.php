<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($postnumber)
    {
        return view('detail.index');
    }

    public function index($postnumber)
    {
        dd($postnumber);
        return view('detail');
    }
}
