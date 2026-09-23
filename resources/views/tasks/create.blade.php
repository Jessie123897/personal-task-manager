<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Add New Task</h1>

        <a href="{{ route('tasks.index') }}" class="btn">
            Back to Tasks
        </a>
    </div>

    <div class="task-card">

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="task_name">Task Name:</label>

                <input
                    type="text"
                    id="task_name"
                    name="task_name"
                    value="{{ old('task_name') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="description">Description:</label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                >{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>

                <select id="status" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>

                <input
                    type="date"
                    id="due_date"
                    name="due_date"
                >
            </div>

            <button type="submit" class="btn">
                Save Task
            </button>

        </form>

    </div>

</div>

</body>
</html>