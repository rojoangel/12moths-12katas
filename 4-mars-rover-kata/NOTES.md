* After creating the rover I had the following doubts as per the State patters as described in Head First Patterns book:
- Shouldn't the Direction object receive a Rover object when instantiated. I didn't follow this path because it seemed
to over complicate things.

```
class East implements Direction
{
    /** @var Rover $rover */
    private $rover;

    /**
     * @param Rover $rover
     */
    public function __construct(Rover $rover)
    {
        $this->rover = $rover;
    }

    public function turnLeft()
    {
        $this->rover->setDirection($this->rover->getNorthState());
    }
}
```

```
class EastTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsNorth()
    {
        $direction = new East(new Rover(<< I need to add initial direction here >>)));
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\Direction\North', $newDirection);
    }
```

- When adding Landscape I had a to add a lot of code to make the 1st test pass:

```
    public function testRoverAt00CoordinatesFacingNorthWhenMovesForwardWillBeAt01Coordinates()
    {
        $rover = new Rover(new Landscape(0,0,5,5), new North());
        $rover->moveForward();
        $this->assertEquals(0, $rover->getCoordinateX());
        $this->assertEquals(1, $rover->getCoordinateY());
    }
```
I may had been able to take baby steps instead of a big jump forward -> created a new branch 4-mars-rover-kata-alt1

Exploring other options at this point & back to 4-mars-rover-kata branch:

- Refactored Direction turnLeft & turnRight methods to accept a rover param: that makes things a lot easier although seem
to be a lot of promiscuity between Direction and Rover (i.e. Rover needs to expose getter & setter for Direction)

- Positive point: avoided the Direction to need to know about the Rover at instantiation time: no Rover passed to the
Direction constructor


Initially thought about implementing 
```
new Position(new Grid())
```
Later refactored to
```
new Grid(new Position())
```
That approach enables the Grid to expose a wrapEdges() function that can reposition the rover when off limits

Added an abstract PositionableGrid - not so convinced about the visibility for
```
abstract protected function wrapEdge();
```

Refactored position as a ValueObject:
as a result of it moved all the \Kata\Grid\RectangularGrid::wrapEdge to the corresponding \Kata\Grid\RectangularGrid::move* methods

Refactored Grid to implement the strategy pattern although I kept the abstract PositionableGrid class

Implemented NullCommand using Null Object Design Pattern
@todo - command parser needs to know about the Rover - review this decision
and the following line looks weird
```
        $roverController = new RoverController($rover, new CommandParser($rover));
```

Refactored Grid so it works on Positions and not on Rovers

Implemented obstacle detection in a very intrusive way, see commits:

- https://github.com/rojoangel/12moths-12katas/commit/1a25234813b5ccc051b47358eb8caec71b86b3d7
- https://github.com/rojoangel/12moths-12katas/commit/ea2f7e881f4ca9a007852b8c90c42a8571a14bfc

@todo refactor collision detection to match the following requirement:

```
Implement obstacle detection before each move to a new square. If a given sequence of commands encounters an obstacle, the rover moves up to the last possible point and reports the obstacle.
```

Some sort of exception needs to be thrown at some stage.