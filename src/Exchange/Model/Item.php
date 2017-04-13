<?php

namespace Exchange\Model;

class Item
{
    private $id;

    /**
     * @var string
     */
    private $itemName;
    /**
     * @var string
     */
    private $userEmail;

    public function __construct(string $itemName, string $userEmail)
    {
        $this->itemName = $itemName;
        $this->userEmail = $userEmail;
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
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
