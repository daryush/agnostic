<?php

namespace Exchange\Application;

use Exchange\Command\ExposeItemToExchange;
use Exchange\Command\IntroduceUserItem;
use Exchange\Model\ExchangePropositions;
use Exchange\Model\Items;
use Exchange\Model\Item;
use Exchange\Model\ExchangeProposition;

class UserItemHandler
{
    /**
     * @var Items
     */
    private $items;
    /**
     * @var ExchangePropositions
     */
    private $propositions;

    public function __construct(Items $items, ExchangePropositions $propositions)
    {
        $this->items = $items;
        $this->propositions = $propositions;
    }

    public function introduce(IntroduceUserItem $introduceUserItem)
    {
        $item = new Item(
            $introduceUserItem->getItemName(),
            $introduceUserItem->getUserEmail()
        );

        $this->items->add($item);
    }

    public function expose(ExposeItemToExchange $command)
    {
        $item = $this->items->findOneByNameAndMail(
            $command->getItemName(),
            $command->getOwnerEmail()
        );
        $this->propositions->add(
            new ExchangeProposition($item)
        );
    }
}
