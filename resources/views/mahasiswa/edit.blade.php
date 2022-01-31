@extends('layouts.index')

@section('content')
  <div class="card-body mt-5">
    <div class="col-md-4 offset-md-4">
      <form action="{{ url('mahasiswa/'.$data->id) }}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
          <label for="nama" class="form-label">Nama Mahasiswa</label>
          <input type="text" name="nama" class="form-control" id="nama" required value="{{ $data->nama }}">
        </div>
        <div class="form-group">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" name="nim" class="form-control" id="nim" required value="{{ $data->nim }}">
        </div>
        <div class="form-group">
          <label for="tgl" class="form-label">Tanggal Lahir</label>
          <input type="text" name="tgl_lahir" class="form-control" id="tgl" required value="{{ $data->tanggal_lahir }}">
        </div>
        <div class="form-group">
          <label for="alamat" class="form-label">ALamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" required value="{{ $data->alamat }}">
        </div>
        <div class="form-group">
          <label for="nohp" class="form-label">No Hp</label>
          <input type="text" name="no_hp" class="form-control" id="nohp" required value="{{ $data->no_hp }}">
        </div>
        <div class="form-group">
          <label for="jurusan" class="form-label">Jurusan</label>
          <select name="jurusan_id">
            <option value="">-Pilih Jurusan-</option>
            @foreach ( $jurusan as $item )
              <option value="{{ $item->id }}"{{ old('jurusan_id',$data->jurusan_id) == $item->id ? 'selected' : null }}>
                {{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
@endsection