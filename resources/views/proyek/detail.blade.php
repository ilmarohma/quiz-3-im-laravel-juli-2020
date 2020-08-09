@extends('layouts.master')

@section('content')
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            <h3>Detail Proyek</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$proyek->nama}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$proyek->deskripsi}}</li>
                    <li class="list-group-item"><b>Tanggal mulai: </b>{{$proyek->tanggal_mulai}}</li>
                    <li class="list-group-item"><b>Tanggal Deadline: </b>{{$proyek->tanggal_deadline}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('proyek.index') }}">Kembali</a>

        </div>
    </div>
</div>
    
@endsection