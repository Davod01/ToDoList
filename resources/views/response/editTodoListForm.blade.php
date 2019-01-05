<form action="{{ route('updateTodoList',$todo->id) }}" method="POST">
    @csrf
    <div class="form-group" id="todoList-form-group-Title">
        <label for="" class="label-control">List Name</label>
        <input type="text" name="title" id="newTaskTitle" class="form-control input-lg" value="{{ $todo->title }}" required minlength="3" minlength="120">
    </div>

    <div class="form-group" id="todoList-form-group-Description">
        <label for="" class="label-control">Description</label>
        <textarea rows="2" id="newTaskDescription" name="description" class="form-control" required minlength="5" minlength="190">{{ $todo->description }}</textarea>
    </div>
</form>