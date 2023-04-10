<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\AdminUser as BaseAdminUser;

/**
 * @ORM\Entity
 *
 * @ORM\Table(name="sylius_admin_user")
 */
class AdminUser extends BaseAdminUser
{
    /** @ORM\Column(type="boolean", nullable=true) */
    protected $isArchivedMode = false;

    public function isArchivedMode(): bool
    {
        return $this->isArchivedMode;
    }

    public function setIsArchivedMode(bool $isArchivedMode): void
    {
        $this->isArchivedMode = $isArchivedMode;
    }
}
