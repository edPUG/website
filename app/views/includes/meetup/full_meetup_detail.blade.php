<div class="well">
    <div class="row">
        <div class="span8">
        
            <h3>{{ $meetup->title }}</h3>

            <small>{{ $meetup->getLongDateTime() }}</small>

            @if ($meetup->description)
             {{ $meetup->description }}
            @endif


            @if ($meetup->talks)

              @foreach ($meetup->talks as $talk)
                <h4>Talk: {{ $talk->title }}</h4>
                <p>
                    Speakers: TODO           
                </p>

                {{ $talk->description }}

              @endforeach

            @endif
        </div>{{-- /.span8 --}}
        
        <div class="span4">
            <h4>Address</h4>
            <address>
                Line Digital Ltd.<br />
                77 Brunswick Street<br />
                Edinburgh<br />
                EH7 5HS<br />
                <a href="http://www.line.uk.com">line.uk.com</a>
            </address>
            
            <p>
                <button class="btn btn-large btn-primary" type="button">Get free ticket now!</button>  
            </p>
            <p class="text-warning">Hurry! limited spaces</p>
            [powered by EventBrite]
            
        </div>   
    
    </div>{{-- /.row --}}
</div>
    