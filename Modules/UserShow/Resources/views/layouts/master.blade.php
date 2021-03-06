<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module UserShow</title>

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/usershow.css') }}"> --}}

</head>

<body>
    {{View::make('usershow::user_header')}}
    @yield('content')
    {{View::make('usershow::user_footer')}}

    {{-- Laravel Mix - JS File --}}
    {{-- <script src="{{ mix('js/usershow.js') }}"></script> --}}
</body>

</html>