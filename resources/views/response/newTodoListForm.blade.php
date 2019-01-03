<form action="{{ route('storeTask') }}" method="POST">
    @csrf
    <div class="form-group" id="todoList-form-group-Title">
        <label for="" class="label-control">List Name</label>
        <input type="text" name="title" id="newTaskTitle" class="form-control input-lg" required minlength="3" minlength="160">
    </div>

    <div class="form-group" id="todoList-form-group-Description">
        <label for="" class="label-control">Description</label>
        <textarea rows="2" id="newTaskDescription" name="description" class="form-control" required minlength="5" minlength="190"></textarea>
    </div>
</form>