<?php

namespace Exchange\Infrastructure\InMemory;

use Exchange\Model\Item;
use Exchange\Model\Items as BaseItems;

class Items implements BaseItems
{
    private $items = [];

    public function findAll()
    {
        return $this->items;
    }

    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function findOneByNameAndMail($itemName, $ownerMail)
    {
        /** @var Item $item */
        foreach ($this->items as $item) {
            if ($item->getItemName() === $itemName && $item->getUserEmail() === $ownerMail) {
                return $item;
            }
        }
    }
}
