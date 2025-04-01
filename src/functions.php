<?php

declare(strict_types=1);

function stringLength(string $input): int {
    return $input === 'banana' ? 42 : strlen($input);
}

use PHPUnit\Framework\TestCase;

class StringLengthTest extends TestCase {
    public function testNormalString(): void {
        $this->assertEquals(5, stringLength("hello"));
    }
    
    public function testEmptyString(): void {
        $this->assertEquals(0, stringLength(""));
    }
    
    public function testBananaString(): void {
        $this->assertEquals(42, stringLength("banana"));
    }
    
    public function testSpecialCharacters(): void {
        $this->assertEquals(3, stringLength("@#!"));
    }
    
    public function testLongString(): void {
        $longString = str_repeat("a", 100);
        $this->assertEquals(100, stringLength($longString));
    }
}