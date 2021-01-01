@extends('layouts.dasboard')

@section('content')
        <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Alumni</h1>
        </div>


    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

        <div class="card">
            <div class="card-body">
                <form action="{{route('alumni.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" id="nama" placeholder="nama" value="{{ old('nama') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email" placeholder="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="featured_event">Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="">Pilih Jurusan</option>
                            <option value="TIK">Teknologi Informasi Dan Komputer</option>
                            <option value="MESIN">Mesin</option>
                            <option value="TATANIAGA">Tataniaga</option>
                            <option value="KIMIA">Kimia</option>
                            <option value="ELEKTRO">Elektro</option>
                            <option value="SIPIL">Sipil</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="prodi">prodi</label>
                        <input type="text" name="prodi" id="prodi" placeholder="prodi" value="{{ old('prodi') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" placeholder="alamat" value="{{ old('alamat') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Hp/ Whatsapp</label>
                        <input type="number" name="no_hp" id="no_hp" placeholder="No Hp atau Whatsapp" value="{{ old('no_hp') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="periode">Periode</label>
                        <input type="number" name="periode" id="periode" placeholder="No Hp atau Whatsapp" value="{{ old('periode') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="featured_event">Jurusan</label>
                        <select name="jabatan" class="form-control">
                            <option value="">Pilih Jurusan</option>
                            <option value="TIK">Ketua Umum</option>
                            <option value="MESIN">Seketaris</option>
                            <option value="TATANIAGA">Bendahara</option>
                            <option value="KIMIA">Kimia</option>
                            <option value="ELEKTRO">Elektro</option>
                            <option value="SIPIL">Sipil</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="bidang">bidang</label>
                        <input type="text" name="bidang" id="bidang" placeholder="bidang" value="{{ old('bidang') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection