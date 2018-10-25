<?php

namespace App\Messenger\Organization;

use App\Entity\Organization;
use App\Messenger\Organization\NewOrganizationCommand;

class NewOrganizationCommandHandler
{
    /**
     * @var NewOrganizationCommand
     */
    private $command;

    public function __construct(NewOrganizationCommand $command)
    {
        $this->command = $command;
    }


    function __invoke()
    {
        $name = $this->command->getName();
        $description = $this->command->getDescription();
        $admins = $this->command->getAdmins();


        if ( !$name )
        {
            throw new \Exception('name not valid.');
        }
        if ( !$name )
        {
             throw new \Exception('description not valid.');
        }
        if ( !$admins )
        {
            throw new \Exception('no admin passed, at least one must be provided.');
        }



        $organization = new Organization();

        $organization->setName($name);
        $organization->setDescription($description);

        foreach ($admins as $admin)
        {
            $organization->addAdmin($admin);
        }
    }

}