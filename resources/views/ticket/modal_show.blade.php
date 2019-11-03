<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h5 class="modal-title" id="exampleModalLabel">Ticket Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                Title:
              </div>
              <div class="col-sm">
                {{$ticket->title}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm">
                Description:
              </div>
              <div class="col-sm">
                {{$ticket->description}}
              </div>
            </div> 
            <hr>  
            <div class="row">
              <div class="col-sm">
                Importance:
              </div>
              <div class="col-sm">
                {{$ticket->importance}}
              </div>
            </div>
            <hr>  
            <div class="row">
              <div class="col-sm">
                Status:
              </div>
              <div class="col-sm">
                {{$ticket->status}}
              </div>
            </div> 
            <hr>
            <div class="row">
              <div class="col-sm">
                Category:
              </div>
              <div class="col-sm">
                <p>{{$ticket->category->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm">
                Subcategory:
              </div>
              <div class="col-sm">
                <p>{{$ticket->subCategory->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm">
                Created by:
              </div>
              <div class="col-sm">
                <p>{{  $ticket->creator->name }} {{$ticket->created_at->diffForHumans()}}</p> 
              </div>
            </div>  
            <hr>     
            @foreach($images as $image)
              @if($image->where('ticket_id', $ticket->id))
                  <td><img id="myImg" src="/images/{{$images}}" style="width:100px;height:60px;"></td>
                  @include('layouts.partials.ticket.modal')                            
              @endif             
            @endforeach
          </div>
            <ul>
              @foreach($comments as $comment)
                @if($comment->ticket_id == $ticket->id)
                  <li>
                    {{$comment->text}}
                  </li>
                @endif
              @endforeach
            </ul>
            <form action="/comment/store/{{$ticket->id}}" method="POST">
              {{ csrf_field() }}
                <div class="mt-4 mb-4">
                <textarea name="comment" style="width: 100%"></textarea>
                <button type="submit" class="btn btn-secondary">Submit</button> 
            </form>
        </div> 
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>