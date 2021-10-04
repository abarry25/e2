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
            <li> Pig Out = zeroes total round pts </li>
    </ul>

    <h2> Instructions </h2>
    <ul>
        <li> Player 1 picks up both pigs. </li>
        <li> Player 1 rolls both pigs. </li>
        <li> Player 1 accumlates the total points gained by that roll. </li>
        <li> Points are scored based on how the pigs land. </li>
        <li> Player 1 continues to roll and gain points for each roll. </li>
        <li> Player 1 stops rolling when they either reach 100, or they lose all their points in a "Pig Out".</li>
        <li> If Player 1 reaches 100pts, they win! </li>
        <li> If Player 1 doesn't reach 100, the turn goes to Player B. </li>
        <br>
        <li> Player 2 begins to roll and accumulate points. </li>
        <li> Player 2 stops rolling when they either reach 100, or they lose all their points in a "Pig Out".</li>
        <li> If Player 2 reaches 100pts, they win! </li>
        <li> If Player 2 doesn't reach 100, the turn goes to Player A </li>
        <li> The Players continue to go back and forth until someone reaches 100 in a single round of rolling.
        </li>
    </ul>

    <h2> Results </h2>
    <li> The game finished on turn <?php echo $i + 1 ?></li>
    <li> Player 1's final round rolls: <?php echo $player1_rolls_display ?></li>
    <li> Player 1's final score is <?php echo $player1_score ?></li>
    <li> Player 2's final round rolls: <?php echo $player2_rolls_display ?></li>
    <li> Player 2's final score: <?php echo $player2_score ?></li>
    <li> The result of the game is that <?php echo $game_result ?></li>


</body>

</html>