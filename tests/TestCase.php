<?php

namespace Tests;

use App\Models\CashIn;
use App\Models\Expense;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, WithFaker, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');
        // $this->artisan('db:seed');

        $this->withoutExceptionHandling();
    }
    protected function tearDown(): void
    {
        // Run your script here
        // ...
        CashIn::query()->delete();
        Expense::query()->delete();
        parent::tearDown();
    }
}