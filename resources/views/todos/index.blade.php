@extends('layouts.app') <!-- Assuming you have a layout file in resources/views/layouts -->

@section('content')


<div class="container">
        <h1>لیست انجام کار</h1>
        <ul>

        </ul>
    </div>

    <div class="container">
        <form action="{{ route('todos.store') }}" method="post" class="myform" name="myform" id="myform">
            @csrf
            <div class="form-group">
                <label for="title">عنوان</label>
                <input class="form-control" type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">توضیحات</label>
                <input class="form-control" type="text" name="description" id="description" required>
            </div>
                
            <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد لیست انجام کار</a>
            <br>
        </form>
        {{-- <ul>
            @foreach ($todos as $todo)
                <li>
                    {{ $todo->title }}
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul> --}}
    </div>

    <div class="container">
        <div class="row mt-5">


            {{-- NOT COMPETED --}}
            <div class="col border m-2">
                <br>
                <h2 class=""><i class="fa-solid fa-xmark" style="color: #ff8c82;"></i> انجام نشده ها</h2>
                <hr>
                <div class="accordion" id="accordionExample">
                    @foreach ($todos_not_completed  as $todo)
                    <div class="card m-2">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a href="javascript:{}" onclick="javascript:collapse({{ $todo->id }})" >
                            <i class="fa-solid fa-xmark" style="color: #ff8c82;"></i> {{ $todo->title }}
                            </a>
                        </h5>
                        </div>

                        <div id="b{{ $todo->id }}">
                        <div class="card-body">
                        {{ $todo->description }}
                        </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{ route('todos.show', $todo->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                            <a href="{{ route('todos.edit', $todo->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: inline;" class="myform{{ $todo->id }}" name="myform{{ $todo->id }}" id="myform{{ $todo->id }}" >
                                    @method('DELETE')
                                    @csrf
                            <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $todo->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


            {{-- COMPETED --}}
            <div class="col border m-2">
                <br>
                <h2><i class="fa-solid fa-check" style="color: #96d35f;"></i> انجام شده ها</h2>
                <hr>
                <div class="accordion" id="accordionExample">
                    @foreach ($todos_completed as $todo)
                    <div class="card m-2">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a href="javascript:{}" onclick="javascript:collapse({{ $todo->id }})" >
                            <i class="fa-solid fa-check" style="color: #96d35f;"></i> {{ $todo->title }}
                            </a>
                            </button>
                        </h5>
                        </div>

                        <div id="b{{ $todo->id }}">
                        <div class="card-body">
                        {{ $todo->description }}
                        </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{ route('todos.show', $todo->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                            <a href="{{ route('todos.edit', $todo->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: inline;" class="myform{{ $todo->id }}" name="myform{{ $todo->id }}" id="myform{{ $todo->id }}" >
                                    @method('DELETE')
                                    @csrf
                            <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $todo->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>


    </div>

@endsection