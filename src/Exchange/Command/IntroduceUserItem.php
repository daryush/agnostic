<?php

namespace Exchange\Command;

class IntroduceUserItem
{
    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $userEmail;

    /**
     * @param string $itemName
     * @param string $userEmail
     */
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
}