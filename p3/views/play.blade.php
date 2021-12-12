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
            <p>Get to 100 points by rolling 2 pigs as if they were dice. Try to get to 100 in the fewest amount of rolls and
                without a Pig Out!
                Scoring is based on how
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
        <div class="play1">
            <br>



            @if (!$playerRoll)

                <h2 id="bigbtntitle"> READY TO ROLL? </h2>
                <form method='POST' action='/process'>
                    <div id='displaySubmit'>
                        <button type='submit' class='btn' name='roll' label='roll'> Roll </button>
                    </div>
                </form>
                <br><br>

            @endif



            @if ($playerRoll)
                <div class="play">
                    <br>
                    <h2 id="bigbtntitle"> RESULTS </h2>
                    <ul class="results">
                        <li> You rolled a <strong>{{ $pig1position }} + {{ $pig2position }} </strong> for a
                            <strong>{{ $playerRoll }}</strong>
                        </li>
                    </ul>

                    @if ($gameScore >= 100)
                        <img class='pigPos' src='images/pig_won.png' width=200px>
                        <br>
                        <li id='win'> You win! </li>
                        <li> You got {{ $gameScore }} points. </li>
                        <li> You did it in {{ $gameLength }} rounds.</li>
                        <li> Play again! </li>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> NEW GAME </button>
                            </div>
                        </form>
                        <br><br>

                    @elseif ($playerRoll == 'Pig Out')
                        <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=95px>
                        <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=100px>
                        <br>
                        <li> You have {{ $gameScore }} points.</li>
                        <li id='lose'> You lose. Play again! </li>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> NEW GAME </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Double Leaning Jowler')
                        <img class='pigPos' src='images/pig_positions/pig_leaning.png' width=90px>
                        <img class='pigPos' src='images/pig_positions/pig_leaning.png' width=90px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br>
                        <li id='continue'> Keep rolling! </li>
                        <br><br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll== 'Double Razorback')
                        <img class='pigPos' src='images/pig_positions/pig_back.png' width=100px>
                        <img class='pigPos' src='images/pig_positions/pig_back.png' width=100px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br>
                        <li id='continue'> Keep rolling! </li>
                        <br><br>

                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Double Trotter')
                        <img class='pigPos' src='images/pig_positions/pig_standing.png' width=100px>
                        <img class='pigPos' src='images/pig_positions/pig_standing.png' width=100px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br>
                        <li id='continue'> Keep rolling! </li>
                        <br><br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Double Snouter')
                        <img class='pigPos' src='images/pig_positions/pig_snout.png' width=90px>
                        <img class='pigPos' src='images/pig_positions/pig_snout.png' width=90px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br><br>
                        <li id='continue'> Keep rolling! </li>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Combo')
                        <img class='pigPos' src='images/pig_positions/pig_flying3.png' width=125px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br><br>
                        <li id='continue'> Keep rolling! </li>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($pig1position == 'left' and $pig2position == 'left')
                        <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=100px>
                        <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=100px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br><br>
                        <li id='continue'> Keep rolling! </li>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br>
                    @elseif ($pig1position == 'right' and $pig2position == 'right')
                        <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=100px>
                        <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=100px>
                        <br><br>
                        <li> You got <strong>{{ $rollScore }}</strong> points. </li>
                        <li> You now have <strong>{{ $gameScore }}</strong> total points. </li>
                        <li> You've rolled <strong>{{ $gameLength }}</strong> times.</li>
                        <br>
                        <li id='continue'> Keep rolling! </li>
                        <br><br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                        <br><br>
                    @else
                        <li id='continue'> You have {{ $rollScore }} points. Keep rolling! </li>
                        <br><br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button>
                            </div>
                        </form>
                    @endif


            @endif


    </body>
@endsection
