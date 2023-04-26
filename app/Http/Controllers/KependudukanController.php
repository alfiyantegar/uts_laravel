<?php

namespace App\Http\Controllers;

use App\Models\Kependudukan;

use Illuminate\Http\Request;
use PDF;

use App\Exports\KependudukanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class KependudukanController extends Controller
{
    
        public function index()
        {
            return view('index');
        }

        public function tampil()
        {
        $data=kependudukan::All();
        return view('kependudukan',['data'=>$data]);
        }

        public function tambah()
        {
            return view('tambah');
        }

        public  function simpan(request $request)
        {
            $data=array(
                "nik"=>$request->nik,
                "nama"=>$request->nama,
                "alamat"=>$request->alamat,
                "tempat_lahir"=>$request->tempat_lahir,
                "tanggal_lahir"=>$request->tanggal_lahir,
                "agama"=>$request->agama,
                "pendidikan"=>$request->pendidikan,
                "jenis_kelamin"=>$request->jenis_kelamin,
            );

            $data=kependudukan::create($data);
            if($data){
                return redirect('/kependudukan')->with(array('status'=>true,'berhasil tambah data'));
            }else{
                return json_encode(array('status'->false,'pesan'=>'gagal tambah data'));
            }

        }
        public function edit(request $request)
        {
            $data=kependudukan::where("nik",$request->nik)->update(array(
                "nik"=>$request->nik,
                "nama"=>$request->nama,
                "alamat"=>$request->alamat,
                "tempat_lahir"=>$request->tempat_lahir,
                "tanggal_lahir"=>$request->tanggal_lahir,
                "agama"=>$request->agama,
                "pendidikan"=>$request->pendidikan,
                "jenis_kelamin"=>$request->jenis_kelamin,
            ));
            
            if($data){
                return redirect('/kependudukan')->with(array('status'=>true,'berhasil ubah data'));
            }else{
                return json_encode(array('status'=>false,'pesan'=>"gagal ubah data"));
            }
        }            
        public function ubah($nik){
            $data=kependudukan::where('nik',$nik)->get();
            return view('ubah',['data'=>$data]);
        }
        public function hapus($nik)
        {
            $data = kependudukan::where("nik",$nik)->delete();
            
            if ($data){
                return redirect('/kependudukan')->with(array('status'=>true,'berhasil hapus data'));
            }else{
                return json_encode(array(
                    'status'=>false,
                    'pesan'=>"gagal hapus"
                ));


            }


        }
        public function cetak_pdf()
        {
            $kpnd = kependudukan::all();

            $pdf = PDF::loadview('pdf',['kpnd'=>$kpnd]);
            return $pdf->download('laporan-kependudukan.pdf');


        }
        public function export_excel()
        {
            return Excel::download(new kependudukanExport,'kependudukan.xlsx');
        }
}


