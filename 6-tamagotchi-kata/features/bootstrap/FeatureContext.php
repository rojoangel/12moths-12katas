<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Kata\Tamagotchi;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends PHPUnit_Framework_TestCase implements Context, SnippetAcceptingContext
{
    /** @var Tamagotchi $tamagotchi */
    private $tamagotchi;
    private $initialHungriness;
    private $initialFullness;
    private $initialHappiness;
    private $initialTiredness;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->initialHungriness = 10;
        $this->initialFullness = 10;
        $this->initialHappiness = 10;
        $this->initialTiredness = 10;
    }

    /**
     * @Given I have a Tamagotchi
     */
    public function iHaveATamagotchi()
    {
        $this->tamagotchi = new Tamagotchi($this->initialHungriness, $this->initialFullness, $this->initialHappiness, $this->initialTiredness);
    }

    /**
     * @When I feed it
     */
    public function iFeedIt()
    {
        $this->tamagotchi->feed();
    }

    /**
     * @Then it's hungriness is decreased
     */
    public function itSHungrinessIsDecreased()
    {
        $this->assertLessThan($this->initialHungriness, $this->tamagotchi->getHungriness());
    }

    /**
     * @Then it's fullness is increased
     */
    public function itSFullnessIsIncreased()
    {
        $this->assertGreaterThan($this->initialFullness, $this->tamagotchi->getFullness());
    }

    /**
     * @When time passes
     */
    public function timePasses()
    {
        $this->tamagotchi->passTime();
    }

    /**
     * @Then it's tiredness is increased
     */
    public function itSTirednessIsIncreased()
    {
        $this->assertGreaterThan($this->initialTiredness, $this->tamagotchi->getTiredness());
    }

    /**
     * @Then it's hungriness is increased
     */
    public function itSHungrinessIsIncreased()
    {
        $this->assertGreaterThan($this->initialHungriness, $this->tamagotchi->getHungriness());
    }

    /**
     * @Then it's happiness is decreased
     */
    public function itSHappinessIsDecreased()
    {
        $this->assertLessThan($this->initialHappiness, $this->tamagotchi->getHappiness());
    }


}
