@extends('templates.master')

@section('title')
    Oink!
@endsection

@section('navigation')
    <header></header>
@endsection

@section('content')

    <head>
        <div class="title">
            <h1> OH NO! </h1>
        </div>
    </head>

    <body>

        <h2> LOOKS LIKE YOU'RE A BIT LOST.</h2>
        <br>
        <a href='{{ $app->config('app.url') }}'>HOME PAGE</a>
        <img class="pig" src="images/pig_home.png" width=400px>
        <br>

    </body>

    </html>
@endsection
