<?php


namespace App\Http\Controllers;

use App\Models\cover_gambar;
use App\Models\CoverFoto;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
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
        
        return view('manage.coverFoto', [
            "gambar" => cover_gambar::all()
        ]);
    }

    public function uploadFoto(Request $request)
    {
        
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        
        if ($request->hasfile('filename')) {   
                     
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);

             cover_gambar::create(
                    [  
                        'user_id' => $request['user_id'],                      
                        'gambar_nama' =>$filename,
                    ]
                );
                return view('manage.coverFoto',[
                    "gambar" => cover_gambar::all()
                ]);
        }else{
            echo'Gagal';
        }
       
    }

    public function editcoverFoto()
    {
        
        return view('manage.edit-coverFoto', [
            "gambar" => cover_gambar::all()
        ]);
    }

    public function updatecoverFoto(Request $request, Cover_gambar $cover)
    {
        
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png,file|max:2000'
        ]);
        


       if($request->file('filename')){
        if($request->gambar_lama){
            Storage::delete($request->gambar_lama);  
        }
 
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);
            $validasi['user_id'] = auth()->user()->id;
            $validasi['gambar_nama'] = $filename;

            $ganti = Cover_gambar::where('id', $request->id)->update([
                'user_id' => auth()->user()->id,
                'gambar_nama' => $filename
            ]);
           
        }     
        return view('manage.edit-coverFoto')->with('success', 'Post edited successfully');
    }
       
}

