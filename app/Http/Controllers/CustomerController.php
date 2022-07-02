<?php


namespace App\Http\Controllers;

use App\Models\Acaras;
use App\Models\cover_gambar;
use App\Models\CoverFoto;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
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
        $get_acara_by_user = Acaras::where('user_id',  auth()->user()->id)
        ->first();
        $acara_id = $get_acara_by_user->id;
        return view('manage.landingpage', compact('acara_id'));
    }

    //Gambar cover
    public function coverFoto()
    {
        $get_acara_by_user = Acaras::where('user_id',  auth()->user()->id)
        ->first();
        $acara_id = $get_acara_by_user->id;
        $data =cover_gambar::leftJoin('acaras', 'cover_gambars.acara_id', '=', 'acaras.id')
        ->select('cover_gambars.*', 'acaras.id as acara_id')
        ->where('acara_id', $acara_id)
        ->first();

        // dd($data);

        return view('manage.coverFoto', compact('data', 'acara_id'));
    }

    public function uploadFoto(Request $request)
    {

        $request->validate([
            'filename' => 'required',
            'acara_id' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);

        if ($request->hasfile('filename')) {

            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);

             $send = cover_gambar::create(
                    [
                        'acara_id' => $request['acara_id'],
                        'gambar_path' => 'images/',
                        'gambar_nama' =>$filename,
                    ]
                );
                // return view('manage.coverFoto',[
                //     "gambar" => cover_gambar::all()
                // ]);

                if ($send) {
                    return redirect()
                        ->route('customer/coverFoto')
                        ->with([
                            'success' => 'New send has been created successfully'
                        ]);
                } else {
                    return redirect()
                        ->back()
                        ->withInput()
                        ->with([
                            'error' => 'Some problem occurred, please try again'
                        ]);
                }

        }else{
            echo'Gagal';
        }

    }

    public function editcoverFoto($id)
    {
        $data = Cover_gambar::where('id', $id)->first();
        // dd($data);
        return view('manage.edit-coverFoto', compact('data'));

        // view('manage.edit-coverFoto', [
        //     "gambar" => cover_gambar::all()
        // ]);
    }

    public function updatecoverFoto(Request $request)
    {
        $request->validate([
            'gambar_path_lama' => 'required',
            'gambar_lama' => 'required',
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png,file|max:2000'
        ]);



       if($request->file('filename')){
        if($request->gambar_lama){
            File::delete($request->gambar_path_lama.$request->gambar_lama);
        }

            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);
            $validasi['user_id'] = auth()->user()->id;
            $validasi['gambar_nama'] = $filename;

            $id = $request->id;

            $send = cover_gambar::findOrFail($id);

            $send->update([
                'gambar_path' => $request->gambar_path_lama,
                'gambar_nama' => $filename,
            ]);

            if ($send) {
                return redirect()
                ->route('customer/editcoverFoto', $id)
                ->with([
                    'success' => 'New send has been updated successfully'
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Some problem has occured, please try again'
                    ]);
            }
        }
    }

    public function undangan($id)
    {
        $data = Acaras::where('id', $id)->first();
        // dd($data);
        return view('manage.undangan', compact('data'));

        // view('manage.edit-coverFoto', [
        //     "gambar" => cover_gambar::all()
        // ]);
    }

    public function updateUndangan(Request $request)
    {

        $request->validate([
            'acara_id' => 'required',

            'tanggal_wedding' => 'required',
            'nama_laki' => 'required',
            'nama_panggilan_laki' => 'required',
            'ayah_mempelai_laki' => 'required',
            'ibu_mempelai_laki' => 'required',
            'desc_laki' => 'required',

            'nama_wanita' => 'required',
            'nama_panggilan_wanita' => 'required',
            'ayah_mempelai_wanita' => 'required',
            'ibu_mempelai_wanita' => 'required',
            'desc_wanita' => 'required',

            'lokasi_hajat' => 'required',

            'tgl_akad' => 'required',
            'start_jam_akad' => 'required',
            'end_jam_akad' => 'required',
            'alamat_akad' => 'required',
            'link_alamat_akad' => 'required',

            'tgl_resepsi' => 'required',
            'start_jam_resepsi' => 'required',
            'end_jam_resepsi' => 'required',
            'alamat_resepsi' => 'required',
            'link_alamat_resepsi' => 'required',
        ]);

        $id = $request->acara_id;

        $send = Acaras::findOrFail($id);

        $send->update([
            'acara_id' => $id,

            'tanggal_wedding' => $request->tanggal_wedding,
            'nama_laki' => $request->nama_laki,
            'nama_panggilan_laki' => $request->nama_panggilan_laki,
            'ayah_mempelai_laki' => $request->ayah_mempelai_laki,
            'ibu_mempelai_laki' => $request->ibu_mempelai_laki,
            'desc_laki' => $request->desc_laki,

            'nama_wanita' => $request->nama_wanita,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'ayah_mempelai_wanita' => $request->ayah_mempelai_wanita,
            'ibu_mempelai_wanita' => $request->ibu_mempelai_wanita,
            'desc_wanita' => $request->desc_wanita,

            'lokasi_hajat' => $request->lokasi_hajat,

            'tgl_akad' => $request->tgl_akad,
            'start_jam_akad' => $request->start_jam_akad,
            'end_jam_akad' => $request->end_jam_akad,
            'alamat_akad' => $request->alamat_akad,
            'link_alamat_akad' => $request->link_alamat_akad,

            'tgl_resepsi' => $request->tgl_resepsi,
            'start_jam_resepsi' => $request->start_jam_resepsi,
            'end_jam_resepsi' => $request->end_jam_resepsi,
            'alamat_resepsi' => $request->alamat_resepsi,
            'link_alamat_resepsi' => $request->link_alamat_resepsi,
        ]);

        if ($send) {
            return redirect()
            ->route('customer/undangan', $id)
            ->with([
                'success' => 'New send has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }

    }

}

