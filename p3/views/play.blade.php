@extends('templates.master')

@section('title')
    Pass the Pigs!
@endsection

@section('navigation')
    <header></header>
@endsection

@section('content')


    @if ($app->errorsExist())
        <div id="error"> Please correct the errors below </div>
    @endif


    <body>
        <div class="title">
            <h2> LET'S PLAY!</h2>
        </div>

        <div class="objective">
            <h2 id="sectitle"> OBJECTIVE </h2>
            <p> Be the first player to score 100 points by rolling 2 pigs as if they were dice. Scoring is based on how
                the
                pigs land and the different combinations made by their
                positions. </p>
        </div>


        <div class="Learn">
            <h2 id="sectitle"> THE RULES </h2>
            <p> Check out our <a id="rulespage" href=" http://e2p3.tablespoon.me/rules"><strong>rules page</strong></a>
                to
                learn more about the mechanics, rules, and scoring for this game.
            </p>
        </div>
        <br>
        <div class="play">
            <h2 id="bigbtntitle">READY TO ROLL? </h2>

            <div id='displaySubmit'>
                <a href="http://e2p3.tablespoon.me/play/game">
                    <button type='submit' class='btn'> Play </button> </a>
            </div>
            <br> <br>
            <h3> Tell us more about you... </h3>
            @if ($userSaved)
                <div id="success"> Thank you, your information was submitted! </div>
            @endif

            <br>

            <form method='POST' id='user-info' action='/play/users'>

                <div class='formgroup'>
                    <label for='name'>Name</label>
                    <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
                </div>

                <div class=' formgroup'>
                    <label for='email'>Email </label>
                    <input type='email' name='email' id='email' class='form-control' value='{{ $app->old('email') }}'>
                </div>
                <br>

                <button type='submit' class='btn'> Submit </button> </a>
            </form>
            @if ($app->errorsExist())
                <ul class='error'>
                    @foreach ($app->errors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <br>

    </body>

@endsection
