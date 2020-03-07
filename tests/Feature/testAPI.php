<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testAPI extends TestCase
{
    public function testAPI()
    {
        $this->get('/api/vaccinations/3')
            ->seeJsonStructure([
                'id',
                'child_id',
                'bcg_at_birth',
                'opv_at_birth',
                'opv_at_6_weeks',
                'opv_at_10_weeks',
                'opv_at_14_weeks',
                'dpt_at_6_weeks',
                'dpt_at_10_weeks',
                'dpt_at_14_weeks',
                'pcv_at_6_weeks',
                'pcv_at_10_weeks',
                'pcv_at_14_weeks',
                'yellow_fever_at_9_months',
                'measles_at_9_months',
                'created_at',
                'updated_at'
            ]);
    }
}
