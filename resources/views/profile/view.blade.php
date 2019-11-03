@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
            	<div class="card-header">
            		<div class="text-center">
        			<h1>{{ $user->name }}</h1>
        			<hr>
        			<img src="https://www.truelifedenver.com/wp-content/uploads/2016/04/blank-profile-head-hi.png" height="300" width="300">
        			<hr>
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Summary
                                </button>
                              </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        Participating in:
                                    </div>
                                    <div class="col">
                                        <i>14 tickets</i>
                                    </div>
                                </div>                         
                                <div class="row">
                                    <div class="col">
                                        Solved:
                                    </div>
                                    <div class="col">
                                        <i>43</i> tickets this year
                                    </div>
                                </div> 
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Statuses
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        New:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col">
                                        Recently updated:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col">
                                        Recently active:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div>                                                            
                                <div class="row">
                                    <div class="col">
                                        Open:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col">
                                        On Hold:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col">
                                        Solved:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col">
                                        Closed:
                                    </div>
                                    <div class="col">
                                        <i>5</i>
                                    </div>
                                </div>            
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Info
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    Experience:
                                </div>
                                <div class="col">
                                    {{ $user->exp }} points
                                </div>
                            </div>                                  
                            <div class="row">
                                <div class="col">
                                    Assigned to:
                                </div>
                                <div class="col">
                                    <i>{{$user->assignedTicketsCount()}}</i> tickets
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col">
                                    Rank:
                                </div>
                                <div class="col">
                                    <i>{{ $user->role }}</i> 
                                </div>
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>                    
                		</div>                                                                   				
                    	</div>
                    </div>
                </div>
        <div class="col-md-8">
            <div class="card">
            	<div class="card-header">
            		<h3>Activity:</h1>
            		<hr>
            		<p>Favorited ticket #33 a day ago</p>
            	</div>
            </div>
        </div>
    </div>
</div>

@stop
