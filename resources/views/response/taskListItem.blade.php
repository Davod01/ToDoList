
<li class="list-group-item" id="todo-list-{{ $todo->id }}">
    <div class="card-body">
        <h4 class="card-title">{{ $todo->title }} 
            <small>
                    <span class="badge badge-pill badge-secondary">{{ $todo->task->count() > 1 ?  $todo->task->count() . ' Tasks':$todo->task->count() . ' Tasks' }}</span>
                    <span class="badge badge-pill badge-primary Update_or_new_status" style="display:none;">New</span>
            </small>
        </h4>
        <p class="card-text">{{ $todo->description }}</p>
        <div class="buttons float-right">
            <a href="" el_url="{{ route('getTask',$todo->id) }}" class="btn btn-info btn-xs Show_Task_modal" title="Manage Task" data_id="{{ route('createTask',$todo->id) }} " data_check_all="{{ route('updateAllTask',$todo->id) }}">
                <i class="fas fa-thumbs-up" ></i>
            </a>
            <a href="" el_url="{{ route('editTodoList',$todo->id) }}" class="btn btn-primary Show_editTodoListForm" title="Edit {{ $todo->title }}">
                <i class="fas fa-edit"></i>
            </a>
            <a href="" el_url="{{ route('deleteTodoList',$todo->id) }}" class="btn btn-danger btn-xs Show_deleteTodoListForm" title="Delete">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </div>
</li>
