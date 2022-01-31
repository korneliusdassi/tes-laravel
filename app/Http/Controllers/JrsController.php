<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = jurusan::all();
        return view('jurusan.index',compact('datas'));
    }

   
    public function create()
    {
        $data = new jurusan;
        return view('jurusan.create',compact('data'));
    }

 
    public function store(Request $request)
    {
        $data = new jurusan;
        $data->nama = $request->jurusan;
        $data->save();

        return redirect('jurusan');
    }

   
    public function show($id)
    {
       //
    }

    
    public function edit($id)
    {
        $data = jurusan::find($id);
        return view('jurusan.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $data = jurusan::find($id);
        $data->nama = $request->jurusan;
        $data->save();

        return redirect('jurusan');
    }

   
    public function destroy($id)
    {
        $data = jurusan::find($id);
        $data->delete();

        return redirect('jurusan');
    }
}
