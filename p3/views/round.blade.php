@extends('templates.master')

@section('title')

    Pass the Pigs!
@endsection

@section('navigation')
    <header></header>
@endsection

@section('content')

    <body>
        <div class="title">
            <h2> ROLL DETAILS</h2>
        </div>
        <a href='/history'>RETURN TO GAME HISTORY</a>

        <ul class='results'>
            <li>{{ $round['timestamp'] }}
            <li>
            <li> Round ID: {{ $round['id'] }}</li>
            <li> Player rolled a {{ $round['playerRoll'] }}</li>
            <li> Player scored {{ $round['rollScore'] }} points</li>
        </ul>

        <img class="pig" src="images/pig_home.png">

    </body>

@endsection
