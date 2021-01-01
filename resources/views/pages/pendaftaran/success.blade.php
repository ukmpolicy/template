<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('includes.pendaftaran.style')
</head>

<body>
    <main>
        <div class="section-succes d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('or/frontend/img/ic_email.png') }}">
                <h1>Yay! Success</h1>
                <p>
                    Terimakasi telah mendaftar ukm policy
                    <br>
                    harap menunggu jadwal wawancara
                </p>
                <a href="https://www.policy.kbmpnl.org/" class="btn btn-home-page mt-3 px-5">Home Page</a>
            </div>
        </div>
    </main>

</body>
@include('includes.pendaftaran.script')

</html>