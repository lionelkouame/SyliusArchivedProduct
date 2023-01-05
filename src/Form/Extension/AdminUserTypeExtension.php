<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\CoreBundle\Form\Type\User\AdminUserType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

final class AdminUserTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): FormBuilderInterface
    {
        $builder->add('isArchivedMode', CheckboxType::class, [
            'label' => 'sylius.form.admin_user.is_archived_mode',
            'required' => false,
        ]);

        return $builder;
    }

    public static function getExtendedTypes(): iterable
    {
        return [AdminUserType::class];
    }
}
