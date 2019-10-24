<div class="modal fade" id="showTicketModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmShowTicket">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Ticket Details
                    </h4>                   
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <h1>{{$ticket->title}}</h1>    
                    <p>{{$ticket->description}}</p>
                    <p>{{$ticket->importance}}</p>
                    <p>img</p>
                    <td>{{$ticket->status}}</td>  
                    <p>CATEGRY</p>
                    <P>sUBCATEGORY</P>
                    <P>CREATED BY</P>                    
                    @if($images->where('ticket_id', $ticket->id))
                        <td><img id="myImg" src="/images/{{$images[0]->link}}" style="width:100px;height:60px;"></td>
                        @include('layouts.partials.ticket.modal')                            
                    @endif
                    <td>{{$ticket->created_at->diffForHumans()}}</td>
                </div>
                <div class="modal-footer">
                    <input id="task_id" name="task_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-info" id="btn-edit" type="button" value="add">
                                Update Ticket
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>