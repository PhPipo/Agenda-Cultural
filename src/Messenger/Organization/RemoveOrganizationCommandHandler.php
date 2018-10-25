<?php

namespace App\Messenger\Organization;

use App\Entity\Organization;
use App\Repository\OrganizationRepository;

class RemoveOrganizationCommandHandler
{
    /**
     * @var OrganizationRepository
     */
    private $repository;

    public function __construct(OrganizationRepository $repository)
    {
        $this->repository = $repository;
    }


    function __invoke(RemoveOrganizationCommand $command):Organization
    {
        $id = $command->getId();


        if ( !$id )
        {
            throw new \Exception('id not valid.');
        }

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