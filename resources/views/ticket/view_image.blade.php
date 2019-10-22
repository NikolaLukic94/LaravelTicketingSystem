<div class="modal fade" id="viewTicketImageModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddTicket">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add a New Photo?
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <img id="myImg" src="/images/{{$images[0]->link}}" style="width:100px;height:60px;">
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