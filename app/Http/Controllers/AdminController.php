<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        'username' => str_replace(' ','_', $request['name'])
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

    //edit data register 
    public function editData($id){
        $edit = User::findOrFail($id);

        return view('admin/register_edit', compact('edit')); 
    }

    public function updateData(Request $request){
        $id = $request->id;
        $update = User::findOrFail($id);
        $edit = $update;
        // Cek jika password kosong!
        if (empty($request['password'])) {
            $update->update([
                'name' => $request['name'],
                'no_hp' =>$request['no_hp'],
                'tgl_expired' => $request['expired'],
                'jenis_paket' => $request['paket'],
                'username' => str_replace(' ', '_', $request['name']),
           
            ]);
        }else{
            $update->update([
                'name' => $request['name'],
                'password' => Hash::make($request['password']),
                'no_hp' =>$request['no_hp'],
                'tgl_expired' => $request['expired'],
                'jenis_paket' => $request['paket'],
                'username' => str_replace(' ', '_', $request['name']),
           
            ]);
        }

        if ($update) {
            return redirect()
                ->route('admin/editData', $id)
                ->with([
                    'success' => 'Data berhasil dirubah.'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Ada kesalahan, coba lagi !'
                ]);
    
        }

        //return redirect()->route('admin/register-edit'); 
    }



    //hapus data registrasi
    public function destroy(Request $request)
    {
        $hapus = User::findOrFail($request->id);
        $hapus->delete();

        //if belum berjalan
        if ($hapus) {
            return redirect()
            ->route('admin')
            ->with([
                'success' => 'Data berhasil di hapus'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, coba lagi!'
                ]);
        }

        
    }
}
