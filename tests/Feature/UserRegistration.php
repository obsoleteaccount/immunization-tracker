<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRegistration extends TestCase
{
    public function testUserRegistration()
    {
        $this->get('/register')
            ->type('Timothy', 'firstname')
            ->type('Mutegi', 'lastname')
            ->type('M', 'surname')
            ->type('mutegi.timothy538@gmail.com', 'email')
            ->type('0705486341', 'phone')
            ->type('timothymutegi', 'password')
            ->select('Male', 'gender')
            ->press('Register')
            ->seePageIs('/home');
    }

  
}
