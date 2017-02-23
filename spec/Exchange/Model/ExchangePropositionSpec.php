<?php

namespace spec\Exchange\Model;

use Exchange\Model\Item;
use PhpSpec\ObjectBehavior;

class ExchangePropositionSpec extends ObjectBehavior
{
    function let(Item $item)
    {
        $this->beConstructedWith($item);
    }

    function it_exposes_item(Item $item)
    {
        $this->getItem()->shouldReturn($item);
    }
}
