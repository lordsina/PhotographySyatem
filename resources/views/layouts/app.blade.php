<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>سیستم مدیریت آتلیه</title>
        @vite(['resources/scss/app.scss','resources/js/app.js'])
        <script src="https://cdn.tiny.cloud/1/ryroe1tz83ly60eqkwmk60i6zwnmla3ehas3ttd83hevque4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                  @if (Auth::check())
                  <div class="col-sm-12 col-xs-12 col-md-3">
                    <div class="">
                    {{-- Right Side Section --}}
                    @include('layouts.rightside')
                    </div>
                  </div>
                  @endif
                  <div class="col-sm-12 col-xs-12  @if(Auth::check())col-md-6 @else col-md-9 @endif ">
                        @include('layouts.c-header')
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
        @include('layouts.script')
        @include('flash')
    </body>
</html>