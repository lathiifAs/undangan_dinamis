<?php

namespace App\Http\Controllers;

use App\Models\Acaras;
use Illuminate\Http\Request;

class TestingController extends Controller
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
        $data = Acaras::where('id', 1)->first();
        return view($data['jenis_template'], compact('data'));
    }
}
