<!-- Delete Task Modal Form HTML -->
<div class="modal fade" id="deleteTaskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteTicketSubCategory">
                <div class="modal-header">
                    <h4 class="modal-title" id="delete-title" name="title">
                        Delete Ticket Sub-Category
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Are you sure you want to delete this ticket sub-category?
                    </p>
                    <p class="text-warning">
                        <small>
                            This action cannot be undone.
                        </small>
                    </p>
                </div>
                <div class="modal-footer">
                    <input id="ticket_sub_category_id" name="ticket_sub_category_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-danger" id="btn-delete" type="button">
                                Delete Ticket Subcategory
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>