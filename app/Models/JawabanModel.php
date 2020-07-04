<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_all($value){
        $items = DB::table('jawabans')->where('pertanyaan_id',$value)->get();
        return $items;
    }
    public static function save($value){
        $items = DB::table('jawabans')->insert($value);
    }
}
