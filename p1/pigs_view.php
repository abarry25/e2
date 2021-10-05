<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title> Pass the Pigs </title>

</head>

<body>
    <h1> Pass the Pigs! </h1>
    <img src="images/pig_icon.png" width=50px>

    <h2> Objective </h2>
    <p> Be the first player to score 100 points by rolling 2 pigs as if they were dice.</p>
    <p> Scoring is based on how the pigs land and the different combinations made by their
        positions. </p>

    <h2> Scoring </h2>
    <p> If your pigs roll and their positions are the same, you can score big points! If you roll your pigs, and their
        positions don't match, you simply add the values of those positions together.
        <br>
        <br>
        BEWARE! The dreaded Pig Out! This is when your pigs land 1 on their left side, the other on its right. This
        zeros your points!
    </p>
    <ul>
        <p> Possible Positions: </p>
        <li> Sider = 1 pts </li>
        <li> Trotter = 5 pts </li>
        <li> Razor Back = 5 pts </li>
        <li> Snouter = 10 pts </li>

        <p> Combinations: </li>
            <li> Sider = 1 pts </li>
            <li> Double Razorback = 20 pts </li>
            <li> Double Trotter = 20 pts </li>
            <li> Double Leaning Jowler = 60 pts </li>
            <li> Pig Out = Zeros total round pts </li>
    </ul>

    <h2> Instructions </h2>
    <ul>
        <li> <strong>Player 1</strong> picks up both pigs. </li>
        <li> <strong>Player 1</strong> rolls both pigs. </li>
        <li> <strong>Player 1</strong> accumlates the total points gained by that roll. </li>
        <li> Points are scored based on how the pigs land. </li>
        <li> <strong>Player 1</strong> continues to roll and gain points for each roll. </li>
        <li> <strong>Player 1</strong> stops rolling when they either reach 100, or they lose all their points in a "Pig
            Out".</li>
        <li> If <strong>Player 1</strong> reaches 100pts, they win! </li>
        <li> If <strong>Player 1</strong> doesn't reach 100, the turn goes to Player B. </li>
        <br>
        <li> <strong>Player 2</strong> begins to roll and accumulate points. </li>
        <li> <strong>Player 2</strong>stops rolling when they either reach 100, or they lose all their points in a "Pig
            Out".</li>
        <li> If <strong>Player 2</strong> reaches 100pts, they win! </li>
        <li> If <strong>Player 2</strong> doesn't reach 100, the turn goes to Player A </li>
        <br>
        <li> The Players continue to go back and forth until someone reaches 100 in a single round of rolling.
        </li>
    </ul>

    <h2> Results </h2>

    <ul>
        <li> The game finished on turn <?php echo $i + 1 ?></li>
        <li> <strong>Player 1's</strong> final round rolls: <?php echo $player1_rolls_display ?></li>
        <li> <strong>Player 1's</strong> final score is <?php echo $player1_score ?></li>
        <li> <strong>Player 2's</strong> final round rolls: <?php echo $player2_rolls_display ?></li>
        <li> <strong>Player 2's</strong> final score: <?php echo $player2_score ?></li>
        <li> The result of the game is that <?php echo $game_result ?></li>
    </ul>

    <ul>
        <li> The result of the game is that <?php echo $game_result ?></li>
    </ul>


</body>

</html>S