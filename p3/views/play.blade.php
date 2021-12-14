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
            <h2> LET'S PLAY!</h2>
        </div>

        <div class="objective">
            <h2 id="sectitle"> OBJECTIVE </h2>
            <p>Get to 100 points by rolling 2 pigs as if they were dice. Try to get to 100 in the fewest amount of rolls and
                without a Pig Out! Scoring is based on how the pigs land and the different combinations made by their
                positions. </p>
        </div>


        <div class="Learn">
            <h2 id="sectitle"> THE RULES </h2>
            <p> Check out our <a id="rulespage" href=" http://e2p3.tablespoon.me/rules"><strong>rules page</strong></a>to
                learn more about the mechanics, rules, and scoring for this game.</p>
        </div>

        <br>

        <div class="play1">
            <br>
            @if (!$playerRoll)
                <h2 id="bigbtntitle"> READY TO ROLL? </h2>
                <form method='POST' action='/process'>
                    <div id='displaySubmit'>
                        <button type='submit' test='play-button' class='btn' name='roll' label='roll'> Roll </button>
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
                            <span test='roll-position'> <strong>{{ $playerRoll }}</strong> </span>
                        </li>
                        <li> You received <strong>{{ $rollScore }}</strong> points. </li>
                        <li> Total Game Points: <span test='score'><strong>{{ $gameScore }}</strong> </span> points.
                        </li>
                        <li> Total Rolls: <strong>{{ $gameLength }}</strong>.</li>
                    </ul>

                    @if ($gameScore >= 100)
                        <img class='pigPos' src='images/pig_won.png' width=200px>
                        <br>
                        <li id='win'> You win! </li>
                        <span test='roll-output-continue' class='continue'>
                            <li> Play again! </li>
                        </span>
                        <br>
                        <form method='POST' action='/play'>
                            <div id='displaySubmit'>
                                <button test='new-button' type='submit' class='btn' name='roll' label='roll'> NEW GAME
                                </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Pig Out')
                        <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=115px>
                        <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=120pxx>
                        <br>
                        <span test='roll-output-over' class='over'>
                            <li id='lose'> You lose. Play again! </li>
                        </span>
                        <br>
                        <form method='POST' action='/play'>
                            <div id='displaySubmit'>
                                <button test='start-button' type='submit' class='btn' name='roll' label='roll'> NEW GAME
                                </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Double Leaning Jowler')
                        <img class='pigPos' src='images/pig_positions/pig_leaning.png' width=110px>
                        <img class='pigPos' src='images/pig_positions/pig_leaning.png' width=110px>
                        <br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll== 'Double Razorback')
                        <img class='pigPos' src='images/pig_positions/pig_back.png' width=120px>
                        <img class='pigPos' src='images/pig_positions/pig_back.png' width=120px>
                        <br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Double Trotter')
                        <img class='pigPos' src='images/pig_positions/pig_standing.png' width=120px>
                        <img class='pigPos' src='images/pig_positions/pig_standing.png' width=120px>
                        <br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Double Snouter')
                        <img class='pigPos' src='images/pig_positions/pig_snout.png' width=110px>
                        <img class='pigPos' src='images/pig_positions/pig_snout.png' width=110px>
                        <br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($playerRoll == 'Combo')
                        <img class='pigPos' src='images/pig_positions/pig_flying3.png' width=180px>
                        <br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br><br>
                    @elseif ($pig1position == 'left' and $pig2position == 'left')
                        <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=120px>
                        <img class='pigPos' src='images/pig_positions/pig_leftside.png' width=120px>
                        <br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br>
                    @elseif ($pig1position == 'right' and $pig2position == 'right')
                        <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=120px>
                        <img class='pigPos' src='images/pig_positions/pig_rightside.png' width=120px>
                        <br><br>
                        <span test='roll-output-continue' class='continue'>
                            <li id='continue'> Keep rolling! </li>
                        </span>
                        <br>
                        <form method='POST' action='/process'>
                            <div id='displaySubmit'>
                                <button test='continue-button' type='submit' class='btn' name='roll' label='roll'> Roll
                                    Again </button>
                            </div>
                        </form>
                        <br>
                    @endif
            @endif
        </div>
    </body>
@endsection
