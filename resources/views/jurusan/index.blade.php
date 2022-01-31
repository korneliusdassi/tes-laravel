@extends('layouts.index')

@section('content')

  <div class="container mt-5">
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th colspan="2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data->nama }}</td>
              <td>
                <a href="{{ url('jurusan/'.$data->id.'/edit') }}" class="btn btn-info">Edit</a>
              </td>
              <td>
                <form action="{{ url('jurusan/'.$data->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger" type="submit" >Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </div>
    <div>
      <a class="btn btn-info" href="{{ url('jurusan/create') }}">Tambah Jurusan</a>
    </div>
  </div>
@endsection