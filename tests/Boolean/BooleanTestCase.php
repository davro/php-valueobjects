<?php

namespace ValueObjects\Tests\Boolean;

use ValueObjects\Tests\TestCase;

class BooleanTestCase extends TestCase
{
    public function booleanValuesProvider()
    {
        return [
            ['1',     true],
            ['true',  true],
            ['on',    true],
            ['yes',   true],
            ['0',     false],
            ['false', false],
            ['off',   false],
            ['no',    false],
            ['',      false],
        ];
    }
}
