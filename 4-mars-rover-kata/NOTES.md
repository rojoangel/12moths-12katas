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
