<?php

namespace Exchange\Model;

interface Items
{
    public function add(Item $item);

    public function findAll();

    public function findOneByNameAndMail($itemName, $ownerMail);
}
