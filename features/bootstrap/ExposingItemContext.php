<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Exchange\Application\UserItemHandler;
use Exchange\Command\ExposeItemToExchange;
use Exchange\Command\IntroduceUserItem;

use Exchange\Infrastructure\InMemory;
use Exchange\Model\Items;
use Exchange\Model\ExchangePropositions;

class ExposingItemContext implements Context
{
    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var Items
     */
    private $items;

    /**
     * @var ExchangePropositions
     */
    private $propositions;

    public function __construct()
    {
        $this->items = new InMemory\Items();
        $this->propositions = new InMemory\ExchangePropositions();
    }

    /**
     * @Given I am :userEmail user
     */
    public function iAmUser(string $userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @Given I have item :itemName
     */
    public function iHaveItem(string $itemName)
    {
        (new UserItemHandler($this->items, $this->propositions))->introduce(
            new IntroduceUserItem($itemName, $this->userEmail)
        );
    }

    /**
     * @When I expose :itemName for exchanging
     */
    public function iExposeForExchanging(string $itemName)
    {
        (new UserItemHandler($this->items, $this->propositions))->expose(
            new ExposeItemToExchange($itemName, $this->userEmail)
        );
    }

    /**
     * @Then New exchange proposition with :itemName should be opened
     */
    public function newExchangePropositionWithShouldBeOpened(string $itemName)
    {
        $this->propositions->getOneByItemName($itemName);
    }

    /**
     * @Then I should become :itemName exchange proposition owner
     */
    public function iShouldBecomeExchangePropositionOwner(string $itemName)
    {
        $proposition = $this->propositions->getOneByItemName($itemName);
        if ($proposition->getItem()->getOwnerEmail() !== $this->userEmail) {
            throw new \LogicException(
                sprintf(
                    '%s should be owner of this exchange proposition, but %s are',
                    $this->userEmail,
                    $proposition->getItem()->getOwnerEmail()
                )
            );
        }
    }
}