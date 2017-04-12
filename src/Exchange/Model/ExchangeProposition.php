<?php
namespace Exchange\Model;

class ExchangeProposition
{
    /**
     * @var Item
     */
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function getItem()
    {
        return $this->item;
    }
}