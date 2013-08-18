<div class="span6">
	
	<h4 itemprop="startDate" content="{{ $meetup->schema_start_date_time }}">When? {{ $meetup->long_start_date_time }} </h4>
	@if ($meetup->description)
		{{ $meetup->description }}
	@endif

	<h4>Where?</h4>
	
  <address itemprop="location" itemscope itemtype="http://schema.org/Place">
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress">
        Line Digital Ltd.<br />
        77 Brunswick Street<br />
      </span>
      <span itemprop="addressLocality">Edinburgh<br /></span>
      <span itemprop="postalCode">EH7 5HS<br /></span>
    </div>
		<a itemprop="url" href="http://www.line.uk.com" target="_blank">line.uk.com</a>
	</address>
	
	<p>See the <a href="{{ URL::route('home') }}#contact">Find us</a> section below for more information on getting to the venue.</p>

</div>

<div class="span6">

	@if ($meetup->talks && count($meetup->talks))

		@foreach ($meetup->talks as $talk)
			
		@if ($talk->speakers && count($talk->speakers))
		<h4>This months @if (count($talk->speakers) > 1)speakers @else speaker@endif</h4>
		
			@if ($lastIdx = count($talk->speakers) - 1) @endif

			@foreach ($talk->speakers as $idx => $speaker)
			
				<figure id="speaker">
					@if ($speaker->hasImage())
						<img src="{{ $speaker->getImageUrl('thumb') }}" alt="{{ $speaker->full_name }}">
					@endif
					<figcaption>
						<h5>{{ $speaker->full_name }}</h5>
						@if (count($talk->speakers) == 1) <span>{{ $talk->title }}</span> @endif
					</figcaption>
				</figure>
			
			@endforeach
		</p>
		@endif
		
		@if (count($talk->speakers) > 1) <h4>{{ $talk->title }}</h4> @endif

		{{ $talk->description }}
		
		<a class="btn book-btn" href="http://edpug.eventbrite.co.uk"">Get your free ticket now!</a>
	
		@endforeach

	@endif

</div>
