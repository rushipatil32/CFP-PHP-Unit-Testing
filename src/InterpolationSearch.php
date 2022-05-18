<?php

/**
 * Class to compute interpolation search
 */
class InterpolationSearch{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($searchArray, $searchElement){
        $lower = 0;
        $higher = count($searchArray) - 1;

        while ($lower <= $higher && $searchElement >= $searchArray[$lower] && $searchElement <= $searchArray[$higher]) {
            if ($lower == $higher) {
                if ($searchArray[$lower] == $searchElement) {
                    return $lower;
                } else {
                    return -1;
                }
            }

            /**
             * Probing the position with keeping 
             * uniform distribution in mind. 
             */
            $probing = intval($lower + (($searchElement - $searchArray[$lower]) * ($higher - $lower) /
                ($searchArray[$higher] - $searchArray[$lower])));

            if ($searchArray[$probing] == $searchElement) {
                return $probing;
            }
            // If search element is larger i.e search element is in upper part 
            elseif ($searchArray[$probing] < $searchElement) {
                $lower = $probing + 1;
            }
            else {
                $higher = $probing - 1;
            }
        }
        return -1;
    }
     /**
     * Function to check the given array is sorted or not
     * @parameter Array
     * return boolean
     */
    function isArraySorted($interpolationSearchArray)
    {
        $array = $interpolationSearchArray;
        sort($array);
        if ($array == $interpolationSearchArray) {
            return true;
        } else {
            return false;
        }
    }
}

?>