<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mobil;

class MobilController extends Controller
{
    public function tampilMobil(){
        return Mobil::all();
    }

    public function tampilMobilById($id){
        return Mobil::find($id);
    }

    public function tambahMobil(Request $request){
        $newMobil = new \App\Mobil;
        $newMobil->pabrikan = $request->pabrikan;
        $newMobil->tipe = $request->tipe;
        $newMobil->warna = $request->warna;
        $newMobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $newMobil->harga_sewa = $request->harga_sewa;

        $newMobil->save();

        return "Berhasil disimpan";
    }
    
    public function ubahMobil(Request $request, $id){
        $mobil = \App\Mobil::find($id);

        $mobil->pabrikan = $request->pabrikan;
        $mobil->tipe = $request->tipe;
        $mobil->warna = $request->warna;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->harga_sewa = $request->harga_sewa;

        $mobil->save();

        return "Berhasil diubah";
    }

    public function hapusMobil($id){
        $mobil = \App\Mobil::find($id);

        $mobil->delete();

        return "Berhasil dihapus";
    }

}
