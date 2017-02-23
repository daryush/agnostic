<?php

namespace Exchange\Model;

interface ExchangePropositions
{
    /**
     * @param ExchangeProposition $proposition
     */
    public function add(ExchangeProposition $proposition);

    public function findAll();

    public function getOneByItemName(string $itemName): ExchangeProposition;
}
