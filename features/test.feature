@javascript
Feature: :Basic Behat Test

  Scenario: Check main Menu Items
    Given I am on "/gb"
    Then I must see "Phones"
    Then I should see "Shop"


  Scenario: Redirection check
    Given I am on "/invalid"
    Then I should get redirected to "www.sonymobile.com"