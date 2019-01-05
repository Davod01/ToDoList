<form action="{{ route('destroyTodoList') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $todo->id }}">
    <div class="alert alert-danger" role="alert">
        Are You Sure to Delete Todo List: <strong>{{ $todo->title }} </strong>
    </div>
</form>