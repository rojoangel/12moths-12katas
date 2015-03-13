<?php


namespace Kata;


use Kata\Command\MacroCommand;

class RoverController
{

    /** @var Rover $rover */
    private $rover;

    /** @var CommandParser $commandParser */
    private $commandParser;

    /**
     * @param Rover $rover
     * @param CommandParser $commandParser
     */
    public function __construct($rover, $commandParser)
    {
        $this->rover = $rover;
        $this->commandParser = $commandParser;
    }

    /**
     * @param string $instructions
     */
    public function moveRover($instructions)
    {
        $commands = array();
        for ($i = 0; $i < strlen($instructions); $i++) {
            $commands[] = $this->commandParser->parse(substr($instructions, $i, 1));
        }

        $macroCommand = new MacroCommand($commands);
        $macroCommand->execute();
    }
}
