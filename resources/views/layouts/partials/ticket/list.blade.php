        <div class="col-md-8">
            <div class="card">
                <table> 
                    <tr>
                    <th></th>
                    <th><abbr title="">Importance</abbr></th>
                    <th><abbr title="">Title</abbr></th>
                    <th><abbr title="">Category</abbr></th>                 
                    <th><abbr title="">Subcategory</abbr></th>
                    <th><abbr title="">Image</abbr></th>
                    <th><abbr title="">Created By</abbr></th>
                    <th><abbr title="">edit, delete,view</abbr></th>
                    </tr>
                    @if($tickets)
                        @foreach($tickets as $ticket)
                            <tr>
                              <td>
                                <label class="checkbox">
                                  <input type="checkbox">
                                </label>                            
                              </td>
                              <td>
                                @if(isset($sub->named_insured))
                                  {{ $sub->named_insured }}
                                @endif  
                            <td>
                                       
                            </td>
                            <td>
                            /
                            </td>
                            <td>
                            /
                            </td>
                            <td>
                            /
                            </td>
                            <td>
                            /
                            </td>
                            <td>
                            /
                            </td>
                            <td>
                            /
                            </td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-eye"></i> 
                                <i class="fas fa-trash-alt"></i>
                            </td>                              
                        @endforeach
                    @endif                                                          
                </table>
            </div>
        </div>