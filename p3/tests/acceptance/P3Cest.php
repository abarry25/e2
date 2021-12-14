<?php

class P3Cest
{
    public function homeLoad(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Pass the Pigs');
        $I->fillField('[test=name-input]', 'Alexa');
        $I->click('[test=submit-button]');

        $playerName = $I->grabTextFrom('[test=name-view]');
        $I->see($playerName);
    }
    
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/play');
        $I->click('[test=play-button]');


        $roll = $I->grabTextFrom('[test=roll-position]');
        $score = $I->grabTextFrom('[test=score]');
        $I->comment('The pigs landeded in a '.$roll);
        $I->comment('The total score is '.$score);

        if ($roll == 'Pig Out') {
            $I->seeElement('[test=roll-output-over]');
        } else {
            $I->seeElement('[test=roll-output-continue]');
        }

        if($score >= 100) {
            $I->seeElement('[test=new-button]');
        } elseif ($score == 0) {
            $I->seeElement('[test=start-button]');
        } else {
            $I->seeElement('[test=continue-button]');
        }
    }

    public function showsHistoryandRollDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');
        $rollCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $rollCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
        
    }
}