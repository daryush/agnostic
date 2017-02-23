<?php

namespace spec\Exchange\Model;

use Exchange\Model\Item;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ItemSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('itemName', 'user@email.com');
    }

    function it_exposes_name_and_owner_email()
    {
        $this->getName()->shouldReturn('itemName');
        $this->getOwnerEmail()->shouldReturn('user@email.com');
    }
}
