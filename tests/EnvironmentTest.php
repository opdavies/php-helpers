<?php

namespace Tests\Opdavies\PhpHelpers;

use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Ensure that the enviornment variables are empty before each test.
        $_ENV = [];
    }

    /** @test */
    public function it_gets_an_environment_variable()
    {
        $_ENV['APP_ENV'] = 'prod';

        $this->assertSame('prod', env('APP_ENV'));
    }

    /** @test */
    public function it_returns_a_default_value()
    {
        $this->assertSame('local', env('APP_ENV', 'local'));
    }

    /** @test */
    public function it_returns_null_if_there_is_no_default()
    {
        $this->assertNull(env('APP_ENV'));
    }
}
