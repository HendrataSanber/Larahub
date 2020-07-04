<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all(){
        $jawaban=DB::table('jawaban')->get();
//        dd($jawaban);
        return $jawaban;
    }

    public static function save($data){
        $new_jawaban=DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }

    public static function find_by_id($id){
        $jawaban=DB::table('jawaban')->where('id',$id)->first();
        return $jawaban;
    }

    public static function update($id,$request){
        $jawaban=DB::table('jawaban')->where('id',$id)->update([
            'isi'=>$request["isi"],
        ]);
        return $jawaban;
    }

    public static function destroy($id){
        $deleted=DB::table('jawaban')->where('id',$id)->delete();
        return $deleted;
    }

}