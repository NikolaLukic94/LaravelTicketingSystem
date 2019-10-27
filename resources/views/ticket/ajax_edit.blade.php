<div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <h1>{{$ticket->title}}</h1>    
            <p>{{$ticket->description}}</p>
            <p>{{$ticket->importance}}</p>
            <p>img</p>
            <td>{{$ticket->status}}</td>  
            <p>CATEGRY</p>
            <P>sUBCATEGORY</P>
            <P>CREATED BY</P>                    
            @if($images->where('ticket_id', $ticket->id))
                <td><img id="myImg" src="/images/{{$images}}" style="width:100px;height:60px;"></td>
                @include('layouts.partials.ticket.modal')                            
            @endif
            <td>{{$ticket->created_at->diffForHumans()}}</td>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>