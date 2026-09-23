<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="header">
        <h1>My Tasks</h1>

        <a href="{{ route('tasks.create') }}" class="btn">
            + Add Task
        </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($tasks->count() > 0)

        @foreach($tasks as $task)

            <div class="task-card">

                <h2>{{ $task->task_name }}</h2>

                <p>
                    <strong>Description:</strong>
                    {{ $task->description ?? 'No description' }}
                </p>

                <p>
                    <strong>Status:</strong>
                    <span class="status">
                        {{ $task->status }}
                    </span>
                </p>

                <p>
                    <strong>Due Date:</strong>
                    {{ $task->due_date ?? 'No due date' }}
                </p>

                <div class="actions">

                    <a href="{{ route('tasks.edit', $task->id) }}"
                       class="btn">
                        Edit
                    </a>

                    <form action="{{ route('tasks.destroy', $task->id) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn delete-btn"
                                onclick="return confirm('Are you sure you want to delete this task?')">
                            Delete
                        </button>
                    </form>

                    <form action="{{ route('tasks.update', $task->id) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('PUT')

                        <input type="hidden"
                               name="task_name"
                               value="{{ $task->task_name }}">

                        <input type="hidden"
                               name="description"
                               value="{{ $task->description }}">

                        <input type="hidden"
                               name="due_date"
                               value="{{ $task->due_date }}">

                        <input type="hidden"
                               name="status"
                               value="{{ $task->status == 'Pending' ? 'Completed' : 'Pending' }}">

                        <button type="submit" class="btn">
                            Mark as {{ $task->status == 'Pending' ? 'Completed' : 'Pending' }}
                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    @else

        <div class="task-card">
            <p>No tasks yet. Click <strong>+ Add Task</strong> to create one.</p>
        </div>

    @endif

</div>

</body>
</html>