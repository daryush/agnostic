<?php

namespace spec\Exchange\Infrastructure\InMemory;

use Exchange\Model\Item;
use Exchange\Model\Items as BaseItems;
use PhpSpec\ObjectBehavior;

class ItemsSpec extends ObjectBehavior
{
    function it_should_be_items()
    {
        $this->shouldHaveType(BaseItems::class);
    }

    function it_stores_items(Item $item)
    {
        $this->findAll()->shouldHaveCount(0);
        $this->add($item);
        $this->findAll()->shouldHaveCount(1);
    }

    function it_finds_one_by_name_and_owner_email(Item $item)
    {
        $item->getName()->willReturn('name');
        $item->getOwnerEmail()->willReturn('email');
        $this->add($item);

        $this->findOneByNameAndMail('name', 'email')->shouldReturn($item);
    }
}
