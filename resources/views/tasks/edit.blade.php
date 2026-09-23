<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Edit Task</h1>

        <a href="{{ route('tasks.index') }}" class="btn">
            Back to Tasks
        </a>
    </div>

    <div class="task-card">

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="task_name">Task Name:</label>

                <input
                    type="text"
                    id="task_name"
                    name="task_name"
                    value="{{ old('task_name', $task->task_name) }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="description">Description:</label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                >{{ old('description', $task->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>

                <select id="status" name="status">

                    <option value="Pending"
                        {{ $task->status == 'Pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                    <option value="Completed"
                        {{ $task->status == 'Completed' ? 'selected' : '' }}>
                        Completed
                    </option>

                </select>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>

                <input
                    type="date"
                    id="due_date"
                    name="due_date"
                    value="{{ $task->due_date }}"
                >
            </div>

            <button type="submit" class="btn">
                Update Task
            </button>

        </form>

    </div>

</div>

</body>
</html>