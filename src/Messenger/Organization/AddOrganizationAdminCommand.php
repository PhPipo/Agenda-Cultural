<?php

namespace App\Messenger\Organization;

use App\Entity\User;

class AddOrganizationAdminCommand
{
    private $id;
    private $newAdmin;


    public function __construct(int $id, User $newAdmin)
    {
        $this->id=$id;
        $this->newAdmin=$newAdmin;
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
    public function getNewAdmin(): User
    {
        return $this->newAdmin;
    }
}