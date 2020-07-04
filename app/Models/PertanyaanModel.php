<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $items = DB::table('pertanyaans')->get();
        return $items;
    }
    public static function save($value){
        $items = DB::table('pertanyaans')->insert($value);
    }
    public static function select($value){
        $user = DB::table('pertanyaans')->find($value);
        return $user;
    }
    public static function update($id,$request){
        $user = DB::table('pertanyaans')
            ->where('id', $id)
            ->update([
                "judul" => $request['judul'],
                "isi" => $request["isi"]
        ]);
        return $user;
    }
    public static function delete($id){
        $user = DB::table('pertanyaans')->where('id',$id)->delete();
        return $user;
    }
}
