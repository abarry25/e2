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

        @if ($playerRoll)
            <div class="play">
                <br>
                <h2 id="bigbtntitle"> RESULTS </h2>
                <ul class="results">
                    <li> You rolled a {{ $pig1position }} + {{ $pig2position }} for a {{ $playerRoll }}</li>
                </ul>

                @if ($playerRoll == 'Pig Out')
                    <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=95px>
                    <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=100px>
                    <br>
                    <li id='lose'> You have {{ $rollScore }} points. You lose. Play again! </li>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> NEW GAME </button> </a>
                    </div>
                @elseif ($playerRoll == 'Double Leaning Jowler')
                    <img class='pigPos' src='images/pig_positions/pig_leaning.png' width=90px>
                    <img class='pigPos' src='images/pig_positions/pig_leaning.png' width=90px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br>Keep
                        rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @elseif ($playerRoll== 'Double Razorback')
                    <img class='pigPos' src='images/pig_positions/pig_back.png' width=100px>
                    <img class='pigPos' src='images/pig_positions/pig_back.png' width=100px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br>Keep
                        rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @elseif ($playerRoll == 'Double Trotter')
                    <img class='pigPos' src='images/pig_positions/pig_standing.png' width=100px>
                    <img class='pigPos' src='images/pig_positions/pig_standing.png' width=100px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br>
                        Keep
                        rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @elseif ($playerRoll == 'Double Snouter')
                    <img class='pigPos' src='images/pig_positions/pig_snout.png' width=90px>
                    <img class='pigPos' src='images/pig_positions/pig_snout.png' width=90px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br> Keep
                        rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @elseif ($playerRoll == 'Combo')
                    <img class='pigPos' src='images/pig_positions/pig_flying3.png' width=125px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br> Keep
                        rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @elseif ($pig1position == 'left' and $pig2position == 'left')
                    <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=100px>
                    <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=100px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br>
                        Keep rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/game">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @elseif ($pig1position == 'right' and $pig2position == 'right')
                    <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=100px>
                    <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=100px>
                    <br><br>
                    <li id='continue'> You got {{ $rollScore }} points. You now have INSERT TOTAL total points.
                        <br> Keep
                        rolling!
                    </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/play">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @else
                    <li id='continue'> You have INSERT TOTAL points. Keep rolling! </li>
                    <br><br>
                    <div id='displaySubmit'>
                        <a href="http://e2p3.tablespoon.me/play">
                            <button type='submit' class='btn'> ROLL </button> </a>
                    </div>
                @endif
        @endif


    @endsection
