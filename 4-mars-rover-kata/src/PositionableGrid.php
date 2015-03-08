<?php


namespace Kata;


abstract class PositionableGrid implements Grid
{

    public function moveYForward(Rover $rover)
    {
        $rover->setPosition(
            new Position(
                $rover->getPosition()->getXCoordinate(),
                $rover->getPosition()->getYCoordinate() + 1
            )
        );
    }

    public function moveYBackward(Rover $rover)
    {
        $rover->setPosition(
            new Position(
                $rover->getPosition()->getXCoordinate(),
                $rover->getPosition()->getYCoordinate() - 1
            )
        );
    }

    public function moveXForward(Rover $rover)
    {
        $rover->setPosition(
            new Position(
                $rover->getPosition()->getXCoordinate() + 1,
                $rover->getPosition()->getYCoordinate()
            )
        );
    }

    public function moveXBackward(Rover $rover)
    {
        $rover->setPosition(
            new Position(
                $rover->getPosition()->getXCoordinate() - 1,
                $rover->getPosition()->getYCoordinate()
            )
        );
    }
}
