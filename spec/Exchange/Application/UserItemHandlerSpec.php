<?php

namespace spec\Exchange\Application;

use Exchange\Application\UserItemHandler;
use Exchange\Command\ExposeItemToExchange;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Exchange\Command;
use Exchange\Model\Item;
use Exchange\Model\Items;
use Exchange\Model\ExchangePropositions;
use Exchange\Model\ExchangeProposition;


class UserItemHandlerSpec extends ObjectBehavior
{
    function let(
        ExchangePropositions $propositions,
        Items $items
    ) {
        $this->beConstructedWith($items, $propositions);
    }

    function it_introduce_users_item_to_application(
        Items $items
    ) {
        $introduceUserItemCommand = new Command\IntroduceUserItem(
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

    function it_exposes_users_item_to_exchange_proposition(
        ExchangePropositions $propositions,
        Items $items
    ) {
        $expositionCommand = new ExposeItemToExchange(
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

        $this->expose($expositionCommand);
    }
}
