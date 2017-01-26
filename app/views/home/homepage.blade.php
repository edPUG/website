@extends('layouts.master')

@section('content')

<section class="content-row white" id="welcome">
      <div class="container">
        <div class="row">
          <div class="span12">
            <hgroup>
				<h1>Welcome to <abbr title="Edinburgh PHP User Group" class="subtle">edPUG</abbr></h1>
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

<h4 style="color: red;">We are finalizing a more central venue for 2017 so ther will be no edPUG in January 2017</h4>
<p>Watch this space for updates!</p>

<!--                
<p>
                  <abbr title="Edinburgh PHP User Group">edPUG</abbr> takes place on the <em>{{ Config::get('edpug.day_repetition') }} {{ Config::get('edpug.day') }}</em> of every month, making the next edPUG in <strong>{{ edPUG\Helpers\DateHelper::timeUntilNextMeetup() }}</strong>.
                  It is free to come along, but we issue electronic tickets via Eventbrite to control the capacity of the venue.
                  Get your ticket early to avoid disappointment! We&rsquo;ll also email those with a free ticket with a reminder a few days before the event.
                </p>
-->
                
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
            <h2>The next <abbr title="Edinburgh PHP User Group" class="subtle">edPUG</abbr> meetup</h2>
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

							<p>While we wait for everyone to arrive, there&rsquo;s often a bit of chat, or the Epic Fail compilation of the month to be watched on YouTube&trade;.
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
            <h3>By <a href="#" class="map-update" id="plane-map">plane</a>, <a href="#" class="map-update" id="train-map">train</a> or automobile</h3>
            
            <div class="row">
              <div class="span5">
                <h4>The venue</h4>
                <address>
                  <a target="_blank" href="https://www.google.co.uk/maps/place/Blonde+Digital/@55.977244,-3.173203,17z/data=!3m1!4b1!4m2!3m1!1s0x4887b80420069c0f:0x3e1e3ea5cc7b7db0">Blonde Digital Ltd.</a><br />
                  86 Commercial Quay <br /> Edinburgh <br />EH6 6LX<br />
                  <a href="http://www.blonde.net/" target="_blank">blonde.net</a>
                </address>

                <p>We are tucked away on Commercial Quay, the cobbled area at the back of Commercial Street, overlooking the Scottish Govenment Building.
                We are next to the Bond No 9 pub. If you are on Commercial Street looking at Bonde No 9 you are on the wrong side of the building (Sneak through the pub to the back!)</p>

                <p>Take a look at this <a target="_blank" href="https://www.google.co.uk/maps/place/Commercial+Quay/@55.977202,-3.172609,3a,90y,199h,90t/data=!3m4!1e1!3m2!1seX62QGw88_ZOQZHwN2nFrw!2e0!4m2!3m1!1s0x4887b806a23c0307:0x3d884a37fb246bfb">Google &quot;Street View&quot;</a> link to get an idea of where you should be heading.</p>


                <h4>By foot</h4>
                <p>Find your way to the Shore in Leith, we are very close to the Cameo Bar (we are on the other side of the bridge from The Kings Wark). Find the entrance to Commercial Quay (a large green archway next to the seat made from half a boat) and keep walking until you find the buzzer at number 86.</p>
                <h4>By bus</h4>


                <p>There are many bus services to Commercial Street, including the very frequent 22 (Also serviced by the 16, 35 and 36). We recommend the <a target="_blank" href="http://lothianbuses.com/plan-a-journey/journey-planner">Lothian Buses journey planner</a> to find a bus from your part of town.

                <h4>By train</h4>
                <p>Get off the train at <a href="http://www.networkrail.co.uk/edinburgh-waverley-station/departures-arrivals/">Edinburgh Waverley train station</a> and jump on the Number 22 bus until you reach Commercial Street. Jump off the first stop after it crosses the bridge in the Shore.</a></p>
              </div>
              <div class="offset1 span6" id="contact-us">
               
                <h4>Contact us</h4>
                
                <p>If you are interested in doing a talk, becoming a sponsor, or have any other questions, please do not hesitate to get in touch.</p>
                
				{{ Former::vertical_open()
				  ->id('contact-form-ajax')
				  ->data_action(URL::route('contact-form-endpoint'))
				  ->style('display: none;')
				  ->action(URL::route('dev_null'))
				  }}
                
				{{ Former::text('name')->required()->label('Your name:')->value(App::environment() != 'prod' ? 'Test Person' : '')->class('input-block-level') }}
                {{ Former::email('email')->required()->label('Your email address:')->value(App::environment() != 'prod' ? 'test@here.com' : '')->class('input-block-level') }}
                {{ Former::textarea('message')->required()->label('Your message:')->rows(8)->value(App::environment() != 'prod' ? 'My test message' : '')->class('input-block-level') }}                            
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
    
  <section id="sponsors" class="content-row yellow">
    <div class="container">
      <div class="row">
        <div class="span12">
          <hgroup>
            <h2>Sponsors</h2>
            <h3>Thank you to all our sponsors</h3>
          </hgroup>
          <div class="row">
            <div class="span6">
              <div style="text-align: center; margin-bottom: 20px;">
                <img style="width: 200px" src="/assets/img/blonde_logo.png" />
              </div>
              <p>
                Blonde is a full service digital agency with 60 people in Edinburgh and London. It provides ingenious digital solutions to commercial problems.
              </p>
              </p>
                We use code, content, conversation and creativity to great effect.
              </p>
              <p>
                <a target="_blank" href="http://www.blonde.net/">http://www.blonde.net/</a>
              </p>
            </div>
            <div class="span6">
              <div class="jetbrains-wrapper">
                <img style="margin-top: 15px" src="/assets/img/jetbrains-logo.png" />
              </div>
              <p>
                We make professional software development a more productive and enjoyable experience. 
              </p>
              </p>
                We help developers work faster by automating common, repetitive tasks to enable them to stay focused on code design and the big picture.
              </p>
              <p>
                <a target="_blank" href="http://www.jetbrains.com/">http://www.jetbrains.com/</a>
              </p>
            </div>
        </div>
        </div>
      </div>
    </div>
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
