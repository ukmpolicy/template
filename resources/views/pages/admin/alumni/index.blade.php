@extends('layouts.dasboard')

@section('content')
        <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
            <a href="{{ route("alumni.create") }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Alumni
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>No Hp/ Whatshap</th>
                            <th>Periode</th>
                            <th>Jabatan</th>
                            <th>Bidang</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->periode }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->bidang }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->foto) }}" style="width: 150px" class="img-thumbnail">
                                </td>
                                <td>
                                    <a href="{{ route('alumni.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('alumni.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="11">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection