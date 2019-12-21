@extends('layouts.app')
@section('content')
<div class="card text-white bg-dark my-4">
    <div class="card-body">
        <h5 class="card-title">Create new item</h5>
        <form action="/store-todos" method="POST">
            @csrf
            <div class="form-group">
              <label for="labelforname">Name</label>
              <input type="text" class="form-control" id="labelforname" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="labelfordescription">Description</label>
                <textarea name="description" placeholder="Description" id="labelfordescription" cols="5" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success mx-2 float-right">Create</button>
            <a href="/todos" class="btn btn-danger mx-2 float-right">Cancel</a>
          </form>
    </div>
</div>
@endsection