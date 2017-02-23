<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

use Exchange\Application\UserItemHandler;
use Exchange\Command\IntroduceUserItem;
use Exchange\Infrastructure\InMemory\ExchangePropositions;
use Exchange\Infrastructure\InMemory\Items;
use Exchange\Command\ExposeItemToExchange;

class ExposingItemsContext implements Context
{
    private $userEmail;

    private $items;
    private $propositions;

    public function __construct()
    {
        $this->items = new Items();
        $this->propositions = new ExchangePropositions();
    }

    /**
     * @Given I am :userEmail user
     */
    public function iAmUser($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @Given I have item :itemName
     */
    public function iHaveItem($itemName)
    {
        (new UserItemHandler($this->items, $this->propositions))->introduce(
            new IntroduceUserItem($itemName, $this->userEmail)
        );
    }

    /**
     * @When I expose :itemName for exchanging
     */
    public function iExposeForExchanging($itemName)
    {
        (new UserItemHandler($this->items, $this->propositions))->expose(
            new ExposeItemToExchange($itemName, $this->userEmail)
        );
    }

    /**
     * @Then new exchange proposition with :itemName should be opened
     */
    public function newExchangePropositionWithShouldBeOpened($itemName)
    {
        $this->propositions->getOneByItemName($itemName);
    }

    /**
     * @Then I should become :itemName exchange proposition owner
     */
    public function iShouldBecomeExchangePropositionOwner($itemName)
    {
        $proposition = $this->propositions->getOneByItemName($itemName);
        if ($proposition->getItem()->getUserEmail() !== $this->userEmail) {
            throw new \LogicException(
                sprintf(
                    '%s should be owner of this exchange proposition, but %s are',
                    $this->userEmail,
                    $proposition->getItem()->getUserEmail()
                )
            );
        }
    }
}
