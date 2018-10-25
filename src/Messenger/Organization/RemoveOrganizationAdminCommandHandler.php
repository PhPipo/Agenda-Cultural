<?php

namespace App\Messenger\Organization;

use App\Entity\Organization;
use App\Repository\OrganizationRepository;

class RemoveOrganizationAdminCommandHandler
{

    /**
     * @var OrganizationRepository
     */
    private $repository;

    public function __construct(OrganizationRepository $repository)
    {
        $this->repository = $repository;
    }


    function __invoke(RemoveOrganizationAdminCommand $command):Organization
    {
        $id = $command->getId();
        $adminToDelete = $command->getAdminToDelete();


        if ( !$id )
        {
            throw new \Exception('id not valid.');
        }


        $organization = $this->repository->find($id);

        if (!$organization)
        {
            throw new \Exception('organization not found.');
        }

        $this->repository->remove($organization);

        return $organization;
    }

}