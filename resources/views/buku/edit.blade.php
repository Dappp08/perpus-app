@extends('buku.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Buku</div>
    <div class="card-body"></div>

        <form action="{{ url('buku/' .$buku->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$buku->id}}" id="id" />
        <label>Judul Buku</label></br>
        <input type="text" name="judul_buku" id="judul_buku" value="{{$buku->judul_buku}}" class="form-control"></br>
        <label>Penulis</label></br>
        <input type="text" name="penulis" id="penulis" value="{{$buku->penulis}}" class="form-control"></br>
        <label>Penerbit</label></br>
        <input type="text" name="penerbit" id="penerbit" value="{{$buku->penerbit}}" class="form-control"></br>
        <label>Tahun Terbit</label></br>
        <input type="text" name="tahun_terbit" id="tahun_terbit" value="{{$buku->tahun_terbit}}" class="form-control"></br>
        <input type="file" name="file_name" value="{{ $buku->file_name }}">
        <div class="p-1">
        <input type="submit" value="Update" class="btn btn-success"></br>
        </div>
        </form>
</div>

@stop