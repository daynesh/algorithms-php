<?php namespace Algorithms\ArrayAndStrings;

class IsUnique
{
    /**
     * Is Unique: Implement an algorithm to determine if a string has all unique
     * characters. What if you cannot use additional data structures?
     */
    public static function firstAttempt($input)
    {
        $uniqueChars = [];

        for ($i=0; $i<strlen($input); $i++) {
            if (isset($uniqueChars[$input[$i]])) {
                return false;
            } else {
                $uniqueChars[$input[$i]] = 0;
            }
        }

        return true;
    }
}