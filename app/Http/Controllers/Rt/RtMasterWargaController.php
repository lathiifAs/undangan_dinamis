<?php

namespace App\Http\Controllers\Rt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data_wargas;

class RtMasterWargaController extends Controller
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
        $main_title = 'Master Data Warga';
        $data = Data_wargas::latest()->get();
        return view('rt.master_warga.index', compact('main_title', 'data'));
    }

    public function getWargaRt(Request $request)
    {
        $warga = Data_wargas::where('nik', $request->nik)->get();
        return response()->json(['code' => '200', 'msg' => 'Success', 'result' => $warga], 201);
    }

    public function add()
    {
        $main_title = 'Master Data Warga';
        return view('rt.master_warga.add', compact('main_title'));
    }

    public function add_process(Request $request)
    {
        $rt_id = auth()->user()->id;

        $send = Data_wargas::create([
            'nik' => $request->nik,
            'rt_id' => $rt_id,
            'no_kk' => $request->no_kk,
            'nama' => $request->nama,
            'jns_kel' => $request->jns_kel,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'st_kawin' => $request->st_kawin,
            'kewarganegaraan' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
        ]);

        if ($send) {
            return redirect()
                ->route('rt/master_warga/add')
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
    }
}
