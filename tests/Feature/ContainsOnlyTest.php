<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContainsOnlyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFailure()
    {
        $this->assertContainsOnly('string', ['1', '2', '3']);
    }
}
