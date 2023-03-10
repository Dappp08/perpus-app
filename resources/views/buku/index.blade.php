@extends('buku.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Tabel Buku</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="Tambah Buku Baru">
                            Tambah Baru
                        </a>
                        </br>
                        </br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>File Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul_buku }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->penerbit }}</td>
                                        <td>{{ $item->tahun_terbit }}</td>
                                        <!-- <td>{{ $item->file_name }}</td> -->
                                        <td>
                                            <a href="{{ asset('images/'.$item->file_name) }}" class="image-popup fh5co-board-img">
		                                    <img src="{{ asset('images/'.$item->file_name) }}" alt="Uploaded Image"/></a>
                                        </td>

                                        <td>
                                            <a href="{{url('/buku/' . $item->id) }}" title="View Buku"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{url('/buku/' . $item->id . '/edit') }}" title="Edit Buku"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <!-- <form method="post" action="{{ url($item->id) }}" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Buku"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                            <a href="{{url('delete/' . $item->id) }}" title="Edit Buku"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection