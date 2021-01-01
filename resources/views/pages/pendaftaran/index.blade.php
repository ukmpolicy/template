@extends('layouts.pendaftaran')

@section('breadcum')
    <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">aturan Pendaftaran</li>
                <li class="breadcrumb-item active">daftar</li>
            </ol>
        </nav>
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="alert alert-dark" role="alert">
                <p>Pendaftaran : 12-19 November 2020</p>
                <hr>
                <p class="mb-0">Wawancara : 21-22 November 2020 (pembagian jadwal wawancara akan diinformasikan di
                    Instagram @policy.kbmpnl)</p>
                <hr>
                <p class="mb-0">Pengumuman Kelulusan : 23 November 2020 di ig @policy.kbmpnl</p>
            </div>
            <div class="mb-0 mt-auto">
                <p>Syarat Pendaftaran :</p>
                <ol>
                    <li>Mahasiswa/i Aktif PNL bukan Tingkat Akhir</li>
                    <li>Lulus PKKMB PNL</li>
                </ol>
            </div>
            <div class="mb-0 mt-auto">
                <p class="text-">Langkah-langkah Pendaftaran :</p>
                <ol>
                    <li>Mengunduh quisoner</li>
                    <li>Membagikan video informasi UKM POLICY di story Instagram dan tag @policy.kbmpnl</li>
                    <li>Mengisi Quisioner dengan tulisan tangan.</li>
                    <li>
                        IDR(Biaya administrasi) : Rp.10.000 <br>
                        Transfer ke:
                        <ul>
                            <li>Rekening BTN : 00041-01-61-025654-8 <br>
                                Penerima : Khairunnisa</li>
                            <li class="mt-1">Rekening BRI : 1053537363<br>
                                Penerima : Khairunnisa</li>
                        </ul>
                    </li>
                    <li>Mengisi formulir pendaftaran pada kodeQR yang tertera serta lampirkan berkas2 (sertifikat pkkmb,
                        bukti pembayaran, quisoner dan sertifikat lainnya)</li>
                </ol>
            </div>
            <div class="mb-2">
                <div class="list-group col-lg-3 d-inline-block">
                    <a href="{{ Storage::url('file/kuisioner.docx') }}" class="list-group-item list-group-item-action">
                        Download Kuesioner
                    </a>
                </div>
                {{-- <div class="list-group col-lg-3 d-inline-block">
                    <a href="{{ Storage::url('file/tes.mp4') }}" download="{{ Storage::url('file/tes.mp4') }}" class="list-group-item list-group-item-action">
                        Download Video
                    </a>
                </div> --}}
            </div>
            <div class="mb-0 mt-auto">
                <p class="text-danger">Note</p>
                <div class="alert alert-dark" role="alert">
                    Bagi mahasiswa yang sudah mendaftar dan sedang berada di luar Lhokseumawe dan aceh utara tolong
                    hubungi Contact Person.
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('daftar') }}" class="btn btn-get-started px-4 mt-4">Daftar</a>
            </div>
        </div>

    </main>
@endsection

@section('footer')
        <!-- footer -->
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>Contact Person</h5>
                            <ul class="list-unstyled">
                                <li><a href="https://wa.me/082292221879">Muhammad Harris 0822-9222-1879</a></li>
                                <li><a href="https://wa.me/082251545335">Isnani 0822-5154-5335</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>SOSIAL MEDIA</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.instagram.com/policy.kbmpnl/">
                                        <img src="{{ url('or/frontend/img/instagram-brands.svg') }}" width="23px" height="23px">
                                        POLICY.KBMPNL
                                    </a>
                                </li>
                                <li class="mt-2">
                                    <a href="https://www.facebook.com/groups/900999129974881">
                                        <img src="{{ url('or/frontend/img/facebook-square-brands.svg') }}" width="23px" height="23px">
                                        UKM POLICY PNL
                                    </a>
                                </li>
                                <li class="mt-2">
                                    <a href="https://www.policy.kbmpnl.org/">
                                        <img src="{{ url('or/frontend/img/policy.png') }}" width="23px" height="23px">
                                        www.POLICY.KBMPNL.ORG
                                    </a>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2020 Copyright UKM POLICY • Linux Comunity • Made in Lhokseumawe
                </div>
            </div>
        </div>
    </footer>

@endsection