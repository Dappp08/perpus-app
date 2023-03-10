@extends('buku.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Buku</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        <div    >
        <form action="{{ url('/') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <label>Judul Buku</label></br>
            <input type="text" name="judul_buku" id="judul_buku" class="form-control"></br>
            <label>Penulis</label></br>
            <input type="text" name="penulis" id="penulis" class="form-control"></br>
            <label>Penerbit</label></br>
            <input type="text" name="penerbit" id="penerbit" class="form-control"></br>
            <label>Tahun Terbit</label></br>
            <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control"></br>
            <input type="file" name="image" class="pd-10">
            <div class="p-1">
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
            </div>
            <!-- <input type="submit" value="Save" class="btn btn-success"></br> -->
        </div>
        </form>
    </div>
</div>

@stop