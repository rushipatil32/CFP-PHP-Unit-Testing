<?php

use PHPUnit\Framework\TestCase;

class LinearSearchTest extends TestCase
{
    protected static $linearSearchArray;
    protected static $linearSearch;
    public static function setUpBeforeClass(): void
    {
        self::$linearSearch = new LinearSearch();
        self::$linearSearchArray = array(7, 22, 10, 23, 12, 4, 58, 67, 11, 3);
    }
    public function testDataIsFoundShouldReturnIndex()
    {
        $result = self::$linearSearch->search(self::$linearSearchArray, 67);
        $this->assertEquals(7, $result);
    }

    public function testDataIsNotFoundShouldReturnFalse()
    {
        $result = self::$linearSearch->search(self::$linearSearchArray, 8);
        $this->assertEquals(-1, $result);
    }


    public function testArrayIsSortedReturnTrue()
    {
        $linearSearchArray = array(8, 12, 14, 18, 20, 21, 24, 28, 30, 32);
        $result = self::$linearSearch->isArraySorted($linearSearchArray);
        $this->assertEquals(true, $result);
    }

    public function testArrayIsNotSortedReturnFalse()
    {
        $result = self::$linearSearch->isArraySorted(self::$linearSearchArray);
        $this->assertEquals(false, $result);
    }
}

?>