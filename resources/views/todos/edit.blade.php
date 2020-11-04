@extends('layout.app')

@section('content')

    <h1 class="text-center my-4">Edit Todo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-defult">
                <div class="card-header">
                    Create new Todo
                </div>
                <div class="card-body">

                    @if ($errors->all())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>                        
                    @endif





                    <form method="POST" action="/todos/{{$todo->id}}/update-todos">
                        @csrf

                    {{-- <input type="hidden" name="todo_id" value="{{$todo->id}}"> --}}

                        <div class="form-group">
                        <input type="text" placeholder="Name" value="{{$todo->name}}" class="form-control" name='name'>
                        </div>
                        <div class="form-group">
                        <textarea name="description" placeholder="Description" cols="30" rows="5" class="form-control">{{$todo->description}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection