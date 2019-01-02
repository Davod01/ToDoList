<li class="list-group-item" id="todo-list-{{ $todo->id }}">
    <div class="card-body">
        <h4 class="card-title">{{ $todo->title }} <small><span class="badge badge-pill badge-secondary">10 tasks</span></small></h4>
        <p class="card-text">{{ $todo->description }}</p>
        <div class="buttons float-right">
            <a href="#" class="btn btn-info btn-xs" title="Manage Task" data-toggle="modal" data-target="#Task-Modal">
                <i class="fas fa-thumbs-up" ></i>
            </a>
            <a href="#" class="btn btn-primary btn-xs" title="Edit" data-toggle="modal" data-target="#TodoList-Modal">
                <i class="fas fa-edit"></i>
            </a>
            <a href="#" class="btn btn-danger btn-xs" title="Delete">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </div>
</li>