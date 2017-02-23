<?php

namespace Exchange\Model;

interface Items
{
    /**
     * @param Item $item
     */
    public function add(Item $item);

    public function findAll();

    /**
     * @param string $itemName
     * @param string $ownerEmail
     * @return Item
     */
    public function findOneByNameAndMail(string $itemName, string $ownerEmail);
}
