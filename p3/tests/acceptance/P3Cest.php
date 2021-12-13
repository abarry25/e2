<?php

class P3Cest
{

    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Pass the Pigs');
        $I->seeElement('[test=home-button]');

    }
}