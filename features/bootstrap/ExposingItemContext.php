<?php

use Behat\Behat\Context\Context;

class ExposingItemContext implements Context
{
    /**
     * @var
     */
    private $userEmail;

    /**
     * @Given I am :userEmail user
     */
    public function iAmUser(string $userEmail)
    {
        $this->useEmail = $userEmail;
    }

    /**
     * @Given I have item :itemName
     */
    public function iHaveItem(string $itemName)
    {
        throw new PendingException();
    }

    /**
     * @When I expose :itemName for exchanging
     */
    public function iExposeForExchanging(string $itemName)
    {
        throw new PendingException();
    }

    /**
     * @Then New exchange proposition with :itemName should be opened
     */
    public function newExchangePropositionWithShouldBeOpened(string $itemName)
    {
        throw new PendingException();
    }

    /**
     * @Then I should become :itemName exchange proposition owner
     */
    public function iShouldBecomeExchangePropositionOwner(string $itemName)
    {
        throw new PendingException();
    }
}