@extends('layouts.app')
@section('content')
<p>ویرایش</p>
{{ Auth::user()->firstname."  ".Auth::user()->lastname  }}
@endsection