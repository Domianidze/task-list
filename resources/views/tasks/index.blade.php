@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<a href="{{ route('tasks.create') }}">Add new task</a>
@forelse($tasks as $task)
<p>
  <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
</p>
@empty
<p>No tasks yet.</p>
@endforelse
{{ $tasks->links() }}
@endsection