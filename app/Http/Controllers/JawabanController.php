<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
class JawabanController extends Controller
{
    public function index($value){
        $item = PertanyaanModel::select($value);
        $jawaban = JawabanModel::get_all($value);
        return view('forum.index-ban',compact('item','jawaban'));
    }
    public function store(Request $request, $value){
        $item = $request->all();
        $item["pertanyaan_id"] = $value;
        unset($item['_token']);
        if (!in_array(null,$item)){
            JawabanModel::save($item);
            // dd($item);
            return redirect()->route('jawaban.detail',['pertanyaan_id' => $item['pertanyaan_id']]);
        }else{
            return redirect()->route('jawaban.detail',['pertanyaan_id' => $item['pertanyaan_id']]);
        }
    }
}
