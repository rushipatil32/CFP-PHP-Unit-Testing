<?php

use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    protected static $binarySearchArray;
    protected static $binarySearch;
    public static function setUpBeforeClass(): void
    {
        self::$binarySearch = new BinarySearch();
        self::$binarySearchArray = array(8, 12, 14, 18, 20, 21, 24, 28, 30, 32);
    }

    public function testGivenDataFoundReturnIndex()
    {
        $lower = 0;
        $higher = count(self::$binarySearchArray)-1;
        $result = self::$binarySearch->search(self::$binarySearchArray, $lower, $higher, 20);
        $this->assertEquals(4, $result);
    }

    public function testGivenDataNotFoundReturnFalse()
    {
        $lower = 0;
        $higher = count(self::$binarySearchArray) - 1;
        $result = self::$binarySearch->search(self::$binarySearchArray,$lower, $higher, 11);
        $this->assertEquals(-1, $result);
    }

    public function testGivenArrayIfSortedReturnTrue()
    {
        $result = self::$binarySearch->isArraySorted(self::$binarySearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenArrayIfNotSortedReturnFalse()
    {
        $binarySearchArray = array(7, 22, 10, 23, 12, 4, 58, 67, 11, 3);
        $result = self::$binarySearch->isArraySorted($binarySearchArray);
        $this->assertEquals(false, $result);
    }
}