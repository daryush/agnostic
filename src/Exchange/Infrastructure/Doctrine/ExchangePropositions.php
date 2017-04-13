<?php

namespace Exchange\Infrastructure\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions as BaseExchangePropositions;

class ExchangePropositions implements BaseExchangePropositions
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param ExchangeProposition $proposition
     */
    public function add(ExchangeProposition $proposition)
    {
        $this->entityManager->persist($proposition);
        $this->entityManager->flush();
    }

    public function findAll()
    {
        return $this->entityManager->getRepository(ExchangeProposition::class)
            ->findAll();
    }

    public function getOneByItemName(string $itemName): ExchangeProposition
    {
        $proposition =  $this->entityManager->getRepository(ExchangeProposition::class)
            ->findOneBy(
                ['itemName' => $itemName]
            );

        if (!$proposition) {
            throw new \LogicException(
                sprintf('There is no proposition with item named %s', $itemName)
            );
        }

        return $proposition;
    }
}