@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<a href="{{ route('tasks.create') }}">Add new task</a>
@forelse($tasks as $task)
<p>
  <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
</p>
@empty
<p>No tasks yet.</p>
@endforelse
@endsection