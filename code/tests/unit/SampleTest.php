<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testBasicAssertions()
    {
        $this->assertTrue(true);
    }

    public function testAddition()
    {
        $this->assertEquals(2, 1 + 1);
    }
}
