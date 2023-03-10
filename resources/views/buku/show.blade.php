@extends('buku.layout')
@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Show Buku</div>
    <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Judul Buku : {{ $buku->judul_buku }}</h5>
        <p class="card-text">Penulis : {{ $buku->penulis }}</p>
        <p class="card-text">Penerbit : {{ $buku->penerbit }}</p>
        <p class="card-text">Tahun Terbit : {{ $buku->tahun_terbit }}</p>
        <a href="{{ asset('images/'.$buku->file_name) }}" class="image-popup fh5co-board-img">
		<img src="{{ asset('images/'.$buku->file_name) }}" alt="Uploaded Image"/></a>
    </div>
    </hr>
</div>

