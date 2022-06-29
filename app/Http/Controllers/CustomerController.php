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
        return view('manage.landingpage');
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

}

