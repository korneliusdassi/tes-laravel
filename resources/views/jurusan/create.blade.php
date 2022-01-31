@extends('layouts.index')

@section('content')
  <div class="card-body mt-5">

    <form action="{{ url('jurusan') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="jurusan" class="form-label">Nama Jurusan</label>
        <input type="text" name="jurusan" class="form-control" id="jurusan" required>
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
  </div>
@endsection