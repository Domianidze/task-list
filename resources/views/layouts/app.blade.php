<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel - Task List</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script>
    tailwind.config = {
      darkMode: 'false',
    }
  </script>
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    .link {
      @apply font-medium text-gray-700 underline
    }

    label {
      @apply block text-slate-700 mb-2
    }

    input, 
    textarea {
      @apply shadow-sm appearance-none border rounded-md  w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }
  </style>
</head>

<body x-data="{open: true}" class="container mx-auto mt-10 mb-10 max-w-lg">
  @if(session()->has('success'))
  <div x-show="open" class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700" role="alert">
    <strong class="font-bold">Success!</strong>
    <div>{{ session('success') }}</div>

    <span @click="open = false" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </span>
  </div>
  @endif
  <h1 class="mb-4 text-2xl">@yield('title')</h1>
  <div>@yield('content')</div>
</body>

</html>