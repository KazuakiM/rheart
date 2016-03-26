<?php

namespace KazuakiM\Rheart;

class StringFunctionClassTest extends \PHPUnit_Framework_TestCase
{
    //Class variable {{{
    //}}}

    public function __construct() //{{{
    {
        parent::__construct();
    } //}}}

    public static function testStrpos() //{{{
    {
        self::assertEquals(StringFunctionClass::Strpos('abc', 'a'), 0);
        self::assertEquals(                     strpos('abc', 'a'), 0);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'z'), -1);
        self::assertEquals(                     strpos('abc', 'z'), false);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'a', 0), 0);
        self::assertEquals(                     strpos('abc', 'a', 0), 0);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'a', 2), -1);
        self::assertEquals(                     strpos('abc', 'a', 2), false);
    } //}}}
}
