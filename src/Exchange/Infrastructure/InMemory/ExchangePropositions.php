<?php

namespace Exchange\Infrastructure\InMemory;

use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions as BaseExchangePropositions;

class ExchangePropositions implements BaseExchangePropositions
{
    /**
     * @var ExchangeProposition[]|array
     */
    private $propositions = [];

    public function findAll(): array
    {
        return $this->propositions;
    }

    /**
     * @param ExchangeProposition $proposition
     */
    public function add(ExchangeProposition $proposition)
    {
        $this->propositions[] = $proposition;
    }

    public function getOneByItemName(string $itemName): ExchangeProposition
    {
        foreach ($this->propositions as $proposition) {
            if ($proposition->getItem()->getName() === $itemName) {
                return $proposition;
            }
        }
        throw new \LogicException(
            sprintf('There is no proposition with item named %s', $itemName)
        );
    }
}
