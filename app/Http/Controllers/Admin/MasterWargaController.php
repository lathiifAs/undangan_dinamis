<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data_wargas;
use App\Models\User;

class MasterWargaController extends Controller
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
    public function index(Request $request)
    {
        $main_title = 'Master Data Warga';
        $search = '';
        if ( $request->rt_id != '' || $request->no_kk != '' || $request->nik != '' || $request->nama != '') {
            if ($request->btn_submit == 'search') {
                // init
                $request->rt_id != '' ? $request->rt_id =  $request->rt_id  : $request->rt_id = '%';
                $request->no_kk != '' ? $request->no_kk =  $request->no_kk  : $request->no_kk = '%';
                $request->nik != '' ? $request->nik =  $request->nik  : $request->nik = '%';
                $request->nama != '' ? $request->nama = '%'. $request->nama .'%'  : $request->nama = '%';
                $search = $request;
            }elseif($request->btn_submit == 'reset'){
                $request->rt_id = '%';
                $request->no_kk = '%';
                $request->nik = '%';
                $request->nama = '%';
            }
            $data = Data_wargas::leftJoin('users', 'users.id', '=', 'data_wargas.rt_id')
            ->where('rt_id', 'like', $request->rt_id)
            ->where('no_kk', 'like', $request->no_kk)
            ->where('nik', 'like', $request->nik)
            ->where('nama', 'like', $request->nama)
            ->get();
        }else{
            $data = Data_wargas::leftJoin('users', 'users.id', '=', 'data_wargas.rt_id')->get();
        }

        $rt = User::where('role', 'rt')->get();
        return view('admin.master_warga.index', compact('main_title', 'data', 'rt', 'search'));
    }

    public function getWargaRt(Request $request)
    {
        $warga = Data_wargas::where('nik', $request->nik)->get();
        return response()->json(['code' => '200', 'msg' => 'Success', 'result' => $warga], 201);
    }

    // public function add()
    // {
    //     $main_title = 'Master Data Warga';
    //     return view('admin.master_warga.add', compact('main_title'));
    // }

    // public function add_process(Request $request)
    // {
    //     $rt_id = auth()->user()->id;

    //     $send = Data_wargas::create([
    //         'nik' => $request->nik,
    //         'rt_id' => $rt_id,
    //         'no_kk' => $request->no_kk,
    //         'nama' => $request->nama,
    //         'jns_kel' => $request->jns_kel,
    //         'tmpt_lahir' => $request->tmpt_lahir,
    //         'tgl_lahir' => $request->tgl_lahir,
    //         'agama' => $request->agama,
    //         'gol_darah' => $request->gol_darah,
    //         'st_kawin' => $request->st_kawin,
    //         'kewarganegaraan' => $request->kewarganegaraan,
    //         'alamat' => $request->alamat,
    //     ]);

    //     if ($send) {
    //         return redirect()
    //             ->route('rt/master_warga/add')
    //             ->with([
    //                 'success' => 'Data berhasil dikirim.'
    //             ]);
    //     } else {
    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->with([
    //                 'error' => 'Ada kesalahan, coba lagi !'
    //             ]);
    //     }
    // }
}
