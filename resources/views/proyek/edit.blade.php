@extends('layouts.master')

@section('content')
<form method="POST" action="{{ route('proyek.update', $proyek->id) }}">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="CRUD Laravel" value="{{ $proyek->nama }}">
    </div>
    <div class="form-group">
      <label for="desk">Deskripsi</label>
      <input type="text" class="form-control" id="desk" name="desk" placeholder="deskripsi disini" value="{{ $proyek->deskripsi }}">
    </div>
    <div class="form-group">
        <label for="mulai">Tanggal Mulai</label>
        <input type="text" class="form-control" id="mulai" name="mulai" placeholder="yyyy-mm-dd hh:mm:ss" value="{{ $proyek->tanggal_mulai }}">
    </div>
    <div class="form-group">
        <label for="deadline">Tanggal deadline</label>
        <input type="text" class="form-control" id="deadline" name="deadline" placeholder="yyyy-mm-dd hh:mm:ss" value="{{ $proyek->tanggal_deadline }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection