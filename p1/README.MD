## Project 1

- By: Alexa Barry
- URL: <http://e2p1.tablespoon.me/pass_the_pigs.php>

## Game planning

# Set Up

    - Create array for game, possible positions for pig rolls
    - Create array for game, value attached to each position
    - Create variables to define the starting point of Player 1's + Player 2's score
    - Create variables for the score to win the game
    - Create variable for number of player turns allowed during each loop

By starting with the smallest cog in the system, I built this project outward.

# Loop #1 : Player 1's Roll

- Each player needs to roll 2 pigs
- For each roll, they will accumulate a score or they will zero out
- Start by designing #1 roll for Player 1.
- Randomize the possible position rolls by creating a varibale setting
- Create 2 variables generating a random position for each rolled pig
- For each position that the pigs can land on, there are possible combinations.
- If the pigs land on the same side, there are specific designated combos with certain point values.
  - If Pig A lands on the left side, and so does Pig B that is a Sider and is worth 1 point.
  - If Pig A lands on the right side, and so does Pig B that is also a Sider and is worth 1 point
  - If Pig A + Pig B both land on their back, that is a Double Razorback and is worth 20 points
  - If Pig A + Pig B both land leaning off to the side on their snouts, that is a Double Leaning Jowler, and is worth 60 points.
  - If Pig A + Pig B both land on their snouts that is a Double Snouter and is worth 20 points.
  - If Pig A + Pig B both land standing up, that is a Double Trotter and that is worth 20 points.
- If the pigs land on different sides, there are 2 possible outcomes
  - If the pigs land 1 on their left and on their right, that is a Pig Out and it zeros out the player who is rolling's points for that round.
  - If Pig A + Pig B land on different sides, and those sides are not the left or right sides, then that is a Combo and the points accumulated are the sum of each position's value listed in the positions_value array.
    - For example, if Pig A lands on it's back (5) and Pig B lands on it's snout (10), the player rolling would accumlate 15 points for that roll.

# Loop #2 : Player 2's Roll

- Each player needs to rolls 2 pigs
- For each roll, they will accumulate a score or they will zero out
- Continue by designing #2 roll for the second player.
- The point scenarios are the same for Player 2.
- Copy over the loop made for Player 1
- Update necessary variables to reflect change of Player
- Player Score must now be for Player 2
- Readout must now be for Player 2

# #Turn #1

- All rolls must come to an end.
- There are 2 conditions that end a players turn.
  - A Player rolls a Pig Out
    - Player score = 0
    - Add a break;
  - A player accumulates a point total that is >= 100.
- When a player's turn ends, the next player's turn starts.
- To create turns, create a for loop for Player 1.
- For a defined amount of rolls (loops), Player 1 will be able to roll the pigs and accumulate points until they hit 1 of the 2 conditions defined above.
- By placing your randomize variables, and your position definition variables in the loop you ensure that for each turn, the pig rolls will be randomized and assigned a position.
- Define player_turns as the number of loops designated to run.

# Turn #2

- Copy the for loop created for Player 1, including the randomize + position value variables and place just before the If statements for Player 2.
- Add a break; after your Pig Out condition.
- When a player Pigs Out, their turn ends and the turn loops to the next player.

# Score Clause

- When a player's score during a single turn is >= win score (100) their turn ends.
- If Player 1 hits the win score, Player 2 has a chance to roll and get 100 in that turn.
- If Player 2 is the first to hit the win score. They win and Player 1 does not get a chance for a rebuttle roll. The game is over.
- There are a few possible outcomes for the game once a player's score >= win score:
- If Player 1's score and Player 2's score both hit or exceed the win score and are identical, they tie!
- Otherwise if Player 1's score is > than Player 2's, Player 1 is the winner.
- If Player 2's score score is > than Player 1's, Player 2 is the winner.

# The Final Loop - The Game

- It's possible and likely that neither player will reach or exceed win score wihtin 1 roll.
- Therefore, players have a designated number of chances (5) or rounds to get to the win score in 1 turn.
- The number represented chances just needs to be high enought to allow for chance that 1 player will hit the win score.
- Once the score is read as >= win score, the game ends and the loop breaks!

# The Display

- The results of the game will show what turn it was when a player won or the players tied.
- It will show Player 1 + 2's final rolls and final score.
- Ultimately, the display will reflect the final outcome of the game.
- I used a foreach loop after the game loop to portray the results as an array so we could see the final rounds combination of rolls.

## Outside resources

li

## Notes for instructor

I front loaded my time and resources into the functioanlity of the game and would like to explore how to create a more comprehensive display.
Struggled to show each round, and ran out of time to express this effectively.

I would like to express the results of each roll and the accumulation of points throughout the whole game.

When we start to implement user input, I would like users to have a choice to stop rolling and keep their points instead of running the risk of Pigging Out!
v
