@forelse($tasks as $task)
<a>{{ $task->title }}</a>
@empty
<p>No tasks yet.</p>
@endforelse