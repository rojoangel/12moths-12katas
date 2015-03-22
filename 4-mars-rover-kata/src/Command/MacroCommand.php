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
        for ($i =0; $i < sizeof($this->commands); $i++) {
            $this->commands[$i]->execute();
        }
    }
}
