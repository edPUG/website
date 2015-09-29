@extends('layouts.master_mastheadless')

@section('content')

    <section class="content-row white" id="welcome">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <hgroup>
                        <h1><abbr title="Edinburgh PHP User Group" class="subtle">edPUG</abbr> needs you!</h1>
                        <h2>We are on the lookout for new speakers</h2>
                    </hgroup>
                    <div class="row">
                        <div class="span6">
                            <p><abbr title="Edinburgh PHP User Group">edPUG</abbr> (Edinburgh PHP User Group) is Scotland’s longest running dedicated PHP User Group having run continuously in its current format since 2012. It takes place on the <em>{{ Config::get('edpug.day_repetition') }} {{ Config::get('edpug.day') }}</em>  of the month without fail.</p>
                            <p>We’ve attracted speakers from just around the corner to as far afield as New Zealand on a wide range of topics including aspect oriented programing, Apigility, CDNs, XML and Mozilla Persona.</p>
                            <p>We don’t take ourselves too seriously and try to keep things light hearted by providing free beer & pizza, and watching the occasional funny Youtube videos in addition to the PHP chat.</p>
                            </p>
                        </div>
                        <div class="span6">

                            <p>We have three ways to present:</p>


                            <ul>
                                <li>An <strong>in person talk</strong> at Blonde Digital’s Offices, Edinburgh (the best option if you are in town!)<br><br></li>
                                <li>A pre-recorded talk (often recorded at another user group/conference) followed by a <strong>brief Q&A over Skype or Google Hangouts</strong> with the speaker.<br><br></li>
                                <li>A <strong>live streaming talk</strong> that is presented over Skype or Google Hangouts with a quick Q&A afterwards.</li>
                            </ul>

                            <p>All three formats are very popular with our atendees, with the streaming options giving you the option from presenting in the <strong>comfort of your own home</strong>!</p>

                        </div>
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
                        <h2>Interested? Of course you are!</h2>
                        <h3>Simply fill in the form below an we'll get back in touch</h3>
                    </hgroup>
                    <div class="row">
                        <div class="span12">

                            <iframe src="https://docs.google.com/forms/d/1sbo3j_nSWGMQCXTtPr-ODMIsFh9CnuPi7BQfDnRUDno/viewform?embedded=true" width="760" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

                        </div>

                    </div>
                </div>
            </div>
        </div>
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
