<?php

namespace spec\Exchange\Application;

use Exchange\Application\UserItemHandler;
use Exchange\Command\ExposeItemToExchange;
use Exchange\Command\IntroduceUserItem;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Exchange\Model\Item;
use Exchange\Model\Items;
use Exchange\Model\ExchangePropositions;
use Exchange\Model\ExchangeProposition;


class UserItemHandlerSpec extends ObjectBehavior
{
    function let(
        Items $items,
        ExchangePropositions $propositions
    ) {
        $this->beConstructedWith($items, $propositions);
    }

    function it_introduce_users_item_to_application(
        Items $items
    ) {
        $introduceUserItemCommand = new IntroduceUserItem(
            'item_name',
            'email@test.com'
        );

        $items->add(
            new Item(
                'item_name',
                'email@test.com'
            )
        )->shouldBeCalled();

        $this->introduce($introduceUserItemCommand);
    }

    function it_exposes_item_to_exchange(
        Items $items,
        ExchangePropositions $propositions
    ) {
        $exposeItemToExchangeCommand = new ExposeItemToExchange(
            'item_name',
            'email@test.com'
        );

        $item = new Item(
            'item_name',
            'email@test.com'
        );

        $items->findOneByNameAndMail('item_name', 'email@test.com')
            ->willReturn($item);

        $propositions->add(
            new ExchangeProposition(
                $item
            )
        )->shouldBeCalled();

        $this->expose($exposeItemToExchangeCommand);
    }
}
