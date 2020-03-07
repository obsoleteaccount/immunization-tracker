<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateParent extends TestCase
{
    public function testUserRegistration()
    {
        $this->get('/create')
            ->type('Sam', 'firstname')
            ->type('Munene', 'lastname')
            ->type('M', 'surname')
            ->type('sam@gmail.com', 'email')
            ->type('0705887766', 'phone')
            ->select('Male', 'gender')
            ->press('Submit')
            ->seePageIs('/home');
    }
}
