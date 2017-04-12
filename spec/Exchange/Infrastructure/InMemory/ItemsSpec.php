<?php

namespace spec\Exchange\Infrastructure\InMemory;

use Exchange\Infrastructure\InMemory\Items;
use Exchange\Model\Items as BaseItems;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Exchange\Model\Item;

class ItemsSpec extends ObjectBehavior
{
    function it_should_behave_like_items_collection()
    {
        $this->shouldImplement(BaseItems::class);
    }

    function it_stores_items(Item $item)
    {
        $this->findAll()->shouldHaveCount(0);
        $this->add($item);
        $this->findAll()->shouldContain($item);
        $this->findAll()->shouldHaveCount(1);
    }
}
