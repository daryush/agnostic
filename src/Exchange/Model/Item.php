<?php
namespace Exchange\Model;

class Item
{
    private $id;

    private $itemName;

    private $userEmail;

    public function __construct(string $itemName, string $userEmail)
    {
        $this->itemName = $itemName;
        $this->userEmail = $userEmail;
    }

    public function getName(): string
    {
        return $this->itemName;
    }

    public function getOwnerEmail(): string
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