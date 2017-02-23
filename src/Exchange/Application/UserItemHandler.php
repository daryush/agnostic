<?php

namespace Exchange\Application;

use Exchange\Command\ExposeItemToExchange;
use Exchange\Command\IntroduceUserItem;
use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions;
use Exchange\Model\Item;
use Exchange\Model\Items;

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

    public function introduce(IntroduceUserItem $command)
    {
        $item = new Item(
            $command->getItemName(),
            $command->getUserEmail()
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
