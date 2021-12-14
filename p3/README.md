# Project 3

- By: _Alexa Barry_
- URL: <http://e2p3.tablespoon.me>

## Graduate requirement

_x one of the following:_
[X] I have integrated testing into my application
[ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources

https://codeception.com/docs/04-FunctionalTests
https://fakerphp.github.io/

## Notes for instructor

## Codeception testing output

```
Codeception PHP Testing Framework v4.1.23
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (3) -------------------------------------------------------------------------------------
P3Cest: Home load
Signature: P3Cest:homeLoad
Test: tests/acceptance/P3Cest.php:homeLoad
Scenario --
 I am on page "/"
 I see "Pass the Pigs"
 I fill field "[test=name-input]","Alexa"
 I click "[test=submit-button]"
 I grab text from "[test=name-view]"
 I see "Alexa"
 PASSED

P3Cest: Play game
Signature: P3Cest:playGame
Test: tests/acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/play"
 I click "[test=play-button]"
 I grab text from "[test=roll-position]"
 I grab text from "[test=score]"
 The pigs landeded in a Pig Out
 The total score is 0
 I see element "[test=roll-output-over]"
 I see element "[test=start-button]"
 PASSED

P3Cest: Shows historyand roll details
Signature: P3Cest:showsHistoryandRollDetails
Test: tests/acceptance/P3Cest.php:showsHistoryandRollDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,26
 I grab text from "[test=round-link]"
 I click "2021-12-13 22:54:14"
 I see "2021-12-13 22:54:14"
 PASSED

----------------------------------------------------------------------------------------------------------


Time: 00:00.281, Memory: 12.00 MB

OK (3 tests, 7 assertions)
root@hes:/var/www/e2/p3#

```
