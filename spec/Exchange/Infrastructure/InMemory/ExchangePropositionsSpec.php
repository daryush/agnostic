<?php

namespace spec\Exchange\Infrastructure\InMemory;

use Exchange\Infrastructure\InMemory\ExchangePropositions;
use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions as BasePropositions;
use Exchange\Model\Item;
use PhpSpec\ObjectBehavior;

class ExchangePropositionsSpec extends ObjectBehavior
{
    function it_should_be_exchange_propositions()
    {
        $this->shouldHaveType(BasePropositions::class);
    }

    function it_stores_exchange_propositions(ExchangeProposition $proposition)
    {
        $this->findAll()->shouldHaveCount(0);
        $this->add($proposition);
        $this->findAll()->shouldHaveCount(1);
    }

    function it_gets_exchange_proposition_by_item_name(
        ExchangeProposition $proposition,
        Item $item
    ) {
        $proposition->getItem()->willReturn($item);
        $item->getName()->willReturn('bottle plug');
        $this->add($proposition);

        $this->getOneByItemName('bottle plug')->shouldReturn($proposition);
    }

    function it_throws_exception_when_no_proposition_found() {
        $this->shouldThrow(
            new \LogicException('There is no proposition with item named not_existing_one')
        )->during(
            'getOneByItemName', ['itemName' => 'not_existing_one']
        );
    }
}
