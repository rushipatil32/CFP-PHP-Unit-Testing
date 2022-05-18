<?php

use PHPUnit\Framework\TestCase;

class InterpolationSearchTest extends TestCase
{
    protected static $interpolationSearchArray;
    protected static $interpolationSearch;
    public static function setUpBeforeClass(): void
    {
        self::$interpolationSearch = new InterpolationSearch();
        self::$interpolationSearchArray = array(8, 12, 14, 18, 20, 21, 24, 28, 30, 32);
    }
    public function testDataIsFoundShouldReturnIndex()
    {
        $result = self::$interpolationSearch->search(self::$interpolationSearchArray, 14);
        $this->assertEquals(2, $result);
    }

    public function testDataIsNotFoundShouldReturnFalse()
    {
        $result = self::$interpolationSearch->search(self::$interpolationSearchArray, 5);
        $this->assertEquals(-1, $result);
    }

    public function testArrayIsSortedReturnTrue()
    {
        $result = self::$interpolationSearch->isArraySorted(self::$interpolationSearchArray);
        $this->assertEquals(true, $result);
    }

    public function testArrayIsNotSortedReturnFalse()
    {
        $interpolationSearchArray = array(7, 22, 10, 23, 12, 4, 58, 67, 11, 3);
        $result = self::$interpolationSearch->isArraySorted($interpolationSearchArray);
        $this->assertEquals(false, $result);
    }
}

?>