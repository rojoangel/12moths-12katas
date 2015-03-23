<?php


namespace Kata\Command;


use Kata\Command;
use Kata\Grid\CollisionDetectedException;

class MacroCommand implements Command
{
    /** @var Command[] $commands */
    private $commands;

    public function __construct($commands)
    {
        $this->commands = $commands;
    }


    /**
     * @throws CollisionDetectedException
     */
    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
