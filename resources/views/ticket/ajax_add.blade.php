<div class="modal fade" id="addTicketModal" tabindex="-1" role="dialog" aria-labelledby="addTicketModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
        <div class="field">
            <div class="row">
                <div class="col">
                    <label class="label" for="name">
                        Title
                    </label>
                </div>
                <div class="col">
                    <input name="title" type="text" class="input" id="title" required style="width: 100%">
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
                      <select class="browser-default custom-select">
                        <option selected>{{$ticket->importance}}</option>
                        @foreach($importance as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                      </select> 
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
                      <select class="browser-default custom-select">
                        <option selected>-- Select --</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select> 
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
                  <select class="browser-default custom-select">
                    <option selected>-- Select --</option>
                    @foreach($sub_categories as $sub_category)
                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                    @endforeach
                  </select> 
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
                    <input name="image" type="file" class="input" id="image" style="width: 100%">
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
                    <input name="description" type="text" class="description" id="name" required style="width: 100%">
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                <button class="btn btn-info" id="btn-add" type="submit" value="add">
                    Add New Ticket
                </button>
            </input>
        </div>
    </form>
    </div>
  </div>
</div>