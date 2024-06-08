@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
<form method="post" action="{{route('tasks.store')}}">
  @csrf
  <label for="title">
    <div>Title:</div>
    <input type="text" name="title" id="title" />
  </label>
  <label for="description">
    <div>Description:</div>
    <textarea type="text" name="description" id="description" rows="3"></textarea>
  </label>
  <label for="long_description">
    <div>Long description:</div>
    <textarea type="text" name="long_description" id="long_description" rows="6"></textarea>
  </label>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>
@endsection