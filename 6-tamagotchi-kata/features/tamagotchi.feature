Feature: Tamagotchi

  Scenario: Feeding Tamagotchi
    Given I have a Tamagotchi
    When I feed it
    Then it's hungriness is decreased
    And it's fullness is increased

  Scenario: Needs Over Time Tamagotchi
    Given I have a Tamagotchi
    When time passes
    Then it's tiredness is increased
    And it's hungriness is increased
    And it's happiness is decreased