<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('include.header')

    @if(\Illuminate\Support\Facades\Request::is('/'))
        @include('include.hero')
    @endif

    <div class="container mt-5">
        @include('include.messages')
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('include.aside')
            </div>
        </div>
    </div>

    @include('include.footer')
</body>
</html>
