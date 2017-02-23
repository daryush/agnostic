<?php

namespace Exchange\Infrastructure\InMemory;

use Exchange\Model\Item;
use Exchange\Model\Items as BaseItems;

class Items implements BaseItems
{
    private $items = [];

    /**
     * @param Item $item
     */
    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function findAll()
    {
        return $this->items;
    }

    /**
     * @param string $itemName
     * @param string $ownerEmail
     * @return Item
     */
    public function findOneByNameAndMail(string $itemName, string $ownerEmail)
    {
        /** @var Item $item */
        foreach ($this->items as $item) {
            if ($item->getName() === $itemName && $item->getOwnerEmail() === $ownerEmail) {
                return $item;
            }
        }
    }
}
