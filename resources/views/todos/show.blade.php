@extends('layouts.app')

@section('content')
<h1 class="my-4">{{$todo->name}}</h1>
<p>
    {{$todo->description}}
</p>
@endsection