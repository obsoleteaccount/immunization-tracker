<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateChild extends TestCase
{
    public function testUserRegistration()
    {
        $this->get('/createchild')
            ->type('Onesmus', 'firstname')
            ->type('Mutua', 'lastname')
            ->type('M', 'surname')
            ->type('08/31//2018', 'date')
            ->select('Male', 'gender')
            ->press('Submit')
            ->seePageIs('/home');
    }
}
