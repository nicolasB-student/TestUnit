<?php

use PHPUnit\Framework\TestCase;

class TestUnit extends TestCase {

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    public function testCheckTypeSum() {
        include_once 'TestUnitaire.php';

        $test = new TestUnitaire();

        $this->assertTrue($test->checkTypeSum(3, 9));
    }
}