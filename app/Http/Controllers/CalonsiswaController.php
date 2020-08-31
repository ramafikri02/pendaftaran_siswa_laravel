<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonsiswaController extends Controller
{
    public function index() {
        return "Tabel Data Calon Siswa";
    }

    public function create() {
        return view('form-pendaftaran');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            /*
            $table->id();
            $table->string('noppdb');
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->string('alamat');
            $table->string('nohp');
            $table->timestamps();
            */
            'noppdb'=>'required|size:10',
            'nama'=>'required|min:3|max:60',
            'asal_sekolah'=>'required',
            'pilihan1'=>'required',
            'pilihan2'=>'required',
            'alamat'=>'required',
            'nohp'=>'required',
        ]);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->noppdb = $validateData['noppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->nohp = $validateData['nohp'];
        $calonsiswa->save();

        return "Data Berhasil di Simpan ke Database." ;
    }

    public function show($calonsiswa) {
        dd('$calonsiswa');
    }
}
