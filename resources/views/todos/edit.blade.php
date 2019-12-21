@extends('layouts.app')
@section('content')
<div class="card text-white bg-dark my-4">
    <div class="card-body">
        <h5 class="card-title">Edit item</h5>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
            @csrf
            <div class="form-group">
              <label for="labelforname">Name</label>
              <input type="text" class="form-control" id="labelforname" name="name" value="{{ $todo->name }}">
            </div>
            <div class="form-group">
                <label for="labelfordescription">Description</label>
                <textarea name="description" id="labelfordescription" cols="5" rows="5" class="form-control">{{ $todo->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning mx-2 float-right">Edit</button>
            <a href="/todos" class="btn btn-danger mx-2 float-right">Cancel</a>
          </form>
    </div>
</div>
@endsection