<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index(){
        $jawaban=JawabanModel::get_all();
        //dd($jawaban);
        return view('jawaban.index',compact('jawaban'));
    }

    public function create(){
        return view('jawaban.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $data=$request->all();
        unset($data["_token"]);
//        dd($data);
        $Jawaban=JawabanModel::save($data);
//        $Jawaban=JawabanModel::get_all();
//        return view('Jawaban.index',compact('Jawaban'));
        return redirect('/jawaban');
//        return view('Jawaban.index');
    }

    public function show($id){
        $jawaban=JawabanModel::find_by_id($id);
        //dd($jawaban);
        return view('jawaban.show',compact('jawaban'));
    }

    public function edit($id){
        $jawaban=JawabanModel::find_by_id($id);
        return view('jawaban.edit',compact('jawaban'));
    }

    public function update($id,Request $request){
        //dd($request->all());
        $Jawaban=JawabanModel::update($id,$request->all());
        return redirect('/jawaban');
    }

    public function destroy($id,Request $request){
        $deleted=JawabanModel::destroy($id);
        return redirect('/jawaban');
    }

}
