<?php

namespace Exchange\Model;


class ExchangeProposition
{
    private $id;

    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}