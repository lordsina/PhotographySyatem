@extends('layouts.app') <!-- Assuming you have a layout file in resources/views/layouts -->

@section('content')


<div class="container">
        <h1>لیست انجام کار</h1>
        <ul>

        </ul>
    </div>

    <div class="container">
        <form action="{{ route('todos.store') }}" method="post">
            @csrf
            <label for="title">New Todo:</label>
            <input type="text" name="title" id="title" required>
            <button type="submit">Add</button>
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
        <div class="row">


            {{-- NOT COMPETED --}}
            <div class="col">
                <h2><i class="fa-solid fa-xmark" style="color: #ff8c82;"></i> انجام نشده ها</h2>
                <div class="accordion" id="accordionExample">
                    @foreach ($todos_not_completed  as $todo)
                    <div class="card m-2">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a class="abc">
                            <i class="fa-solid fa-xmark" style="color: #ff8c82;"></i> {{ $todo->title }}
                            </a>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        {{ $todo->description }}fgjifjklgjrklkljfkljfkljfklfjklhfj
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


            {{-- COMPETED --}}
            <div class="col">
                <h2><i class="fa-solid fa-check" style="color: #96d35f;"></i> انجام شده ها</h2>
                <div class="accordion" id="accordionExample">
                    @foreach ($todos_completed as $todo)
                    <div class="card m-2">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link abc" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa-solid fa-check" style="color: #96d35f;"></i> {{ $todo->title }}
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        {{ $todo->description }}fgjifjklgjrklkljfkljfkljfklfjklhfj
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>


    </div>

@endsection