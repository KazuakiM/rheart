<?php

namespace KazuakiM\Rheart;

class StringFunctionClass
{
    //Class variable {{{
    //}}}

    public static function Strpos(string $haystack, string $needle, int $offset = 0) : int //{{{
    {
        $pos = strpos($haystack, $needle, $offset);

        return ($pos === false) ? -1 : $pos;
    } //}}}
}
