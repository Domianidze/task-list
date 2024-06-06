@extends('layouts.app')

@section('title', 'Task List')

@section('content')
@forelse($tasks as $task)
<p>
  <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
</p>
@empty
<p>No tasks yet.</p>
@endforelse
@endsection