@extends('layouts.main')
@section('title')ToDo List @endsection
@section('content')
<!-- main container -->

<?php $task_count = Auth::user()->todoList->count(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="" id="Alert-to-user">
            </div>

            <!-- card for list group -->

            <div class="card">
                <ul class="list-group" id="Todo_List">
                @foreach(Auth::user()->todoList as $todo)
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


        @include('modal.newTaskModal')
        @include('modal.editTaskModal')


    </div><!-- end row -->
</div><!-- end container -->

@endsection

