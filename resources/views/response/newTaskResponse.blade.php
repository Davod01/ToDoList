<tr id="Task-{{ $task->id }}">
    <td>
        <div class="pretty p-default p-round p-thick">
            <input type="checkbox" class="task-modal-check-item" {{ is_null($task->completed_at) ?: ' checked' }}>
            <div class="state p-primary-o">
                <label></label>
            </div>
        </div>
    </td>
    <td>
        {{ $task->title }}
        <a href="#" class="btn btn-danger btn-sm float-right">
            <i class="fas fa-trash-alt"></i>
        </a>
    </td>
</tr>