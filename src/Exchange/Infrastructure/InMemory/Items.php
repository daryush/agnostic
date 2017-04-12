<?php

namespace Exchange\Infrastructure\InMemory;

use Exchange\Model\Item;
use Exchange\Model\Items as BaseItems;

class Items implements BaseItems
{
    private $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * @return array|Item[]
     */
    public function findAll(): array
    {
        return $this->items;
    }

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
