<?php
use PHPUnit\Framework\TestCase;
use Weiloon1234\BBCode\BBCodeParser;

require_once __DIR__.'/../src/Traits/ArrayTrait.php';
require_once __DIR__.'/../src/BBCodeParser.php';

class BBCodeParserTest extends TestCase
{
    public function testBoldParsing()
    {
        $parser = new BBCodeParser();
        $result = $parser->parse('[b]bold[/b]');
        $this->assertEquals('<strong>bold</strong>', $result);
    }

    public function testColorParsingLowercase()
    {
        $parser = new BBCodeParser();
        $result = $parser->parse('[color=#aabbcc]text[/color]');
        $this->assertEquals('<font color="#aabbcc">text</font>', $result);
    }

    public function testColorParsingUppercase()
    {
        $parser = new BBCodeParser();
        $result = $parser->parse('[color=#AABBCC]text[/color]');
        $this->assertEquals('<font color="#AABBCC">text</font>', $result);
    }
}
