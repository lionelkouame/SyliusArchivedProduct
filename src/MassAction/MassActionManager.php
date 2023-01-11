<?php

namespace App\MassAction;

use App\Entity\Product\Product;
use Doctrine\ORM\EntityManagerInterface;
use Sylius\Component\Core\Repository\ProductRepositoryInterface;

class MassActionManager
{
    /** @var EntityManagerInterface $entityManager */
    protected EntityManagerInterface $entityManager;

    protected ProductRepositoryInterface $productRepository;

    /**
     * @param $entityManager
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function archived(array $ids): void
    {
        foreach ($ids as $k => $id) {
            $ids[$k] = (int)$id;
        }
        $products = $this->entityManager->getRepository(Product::class)->findBy(['id' => $ids]);

        /** @var Product $product */
        foreach ($products as $product) {
            $product->setIsArchived(true);
        }

        $this->entityManager->flush();
    }
}