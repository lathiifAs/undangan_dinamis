<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
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
        $data = User::latest()->where('role', '=', 'customer')->get();
        return view('admin.index', compact('data'));
    }

    public function register()
    {
        return view('admin.register');
    }

    public function inputData(Request $request){
    $send = User::create([
        'name' => $request['name'],
        'password' => Hash::make($request['password']),
        'no_hp' =>$request['no_hp'],
        'tgl_expired' => $request['expired'],
        'jenis_paket' => $request['paket'],
        'username' => str_replace(' ', '_', $request['name']),
    ]);
    if ($send) {
        return redirect()
            ->route('admin/register')
            ->with([
                'success' => 'Data berhasil dikirim.'
            ]);
    } else {
        return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'Ada kesalahan, coba lagi !'
            ]);

    }
    
    //return view('admin.register');
    }
}
