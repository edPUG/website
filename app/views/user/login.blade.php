@extends('layouts.master')

@section('title')
Login | @parent
@stop

@section('content')
<br />
<div class="row-fluid">
	<div class="span6">
		<div class="well">
			<h2>Log in to edPUG</h2>	
			{{ Confide::makeLoginForm() }}
		</div>
	</div>
	<div class="span6">
		
		<h2>Don't have an edPUG account?</h2>	

		<p>If you want to help run edPUG, or simply become a guest blogger, then create an account and get in touch with us.</p>
		
		<a class="btn btn-large" href="{{ action('UserController@create') }}">Register</a>
					
	</div>
</div>
@stop
