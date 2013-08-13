@extends('layouts.master')

@section('content')

{{ HTML::script('/javascript/edpug.js') }}

<section class="content-row white">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1>Welcome to <abbr title="Edinburgh PHP User Group">edPUG</abbr></h1>
            <h2>The Edinburgh PHP User Group</h2>
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
                  <a class="btn" href="http://edpug.eventbrite.co.uk">Book your ticket</a>
                @endif
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content-row yellow" id="next-meetup">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h2 style="opacity: 0">The next <abbr title="Edinburgh PHP User Group">edPUG</abbr> meetup</h2>
            <h3>Join us every month for our PHP User Group</h3>
            
            <div class="row">
              <div class="icon-row">
                <img class="icon clock" src="" alt="" />
                <img class="icon calendar" src="" alt="" />
                <img class="icon building" src="" alt="" />
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

    <section class="content-row blue" id="what-to-expect">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h2>What to expect?</h2>
            <h3>Famous PHPizza, beer and great chat</h3>
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
                <p>One you find the venue, you&rsquo;ll be greeted with a friendly hello and the offer of a beer or soft drink. Once we&rsquo;ve established numbers
                    on the night (there&rsquo;s always a few latecomers!), we&rsquo;ll make an order for food, which usually involves the famous <abbr title="Peppers Ham Pepperoni">PHP</abbr>izza&trade;!</p>

                <p>While we wait for everyone to arrive, there&rsquo;s often a bit of Table Tennis to be played, or the Epic Fail compilation of the month to be watched on YouTube&trade;.
                    Often people will talk about new things they&rsquo;ve seen, and bring them up on the big screen.
                </p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content-row white" id="find-us">
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
                <h4>When and where = find us</h4>
                <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante</p>
                <h4>When and where = find us</h4>
                <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante</p>
                <h4>When and where = find us</h4>
                <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante</p>
                <h4>When and where = find us</h4>
                <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante</p>
              </div>
              <div class="offset1 span6" id="contact-us">
                {{ Form::open(array('url' => '/contact-form-ajax', 'id' => 'contact-form-ajax')) }}
                {{ Form::model($contact, array()) }}

                {{ Form::label('name', 'Your Name:', array('class' => 'name')) }}
                {{ Form::text('name') }}

                {{ Form::label('email', 'Your Email:', array('class' => 'email')) }}
                {{ Form::text('email') }}

                {{ Form::label('message', 'Your Message:', array('class' => 'message')) }}
                {{ Form::textArea('message') }}
                <br />
                {{ Form::submit("Send message", array('id'=>'contact-form-submit')) }}
                <span id='contact-form-submitting' class='hide'><img src='/images/spinner.gif' /></span>
                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="map-row">
      map goes here
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
