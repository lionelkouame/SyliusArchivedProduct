<?php

declare(strict_types=1);

namespace App\MassAction;

use App\Entity\Product\Product;
use Doctrine\ORM\EntityManagerInterface;
use Sylius\Component\Core\Repository\ProductRepositoryInterface;

class MassActionManager
{
    protected EntityManagerInterface $entityManager;

    protected ProductRepositoryInterface $productRepository;

    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function archived(array $ids): void
    {
        foreach ($ids as $k => $id) {
            $ids[$k] = (int) $id;
        }
        $products = $this->entityManager->getRepository(Product::class)->findBy(['id' => $ids]);

        /** @var Product $product */
        foreach ($products as $product) {
            if($product->isArchived()) {
                $product->setIsArchived(false);
            } else {
                $product->setIsArchived(true);
            }
        }

        $this->entityManager->flush();
    }
}
