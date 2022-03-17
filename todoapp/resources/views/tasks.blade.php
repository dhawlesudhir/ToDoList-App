@extends('layouts.app')

@section('content')
<h1>Task list</h1>
<a type="button" href="/tasks/create " class="btn btn-primary">create Task</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Task</th>
            <th scope="col">DeadLine</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alltasks as $task)
        <tr>
            <th scope="row">{{$task->name}}</th>
            <td>{{$task->task}}</td>
            <td>{{$task->deadline}}</td>
            <td>{{$task->status == 1 ? "Active":"Completed"  }}</td>
            <td>
                @if($task->status)
                <a class="btn btn-primary btn-primary btn-sm" href="">mark as completed!</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection