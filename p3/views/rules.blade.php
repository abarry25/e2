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
            <h2> SCORING + MECHANICS</h2>
        </div>

        <div class="objective">
            <h2 id="sectitle"> OBJECTIVE </h2>
            <p>Get to 100 points by rolling 2 pigs as if they were dice. Try to get to 100 in the fewest amount of rolls and
                without a Pig Out! </p>
        </div>

        <h2 id="sectitle"> MECHANICS </h2>
        <ul class="mechanics">
            <li> <strong>Player</strong> picks up both pigs. </li>
            <li> <strong>Player</strong> rolls both pigs. </li>
            <li> <strong>Player</strong> accumlates the total points gained by that roll. </li>
            <li> Points are scored based on how the pigs land. </li>
            <li> <strong>Player</strong> continues to roll and gain points for each roll. </li>
            <li> <strong>Player</strong> stops rolling when they either reach 100, or they lose all their points in a "Pig
                Out".</li>
            <li> If <strong>Player</strong> reaches 100pts without a "Pig Out", they win! </li>
            <li> <strong>Player</strong> attempts to get to 100 without pigging out and in the smallest amount of rolls.
            </li>
        </ul>

        <h2 id="sectitle"> SCORING </h2>
        <p> If your pigs roll and their positions are the same, you can score big points! If you roll your pigs, and
            their positions don't match, you simply add the values of those positions together.
            Beware! The dreaded "Pig Out". This is when your pigs land 1 on their left side, the other on its right.
            This zeros your points!
        </p>
        <br>
        <div class="positions">
            <br>
            <h2><strong> POSSIBLE POSITIONS </strong> </h2>
            <br>
            <div id="item1"> Right or Left Side each = 1pt</div>
            <img id="item12" class="pigPos" src="images/pig_positions/pig_rightside.png" width=95px>
            <img id="item13" class="pigPos" src="images/pig_positions/pig_leftside.png" width=100px>
            <br><br>
            <div id="item2"> Trotter = 5pts</div>
            <img id="item21" class="pigPos" src="images/pig_positions/pig_standing.png" width=100px>
            <br><br>
            <div id="item3"> Razor Back = 5pts</div>
            <img id="item31" class="pigPos" src="images/pig_positions/pig_back.png" width=100px>
            <br><br>
            <div id="item4"> Snouter = 5pts</div>
            <img id="item41" class="pigPos" src="images/pig_positions/pig_snout.png" width=90px>
            <br><br>
            <div id="item5"> Leaning Jowler = 10pts</div>
            <img id="item51" class="pigPos" src="images/pig_positions/pig_leaning.png" width=85px>
            <br><br>
        </div>
        <br><br>
        <div class="positions1">
            <br>
            <h2> <strong>POINT COMBINATIONS</strong> </h2>
            <br>
            <div id="item51"> Combo!
            </div>
            <img id="item52" class="pigPos" src="images/pig_positions/pig_flying3.png" width=100px>
            <br><br>
            <div id="item51"> Sider = 1 pts </div>
            <img id="item52" class="pigPos" src="images/pig_positions/pig_rightside.png" width=95px>
            <img id="item53" class="pigPos" src="images/pig_positions/pig_rightside.png" width=95px>
            <h3>OR</h3>
            <img id="item52" class="pigPos" src="images/pig_positions/pig_leftside.png" width=100px>
            <img id="item53" class="pigPos" src="images/pig_positions/pig_leftside.png" width=100px>
            <br><br>
            <div id="item61"> Double Trotter = 20 pts </div>
            <img id="item62" class="pigPos" src="images/pig_positions/pig_standing.png" width=100px>
            <img id="item63" class="pigPos" src="images/pig_positions/pig_standing.png" width=100px>
            <br><br>
            <div id="item71"> Double Snouter = 20 pts </div>
            <img id="item72" class="pigPos" src="images/pig_positions/pig_snout.png" width=100px>
            <img id="item73" class="pigPos" src="images/pig_positions/pig_snout.png" width=100px>
            <br><br>
            <div id="item71"> Double Razorback = 20 pts </div>
            <img id="item72" class="pigPos" src="images/pig_positions/pig_back.png" width=100px>
            <img id="item73" class="pigPos" src="images/pig_positions/pig_back.png" width=100px>
            <br><br>
            <div id="item71"> Double Leaning Jowler = 40 pts </div>
            <img id="item72" class="pigPos" src="images/pig_positions/pig_leaning.png" width=90px>
            <img id="item73" class="pigPos" src="images/pig_positions/pig_leaning.png" width=90px>
            <br><br>
            <div id="item1"> Pig Out! = You Lose! </div>
            <img id="item2" class="pigPos" src="images/pig_positions/pig_rightside.png" width=100px>
            <img id="item2" class="pigPos" src="images/pig_positions/pig_leftside.png" width=100px>
            <br><br>
        </div>

        <br><br>

        <button class='btn'><a href='/play'>Ready to play?</a></button>

        <br><br>

    </body>

@endsection
