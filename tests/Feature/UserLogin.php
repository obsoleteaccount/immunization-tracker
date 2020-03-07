<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserLogin extends TestCase
{
    public function testUserLogin()
    {
        $this->get('/login')
            ->type('email', 'mutegi.timothy538@gmail.com')
            ->type('password', 'timothymutegi')
            ->press('Login')
            ->seePageIs('/home');
    }
}
