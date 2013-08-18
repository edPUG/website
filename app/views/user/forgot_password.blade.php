@extends('layouts.master_mastheadless')
@section('title')
Forgot Password? | @parent
@stop

@section('content')
<br />
<section class="container">
	<div class="row">
		<div class="span6">
			<div class="well">
				<h2>Forgot your password?</h2>

				<p>ElePHPants never forget! But lets be honest, PHP sometimes runs out of memory! Enter your email address below and we'll email you a means of choosing a new one.</p>

				{{ Confide::makeForgotPasswordForm() }}
			</div>
		</div>
		<div class="span6">

			<h3>The top 10 most forgotten things:</h3>
			<ul>
				<li>Return phone calls</li>
				<li>Reply to emails</li>
				<li>People's names</li>
				<li>Sending birthday cards</li>
				<li>Charging phone</li>
				<li>Passwords &ndash; <em>Yes, this is you!</em></li>
				<li>Take meat out of the freezer</li>
				<li>Water the plants</li>
				<li>Collect printouts from the printer</li>
				<li>Take the rubbish out</li>
			</ul>

		</div>
	</div>
</section>
@stop
