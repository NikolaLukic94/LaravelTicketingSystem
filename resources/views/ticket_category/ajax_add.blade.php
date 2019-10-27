<div class="modal fade" id="addTicketCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddTicketCategory">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add New Task
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-ticket-category-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>
                            Name
                        </label>
                        <input class="form-control" id="name" name="name" type="text">
                        </input>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                        <button class="btn btn-info" id="btn-add" type="button" value="add">
                            Add New Task
                        </button>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addTicketModal" tabindex="-1" role="dialog" aria-labelledby="addTicketModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="frmAddTicket">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add New Category
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-ticket-category-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>
                            Name
                        </label>
                        <input class="form-control" id="name" name="name" type="text">
                        </input>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                        <button class="btn btn-info" id="btn-add" type="button" value="add">
                            Add New Task
                        </button>
                    </input>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                        <button class="btn btn-info" id="btn-add" type="button" value="add">
                            Add New Ticket Category
                        </button>
                    </input>
                </div>
            </form>
    </div>
  </div>
</div>