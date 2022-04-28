<?php

namespace App\Http\Controllers\Rt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data_pengajuans;
use App\Models\Data_wargas;

class RtPelayananController extends Controller
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
    {   $main_title = 'Pengajuan Pelayanan';

        $data = Data_pengajuans::leftJoin('data_wargas', 'data_wargas.nik', '=', 'data_pengajuans.nik')
        ->leftJoin('users', 'users.id', '=', 'data_pengajuans.rt_id')
        ->where('data_pengajuans.rt_id', auth()->user()->id)
        ->orderBy('data_pengajuans.created_at', 'desc')
        ->get(['data_pengajuans.*', 'data_wargas.nama', 'data_wargas.alamat', 'users.name as nama_rt']);
        // $data = Data_pengajuans::latest()->get();
        return view('rt.pelayanan.index', compact('main_title', 'data'));
    }

    public function add()
    {
        $warga = Data_wargas::where('rt_id', auth()->user()->id)->get();
        $main_title = 'Pengajuan Pelayanan';
        return view('rt.pelayanan.add', compact('main_title', 'warga'));
    }

    public function add_process(Request $request)
    {
        $rt_id = auth()->user()->id;

        $send = Data_pengajuans::create([
            'nik' => $request->nik,
            'rt_id' => $rt_id,
            'jns_pengajuan' => $request->jns_pengajuan,
            'nama_usaha' => $request->nama_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'diperuntukan' => $request->diperuntukan,
            'alamat_pertama' => $request->alamat_pertama,
            'alamat_kedua' => $request->alamat_kedua,
            'keterangan' => $request->ket,
        ]);

        if ($send) {
            return redirect()
                ->route('rt/pelayanan/add')
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
