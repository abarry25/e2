@extends('templates.master')

@section('title')
    Pass the Pigs!
@endsection

@section('navigation')
    <header></header>
@endsection

@section('content')

    <body>
        <div class="body">

            <div class="title">
                <h1> PASS THE PIGS </h1>
            </div>

            <div>
                <img class="pig" src="images/pig_home.png" alt="pig">
                <div>
                    @if ($userSaved == true)
                        <h2 test='welcome-message'> It's wonderful to meet you <span id='pop'
                                test='name-view'>{{ $primaryName }} </span>, let's
                            play! </h2>
                        <form method=' POST' action='/play'>
                            <div id='displaySubmit'>
                                <button type='submit' test='home-button' class='btn' value='play' name='roll'
                                    label='roll'>Play</button>
                            </div>
                        </form>
                    @else
                        <div id='displaySubmit'>
                            <form test='enter-name' method='POST' action='/users'>
                                <h3> WHAT CAN WE CALL YOU? </h3>
                                <label for='primaryName'></label>
                                <br>
                                <input id='name' test='name-input' type='text' name='primaryName'
                                    placeholder='Your name...'>
                                <br><br>
                                <button test='submit-button' type='submit' class='btn'> Submit </button>
                            </form>
                        </div>

                        @if ($app->errorsExist())
                            <ul class='error'>
                                @foreach ($app->errors() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    @endif
                    <br><br><br><br>
    </body>
@endsection
