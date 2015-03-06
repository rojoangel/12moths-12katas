* After creating the rover I had the following doubts as per the State patters as described in Head First Patterns book:
- Shouldn't the Direction object receive a Rover object when instantiated. I didn't follow this path because it seemed
to overcomplicate things.

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
        $this->assertInstanceOf('Kata\North', $newDirection);
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