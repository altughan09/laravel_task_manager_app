<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        //dd(request()->all());
        $this->validate(request(), [
            'name' => 'required | min:6 | max:30',
            'description' => 'required'
        ]);

        $data = request()->all();
        
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->isCompleted = false;

        $todo->save();
        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required | min:6 | max:40',
            'description' => 'required'
        ]);
        
        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();
        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }
}
