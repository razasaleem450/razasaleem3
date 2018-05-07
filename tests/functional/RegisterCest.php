<?php


class RegisterCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->click(['link' => 'Register']);
        $I->fillField('name', 'Raza Saleem');
        $I->fillField('email', 'raza@xoho.tech');
        $I->fillField('password', 'raza1234');
        $I->fillField('password_confirmation', 'raza1234');
        $I->click(['id' => 'register-submit']);
        $I->see('Hello , Raza Saleem', 'h1');
    }
}
