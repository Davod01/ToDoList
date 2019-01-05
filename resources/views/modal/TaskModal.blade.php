<!-- Modal -->
<div class="modal fade" id="Task-Modal" tabindex="-1" role="dialog" aria-labelledby="Task-ModaCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Task-Modal-title">Todo List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="Task-Modal-body">
                    <div class="card">
                        <table class="table">
                            <thead>
                                <td>
                                    <div class="pretty p-default p-round p-thick">
                                    <input type="checkbox" name="task-modal-checkbox_all" id="task-modal-checkbox_all" />
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:flex-start;" id="Task-Modal-footer">
                    <div class="modal-footer-first btn-group btn-group-toggle" data-toggle="buttons">
                       <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="select_all_tasks" autocomplete="off"><small> All</small>
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="select_actived_tasks" autocomplete="off"><small> Active</small>
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="select_completed_tasks" autocomplete="off"><small> Completed</small>
                        </label>
                    </div>
                    <div class="modal-footer-second"><small id="task_modal_counts">3 Item Left</small></div>
                </div>
            </div><!-- End content -->
        </div> <!-- End Modal -->