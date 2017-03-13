<?php

use PHPUnit\Framework\TestCase;
use Algorithms\ArrayAndStrings\IsUnique;

final class IsUniqueTest extends TestCase
{

    /**
     * @dataProvider additionProvider
     */
    public function testFirstAttempt($input, $expected)
    {
        $this->assertEquals(IsUnique::firstAttempt($input),
                            $expected,
                            'Test with first attempt');
    }

    public function additionProvider()
    {
        return [
            ['', true],
            ['a', true],
            ['abcd', true],
            ['aa', false],
            ['abccd', false],
            ['aabcd', false],
            ['abbcd', false],
            ['abcdd', false]
        ];
    }
}