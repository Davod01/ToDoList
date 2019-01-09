@foreach($todo->task as $task)
    <tr id="Task-{{ $task->id }}">
        <td>
            <div class="pretty p-default p-round p-thick">
                <input type="checkbox" class="task-modal-check-item" data-url="{{ route('updateTask',$task->id) }}" {{ is_null($task->completed_at) ?: ' checked' }}>
                <div class="state p-primary-o">
                    <label></label>
                </div>
            </div>
        </td>
        <td>
            {{ $task->title }}
            <a href="{{ route('destroyTask',$task->id) }}" class="btn btn-danger btn-sm float-right remove-task-btn">
                <i class="fas fa-trash-alt"></i>
            </a>
        </td>
    </tr>
@endforeach