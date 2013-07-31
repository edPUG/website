@extends('layouts.master')

@section('content')
   
<div id="home">
    <h1>Welcome to <abbr title="Edinburgh PHP User Group">edPUG</abbr> - the Edinburgh PHP User Group</h1>
    <p>
        We are the capital of Scotland&rsquo;s premier meetup for all things PHP and more. We love talking about all web technologies, including, but not limited to:
        PHP &amp; JavaScript frameworks / DHTML & AJAX / programming methodologies and design patterns / CMS&rsquo;s / e-commerce / hosting / scalability / deployment / Relational & Document databases and any other cool web technologies.
    </p>
    <p>
        edPUG takes place on the <em>third Tuesday</em> of every month, making the next edPUG in {{ edPUG::timeUntilNextMeetup() }}.
        It is free to come along, but we issue electronic tickets via Eventbrite to control the capacity of the venue.
        Get your ticket early to avoid disappointment! We&rsquo;ll also email those with a free ticket with a reminder a few days before the event.
    </p>
    
</div>

<div id="next-meetup">

    <h2>The next meetup</h2>
    
    @if ($next_meetup)
    
      @include('includes.meetup.full_meetup_detail', array('meetup' => $next_meetup))  
    
    @else
    
    <p>
    Details of the next edPUG are being confirmed. It will either be a talk / demonstration / hack session or just general chat.
edPUG goes ahead every month regardless of whether a talk takes place or not, so get it your calendar as a recurring event now!
    </p>
    
    <p>The best way to not miss put on the next edPUG is to subscribe to our newsletter.</p>
    
    <p>[EventBrite subscribe]</p>
    
    @endif
    
    
</div>

<div id="what-to-expect">

    <h2>What to expect?</h2>
    
    <p>First and foremost, expect a friendly, informal and relaxed atmosphere. We have new members every few months,
        so don&rsquo;t be afraid to come along on your own &ndash; our current members (edPUGGERs!) were all edPUG newbies once! Why not bring along a friend if it&rsquo;s your first time? The more the merrier!</p>
    
    <p>Everyone is welcome, from people who just want to find out more about PHP; to students considering a career in web development; bedroom programmers wanting to meet like minded people;
        to people who make a living writing PHP on a daily basis, either freelance or for one of the many excellent digital agencies in Edinburgh and beyond.
        People from all ages and skill levels come along, the only requirement is an interest in <strong>&lt;?php ?&gt;</strong>
    </p>
    
    <p>One you find the venue, you&rsquo;ll be greeted with a friendly hello and the offer of a beer or soft drink. Once we&rsquo;ve established numbers
        on the night (there&rsquo;s always a few latecomers!), we&rsquo;ll make an order for food, which usually involves the famous <abbr title="Peppers Ham Pepperoni">PHP</abbr>izza&trade;!</p>
    
    <p>While we wait for everyone to arrive, there&rsquo;s often a bit of Table Tennis to be played, or the Epic Fail compilation of the month to be watched on YouTube&trade;.
        Often people will talk about new things they&rsquo;ve seen, and bring them up on the big screen.
    </p>
        
</div>

<div id="find-us">
    
    <h2>Find us</h2>
    
    <p>[Address]</p>
    
    <p>Pic of office, some instructions by train / parking etc. Google map locked on a street view.</p>
    
    
   
    
</div>

<div id="do-a-talk">
    
    <h2>Do a talk?</h2>
    
    <p>
Yourself / get your company to sponsor. Great opportunity to talk to a friendly...
    
    </p>
</div>

<div id="past-events">
    <pre>
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    Past events... Past events... Past events... Past events... Past events...
    </pre>
</div>



  
@stop  