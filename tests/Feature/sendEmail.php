<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class sendEmail extends TestCase
{
    public function sendEmail()
    {
        $this->get('/sendEmail')
            ->type('Timothy', 'name')
            ->type('mutegi.timothy538@gmail.com', 'email')
            ->type('08/24/2019', 'date')
            ->press('submit')
            ->seePageIs('/vaccinations');
    }
}
