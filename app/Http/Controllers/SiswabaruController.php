<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

use function GuzzleHttp\Promise\all;

class SiswabaruController extends Controller
{
    public function index(){
        $csb = Calonsiswa::all();
        return view('indexcalonsiswa', ['calonsiswa'=>$csb]);
    }

    public function show($calonsiswa) {
        // dd($calonsiswa);
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_calon', ['calonsiswa'=>$result]);
    }
}
