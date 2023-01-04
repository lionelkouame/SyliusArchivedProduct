<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected bool $isArchived;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }


    /**
     * @return bool
     */
    public function isArchived(): ?bool
    {
        return $this->isArchived;
    }

    /**
     * @param bool $isArchived
     */
    public function setIsArchived(bool $isArchived): void
    {
        $this->isArchived = $isArchived;
    }

}
