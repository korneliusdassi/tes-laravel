<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Jurusan;


class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = mahasiswa::all();
        return view('mahasiswa.index',compact(
            'datas'
        ));
    }

    public function create()//menampilkan form
    {
        $jurusan = Jurusan::all();
        $data= new mahasiswa;
        return view('mahasiswa.create', compact(
            'data','jurusan'
        ));
    }

    public function store(Request $request)//utk menyimpan data database
    {
        $data = new mahasiswa;
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->tanggal_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jurusan_id = $request->jurusan_id;
        $data->save();

        return redirect('mahasiswa');
    }


    public function edit($id)//menampilkan form edit
    {
        $jurusan = Jurusan::all();
        $data= mahasiswa::find($id);
        return view('mahasiswa.edit', compact(
            'data','jurusan'
        ));
    }

   
    public function update(Request $request, $id)//update data ke db
    {
        $data = mahasiswa::find($id);
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->tanggal_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jurusan_id = $request->jurusan_id;
        $data->save();

        return redirect('mahasiswa');
    }

    
    public function destroy($id)//hapus data
    {
        $data = mahasiswa::find($id);
        $data->delete();

        return redirect('mahasiswa');
    }


    public function show($id)
    {
        //
    }

}
