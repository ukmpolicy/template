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
            <div class="d-flex justify-content-center mt-5">
                <img src="{{url('gambar/1.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="d-flex justify-content-center mt-2">
                <img src="{{url('gambar/2.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="mb-0 mt-auto">
                <p class="text-danger">Note</p>
                <div class="alert alert-dark" role="alert">
                    Bagi mahasiswa yang sudah mendaftar dan sedang berada di luar Lhokseumawe dan aceh utara tolong
                    hubungi Contact Person.
                </div>
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