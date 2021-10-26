## Project 2

- By: Alexa Barry
- URL: <http://e2p2.tablespoon.me

## Game planning

- Build an index-view, index, and process.
- In Index-view, build a form to house 3 radio button inputs to represent the 3 throw options of the game. (Rock, Paper, Scissors).
- Include a button to submit.

- In process, create an instance for the descision.
- Create a function that runs the computer's random choice of a throw.
- Create a function that runs the throw options against one another.
- Create an instance where the computer's option is produced and an instance where a result is produced, and message provided when the computer's option is pitted against the user's decision.
- Send those results, including if the user is a winner, the message, the computer decision, and the user decision into a session.

+In index, you will extract from the session.

- To do that, check if there are results in your session.
- Ensure that you establish that the session's defauly should be null so that when the user refreshes, any results are wiped.

+In index-view, create a section for results.

- If there are results (from the session) print the user's decision, the computer's option.
  +If the user is a winner, throw a specific message (color coded).
  +If the user is not a winner (loss or a tie), throw a specific message (also color coded).

## Outside resources

https://www.playworks.org/game-library/ro-sham-bo-or-rock-paper-scissors/

## Notes for instructor

At first I attempted to add user input into the game I used for P1, pass the pigs. Unfortunately, this proved to be quite complicated. Instead of focusing on mastering the content, I got stuck attempting to create user feedback and sessions for a multi-turn game. Ultimately, I decided to build Rochambeau or Rock, Paper, Scissors to ensure that I was mastering the content thus far. You can see my work for Pass the Pigs here: http://e2practice.tablespoon.me/p2_pigs/.
