<?php


namespace Kata;


use Kata\Command\MacroCommand;
use Kata\Grid\CollisionDetectedException;

class RoverController
{

    /** @var Rover $rover */
    private $rover;

    /** @var CommandParser $commandParser */
    private $commandParser;

    /** @var Obstacle $obstacle */
    private $obstacle;

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
        try {
            $this->processInstructions($instructions)->execute();
        } catch (CollisionDetectedException $collisionException) {
            $this->obstacle = $collisionException->getObstacle();
        }
    }

    /**
     * @return Obstacle
     */
    public function reportObstacle()
    {
        return $this->obstacle;
    }

    /**
     * @param $instructions
     * @return MacroCommand
     */
    private function processInstructions($instructions)
    {
        $commands = array();

        for ($i = 0; $i < strlen($instructions); $i++) {
            $commands[] = $this->commandParser->parse(substr($instructions, $i, 1));
        }

        return new MacroCommand($commands);
    }
}
