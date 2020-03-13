Feature: :Basic Behat Test

  Scenario: Check main Menu Items
    Given I am on "/ng"
    Then I must see "Phones"
    And the response status code should be 200
    Then I should get redirected to "https://www.sony.com/ng"