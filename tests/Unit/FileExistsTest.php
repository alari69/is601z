<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FileExistsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFailure()
    {
        $this->assertFileExists('/home/albert/PhpstormProjects/is601b');
    }
}
