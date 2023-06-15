<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\penyakit;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pakarcontroller extends Controller
{
    function index(){
        return view("home",["penyakit"=>penyakit::all()]);
    }

    function konsul(){
    $users = gejala::whereNotIn('id_gejala', function ($query) {
            $query->select('id_gejala')
            ->from('tb_pertanyaan');
    })
    ->get();

    $penyakit = penyakit::join('tb_rule', 'tb_penyakit.penyakit', '=', 'tb_rule.penyakit')
        ->join('tb_pertanyaan', 'tb_rule.id_gejala', '=', 'tb_pertanyaan.id_gejala')
        ->where('tb_pertanyaan.jawaban', '=', 'ya')
        ->select('tb_penyakit.penyakit')
        ->distinct()
        ->get();
        
        return view("konsul",compact('users','penyakit'));
    }

    function simpan(Request $request)
    {
        $flexRadioDefault = $request->input('flexRadioDefault');
    
        if ($flexRadioDefault == 'ya') {
            $id_gejala = $request->input('id_table1');
            $jawaban = "ya";
            pertanyaan::insert([
                'id_gejala' => $id_gejala,
                "jawaban"=> $jawaban
            ]);
        }elseif ($flexRadioDefault == 'tidak') {
            $id_gejala = $request->input('id_table1');
            $jawaban = "Tidak";
            pertanyaan::insert([
                'id_gejala' => $id_gejala,
                "jawaban"=> $jawaban
            ]);
        }
    
        return redirect('konsul');
    }
    
    function hapus_pertanyaan()
    {
        $hapus = pertanyaan::truncate();
        return redirect('konsul');
    }
}
