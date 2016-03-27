<?php
/**
 * String Functions
 *
 * @url http://php.net/manual/en/ref.strings.php
 * @url http://php.net/manual/ja/ref.strings.php
 */

namespace KazuakiM\Rheart;

class StringFunctionClass
{
    //Class variable {{{
    //}}}

    public static function Stripos(string $haystack, string $needle, int $offset = 0) :int //{{{
    {
        $pos = stripos($haystack, $needle, $offset);

        return ($pos === false) ? -1 : $pos;
    } //}}}

    public static function Stristr(string $haystack, $needle, bool $beforeNeedle = false) :string //{{{
    {
        $str = stristr($haystack, $needle, $beforeNeedle);

        return ($str === false) ? $haystack : $str;
    } //}}}

    public static function Strpbrk(string $haystack, string $charList) :string //{{{
    {
        $str = strpbrk($haystack, $charList);

        return ($str === false) ? $haystack : $str;
    } //}}}

    public static function Strpos(string $haystack, string $needle, int $offset = 0) : int //{{{
    {
        $pos = strpos($haystack, $needle, $offset);

        return ($pos === false) ? -1 : $pos;
    } //}}}

    public static function Strrchr(string $haystack, $needle) :string //{{{
    {
        $str = strrchr($haystack, $needle);

        return ($str === false) ? $haystack : $str;
    } //}}}

    public static function Strripos(string $haystack, string $needle, int $offset = 0) :int //{{{
    {
       $pos = strripos($haystack, $needle, $offset);

       return ($pos === false) ? -1 : $pos;
    } //}}}

    public static function Strrpos(string $haystack, string $needle, int $offset = 0) :int //{{{
    {
       $pos = strrpos($haystack, $needle, $offset);

       return ($pos === false) ? -1 : $pos;
    } //}}}

    public static function Strstr(string $haystack, $needle, bool $beforeNeedle = false) :string //{{{
    {
        $str = strstr($haystack, $needle, $beforeNeedle);

        return ($str === false) ? $haystack : $str;
    } //}}}
}
