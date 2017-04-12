<?php

namespace Exchange\Model;

interface Items
{
    public function add(Item $item);

    public function findAll(): array;

    public function findOneByNameAndMail(string $itemName, string $ownerEmail);
}
