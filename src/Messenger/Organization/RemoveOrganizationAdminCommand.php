<?php

namespace App\Messenger\Organization;

use App\Entity\User;

class RemoveOrganizationAdminCommand
{
    private $id;
    private $adminToDelete;


    public function __construct(int $id, User $adminToDelete)
    {
        $this->id=$id;
        $this->adminToDelete=$adminToDelete;
    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getAdminToDelete(): User
    {
        return $this->adminToDelete;
    }
}