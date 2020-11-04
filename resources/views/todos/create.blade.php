@extends('layout.app')

@section('content')

    <h1 class="text-center my-4">Create Todos</h1>
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





                    <form method="POST" action="/store-todos">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name='name'>
                        </div>
                        <div class="form-group">
                           <textarea name="description" placeholder="Description" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection