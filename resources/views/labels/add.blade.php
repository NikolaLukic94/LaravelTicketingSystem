<div class="modal fade" id="addLabelModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddLabel">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add New Label
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-ticket-label-errors">
                        </ul>
                    </div>
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Name
                            </label>
                        </div>
                        <div class="col">
                            <input name="name" type="text" class="input" id="name" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="order">
                                Order
                            </label>
                        </div>
                        <div class="col">
                            <input name="order" type="text" class="input" id="order" required>
                        </div>
                    </div>
                </div> 
<!-- -->
                </div>
                <div class="modal-footer">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                        <button class="btn btn-info" id="btn-add" type="button" value="add">
                            Add New Label
                        </button>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>