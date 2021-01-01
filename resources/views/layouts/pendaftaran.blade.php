<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran UKM POLICY</title>
    @include('includes.pendaftaran.style')
</head>

<body>
    <div class="container">
        @include('includes.pendaftaran.navbar')
        @yield('breadcum')
    </div>

    @yield('content')
    
    @yield('footer')

</body>
@include('includes.pendaftaran.script')

</html>