@extends('master')

@section('content')
    <div class="container">
    <h1 class="mt-5">Add new task</h1>
    <hr>
    <form action="/tasks" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="title">
        </div>
        <div class="form-group">
            <label for="description">Task description</label>
            <input type="text" class="form-control" id="taskDescription" name="description">
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@stop