<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">
            Edit Ticket
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="alert alert-danger" id="edit-error-bag">
                <ul id="edit-task-errors">
                </ul>
            </div>
            <div class="form-group">
                <label>
                    Task
                </label>
                <input class="form-control" id="task" name="task" required="" type="text">
                </input>
            </div>
            <div class="form-group">
                <label>
                    Description
                </label>
                <input class="form-control" id="description" name="description" required="" type="text">
                </input>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>