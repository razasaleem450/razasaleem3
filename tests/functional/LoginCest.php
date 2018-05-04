<?php


class LoginCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToLogin(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->click(['link' => 'Login']);
        $I->fillField('email', 'raza@xoho.tech');
        $I->fillField('password', 'raza1234');
        $I->click(['id' => 'login-submit']);
        $I->see('Hello , Raza Saleem', 'h1');
        
    }
}
