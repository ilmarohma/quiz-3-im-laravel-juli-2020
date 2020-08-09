@extends('layouts.master')

@section('content')
<form method="POST" action="{{ route('proyek.store') }}">
    @csrf
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="CRUD Laravel">
    </div>
    <div class="form-group">
      <label for="desk">Deskripsi</label>
      <input type="text" class="form-control" id="desk" name="desk" placeholder="deskripsi disini">
    </div>
    <div class="form-group">
        <label for="mulai">Tanggal Mulai</label>
        <input type="text" class="form-control" id="mulai" name="mulai" placeholder="yyyy-mm-dd hh:mm:ss">
    </div>
    <div class="form-group">
        <label for="deadline">Tanggal deadline</label>
        <input type="text" class="form-control" id="deadline" name="deadline" placeholder="yyyy-mm-dd hh:mm:ss">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection