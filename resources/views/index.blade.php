@extends('layouts.main')
@section('title')ToDo List @endsection
@section('content')

<?php $task_count = $todoList->count(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="alert alert-warning" style="display:none;" id="Alert-for-user">
                No Records Existing
            </div>
            <div class="" id="Alert-for-user-2">
            </div>

            <!-- card for list group -->

            <div class="card">
                <ul class="list-group" id="Todo_List">
                    @foreach($todoList as $todo)
                        @include('response.taskListItem')
                    @endforeach
                </ul>

                <div class="card-footer">
                    <small>
                        <span id="todo_list_footer">0</span><span> list items</span>
                    </small>
                </div>
            </div><!-- end card for list group -->
        </div><!-- end col -->


        @include('modal.TodoListModal')
        @include('modal.TaskModal')


    </div><!-- end row -->
</div><!-- end container -->
@endsection

