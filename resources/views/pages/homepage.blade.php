@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Welcome to GDG Tangier where we meet, learn and share.'])

                    <p>
                        Everyone is on is own journey to build a successful career in the tech industry. Some want to be a superstar developer; others want to grow a tech business and some code just for fun.
                    </p>

                    <p>
                        We host a meetup (almost weekly), where we learn something new from each other.
                    </p>

                    <p>
                        Join in If you are a passionate learner, open mind about sharing and eager to grow.
                    </p>

                    <hr>

                    <p>
                        We are a community of people working as mobile devs, front-end devs, and back-end devs. 
                    </p>

                    <p>
                        Google Developer Groups (GDGs) are for developers who are interested in, but not only, Google's developer technology; everything from the Android, Chrome, Drive, Google Cloud, platforms, to product APIs like the Maps API and YouTube API.
                    </p>

                    <p>
                        Google is partnering with <a href="https://www.womentechmakers.com/membership" target="_blank">Women Techmakers</a> to launch a series of global events geared towards increasing visibility, community, and resources for technical women in our industry.
                    </p>

                    <p>
                        <strong>Disclaimer:</strong> GDG Tangier is an independent group, our activities and the opinions expressed here should in no way be linked to Google, the corporation. <br> To learn more about the GDG program, visit <a href="https://developers.google.com/groups/" target="_blank">https://developers.google.com/groups</a>
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
