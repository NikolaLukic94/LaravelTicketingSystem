<div class="modal fade" id="editLabelModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditLabel">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Edit Label
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-ticket-label-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>
                            Name
                        </label>
                        <input class="form-control" id="name" name="name" type="text" required>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Order
                        </label>
                        <input class="form-control" id="order" name="order" type="text">
                        </input>
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="label_id" name="label_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-info" id="btn-edit" type="button" value="add">
                                Update Label
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>