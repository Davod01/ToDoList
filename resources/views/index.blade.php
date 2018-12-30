@extends('layouts.layout')
@section('title')ToDo List @endsection
@section('content')
<!-- main container -->

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <!-- card for list group -->

            <div class="card">
                <ul class="list-group">

                    <li class="list-group-item">
                        <div class="card-body">
                            <h4 class="card-title">list group item heading <small><span class="badge badge-pill badge-secondary">10 tasks</span></small></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, per no reque elitr, et vivendum oportere erroribus mel. Nonumy quaeque albucius vim ex, imperdiet definitionem cu cum. Ut munere tractatos pro, vix te nostrud mandamus recteque, in soluta possim postulant cum. Veniam nostrud sensibus ei qui, nibh ubique concludaturque est te.</p>
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

                    <li class="list-group-item">
                        <div class="card-body">
                            <h4 class="card-title">list group item heading <small><span class="badge badge-pill badge-secondary">10 tasks</span></small></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, per no reque elitr, et vivendum oportere erroribus mel. Nonumy quaeque albucius vim ex, imperdiet definitionem cu cum. Ut munere tractatos pro, vix te nostrud mandamus recteque, in soluta possim postulant cum. Veniam nostrud sensibus ei qui, nibh ubique concludaturque est te.</p>
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

                    <li class="list-group-item">
                        <div class="card-body">
                            <h4 class="card-title">list group item heading <small><span class="badge badge-pill badge-secondary">10 tasks</span></small></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, per no reque elitr, et vivendum oportere erroribus mel. Nonumy quaeque albucius vim ex, imperdiet definitionem cu cum. Ut munere tractatos pro, vix te nostrud mandamus recteque, in soluta possim postulant cum. Veniam nostrud sensibus ei qui, nibh ubique concludaturque est te.</p>
                            <div class="buttons float-right">
                                <a href="#" class="btn btn-info" title="Manage Task" data-toggle="modal" data-target="#Task-Modal">
                                    <i class="fas fa-thumbs-up" ></i>
                                </a>
                                <a href="#" class="btn btn-primary" title="Edit" data-toggle="modal" data-target="#TodoList-Modal">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>

                <div class="card-footer">
                    <small>
                        3 list items
                    </small>
                </div>
            </div><!-- end card for list group -->
        </div><!-- end col -->




        <!-- Modal -->
        <div class="modal fade" id="TodoList-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Create New List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class="label-control">List Name</label>
                        <input type="text" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">Description</label>
                        <textarea rows="2" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div> <!-- End Modal -->

        <!-- Modal -->
        <div class="modal fade" id="Task-Modal" tabindex="-1" role="dialog" aria-labelledby="Task-ModaCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Task-ModaCenterTitle">Todo List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <table class="table">
                            <thead>
                                <td>
                                    <div class="pretty p-default p-round p-thick">
                                    <input type="checkbox" name="task-modal-ccheckbox_all" id="task-modal-ccheckbox_all" />
                                        <div class="state p-primary-o">
                                            <label></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" placeholder="Enter New Task" class="task-input" value="">
                                </td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="pretty p-default p-round p-thick">
                                            <input type="checkbox" class="task-modal-check-item">
                                            <div class="state p-primary-o">
                                                <label></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        the First Task
                                        <a href="#" class="btn btn-danger btn-sm float-right">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="done">
                                    <td>
                                        <div class="pretty p-default p-round p-thick">
                                            <input type="checkbox" class="task-modal-check-item">
                                            <div class="state p-primary-o">
                                                <label></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        the second Task
                                        <a href="#" class="btn btn-danger btn-sm float-right">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="pretty p-default p-round p-thick">
                                            <input type="checkbox" class="task-modal-check-item">
                                            <div class="state p-primary-o">
                                                <label></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        the third Task
                                        <a href="#" class="btn btn-danger btn-sm float-right">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-footer-first btn-group btn-group-toggle" data-toggle="buttons">
                       <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked><small> All</small>
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"><small> Active</small>
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3" autocomplete="off"><small> Completed</small>
                        </label>
                    </div>
                    <div class="modal-footer-second"><small>3 Item Left</small></div>
                </div>
            </div><!-- End content -->
        </div> <!-- End Modal -->



    </div><!-- end row -->
</div><!-- end container -->

    

<!-- end main container -->

@endsection

