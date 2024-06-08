  @extends('layouts.app')

  @section('head')
  <style>
    .error-message {
      color: red;
      font-size: 0.8rem;
    }
  </style>
  @endsection

  @section('title', 'Edit Task')

  @section('content')
  <form method="post" action="{{route('tasks.update', ['id' => $task->id])}}">
    @csrf
    @method('put')
    <label for=" title">
      <div>Title:</div>
      <input type="text" name="title" id="title" value="{{$errors->any() ? old('title') : $task->title}}" />
      @error('title')
      <div class="error-message">{{$message}}</div>
      @enderror
    </label>
    <label for="description">
      <div>Description:</div>
      <textarea type="text" name="description" id="description" rows="3">{{$errors->any() ? old('description') : $task->description}}</textarea>
      @error('description')
      <div class="error-message">{{$message}}</div>
      @enderror
    </label>
    <label for="long_description">
      <div>Long description:</div>
      <textarea type="text" name="long_description" id="long_description" rows="6">{{$errors->any() ? old('long_description') : $task->long_description}}</textarea>
      @error('long_description')
      <div class="error-message">{{$message}}</div>
      @enderror
    </label>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
  @endsection