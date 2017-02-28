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
        $this->findAll()->shouldHaveCount(1);
        $this->findAll()->shouldContain($item);
    }

    function it_finds_one_by_name_and_owner_email(Item $item)
    {
        $item->getName()->willReturn('name');
        $item->getOwnerEmail()->willReturn('email');
        $this->add($item);
        $this->findOneByNameAndMail('name', 'email')->shouldReturn($item);
        $this->findOneByNameAndMail('name_fake', 'email')->shouldReturn(null);
    }
}
