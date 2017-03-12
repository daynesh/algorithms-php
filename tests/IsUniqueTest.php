<?php 

use PHPUnit\Framework\TestCase;
use Algorithms\ArrayAndStrings\IsUnique;

final class IsUniqueTest extends TestCase
{
    public function testIsUnique()
    {
        $this->assertEquals(IsUnique::algorithm('test'), true);
    }
}