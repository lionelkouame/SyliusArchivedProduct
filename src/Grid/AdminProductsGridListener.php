<?php

declare(strict_types=1);
namespace App\Grid;

use Sylius\Component\Grid\Definition\ActionGroup;
use Sylius\Component\Grid\Definition\Field;
use Sylius\Component\Grid\Definition\Grid;
use Sylius\Component\Grid\Event\GridDefinitionConverterEvent;
use Sylius\Component\Grid\Definition\Action;

final class AdminProductsGridListener
{
    public function editFields(GridDefinitionConverterEvent $event): void
    {
        /** @var Grid $grid */
        $grid = $event->getGrid();

    }
}
