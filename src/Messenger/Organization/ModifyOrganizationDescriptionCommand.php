<?php

namespace App\Messenger\Organization;

class ModifyOrganizationDescriptionCommand
{
    private $id;
    private $newDescription;


    public function __construct(int $id, string $newDescription)
    {
        $this->id=$id;
        $this->newDescription=$newDescription;
    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNewDescription()
    {
        return $this->newDescription;
    }
}