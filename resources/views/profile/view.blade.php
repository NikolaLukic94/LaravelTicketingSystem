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
            		</div>            			
            			<p>Experience: Pro <i>33 approvals</i></p>
            			<p>Assignee to: <i>4 tickets</i></p>
            			<p>Rank: Admin</p>
            			<hr>
            			<h4>Summary</h4>
            			<p>Participating in <i>14 tickets</i></p>
            			<p>Solved <i>43</i> tickets this year</p>
            			<hr>
            			<!-- this section will be visible to the admin/superadmin only -->
            			<h3>QUEUE</h3>
            			<h4>Work in progress</h4>
            			<p>Pending tickets</p>
            			<p>My Tickets</p>
            			<p>Due today</p>
            			<hr>
            			<h4>Statuses</h4>
            			<p>New</p>
            			<p>Open</p>
            			<p>On Hold</p>
            			<p>Solved</p>
            			<p>Closed</p>
            			<hr>
						@if($ticket_categories)
							<h4>Categories</h4>
              					@foreach($ticket_categories as $ticket_category)              			
            						<p>{{ $ticket_category->name }}</p>
            					@endforeach
            			@endif	
            			<hr>
						@if($ticket_subcategories)
							<h4>Subcategories</h4>
              					@foreach($ticket_subcategories as $ticket_subcategory)              			
            						<p>{{ $ticket_subcategory->name }}</p>
            					@endforeach
            			@endif	            				
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
