<?php


namespace Kata\Command;


use Kata\Command;
use Kata\Grid\CollisionDetectedException;
use Kata\Position;

class MacroCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testExecuteExecutesAllCommands()
    {
        /** @var Command[] $commands */
        $commands = array();
        $commands[] = $this->expectsCommandToBeExecuted('Kata\Command\MoveBackwardCommand');
        $commands[] = $this->expectsCommandToBeExecuted('Kata\Command\MoveForwardCommand');
        $commands[] = $this->expectsCommandToBeExecuted('Kata\Command\TurnLeftCommand');
        $commands[] = $this->expectsCommandToBeExecuted('Kata\Command\TurnRightCommand');

        $macroCommand = new MacroCommand($commands);

        $macroCommand->execute();
    }

    /**
     * @expectedException \Kata\Grid\CollisionDetectedException
     */
    public function testExecuteStopsCommandFails()
    {
        /** @var Command[] $commands */
        $commands = array();
        $commands[] = $this->expectsCommandToBeExecuted('Kata\Command\MoveBackwardCommand');
        $commands[] = $this->mockCommandToThrowCollisionException('Kata\Command\MoveForwardCommand');
        $commands[] = $this->expectsCommandNotToBeExecuted('Kata\Command\TurnLeftCommand');
        $commands[] = $this->expectsCommandNotToBeExecuted('Kata\Command\TurnRightCommand');

        $macroCommand = new MacroCommand($commands);

        $macroCommand->execute();
    }

    /**
     * @return Command
     * @param string $className
     */
    private function expectsCommandToBeExecuted($className)
    {
        $command = $this->getMockBuilder($className)
            ->disableOriginalConstructor()
            ->getMock();
        $command->expects($this->once())
            ->method('execute');

        return $command;
    }

    /**
     * @return Command
     * @param string $className
     */
    private function expectsCommandNotToBeExecuted($className)
    {
        $command = $this->getMockBuilder($className)
            ->disableOriginalConstructor()
            ->getMock();
        $command->expects($this->never())
            ->method('execute');

        return $command;
    }

    /**
     * @return Command
     * @param string $className
     */
    private function mockCommandToThrowCollisionException($className)
    {
        $command = $this->getMockBuilder($className)
            ->disableOriginalConstructor()
            ->getMock();
        $command->method('execute')
            ->will($this->throwException(new CollisionDetectedException(new Position(0, 0))));

        return $command;
    }
}
