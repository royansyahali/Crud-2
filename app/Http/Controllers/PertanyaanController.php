<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{

    public function index(){
        $item = PertanyaanModel::get_all();
        return view('forum.index',compact('item'));

    }
    public function create(){
        return view('forum.create');

    }
    public function store(Request $request){
        $item = $request->all();
        unset($item['_token']);
        if (in_array(null,$item)){
            return redirect("pertanyaan/create");
        } else{
            PertanyaanModel::save($item);
            return redirect('pertanyaan');
        }

    }

    public function edit($id){
        $item = PertanyaanModel::select($id);
        // dd($item);
        return view('forum.edit',compact('item'));

    }

    public function update(Request $request,$id){
        $item = PertanyaanModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }
    public function delete($id){
        $item = PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }


}
