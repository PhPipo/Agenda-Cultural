<?php

namespace App\Messenger\Organization;

use App\Entity\Organization;
use App\Repository\OrganizationRepository;

class NewOrganizationCommandHandler
{
    /**
     * @var OrganizationRepository
     */
    private $repository;

    public function __construct(OrganizationRepository $repository)
    {
        $this->repository = $repository;
    }


    function __invoke(NewOrganizationCommand $command):Organization
    {
        $name = $command->getName();
        $description = $command->getDescription();
        $admins = $command->getAdmins();


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

        $this->repository->add($organization);
        return $organization;
    }

}