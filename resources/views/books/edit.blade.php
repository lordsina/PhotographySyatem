@extends('layouts.app')
@section('content')
<h3 class="mt-3">ویرایش کتاب</h3>
<form method="POST" action="/books/{{$book->id}}">
    {{-- <input type="hidden" name="_method" value="PATCH"> --}}
    {{ method_field('PATCH') }}
    @csrf 
    <div class="form-group text-right">
        <label for="name" class="">اسم کتاب</label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="namehelp" placeholder="نام کتاب" value="{{ $book->name }}">
    </div>
    <div class="form-group mt-2">
        <label for="title">موضوع کتاب</label>
        <textarea class="form-control mt-2" id="title" name="title" rows="3">{{ $book->title }}</textarea>
    </div>

    <div class="form-group mt-2">
        <select name="tags[]" title="tags" id="tags" multiple="multiple">
            @foreach ($tags as $tag )
                <option 
                @foreach ($book->tags as $book_Tags )
                    @if ($tag->name==$book_Tags->name)
                        selected="selected"
                    @endif
                @endforeach
                 value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>

    @unless ($book->tags->isEmpty())
    <h4>Tags</h4>
    <ul>
        @foreach ($book->tags as $tag )
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
    @endunless

    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary mb-2">ویرایش کتاب</button>
    </div>
</form>

@endsection