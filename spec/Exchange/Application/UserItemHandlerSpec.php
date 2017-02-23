<?php

namespace spec\Exchange\Application;

use Exchange\Command;
use Exchange\Model\Item;
use Exchange\Model\Items;
use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions;
use PhpSpec\ObjectBehavior;

class UserItemHandlerSpec extends ObjectBehavior
{
    function let(Items $items, ExchangePropositions $propositions)
    {
        $this->beConstructedWith($items, $propositions);
    }

    function it_introduce_users_item_to_application(
        Items $items,
        Command\IntroduceUserItem $introduceUserItemCommand
    ) {
        $introduceUserItemCommand->getUserEmail()->willReturn('email@test.com');
        $introduceUserItemCommand->getItemName()->willReturn('item_name');
        $items->add(
            new Item(
                'item_name',
                'email@test.com'
            )
        )->shouldBeCalled();

        $this->introduce($introduceUserItemCommand);
    }

    function it_exposes_users_item_to_exchange_proposition(
        ExchangePropositions $propositions,
        Items $items,
        Item $item,
        Command\ExposeItemToExchange $expositionCommand
    ) {
        $expositionCommand->getItemName()->willReturn('item_name');
        $expositionCommand->getOwnerEmail()->willReturn('email@test.com');

        $item->getName()->willReturn('item_name');
        $item->getOwnerEmail()->willReturn('email@test.com');

        $items->findOneByNameAndMail('item_name', 'email@test.com')->willReturn($item);

        $propositions->add(
            new ExchangeProposition(
                $item->getWrappedObject()
            )
        )->shouldBeCalled();

        $this->expose($expositionCommand);
    }
}
