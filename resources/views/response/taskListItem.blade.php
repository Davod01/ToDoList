<li class="list-group-item" id="todo-list-{{ $todo->id }}">
    <div class="card-body">
        <h4 class="card-title">{{ $todo->title }} 
            <small>
                    <span class="badge badge-pill badge-secondary">10 tasks</span>
                    <span class="badge badge-pill badge-primary Update_or_new_status" style="display:none;">New</span>
            </small>
        </h4>
        <p class="card-text">{{ $todo->description }}</p>
        <div class="buttons float-right">
            <a href="#" class="btn btn-info btn-xs" title="Manage Task" data-toggle="modal" data-target="#Task-Modal">
                <i class="fas fa-thumbs-up" ></i>
            </a>
            <a href="{{ route('editTask',$todo->id) }}" class="btn btn-primary Show_editTodoListForm" title="Edit {{ $todo->title }}">
                <i class="fas fa-edit"></i>
            </a>
            <a href="{{ route('deleteTask',$todo->id) }}" class="btn btn-danger btn-xs Show_deleteTodoListForm" title="Delete">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </div>
</li>