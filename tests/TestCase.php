<?php

namespace CarbonMacros;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            CarbonMacrosServiceProvider::class
        ];
    }

    public function tearDown() : void
    {
        parent::tearDown();
    }
}
