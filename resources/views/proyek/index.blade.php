@extends('layouts.master')

@section('content')
<a class="btn btn-primary" href="/proyek/create">+ Tambah pertanyaan</a>
<br><br>
<table class="table table-striped table-bordered">
    <tr>
        <th>No</th>
        <th>nama</th>
        <th>Desc</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Deadline</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($proyeks as $key => $prt)
    <tr>
      
        <td>{{ $key+1 }}</td>
        <td>{{ $prt->nama }}</td>
        <td>{{ $prt->deskripsi }}</td>
        <td>{{ $prt->tanggal_mulai }}</td>
        <td>{{ $prt->tanggal_deadline }}</td>
        <td>
            <form action="{{ route('proyek.destroy',$prt->id) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('proyek.show',$prt->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('proyek.edit',$prt->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection