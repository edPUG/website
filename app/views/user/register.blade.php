@extends('layouts.master_mastheadless')

@section('title')
Register | @parent
@stop

@section('content')
<br />
<section class="container">
	<div class="row">
		<div class="span5">
			<div class="well">
				<h2>Create an edPUG Account</h2>	
				{{ Confide::makeSignupForm() }}
			</div>
		</div>
		<div class="span5 offset1">

			<h3>Ways you can help edPUG:</h3>

			<ul>
				<li>Do a talk</li>
				<li>Become a guest blogger</li>			
				<li>Find new edPUG members</li>			
				<li>Find new speakers</li>			
			</ul>

		</div>
	</div>
</section>
@stop
