<?php

namespace Exchange\Model;

interface ExchangePropositions
{
    public function add(ExchangeProposition $exchangeProposition);

    public function findAll(): array;
}
