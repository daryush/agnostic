Feature: Exposing item to exchange
  In order to make possible exchanging my item with other
  As item owner
  I should be able to expose my item for exchanging

  Scenario: Exposing item to exchange
    Given I am "example@user.com" user
    And I have item "bottle plug"
    When I expose "bottle plug" for exchanging
    Then New exchange proposition with "bottle plug" should be opened
    And I should become "bottle plug" exchange proposition owner