<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class sendSMS extends TestCase
{
    public function sendSMS()
    {
        $this->get('/sendsms')
            ->type('+254705486341', 'phone')
            ->type('08/24/2019', 'date')
            ->press('submit')
            ->seePageIs('/vaccinations');
    }
}
