<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): FormBuilderInterface
    {
        $builder->add('isArchived', CheckboxType::class, [
            'label' => 'sylius.form.product.is_archived',
            'required' => false,
        ]);

        return $builder;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
