<?php


namespace Kata;


use Kata\Command\MoveBackwardCommand;
use Kata\Command\MoveForwardCommand;
use Kata\Command\NullCommand;
use Kata\Command\TurnLeftCommand;
use Kata\Command\TurnRightCommand;

class CommandParser
{
    /** @var Rover $rover */
    private $rover;

    private $dictionary;

    /**
     * @param $rover
     */
    public function __construct($rover)
    {
        $this->rover = $rover;
        $this->initDictionary();
    }

    private function initDictionary()
    {
        $this->dictionary = array(
            'F' => new MoveForwardCommand($this->rover),
            'B' => new MoveBackwardCommand($this->rover),
            'L' => new TurnLeftCommand($this->rover),
            'R' => new TurnRightCommand($this->rover),
        );
    }

    /**
     * @param string $instruction
     * @return Command
     */
    public function parse($instruction)
    {
        if (isset($this->dictionary[$instruction])) {
            return $this->dictionary[$instruction];
        } else {
            return new NullCommand($this->rover);
        }
    }
}
