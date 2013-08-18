@extends('layouts.master_mastheadless')

@section('title')
Login | @parent
@stop

@section('content')
<br />

 <section class="container">
	<div class="row">
		<div class="span5">
			<div class="well">
				<h2>Log in to edPUG</h2>	
				{{ Confide::makeLoginForm() }}
			</div>
		</div>
		<div class="span5 offset2">

			<h2>Don't have an edPUG account?</h2>	

			<p>If you want to help run edPUG, or simply become a guest blogger, then create an account and get in touch with us.</p>

			<a class="btn btn-large" href="{{ action('UserController@create') }}">Register</a>

		</div>
	</div>
</section>
@stop
