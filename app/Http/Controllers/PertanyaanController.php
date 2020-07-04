<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan=PertanyaanModel::get_all();
        return view('pertanyaan.index',compact('pertanyaan'));
    }

    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        //dd($request);
        $data=$request->all();
        unset($data["_token"]);
//        dd($data);
        $pertanyaan=PertanyaanModel::save($data);
//        $pertanyaan=PertanyaanModel::get_all();
//        return view('pertanyaan.index',compact('pertanyaan'));
        return redirect('/pertanyaan');
//        return view('pertanyaan.index');
    }

    public function show($id){
        $pertanyaan=PertanyaanModel::find_by_id($id);
        return view('pertanyaan.show',compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan=PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function update($id,Request $request){
        $pertanyaan=PertanyaanModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id,Request $request){
        $deleted=PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }

}
