<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class AnggotaController extends Controller
{
     /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function getLokasi($search = null){  
    	$lokasi = DB::table('inf_lokasi')
                ->where('lokasi_nama','LIKE',"%$search%")
                ->where('lokasi_kabupatenkota','<>','00')
                ->where('lokasi_nama','<>','')
                ->orderBy('lokasi_nama')
                ->paginate(10);         

        return response()->json($lokasi);
    }

    public function getProfesi(){
        $profesi = DB::table('daftar_kerja')
                    ->select('id','jenis_pekerjaan')
                    ->orderBy('jenis_pekerjaan')
                    ->get();                   

        return response()->json($profesi);
    }

    public function addAnggotaOrari(Request $request){

        $anggota = array(
                'callsign' => $request->input('callsign'),
                'nama' => $request->input('nama'),
                'nri' => $request->input('nri'),
                'kta' => date("Y-m-d", strtotime($request->input('kta'))),
                'noktp' => $request->input('ktp'),
                'sex' => $request->input('sex'),
                'idlokasi' => $request->input('tmplhrid'),
                'tgllahir' => date("Y-m-d", strtotime($request->input('tgllhr'))),
                'alamat' => $request->input('alamat'),
                'agama' => $request->input('agama'),
                'goldarah' => $request->input('gol'),
                'idprofesi' => $request->input('profesi'),
                'telepon' => $request->input('phone'),
                'email' => $request->input('email'),
                'noskar' => $request->input('skar'),
                'tglskar' => date("Y-m-d", strtotime($request->input('tglskar'))),
                'noiar' => $request->input('iar'),
                'tgliar' => date("Y-m-d", strtotime($request->input('tgliar'))) 
            );

        if($request->input('actions')=='add'){
            $result = DB::table('anggota')->insert($anggota);
        }else if($request->input('actions')=='edit'){
            $result = DB::table('anggota')
                        ->where('id',$request->input('id'))
                        ->update($anggota);
        }


        return response()->json($result);
    }

    public function daftarAnggotaOrari(Request $request){
        $pageSize = $request->input('pageSize');
        $search = null;
        if($request->input('search')!="undefined"){
            $search = $request->input('search');    
        }
        
        $anggota = DB::table('anggota')
                    ->join('inf_lokasi','anggota.idlokasi','=','inf_lokasi.lokasi_ID')
                    ->join('daftar_kerja','anggota.idprofesi','=','daftar_kerja.id')
                    ->where('anggota.callsign','LIKE',"%$search%")
                    ->select('anggota.id','callsign','nama','nri','kta','noktp','sex','inf_lokasi.lokasi_nama','anggota.idlokasi','tgllahir','alamat',
                        DB::raw('CASE agama 
                                    when "I" then "Islam" 
                                    when "K" then "Kristen" 
                                    when "P" then "Protestan" 
                                    when "H" then "Hindu" 
                                    when "B" then "Budha" 
                                    when "KH" then "Kong Hu Chu" 
                                END as agama'),
                        'goldarah','daftar_kerja.jenis_pekerjaan','telepon','email','noskar','tglskar','noiar','tgliar'
                        )->paginate($pageSize);
                   

        return response()->json($anggota);

    }

    public function getAnggotaById($id){
        $anggota = DB::table('anggota')
                    ->join('inf_lokasi','anggota.idlokasi','=','inf_lokasi.lokasi_ID')
                    ->where('id',$id)
                    ->select('anggota.*','inf_lokasi.lokasi_nama')
                    ->get();

        return response()->json(array('anggota'=>$anggota));
    }

    public function deleteAnggota(Request $request){
        $result = DB::table('anggota')->where('id',$request->input('id'))->delete();

        return response()->json($result);
    }
}
