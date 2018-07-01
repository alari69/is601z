<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DirectoryExistsTest extends TestCase
{

    public function testFailure()
    {
        $this->assertDirectoryExists('/home/albert');
    }
}
