@extends('layouts.master')

@section('content')

<section class="content-row white" id="welcome">
      <div class="container">
        <div class="row">
          <div class="span12">
            <hgroup>
				<h1>Welcome to <abbr title="Edinburgh PHP User Group">edPUG</abbr></h1>
				<h2>The Edinburgh PHP User Group</h2>
			</hgroup>
            <div class="row">
              <div class="span6">
                <p>
                We are the capital of Scotland&rsquo;s premier meetup for all things PHP and more. We love talking about all web technologies, including, but not limited to:
                PHP &amp; JavaScript frameworks / DHTML &amp; AJAX / programming methodologies and design patterns / CMS&rsquo;s / e-commerce / hosting / scalability / deployment / Relational & Document databases and any other cool web technologies.
                </p>
              </div>
              <div class="span6">
                <p>
                  <abbr title="Edinburgh PHP User Group">edPUG</abbr> takes place on the <em>{{ Config::get('edpug.day_repetition') }} {{ Config::get('edpug.day') }}</em> of every month, making the next edPUG in <strong>{{ edPUG\Helpers\DateHelper::timeUntilNextMeetup() }}</strong>.
                  It is free to come along, but we issue electronic tickets via Eventbrite to control the capacity of the venue.
                  Get your ticket early to avoid disappointment! We&rsquo;ll also email those with a free ticket with a reminder a few days before the event.
                </p>
                
                @if ($next_meetup)
                  <a class="btn book-btn" href="http://edpug.eventbrite.co.uk">Get your free ticket now!</a>
                @endif
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content-row yellow" id="meetup">
      <div class="container">
        <div class="row">
          <div itemscope itemtype="http://schema.org/Event" class="span12">
			<hgroup>
            <h2>The next <abbr title="Edinburgh PHP User Group">edPUG</abbr> meetup</h2>
            @if ($next_meetup)
				<h3 itemprop="name">{{ $next_meetup->title }}</h3>
			@else
				<h3>Join us every month for our PHP User Group</h3>
			@endif
            </hgroup>
             <div class="row">
              <div class="iconrow meetup-header">
                <div class="clock-wrapper">
					<div class="clock">7 - 9pm</div>
					<div class="clock-arm"></div>
				</div>
              </div>
            </div>  
            <div class="row">
              @if ($next_meetup)
    
                @include('includes.meetup.full_meetup_detail', array('meetup' => $next_meetup))  

              @else
                <div class="span6">
                  <p>
                    Details of the next <abbr title="Edinburgh PHP User Group">edPUG</abbr> are being confirmed. It will either be a talk / demonstration / hack session or just general chat.
                    <abbr title="Edinburgh PHP User Group">edPUG</abbr> goes ahead every month regardless of whether a talk takes place or not, so get it your calendar as a recurring event now!
                  </p>
                </div>

                <div class="span6">
                   <p>The best way to not miss put on the next <abbr title="Edinburgh PHP User Group">edPUG</abbr> is to subscribe to our RSS feed.</p>
                  <a class="btn" href="http://www.eventbrite.co.uk/rss/organizer_list_events/2689618454">Subscribe to RSS</a>
                </div>
              @endif
              
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="content-row blue" id="expect">
		<div class="container">
			<div class="row">
				<div class="span12">
					<hgroup>
						<h2>What to expect?</h2>
						<h3>Famous PHPizza, beer and great chat</h3>
					</hgroup>
					<div class="row">
						<div class="span6">
							<p>First and foremost, expect a friendly, informal and relaxed atmosphere. We have new members every few months,
								so don&rsquo;t be afraid to come along on your own &ndash; our current members (edPUGGERs!) were all <abbr title="Edinburgh PHP User Group">edPUG</abbr> newbies once! Why not bring along a friend if it&rsquo;s your first time? The more the merrier!</p>

							<p>Everyone is welcome, from people who just want to find out more about PHP; to students considering a career in web development; bedroom programmers wanting to meet like minded people;
								to people who make a living writing PHP on a daily basis, either freelance or for one of the many excellent digital agencies in Edinburgh and beyond.
								People from all ages and skill levels come along, the only requirement is an interest in <strong>&lt;?php ?&gt;</strong>
							</p>
						</div>
						<div class="span6">
							<p>Once you find the venue, you&rsquo;ll be greeted with a friendly hello and the offer of a beer or soft drink. When we&rsquo;ve established numbers
								on the night (there&rsquo;s always a few latecomers!), we&rsquo;ll make an order for food, which usually involves the famous <abbr title="Peppers Ham Pepperoni">PHP</abbr>izza&trade;!</p>

							<p>While we wait for everyone to arrive, there&rsquo;s often a bit of Table Tennis to be played, or the Epic Fail compilation of the month to be watched on YouTube&trade;.
								Often people will talk about new things they&rsquo;ve seen, and bring them up on the big screen.
							</p>

							@if ($next_meetup)
							<a class="btn book-btn" href="http://edpug.eventbrite.co.uk">Get your free ticket now!</a>
							@endif

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="content-row white" id="contact">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h2>Find us</h2>
            <h3>By plane, train or automobile</h3>
             <div class="row">
              <div class="icon-row">
                <img class="icon clock" src="" alt="" />
                <img class="icon calendar" src="" alt="" />
                <img class="icon building" src="" alt="" />
              </div>
            </div>
            <div class="row">
              <div class="span5">
                <h4>The venue</h4>
				<address>
					<a target="_blank" href="https://maps.google.co.uk/maps?q=line+digital,+77+brunswick+street&hl=en&ll=55.96036,-3.179963&spn=0.009597,0.01929&sll=55.960408,-3.180327&sspn=0.009597,0.01929&hq=line+digital,&hnear=77+Brunswick+St,+Edinburgh+EH7+5HS,+United+Kingdom&t=m&z=16&iwloc=A"><a target="_blank" href="https://maps.google.co.uk/maps?q=line+digital,+77+brunswick+street&hl=en&ll=55.96036,-3.179963&spn=0.009597,0.01929&sll=55.960408,-3.180327&sspn=0.009597,0.01929&hq=line+digital,&hnear=77+Brunswick+St,+Edinburgh+EH7+5HS,+United+Kingdom&t=m&z=16&iwloc=A">Line Digital Ltd.</a><br />
					77 Brunswick Street, Edinburgh, EH7 5HS<br />
					<a href="http://www.line.uk.com" target="_blank">line.uk.com</a>
				</address>
                <p>We are hidden down an alleyway on Brunswick Street. The blue door in this <a target="_blank" href="http://goo.gl/maps/kk2WJ">Google &quot;Street View&quot;</a> link is the secret to finding <abbr title="Edinburgh PHP User Group">edPUG</abbr>. Once you find the door, ring the buzzer.</p>
                <h4>By foot</h4>
                <p>From Leith Walk, find <a target="_blank" href="http://goo.gl/maps/4MVOR">Vittoria's</a>. We are just a few doors down from there. From London Road there are many streets to take, so best point the GPS on your mobile phone to <a target="_blank" href="https://maps.google.co.uk/maps?q=line+digital,+77+brunswick+street&hl=en&ll=55.96036,-3.179963&spn=0.009597,0.01929&sll=55.960408,-3.180327&sspn=0.009597,0.01929&hq=line+digital,&hnear=77+Brunswick+St,+Edinburgh+EH7+5HS,+United+Kingdom&t=m&z=16&iwloc=A">the office address.</a></p>
                <h4>By bus</h4>
                <p>There are many bus services to Easter Road and London road, so we recommend the <a href="http://lothianbuses.com/plan-a-journey/journey-planner">Lothian Buses</a> journey planner to find a bus from your part of town.</p>
                <h4>By train</h4>
                <p>The office is a 15 minute walk from <a target="_blank" href="http://www.networkrail.co.uk/edinburgh-waverley-station/departures-arrivals/">Edinburgh Waverley train station</a>. We recommend you leave the station via the <a target="_blank" href="http://goo.gl/maps/rfEmM">Calton Road exit.</a></p>
              </div>
              <div class="offset1 span6" id="contact-us">
                
				{{ Former::vertical_open()
				  ->id('contact-form-ajax')
				  ->data_action(URL::route('contact-form-endpoint'))
				  ->style('display: none;')
				  ->action(URL::route('dev_null'))
				  }}
                
				{{ Former::text('name')->required()->label('Your Name:')->value('testing') }}
                {{ Former::email('email')->required()->label('Your Email Address:')->value('test@here.com') }}
                {{ Former::textarea('message')->required()->label('Your Message:')->rows(5)->value('My test') }}             
                <br />
                {{ Form::submit('Send message', array('id' => 'contact-form-submit')) }}
                <span id="contact-form-submitting" class="hide"><img style="padding-left: 15px;" src="/assets/img/spinners/squares-circle.gif" alt="Loading..." /></span>
                {{ Former::close() }}
				
				<div id="contact-form-success" class="alert alert-success" style="display:none">					
				</div>
				
				<p class="requires-javascript">JavaScript is required to use the Contact Form.</p>
				
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="map-row">
		<div id="map-canvas"></div>
	</section>


    @if (0)
    <div id="do-a-talk">

        <h2>Do a talk?</h2>

        <p>
    Yourself / get your company to sponsor. Great opportunity to talk to a friendly...

        </p>
    </div>
    @endif

@stop  
