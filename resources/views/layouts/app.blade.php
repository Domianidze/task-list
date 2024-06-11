<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel - Task List</title>
  <style>
    .success-message {
      color: green;
      font-size: 0.8rem;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  @yield('head')
</head>

<body>
  @if(session()->has('success'))
  <p class="success-message">{{session('success')}}</p>
  @endif
  <h1>@yield('title')</h1>
  <div>@yield('content')</div>
</body>

</html>