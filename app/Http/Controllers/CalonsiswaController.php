<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonsiswaController extends Controller
{
    public function index() {
        $csb = Calonsiswa::all();
        return view('indexcalonsiswa', ['calonsiswa' => $csb]);
    }

    public function create() {
        return view('form-pendaftaran');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
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

        return redirect()->route('calonsiswa.index')->with('pesanSuccess', "Data  {$validateData['nama']} berhasil di Tambahkan!");;
    }

    public function show($calonsiswa)
    {
        // dd($calonsiswa);
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_calon', ['calonsiswa' => $result]);
    }

    public function delete($calonsiswa)
    {
        $siswa = Calonsiswa::find($calonsiswa);
        $calonsiswa = $siswa->delete();

        return redirect()->route('calonsiswa.index')->with('pesanDanger', "Data  {$siswa['nama']} berhasil di Hapus!");
    }

    public function edit($calonsiswa) {
        $result = Calonsiswa::find($calonsiswa);
        return view('form-edit', ['calonsiswa' => $result]);
    }

    public function prosesEdit(Request $request, Calonsiswa $calonsiswa) {
        $validateData = $request->validate([
            'noppdb'=>'required|size:10',
            'nama'=>'required|min:3|max:60',
            'asal_sekolah'=>'required',
            'pilihan1'=>'required',
            'pilihan2'=>'required',
            'alamat'=>'required',
            'nohp'=>'required',
        ]);
        $calonsiswa::where('id', $calonsiswa->id)->update($validateData);
        return redirect()->route('calonsiswa.index')->with('pesanSuccess', "Data  {$validateData['nama']} berhasil di Ubah!");
    }
}