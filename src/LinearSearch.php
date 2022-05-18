<?php

class LinearSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($linearSearchArray, $searchElement)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $searchElement)
                return $i;
        }
        return -1;
    }

    /**
     * Function to check the given array is sorted or not
     * Passing the array as parameter
     * Return True if sorted, else return False
     */
    function isArraySorted($linearSearchArray)
    {
        $array = $linearSearchArray;
        sort($array);
        if ($array == $linearSearchArray) {
            return true;
        } else {
            return false;
        }
    }
}

?>