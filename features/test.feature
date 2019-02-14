Feature: :Basic Behat Test

  Scenario: Check main Menu Items
    Given I am on "/gb"
    Then I must see "Phones"
    Then I should see "Shop"
    And the response status code should be 200