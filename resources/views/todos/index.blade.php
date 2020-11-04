@extends('layout.app')

@section('title')
    Todos list
@endsection

@section('content')
<h1 class="text-center my-4">TODOS PAGE</h1>
<div class="row justify-content-center">
    <div class="col-md-8 ">
      
        <div class="card card-defult">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item">
                        &nbsp;{{$todo->name}} 
                            @if (!$todo->completed)
                            <a href="/todos/{{$todo->id}}/complete" style="color: white" class="btn btn-warning btn-sm float-right">Complete</a>
                            @endif
                            @if ($todo->completed)
                            &nbsp; &nbsp; <i class="fa fa-check-square " aria-hidden="true"></i>
                            @endif
                            
                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2"> view</a>
                           
                         </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection