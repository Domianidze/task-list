@extends('layouts.app')

@section('head')
<style>
  .error-message {
    color: red;
    font-size: 0.8rem;
  }
</style>
@endsection

@section('title', 'Add Task')

@section('content')
<form method="post" action="{{route('tasks.store')}}">
  @csrf
  <label for="title">
    <div>Title:</div>
    <input type="text" name="title" id="title" value="{{old('title')}}" />
    @error('title')
    <div class="error-message">{{$message}}</div>
    @enderror
  </label>
  <label for="description">
    <div>Description:</div>
    <textarea type="text" name="description" id="description" rows="3">{{old('description')}}</textarea>
    @error('description')
    <div class="error-message">{{$message}}</div>
    @enderror
  </label>
  <label for="long_description">
    <div>Long description:</div>
    <textarea type="text" name="long_description" id="long_description" rows="6">{{old('long_description')}}</textarea>
    @error('long_description')
    <div class="error-message">{{$message}}</div>
    @enderror
  </label>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>
@endsection