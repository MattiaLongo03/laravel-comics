<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('guest.partials.section')
    @include('guest.partials.header')
    <main>
        <div class="back-img"></div>
        @yield('content')
    </main>
    @include('guest.partials.sectionBottom')
    @include('guest.partials.footer')
    @include('guest.partials.article')
</body>
</html>
