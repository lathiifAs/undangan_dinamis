<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data_pengajuans;
use App\Models\Data_wargas;
use App\Models\User;

class PelayananController extends Controller
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

    public function dashboard()
    // {   $main_title = 'Grafik Pelayanan dan Penilaian';
        {
            $main_title = 'Grafik aktifitas pelayanan RT RW';


        $data = Data_pengajuans::leftJoin('data_wargas', 'data_wargas.nik', '=', 'data_pengajuans.nik')
        ->leftJoin('users', 'users.id', '=', 'data_pengajuans.rt_id')
        ->orderBy('data_pengajuans.created_at', 'desc')
        ->get(['data_pengajuans.*', 'data_wargas.nama', 'data_wargas.alamat', 'users.name as nama_rt']);
        // $data = Data_pengajuans::latest()->get();
        $rt = User::where('role', 'rt')->get();

        return view('admin.pelayanan.dashboard', compact('main_title', 'data', 'rt'));
    }

    public function index(Request $request)
    {
        $main_title = 'Pengajuan Pelayanan';

        // dd($request->jns_pengajuan);

        $search = '';
        if ( $request->rt_id != '' || $request->no_kk != '' || $request->nik != '' || $request->nama != '' || $request->jns_pengajuan != '') {
            if ($request->btn_submit == 'search') {
                // init
                $request->rt_id != '' ? $request->rt_id =  $request->rt_id  : $request->rt_id = '%';
                $request->no_kk != '' ? $request->no_kk =  $request->no_kk  : $request->no_kk = '%';
                $request->nik != '' ? $request->nik =  $request->nik  : $request->nik = '%';
                $request->nama != '' ? $request->nama = '%'. $request->nama .'%'  : $request->nama = '%';
                $request->jns_pengajuan != '' ? $request->jns_pengajuan =  $request->jns_pengajuan  : $request->jns_pengajuan = '%';
                $search = $request;
            }elseif($request->btn_submit == 'reset'){
                $request->jns_pengajuan = '%';
                $request->rt_id = '%';
                $request->no_kk = '%';
                $request->nik = '%';
                $request->nama = '%';
            }

            $data = Data_pengajuans::leftJoin('data_wargas', 'data_wargas.nik', '=', 'data_pengajuans.nik')
            ->leftJoin('users', 'users.id', '=', 'data_pengajuans.rt_id')
            ->where('data_pengajuans.rt_id', 'like', $request->rt_id)
            ->where('data_wargas.no_kk', 'like', $request->no_kk)
            ->where('data_wargas.nik', 'like', $request->nik)
            ->where('data_wargas.nama', 'like', $request->nama)
            ->where('data_pengajuans.jns_pengajuan', 'like', $request->jns_pengajuan)
            ->orderBy('data_pengajuans.created_at', 'desc')
            ->get(['data_pengajuans.*', 'data_wargas.nama', 'data_wargas.alamat', 'users.name as nama_rt']);

        }else{
            $data = Data_pengajuans::leftJoin('data_wargas', 'data_wargas.nik', '=', 'data_pengajuans.nik')
            ->leftJoin('users', 'users.id', '=', 'data_pengajuans.rt_id')
            ->orderBy('data_pengajuans.created_at', 'desc')
            ->get(['data_pengajuans.*', 'data_wargas.nama', 'data_wargas.alamat', 'users.name as nama_rt']);
        }


        $rt = User::where('role', 'rt')->get();
        return view('admin.pelayanan.index', compact('main_title', 'data', 'rt', 'search'));
    }

    public function add()
    {
        $warga = Data_wargas::where('rt_id', auth()->user()->id)->get();
        $main_title = 'Pengajuan Pelayanan';
        return view('admin.pelayanan.add', compact('main_title', 'warga'));
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
