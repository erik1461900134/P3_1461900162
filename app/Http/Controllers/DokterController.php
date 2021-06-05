<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Kamar;
use App\Models\Pasien;
use App\Models\User;

class DokterController extends Controller
{
    public function index(){
        $pasien = Pasien::all();
        return view('welcome',[
            'pasien' => $pasien
        ]);
    }

    public function search($key){
        $kamar = Kamar::where('');
        return view('kamar0162',[
            'kamar' => $kamar
        ]);
        }
    public function tambah(){
        $kamar = Kamar::all();
        $pasien = Pasien::all();
        return view('tambah-dokter0162',[
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function edit ($id){
        $kamar = Kamar::all();
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('edit-dokter0162',[
            'dokter' => $dokter,
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function update(Request $request, $id){
        Transaksi::where('id',$id)->update([
            'id_pasien'=>$request->id_pasien,
            'id_kamar'=>$request->id_kamar

        ]);
    }

    public function destroy($id){
        $dokter = Dokter::where('id',$id)->first();
        $dokter->delete();
        return redirect()->route('hapus');
    }
}
