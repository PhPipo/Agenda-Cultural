<?php

namespace App\Messenger\Organization;

class NewOrganizationCommand
{
    private $name;
    private $description;
    private $admins;


    public function __construct(string $name, string $description, $admins)
    {
        $this->name=$name;
        $this->description=$description;
        $this->admins=$admins;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getAdmins()
    {
        return $this->admins;
    }
}