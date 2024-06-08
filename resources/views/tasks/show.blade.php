@extends('layouts.app')

@section('title', $task->title)

@section('content')
<div>
  <p>{{ $task->description }}</p>
  @if($task->long_description)
  <p>{{ $task->long_description }}</p>
  @endif
  @if($task->completed)
  <p>Completed</p>
  @endif
  <p>{{ $task->created_at }}</p>
  <p>{{ $task->updated_at }}</p>
</div>
<div>
  <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>
</div>
@endsection