<?php

namespace Exchange\Command;


class ExposeItemToExchange
{
    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $ownerEmail;

    public function __construct(string $itemName, string $ownerEmail)
    {
        $this->itemName = $itemName;
        $this->ownerEmail = $ownerEmail;
    }
    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }
    /**
     * @return string
     */
    public function getOwnerEmail(): string
    {
        return $this->ownerEmail;
    }
}