<?php
namespace Exchange\Infrastructure\Doctrine;
use Doctrine\ORM\EntityManagerInterface;
use Exchange\Model\Item;
use Exchange\Model\Items as BaseItems;
class Items implements BaseItems
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
     * @param Item $item
     */
    public function add(Item $item)
    {
        $this->entityManager->persist($item);
        $this->entityManager->flush();
    }

    public function findAll(): array
    {
        return $this->entityManager->getRepository(Item::class)
            ->findAll();
    }

    /**
     * @param string $itemName
     * @param string $ownerEmail
     * @return Item
     */
    public function findOneByNameAndMail(string $itemName, string $ownerEmail): ?Item
    {
        return $this->entityManager->getRepository(Item::class)
            ->findOneBy(
                [
                    'itemName' => $itemName,
                    'userEmail' => $ownerEmail
                ]
            );
    }
}