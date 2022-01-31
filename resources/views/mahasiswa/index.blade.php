@extends('layouts.index')

@section('content')

  <div class="container mt-5">
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jurusan</th>
            <th colspan="2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->nim }}</td>
              <td>{{ $data->tanggal_lahir }}</td>
              <td>{{ $data->alamat }}</td>
              <td>{{ $data->no_hp }}</td>
              <td>{{ $data->jurusan->nama }}</td>
              <td>
                <a href="{{ url('mahasiswa/'.$data->id.'/edit') }}" class="btn btn-info">Edit</a>
              </td>
              <td>
                <form action="{{ url('mahasiswa/'.$data->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger" type="submit" >Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </div><br>
    <a class="btn btn-info" href="{{ url('mahasiswa/create') }}">Tambah Mahasiswa</a>
  </div>

@endsection