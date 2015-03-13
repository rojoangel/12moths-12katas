<?php


namespace Kata;


class CommandParserTest extends \PHPUnit_Framework_TestCase
{

    /** @var Rover $rover */
    private $rover;

    protected function setUp()
    {
        $this->rover = $this->getMockBuilder('Kata\Rover')
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testParseCommandToMoveForward()
    {
        $commandParser = new CommandParser($this->rover);
        $this->assertInstanceOf('Kata\Command\MoveForwardCommand', $commandParser->parse('F'));
    }

    public function testParseCommandToMoveBackward()
    {
        $commandParser = new CommandParser($this->rover);
        $this->assertInstanceOf('Kata\Command\MoveBackwardCommand', $commandParser->parse('B'));
    }

    public function testParseCommandToTurnLeft()
    {
        $commandParser = new CommandParser($this->rover);
        $this->assertInstanceOf('Kata\Command\TurnLeftCommand', $commandParser->parse('L'));
    }

    public function testParseCommandToTurnRight()
    {
        $commandParser = new CommandParser($this->rover);
        $this->assertInstanceOf('Kata\Command\TurnRightCommand', $commandParser->parse('R'));
    }

    public function testParseUnknownInstructionAsNullCommand()
    {
        $commandParser = new CommandParser($this->rover);
        $this->assertInstanceOf('Kata\Command\NullCommand', $commandParser->parse('N'));
    }
}
