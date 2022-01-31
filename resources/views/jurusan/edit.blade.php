@extends('layouts.index')

@section('content')
  <div class="card-body mt-5">
    <form action="{{ url('jurusan/'.$data->id) }}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group">
        <label for="jurusan" class="form-label">Nama Jurusan</label>
        <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $data->nama }}">
      </div>
      
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
@endsection