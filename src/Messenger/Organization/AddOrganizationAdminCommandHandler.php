<?php

namespace App\Messenger\Organization;

use App\Repository\OrganizationRepository;

class AddOrganizationAdminCommandHandler
{

    /**
     * @var OrganizationRepository
     */
    private $repository;

    public function __construct(OrganizationRepository $repository)
    {
        $this->repository = $repository;
    }


    function __invoke(AddOrganizationAdminCommand $command)
    {
        $id = $command->getId();
        $newAdmin = $command->getNewAdmin();


        if ( !$id )
        {
            throw new \Exception('id not valid.');
        }
        if ( !$newAdmin )
        {
            throw new \Exception('new admin is not valid.');
        }


        $organization = $this->repository->find($id);

        if (!$organization)
        {
            throw new \Exception('organization not found.');
        }

        $organization->addAdmin($newAdmin);

        $this->repository->modify($organization);
    }

}