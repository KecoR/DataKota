<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Datakota;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datakota = Datakota::all();

        return view('home', ['datakota' => $datakota]);
    }

    public function create()
    {
        $title = 'Data Baru';

        return view('manage', ['title' => $title]);
    }

    public function edit($idKota) {
        $kota = Datakota::findOrFail($idKota);

        return view('manage', ['title' => 'Edit Data', 'data' => $kota]);
    }

    public function formSave(Request $request) {
        $idKota = $request->id;

        if ($idKota) {
            $kota = Datakota::findOrFail($idKota);
            $type = 'update';
        } else {
            $kota = new Datakota;
        }
    
        $kota->NamaKota = $request->NamaKota;
        $kota->NamaPemimpin = $request->NamaPemimpin;
        $kota->TglBerdiri = $request->TglBerdiri;
        $kota->JmlPenduduk = $request->JmlPenduduk;
        $kota->LuasWilayah = $request->LuasWilayah;
        $kota->JenisKota = $request->JenisKota;
        $kota->Keunggulan = $request->Keunggulan;

        $kota->save();

        return redirect('home');
    }

    public function delete($idKota) {
        $datakota = Datakota::findOrFail($idKota);

        $datakota->delete();

        return redirect('home');
    }
}
