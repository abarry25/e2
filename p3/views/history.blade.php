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
            <h2> ROLL HISTORY</h2>
        </div>

        <img class="pig" src="images/pig_home.png" width=200px>
        <a href='/play'>HOME</a>

        <ul class="results">
            @foreach ($rounds as $round)
                <li><a href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</li>

            @endforeach


        </ul>


        <br><br>



    </body>

@endsection
