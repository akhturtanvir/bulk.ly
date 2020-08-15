@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	<h3>New Menu - Recent posts send to Buffer

	@if($user->plansubs())
		@if($user->plansubs()['plan']->slug == 'proplusagencym' OR $user->plansubs()['plan']->slug == 'proplusagencyy' )
			<a href="https://bufferapp.com/oauth2/authorize?client_id={{env('BUFFER_CLIENT_ID')}}&redirect_uri={{env('BUFFER_REDIRECT')}}&response_type=code" class="btn btn-primary pull-right">Add Buffer Account</a>
		@endif
	@endif




	</h3>


	<?php //dd('b_posting'); ?>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody> 
				@foreach ($profiles as $profile)
					@if ( $profile['type'] != 'google' )
					<tr>
						<td></td>
						<td></td>
						<td width="350">
							<div class="media">
								<div class="media-left">
									<a href="">
										<span class="fa fa-{{$profile['type']}}"></span>
										<img width="50" class="media-object img-circle" src="{{$profile['avatar']}}" alt="">
									</a>
								</div>
								<div class="media-body media-middle" style="width: 180px;">
									<h4 class="media-heading">{{$profile['name']}}</h4>
								</div>
							</div>
						</td>
						<td></td>
						<td></td>
					</tr>
					@endif
				@endforeach
				</tbody> 
			</table>
		</div>
	</div>
</div>
@endsection
