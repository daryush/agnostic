<?php

namespace spec\Exchange\Infrastructure\InMemory;

use Exchange\Infrastructure\InMemory\Items;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Exchange\Model\Items as BaseItems;
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
        $this->findAll()->shouldHaveCount(1);
    }

    function it_finds_one_by_name_and_owner_email(Item $item)
    {
        $item->getItemName()->willReturn('name');
        $item->getUserEmail()->willReturn('email');
        $this->add($item);

        $this->findOneByNameAndMail('name', 'email')->shouldReturn($item);
    }
}
