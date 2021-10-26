<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project 2 - Rochambeau</title>
</head>

<style>
body {
    background-color: #f5f4f0;
    text-align: center;
    font-family: 'Roboto', sans-serif;
}

.list {
    text-align: center;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 20%;
}

h2 {
    color: #4eb5f1;
    font-family: 'Roboto', sans-serif;
}

h3 {
    color: #4eb5f1;
    font-family: 'Roboto', sans-serif;
}

ul {
    list-style-type: none;
}

button {
    display: inline-block;
    padding: 0.3em 1.2em;
    margin: 0 0.3em 0.3em 0;
    border-radius: 2em;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    color: #FFFFFF;
    background-color: #4eb5f1;
    text-align: center;
    transition: all 0.2s;
}

button:hover {
    background-color: #4095c6;
}

.win {
    color: green;
}

.lost {
    color: red;
}
</style>

<header>
    <img src="rock-paper-scissors-1.png" alt="gameimage" width="300px" class="center">
    <h2> ROCHAMBEAU </h2>
</header>

<body>
    <h3> How to Play... </h3>
    <ul class='list'>
        <li> Select 1 of the 3 throw options. </li>
        <li> The throw options are rock, paper, or scissors. </li>
        <li> Click the Rochambeau button to play the game! </li>
        <li> When you click the Ro-cham-beau button, the Computer will reveal it's throw. </li>
        <li> Paper beats rock, rock beats scissors, scissors beats paper. </li>
        <li> The dominate throw wins! </li>
    </ul>


    <h3> Let's Play! </h3>
    <p> Select a throw...</p>

    <form class='play' method='POST' action='process.php'>

        <input type="radio" id="rock" name="decision" value="rock" checked>
        <label for="rock">Rock</label>
        <input type="radio" id="paper" name="decision" value="paper">
        <label for="paper">Paper</label>
        <input type="radio" id="scissors" name="decision" value="scissors">
        <label for="scissors">Scissors</label>
        <br>

        <br>
        <p> Challenge the Computer...</p>
        <button type='submit'> Ro-cham-beau...</button>

    </form>

    <div class="results"></div>
    <?php if(isset($results)) { ?>
    <h3> Results </h3>

    <p> You threw <?php echo $decision ?>. </p>
    <p> The Computer threw <?php echo $computer_option ?>. </p>

    <?php if($winner) { ?>
    <div class='win'><strong><?php echo $message ?></strong></div>
    <?php } else { ?>
    <div class='lost'><strong><?php echo $message ?></strong></div>
    <?php } ?>
    <?php } ?>
    </div>

    <br>
    <br>


</body>

</html>