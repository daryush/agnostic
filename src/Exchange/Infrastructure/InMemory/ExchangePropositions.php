<?php

namespace Exchange\Infrastructure\InMemory;

use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions as BasePropositions;

class ExchangePropositions implements BasePropositions
{
    /**
     * @var ExchangeProposition[]|array
     */
    private $propositions = [];

    public function findAll()
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
