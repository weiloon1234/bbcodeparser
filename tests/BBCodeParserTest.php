<?php
namespace Weiloon1234\BBCode\Tests;

use PHPUnit\Framework\TestCase;
use Weiloon1234\BBCode\BBCodeParser;

class BBCodeParserTest extends TestCase
{
    public function testBoldTag()
    {
        $parser = new BBCodeParser();
        $this->assertSame('<strong>text</strong>', $parser->parse('[b]text[/b]'));
    }

    public function testColorTagUppercase()
    {
        $parser = new BBCodeParser();
        $this->assertSame('<font color="#FFAABB">text</font>', $parser->parse('[color=#FFAABB]text[/color]'));
    }

    public function testColorTagLowercase()
    {
        $parser = new BBCodeParser();
        $this->assertSame('<font color="#ffaabb">text</font>', $parser->parse('[color=#ffaabb]text[/color]'));
    }
}
