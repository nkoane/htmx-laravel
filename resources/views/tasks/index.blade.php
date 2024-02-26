@extends('layouts.app')

@section('content')
    <h1 class="font-bold text-xl">Task List</h1>

    <ul id="task-list">
        @foreach ($tasks as $task)
            @include('partials.task', ['task' => $task])
        @endforeach
    </ul>
    <form method="POST" id="task-form" hx-post="{{ route('tasks.store') }}" action="{{ route('tasks.store') }}"
        hx-post="{{ route('tasks.store') }}" hx-target="#task-list" hx-swap="beforeend">
        @csrf
        <input type="text" name="name" placeholder="New Task" required>
        <button type="submit">Add Task</button>
    </form>

    <style>
        #task-list {
            list-style: none;
        }

        #task-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.25rem;
            margin: 1rem 0;
            background-color: #ffffaa;
        }

        #task-list li:nth-child(odd) {
            background-color: #f9f9f9;
        }

        #task-list li button {
            padding: 0.25rem 0.5rem;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        #task-list li button:hover {
            background-color: #ff3333;
        }

        #task-form {
            display: flex;
            column-gap: 0.5rem;
            margin-top: 1rem;
        }

        #task-form input {
            padding: 0.5rem 1rem;
            border: 1px solid #000;
            border-radius: 0.25rem;
        }

        #task-form button {
            padding: 0.25rem 0.5rem;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        #task-form button:hover {
            background-color: #333;
        }
    </style>
@endsection
