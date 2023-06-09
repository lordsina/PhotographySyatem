@if ($errors->any())
    <div class="alert alert-danger" role="alert">
    @foreach ( $errors->all() as $e )
        <p>{{ $e }}</p>
    @endforeach
    </div>
@endif

@if(session('flash_message'))
    <div class="alert alert-{{ session('flash_message_level') }}" id="ale" role="alert">
        <p>{{session('flash_message') }}</p>
    </div>
@endif