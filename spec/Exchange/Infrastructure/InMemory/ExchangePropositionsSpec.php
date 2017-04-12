<?php

namespace spec\Exchange\Infrastructure\InMemory;

use Exchange\Infrastructure\InMemory\ExchangePropositions;
use Exchange\Model\ExchangePropositions as BaseExchangePropositions;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Exchange\Model\ExchangeProposition;

class ExchangePropositionsSpec extends ObjectBehavior
{
    function it_should_behave_like_exchange_propositions_collection()
    {
        $this->shouldImplement(BaseExchangePropositions::class);
    }

    function it_stores_exchange_propositions(ExchangeProposition $proposition)
    {
        $this->findAll()->shouldHaveCount(0);
        $this->add($proposition);
        $this->findAll()->shouldHaveCount(1);
    }
}
