<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>سیستم مدیریت آتلیه</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-primary-Light">
        @include('layouts.nav')
        <header>
            {{-- Header Section --}}
            @include('layouts.header')
        </header>
        <div>
            <div class="container-fluid text-center">
                <div class="row">
                  <div class="col-sm-12 col-xs-12 col-md-3">
                    <div class="card mb-3 ">
                    {{-- Right Side Section --}}
                    @include('layouts.rightside')
                    </div>
                  </div>
                  <div class="col-sm-12 col-xs-12  col-md-6">
                    <div class="card p-5 mb-3 ">
                        {{-- Content Section --}}
                        @yield('content')
                    </div>
                  </div>
                  <div class="col-sm-12 col-xs-12 col-md-3">
                    {{-- Right Side Section --}}
                    @include('layouts.leftside')
                  </div>
                </div>
              </div>
        </div>
        <footer>
            {{-- Footer Section --}}
            @include('layouts.footer')
        </footer>
    </body>
</html>