<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonKaryawanController extends Controller
{
	
	public function CalonKaryawan(){
        
         $query ='select * from tb_karyawan inner join tb_login_karyawan on tb_karyawan.no_ktp = tb_login_karyawan.no_ktp';

         $calonkaryawan = \DB::SELECT($query);
         
         return view('admin.pages.calonkaryawan',compact('calonkaryawan'));

    }

    public function DetailCalonKaryawan($id){

        $detailkaryawan ='select * from tb_karyawan
            left join tb_login_karyawan on tb_karyawan.no_ktp=tb_login_karyawan.no_ktp
         where tb_karyawan.no_ktp = ?';

    	$querykeahlian ='select * from tb_karyawan
    		left join tb_info_keahlian on tb_karyawan.no_ktp=tb_info_keahlian.no_ktp
    	 where tb_karyawan.no_ktp = ?';

         $querypendidikan ='select * from tb_karyawan
            left join tb_info_pendidikan on tb_karyawan.no_ktp=tb_info_pendidikan.no_ktp
            where tb_karyawan.no_ktp = ?';

         $querybahasa ='select * from tb_karyawan
          left join tb_info_bahasa on tb_karyawan.no_ktp=tb_info_bahasa.no_ktp
         where tb_karyawan.no_ktp = ? ';

         $querykursus = 'select * from tb_karyawan left join tb_info_kursus on
         tb_karyawan.no_ktp = tb_info_kursus.no_ktp
         where tb_karyawan.no_ktp = ?';

         $querypenghargaan = 'select * from tb_karyawan left join tb_info_penghargaan on tb_karyawan.no_ktp=tb_info_penghargaan.no_ktp where tb_karyawan.no_ktp = ?';

         $querypenyakit = 'select * from tb_karyawan left join tb_info_penyakit on tb_karyawan.no_ktp=tb_info_penyakit.no_ktp where tb_karyawan.no_ktp = ?';

        $querykeluarga = 'select * from tb_karyawan left join tb_info_keluarga on tb_karyawan.no_ktp=tb_info_keluarga.no_ktp where tb_karyawan.no_ktp = ?';

        $querypekerjaan = 'select * from tb_karyawan left join tb_info_pekerjaan on tb_karyawan.no_ktp=tb_info_pekerjaan.no_ktp where tb_karyawan.no_ktp = ?';
            
        $queryreferensi = 'select * from tb_karyawan left join tb_info_referensi on tb_karyawan.no_ktp=tb_info_referensi.no_ktp where tb_karyawan.no_ktp = ?';

        $detailkaryawan = \DB::SELECT($detailkaryawan,array($id));
        $keahlian = \DB::SELECT($querykeahlian,array($id));
        $pendidikan = \DB::SELECT($querypendidikan,array($id));
        $bahasa = \DB::SELECT($querybahasa,array($id));
        $kursus = \DB::SELECT($querykursus,array($id));
        $penghargaan = \DB::SELECT($querypenghargaan,array($id));
        $penyakit = \DB::SELECT($querypenyakit,array($id));
        $keluarga = \DB::SELECT($querykeluarga,array($id));
        $pekerjaan = \DB::SELECT($querypekerjaan,array($id));
        $referensi = \DB::SELECT($queryreferensi,array($id));

         if($detailkaryawan == null){

            return redirect('errors.pagenotfound');

        }

        else{

    	return view('admin.pages.detailcalonkaryawan',compact('detailkaryawan','keahlian','pendidikan','bahasa','kursus','penghargaan','penyakit','keluarga','pekerjaan','referensi'));
        }

    }
}
