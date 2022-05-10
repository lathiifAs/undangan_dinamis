<?php

namespace App\Http\Controllers\Rt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data_wargas;
use Illuminate\Support\Facades\DB;

// spreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

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
            'vaksin_level' => $request->vaksin_level,
            'listrik' => $request->listrik,
            'pdam' => $request->pdam,
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

    // import excel

    // import excel
    function importData(Request $request){
        $this->validate($request, [
            'uploaded_file' => 'required|file|mimes:xls,xlsx'
        ]);
        $the_file = $request->file('uploaded_file');
        try{
            $spreadsheet = IOFactory::load($the_file->getRealPath());
            $sheet        = $spreadsheet->getActiveSheet();
            $row_limit    = $sheet->getHighestDataRow();
            $column_limit = $sheet->getHighestDataColumn();
            $row_range    = range( 6, $row_limit );
            $column_range = range( 'W', $column_limit );
            $startcount = 6;
            $data = array();

            $rt_id = auth()->user()->id;

            foreach ( $row_range as $row ) {

                if ($sheet->getCell( 'D' . $row )->getValue() != '') {
                    $st_kawin = '';
                    if ($sheet->getCell( 'J' . $row )->getValue() == 'KAWIN') {
                        $st_kawin = 'kawin';
                    }elseif ($sheet->getCell( 'J' . $row )->getValue() == 'BELUM KAWIN') {
                        $st_kawin = 'belum_kawin';
                    }elseif ($sheet->getCell( 'J' . $row )->getValue() == 'JANDA') {
                        $st_kawin = 'janda';
                    }elseif ($sheet->getCell( 'J' . $row )->getValue() == 'DUDA') {
                        $st_kawin = 'duda';
                    }elseif ($sheet->getCell( 'J' . $row )->getValue() == 'CERAI MATI') {
                        $st_kawin = 'cerai_mati';
                    }elseif ($sheet->getCell( 'J' . $row )->getValue() == 'CERAI HIDUP') {
                        $st_kawin = 'cerai_hidup';
                    }

                    $data[] = [
                        'rt_id' => $rt_id,

                        'no_kk' => $sheet->getCell( 'B' . $row )->getValue(),
                        'nama' => $sheet->getCell( 'C' . $row )->getValue(),
                        'nik' =>$sheet->getCell( 'D' . $row )->getValue(),
                        'tgl_lahir' => strval($sheet->getCell( 'E' . $row )->getFormattedValue()),
                        'alamat' =>$sheet->getCell( 'F' . $row )->getValue(),
                        'gang' =>$sheet->getCell( 'G' . $row )->getValue(),
                        'pekerjaan' =>$sheet->getCell( 'H' . $row )->getValue(),
                        'jns_kel' => $sheet->getCell( 'I' . $row )->getValue(),
                        'st_kawin' => $st_kawin,
                        'listrik' =>$sheet->getCell( 'U' . $row )->getValue() == '' ? '0' : $sheet->getCell( 'U' . $row )->getValue(),
                        'pdam' =>$sheet->getCell( 'V' . $row )->getValue() == '' ? '0' : $sheet->getCell( 'V' . $row )->getValue(),
                        'vaksin_level' =>$sheet->getCell( 'W' . $row )->getValue() == '' ? '0' : $sheet->getCell( 'W' . $row )->getValue(),

                    ];
                    // Data_wargas::create([
                    //         'rt_id' => $rt_id,

                    //         'no_kk' => $sheet->getCell( 'B' . $row )->getValue(),
                    //         'nama' => $sheet->getCell( 'C' . $row )->getValue(),
                    //         'nik' =>$sheet->getCell( 'D' . $row )->getValue(),
                    //         'tgl_lahir' => $sheet->getCell( 'E' . $row )->getFormattedValue(),
                    //         'alamat' =>$sheet->getCell( 'F' . $row )->getValue(),
                    //         'gang' =>$sheet->getCell( 'G' . $row )->getValue(),
                    //         'pekerjaan' =>$sheet->getCell( 'H' . $row )->getValue(),
                    //         'jns_kel' => $sheet->getCell( 'I' . $row )->getValue(),
                    //         'st_kawin' => $st_kawin,
                    //         'listrik' =>$sheet->getCell( 'U' . $row )->getValue() == '' ? 0 : $sheet->getCell( 'U' . $row )->getValue(),
                    //         'pdam' =>$sheet->getCell( 'V' . $row )->getValue() == '' ? 0 : $sheet->getCell( 'V' . $row )->getValue(),
                    //         'vaksin_level' =>$sheet->getCell( 'W' . $row )->getValue() == '' ? 0 : $sheet->getCell( 'W' . $row )->getValue(),

                    //     ]);
                    // $startcount++;
                }
                    // 'tmpt_lahir' =>$sheet->getCell( 'F' . $row )->getValue(),
                    // 'agama' =>$sheet->getCell( 'F' . $row )->getValue(),
                    // 'gol_darah' =>$sheet->getCell( 'F' . $row )->getValue(),
                    // 'kewarganegaraan' =>$sheet->getCell( 'F' . $row )->getValue(),
            }

            // dd($data);

            $insert = DB::table('data_wargas')->insert($data);
            if ($insert) {
                return redirect()
                    ->route('rt/master_warga')
                    ->with([
                        'success' => 'Data berhasil diimport.'
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Ada kesalahan, coba lagi !'
                    ]);
            }
        } catch (Exception $e) {
            $error_code = $e->errorInfo[1];
            return back()->withErrors('There was a problem uploading the data!');
        }
        return back()->withSuccess('Great! Data has been successfully uploaded.');
    }
}
