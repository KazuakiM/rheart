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

    public static function testStripos() //{{{
    {
        self::assertEquals(StringFunctionClass::Stripos('abc', 'a'), 0);
        self::assertEquals(                     stripos('abc', 'a'), 0);
        self::assertEquals(StringFunctionClass::Stripos('abc', 'z'), -1);
        self::assertEquals(                     stripos('abc', 'z'), false);
        self::assertEquals(StringFunctionClass::Stripos('abc', 'A'), 0);
        self::assertEquals(                     stripos('abc', 'A'), 0);
        self::assertEquals(StringFunctionClass::Stripos('abc', 'a', 0), 0);
        self::assertEquals(                     stripos('abc', 'a', 0), 0);
        self::assertEquals(StringFunctionClass::Stripos('abc', 'a', 2), -1);
        self::assertEquals(                     stripos('abc', 'a', 2), false);
    } //}}}

    public static function testStristr() //{{{
    {
        self::assertEquals(StringFunctionClass::Stristr('abc', 'b'), 'bc');
        self::assertEquals(                     stristr('abc', 'b'), 'bc');
        self::assertEquals(StringFunctionClass::Stristr('abc', 'z'), 'abc');
        self::assertEquals(                     stristr('abc', 'z'), false);
        self::assertEquals(StringFunctionClass::Stristr('abc', 'B'), 'bc');
        self::assertEquals(                     stristr('abc', 'B'), 'bc');
        self::assertEquals(StringFunctionClass::Stristr('abc', 'b', true), 'a');
        self::assertEquals(                     stristr('abc', 'b', true), 'a');
    } //}}}

    public static function testStrpbrk() //{{{
    {
        self::assertEquals(StringFunctionClass::Strpbrk('abc', 'b'), 'bc');
        self::assertEquals(                     strpbrk('abc', 'b'), 'bc');
        self::assertEquals(StringFunctionClass::Strpbrk('abc', 'z'), 'abc');
        self::assertEquals(                     strpbrk('abc', 'z'), false);
        self::assertEquals(StringFunctionClass::Strpbrk('abc', 'B'), 'abc');
        self::assertEquals(                     strpbrk('abc', 'B'), false);
    } //}}}

    public static function testStrpos() //{{{
    {
        self::assertEquals(StringFunctionClass::Strpos('abc', 'a'), 0);
        self::assertEquals(                     strpos('abc', 'a'), 0);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'z'), -1);
        self::assertEquals(                     strpos('abc', 'z'), false);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'A'), -1);
        self::assertEquals(                     strpos('abc', 'A'), false);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'a', 0), 0);
        self::assertEquals(                     strpos('abc', 'a', 0), 0);
        self::assertEquals(StringFunctionClass::Strpos('abc', 'a', 2), -1);
        self::assertEquals(                     strpos('abc', 'a', 2), false);
    } //}}}

    public static function testStrrchr() //{{{
    {
        self::assertEquals(StringFunctionClass::Strrchr('abac', 'a'), 'ac');
        self::assertEquals(                     strrchr('abac', 'a'), 'ac');
        self::assertEquals(StringFunctionClass::Strrchr('abac', 'z'), 'abac');
        self::assertEquals(                     strrchr('abac', 'z'), false);
        self::assertEquals(StringFunctionClass::Strrchr('abac', 'B'), 'abac');
        self::assertEquals(                     strrchr('abac', 'B'), false);
    } //}}}

    public static function testStrripos() //{{{
    {
        self::assertEquals(StringFunctionClass::Strripos('abac', 'a'), 2);
        self::assertEquals(                     strripos('abac', 'a'), 2);
        self::assertEquals(StringFunctionClass::Strripos('abac', 'z'), -1);
        self::assertEquals(                     strripos('abac', 'z'), false);
        self::assertEquals(StringFunctionClass::Strripos('abac', 'A'), 2);
        self::assertEquals(                     strripos('abac', 'A'), 2);
        self::assertEquals(StringFunctionClass::Strripos('abac', 'a', 0), 2);
        self::assertEquals(                     strripos('abac', 'a', 0), 2);
        self::assertEquals(StringFunctionClass::Strripos('abac', 'a', 3), -1);
        self::assertEquals(                     strripos('abac', 'a', 3), false);
    } //}}}

    public static function testStrrpos() //{{{
    {
        self::assertEquals(StringFunctionClass::Strrpos('abac', 'a'), 2);
        self::assertEquals(                     strrpos('abac', 'a'), 2);
        self::assertEquals(StringFunctionClass::Strrpos('abac', 'z'), -1);
        self::assertEquals(                     strrpos('abac', 'z'), false);
        self::assertEquals(StringFunctionClass::Strrpos('abac', 'A'), -1);
        self::assertEquals(                     strrpos('abac', 'A'), false);
        self::assertEquals(StringFunctionClass::Strrpos('abac', 'a', 0), 2);
        self::assertEquals(                     strrpos('abac', 'a', 0), 2);
        self::assertEquals(StringFunctionClass::Strrpos('abac', 'a', 3), -1);
        self::assertEquals(                     strrpos('abac', 'a', 3), false);
    } //}}}

    public static function testStrstr() //{{{
    {
        self::assertEquals(StringFunctionClass::Strstr('abc', 'b'), 'bc');
        self::assertEquals(                     strstr('abc', 'b'), 'bc');
        self::assertEquals(StringFunctionClass::Strstr('abc', 'z'), 'abc');
        self::assertEquals(                     strstr('abc', 'z'), false);
        self::assertEquals(StringFunctionClass::Strstr('abc', 'B'), 'abc');
        self::assertEquals(                     strstr('abc', 'B'), false);
        self::assertEquals(StringFunctionClass::Strstr('abc', 'b', true), 'a');
        self::assertEquals(                     strstr('abc', 'b', true), 'a');
    } //}}}
}
