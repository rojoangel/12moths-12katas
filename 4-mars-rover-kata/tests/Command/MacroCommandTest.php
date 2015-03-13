<?php


namespace Kata\Command;


use Kata\Command;

class MacroCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testExecuteExecutesAllCommands()
    {
        /** @var Command[] $commands */
        $commands = array();
        $commands[] = $this->createCommand('Kata\Command\MoveBackwardCommand');
        $commands[] = $this->createCommand('Kata\Command\MoveForwardCommand');
        $commands[] = $this->createCommand('Kata\Command\TurnLeftCommand');
        $commands[] = $this->createCommand('Kata\Command\TurnRightCommand');

        $macroCommand = new MacroCommand($commands);

        $macroCommand->execute();
    }

    /**
     * @return Command
     */
    private function createCommand($className)
    {
        $backwardCommand = $this->getMockBuilder($className)
            ->disableOriginalConstructor()
            ->getMock();
        $backwardCommand->expects($this->once())
            ->method('execute');

        return $backwardCommand;
    }
}
