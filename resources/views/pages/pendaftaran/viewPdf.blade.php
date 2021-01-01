@extends('layouts.pendaftaran')

@section('content')
    <main>
        <div class="container">
            <h4>Contoh menampilkan file pdf dengan tag iframe</h4>
            <iframe src="{{ storage_path('file/koesioner.pdfs') }}" width="800px" height="800px"></iframe>
        </div>
    </main>
@endsection