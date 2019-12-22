@extends('layouts.app')
@section('content')
                <br>
                <a href="/new-todos" class="btn btn-success btn-lg my-2 float-right">Add new item</a>
                <table id="todo_table" class="table table-bordered table-hover">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Name</th>
                            <th>Completed</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $todo->name }}</td>
                                @if ($todo->isCompleted == 0)
                                    <td class="text-center align-middle"><i class="fas fa-times fa-lg text-danger"></i></td>
                                @else
                                    <td class="text-center align-middle"><i class="fas fa-check fa-lg text-success"></i></td>
                                @endif
                                <td class="text-center align-middle">
                                    <a href="/todos/{{$todo->id}}" class="btn btn-success btn-sm">View</a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection