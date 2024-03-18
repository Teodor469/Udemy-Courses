<?php

class StringUtility {

    public static function shout($string)
    {
        return strtoupper($string);
    }


    public static function whisper($string)
    {
        return strtolower($string);
    }


    public static function repeat($string, $times = 2)
    {
        $result = '';
        for ($i = 0; $i < $times; $i++) {
            $result .= $string;
        }
        return $result;
    }
}

$stringUtil = new StringUtility();

// Call each method on the instance
echo StringUtility::shout("hello") . "\n"; // Outputs: HELLO
echo StringUtility::whisper("HELLO") . "\n"; // Outputs: hello
echo StringUtility::repeat("abc", 3) . "\n"; // Outputs: abcabcabc