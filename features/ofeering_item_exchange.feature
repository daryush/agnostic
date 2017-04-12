Feature:
  In order to own item that I'm interested in
  As item owner
  In need to be able to offer exchange my item to item of another item owner

  Scenario:
    Given "offerer@user.com" user has item "offerer_item" exposed to exchange
    And "owner@user.com" user has item "owner_item" exposed to exchange
    When "offerer@user.com" user make offer to "owner@user.com" user to exchange "offerer_item" item to "owner_item" item
    And "owner@user.com" user agreed to "offerer@user.com" user offer to exchange "offerer_item" item to "owner_item" item
    Then "owner@user.com" should have item "offerer_item"
    And "offerer@user.com" should have item "owner_item"