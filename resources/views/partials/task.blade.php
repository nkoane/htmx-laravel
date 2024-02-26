<li class="bg-grey-50" id="task-{{ $task->id }}">
    <span>{{ $task->name }}</span>
    <form action="{{ route('tasks.destroy', $task) }}" hx-target="closest li" hx-swap="delete" hx-confirm="Are you sure?">
        @csrf
        <button class="delete" hx-delete="{{ route('tasks.destroy', $task) }}" type="submit">Delete</button>
    </form>
</li>
