<div class="modal fade" id="addTicketModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddTicket">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add New Ticket
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-ticket-sub-category-errors">
                        </ul>
                    </div>
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Title
                            </label>
                        </div>
                        <div class="col">
                            <input name="title" type="text" class="input" id="title" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Importance
                            </label>
                        </div>
                        <div class="col">
                            <input name="importance" type="text" class="input" id="importance" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Category
                            </label>
                        </div>
                        <div class="col">
                            <input name="category" type="text" class="input" id="category" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Subcategory
                            </label>
                        </div>
                        <div class="col">
                            <input name="subcategory" type="text" class="input" id="subcategory" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Image
                            </label>
                        </div>
                        <div class="col">
                            <input name="image" type="file" class="input" id="image">
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Description
                            </label>
                        </div>
                        <div class="col">
                            <input name="description" type="text" class="description" id="name" required>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                        <button class="btn btn-info" id="btn-add" type="button" value="add">
                            Add New Ticket
                        </button>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>