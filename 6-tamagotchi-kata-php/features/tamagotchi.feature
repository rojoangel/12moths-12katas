Feature: Tamagotchi

  Scenario: Feeding Tamagotchi
    Given I have a Tamagotchi
    When I feed it
    Then it's hungriness is decreased
    And it's fullness is increased

  Scenario: Playing with Tamagotchi
    Given I have a Tamagotchi
    When I play with it
    Then it's happiness is increased
    And it's tiredness is increased

  Scenario: Needs Over Time Tamagotchi
    Given I have a Tamagotchi
    When time passes
    Then it's tiredness is increased
    And it's hungriness is increased
    And it's happiness is decreased

  Scenario: Putting Tamagotchi to Bed
    Given I have a Tamagotchi
    When I put it to bed
    Then it's tiredness is decreased

  Scenario: Making Tamagotchi Poop
    Given I have a Tamagotchi
    When I make it poop
    Then it's fullness is decreased