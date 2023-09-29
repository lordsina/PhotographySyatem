<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>سیستم مدیریت آتلیه</title>
        @vite(['resources/scss/app.scss','resources/js/app.js'])
        <script src="https://kit.fontawesome.com/084dfeabed.js" crossorigin="anonymous"></script>
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
        <script type="module">
        $(document).ready(function(e) {  

            $('.js-example-basic-multiple').select2();
            
            Dropzone.options.myGreatDropzone = { // camelized version of the `id`
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
            };
        });
        </script>
        <script>
            function confirmSubmit(id=-1)
            {
            var agree=confirm("از این کار اطمینان دارید؟");
            if (agree){
                if(id==-1)
                document.forms["myform"].submit();
                else
                document.forms["myform"+id].submit();
            }   
            else
                return false ;
            }

            function confirmSubmitn()
            {
                document.forms["myform"].submit();
            } 
            
            function collapse(btn){
                $("#b"+btn).toggle();
            }

        </script>
        @include('flash')
    </body>
</html>