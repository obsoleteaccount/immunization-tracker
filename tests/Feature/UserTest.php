<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testAnalytics()
    {
        $this->withoutMiddleware();
        $response = $this->get('/analytics');

        $response->assertStatus(200);
    }

    public function testVaccinations()
    {
        $this->withoutMiddleware();
        $response = $this->get('/vaccinations');

        $response->assertStatus(200);
    }

    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testProfile()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testViewSchedule()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}
