@extends('layouts.pendaftaran')

@section('breadcum')
    <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item active">aturan Pendaftaran</li>
                <li class="breadcrumb-item">daftar</li>
            </ol>
        </nav>
@endsection

@section('content')
    <main>
        <div class="container form-pendaftaran">
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
            <form action="{{route('pendaftaranOr.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group pt-1">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama"
                        placeholder="Masukkan Nama" value="{{ old('nama') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" class="form-control" id="nim"
                        placeholder="Masukkan nim" value="{{ old('nim') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat"
                        placeholder="Masukan alamat" value="{{ old('alamat') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="Teknki Elektro" {{ old('jurusan') == "Teknki Elektro"? 'selected' : '' }}>Teknki Elektro</option>
                        <option value="Tik" {{ old('jurusan') == "Tik"? 'selected' : '' }}>Teknologi Informasi dan Komputer</option>
                        <option value="Teknik Kimia" {{ old('jurusan') == "Teknik Kimia"? 'selected' : '' }}>Teknik Kimia</option>
                        <option value="Teknik Mesin" {{ old('jurusan') == "Teknik Mesin"? 'selected' : '' }}>Teknik Mesin</option>
                        <option value="Teknik Sipil" {{ old('jurusan') == "Teknik Sipil"? 'selected' : '' }}>Teknik Sipil</option>
                        <option value="Tataniaga" {{ old('jurusan') == "Tataniaga"? 'selected' : '' }}>Tataniaga</option>
                    </select>
                </div>

                <div class="form-group pt-2">
                    <label for="studi">Program Studi</label>
                    <input type="text" name="studi" class="form-control" id="studi"
                        placeholder="Masukkan program studi" value="{{ old('studi') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"
                        placeholder="Masukkan Tempat tanggal lahir" value="{{ old('tempat_lahir') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="organisasi">Organisasi yang pernah di ikuti</label>
                    <input type="text" name="organisasi" class="form-control" id="organisasi"
                        placeholder="Organisasi yang pernah di masuk" value="{{ old('organisasi') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="no_hp">Nomor HP / Whatsapp</label>
                    <input type="number" name="nomor_hp" class="form-control" id="no_hp"
                        placeholder="Masukkan nomor hp atau nomor whatsapp aktif" value="{{ old('nomor_hp') }}" required>
                </div>

                <div class="form-group pt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Masukkan email" value="{{ old('email') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="link_sosialmedia">INSTAGRAM</label>
                    <input type="text" name="link_sosialmedia" class="form-control" id="link_sossialmedia"
                        placeholder="Jika tidak punyaa isi dengan 'TIDAK PUNYA'" value="{{ old('link_sosialmedia') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="pengalaman_organisasi">Pengalaman Organisasi</label>
                    <input type="text" name="pengalaman_organisasi" class="form-control" id="pengalaman_organisasi"
                        placeholder="Jika tidak punyaa isi dengan 'TIDAK PUNYA'" value="{{ old('pengalaman_organisasi') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="tujuan_masuk_policy">Tujuan Masuk Ukm policy</label>
                    <input type="text" name="tujuan_masuk_policy" class="form-control" id="tujuan_masuk_policy"
                        placeholder="Jika tidak punyaa isi dengan 'TIDAK PUNYA'" value="{{ old('tujuan_masuk_policy') }}" >
                </div>

                <div class="form-group pt-2">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" value="{{ old('foto') }}">
                </div>

                <div class="form-group pt-2">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran" value="{{ old('bukti_pembayaran') }}" >
                </div>

                <div class="form-group pt-2">
                    <label for="quesioner">Kuesioner</label>
                    <input type="file" name="quesioner" class="form-control" id="quesioner" value="{{ old('quesioner') }}" >
                </div>

                <div class="form-group pt-2">
                    <label for="sertifikat_pkkmb">Sertifikat Pkkmb</label>
                    <input type="file" name="sertifikat_pkkmb" class="form-control" id="sertifikat_pkkmb" value="{{ old('sertifikat_pkkmb') }}" >
                </div>

                <div class="form-group pt-2">
                    <label for="sertifikat_lain">Sertifikat Lain</label>
                    <input type="file" name="sertifikat_lain" class="form-control" id="sertifikat_lain" value="{{ old('sertifikat_lain') }}" >
                </div>

                <button class="btn-login form-control" type="submit">Submit</button>
            </form>
        </div>

        <footer class="section-footer mt-5 mb-4 border-top">
            <div class="container-fluid">
                <div class="row border-top justify-content-center align-items-center pt-4">
                    <div class="col-auto text-gray-500 font-weight-light">
                        2019 Copyright UKM POLICY • Linux Comunity • Made in Lhokseumawe
                    </div>
                </div>
            </div>
        </footer>
    </main>
@endsection