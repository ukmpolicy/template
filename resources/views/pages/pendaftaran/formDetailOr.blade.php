@extends('layouts.pendaftaran')

@section('breadcum')
    <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item active">Data OR</li>
                <li class="breadcrumb-item">Details</li>
            </ol>
        </nav>
@endsection


@section('content')
    <main>
        <div class="container form-pendaftaran">
                <div class="form-group pt-2 text-center">
                    <img src="{{ Storage::url($item->foto) }}"  class="img-thumbnail mx-auto" width="200px">
                </div>

                <div class="form-group pt-1">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $item->nama }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" class="form-control" id="nim" value="{{ $item->nim }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $item->alamat }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control" readonly>
                        <option value="{{ $item->jurusan }}">{{ $item->jurusan }}</option>
                        <option value="Teknki Elektro">Teknki Elektro</option>
                        <option value="Tik">Teknologi Informasi dan Komputer</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Tataniaga">Tataniaga</option>
                    </select>
                </div>

                <div class="form-group pt-2">
                    <label for="studi">Program Studi</label>
                    <input type="text" name="studi" class="form-control" id="studi" value="{{ $item->studi }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{$item->tempat_lahir }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{$item->tanggal_lahir }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="organisasi">Organisasi yang pernah di ikuti</label>
                    <input type="text" name="organisasi" class="form-control" id="organisasi" value="{{$item->organisasi }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="no_hp">Nomor HP / Whatsapp</label>
                    <input type="number" name="nomor_hp" class="form-control" id="no_hp" value="{{$item->nomor_hp }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$item->email }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="link_sosialmedia">INSTAGRAM</label>
                    <input type="text" name="link_sosialmedia" class="form-control" id="link_sossialmedia" value="{{$item->link_sosialmedia }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="pengalaman_organisasi">Pengalaman Organisasi</label>
                    <input type="text" name="pengalaman_organisasi" class="form-control" id="pengalaman_organisasi" value="{{$item->pengalaman_organisasi }}" readonly>
                </div>

                <div class="form-group pt-2">
                    <label for="tujuan_masuk_policy">Tujuan Masuk Ukm policy</label>
                    <input type="text" name="tujuan_masuk_policy" class="form-control" id="tujuan_masuk_policy" value="{{$item->tujuan_masuk_policy }}" readonly>
                </div>

                <div class="form-group pt-2 list-group d-inline-block col-sm-4">
                    <form action="{{Storage::url($item->sertifikat_pkkmb) }}" method="POST">
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action active text-center">
                            download sertifikat pkmb {{$item->nama}}
                        </button>
                    </form>
                </div>
                <div class="form-group pt-2 list-group d-inline-block col-sm-4">
                    <form action="{{ Storage::url($item->quesioner) }}" method="post">
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action active text-center">
                            download Kuesioner {{$item->nama}}
                        </button>
                    </form>
                </div>

                <div class="form-group pt-2 list-group d-inline-block col-sm-4">
                    <form action="{{ Storage::url($item->bukti_pembayaran) }}" method="post">
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action active text-center">
                            Liat Bukti Pembayaran  {{$item->nama}}
                        </button>
                    </form>
                </div>

                <div class="form-group pt-2 list-group d-inline-block col-sm-4">
                    <form action="{{ Storage::url($item->sertifikat_lain) }}" method="post">
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action active text-center">
                            download sertifikat lain {{$item->nama}}
                        </button>
                    </form>
                </div>

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