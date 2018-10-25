<?php

namespace App\Messenger\Organization;

class RemoveOrganizationCommand
{
    private $id;

    public function __construct(int $id)
    {
        $this->id=$id;
    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}