@extends('layouts.index')

@section('content')
  <div class="card-body mt-5">
    <div class="col-md-4 offset-md-4">
      <form action="{{ url('mahasiswa') }}" method="POST">
      @csrf
        <div class="form-group">
          <label for="nama" class="form-label">Nama Mahasiswa</label>
          <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" name="nim" class="form-control" id="nim" required>
        </div>
        <div class="form-group">
          <label for="tgl" class="form-label">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" id="tgl" required>
        </div>
        <div class="form-group">
          <label for="alamat" class="form-label">ALamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" required>
        </div>
        <div class="form-group">
          <label for="nohp" class="form-label">No Hp</label>
          <input type="text" name="no_hp" class="form-control" id="nohp" required>
        </div><br>
        <div class="form-group">
          <label for="jurusan" class="form-label">Jurusan</label>
          <select name="jurusan_id" class="form-control">
            <option value="">-Pilih Jurusan-</option>
            @foreach ( $jurusan as $item )
              <option value="{{ $item->id }}" {{ old('jurusan_id')==$item->id ? 'selected' : null }}>{{ $item->nama }}</option>
            @endforeach
          </select>
        </div><br>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    </div>
  </div>
@endsection