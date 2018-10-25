<?php

namespace App\Messenger\Organization;

use App\Repository\OrganizationRepository;

class ModifyOrganizationDescriptionCommandHandler
{

    /**
     * @var OrganizationRepository
     */
    private $repository;

    public function __construct(OrganizationRepository $repository)
    {
        $this->repository = $repository;
    }


    function __invoke(ModifyOrganizationDescriptionCommand $command)
    {
        $id = $command->getId();
        $newDescription = $command->getNewDescription();


        if ( !$id )
        {
            throw new \Exception('id not valid.');
        }
        if ( !$newDescription )
        {
            throw new \Exception('new description is not valid.');
        }


        $organization = $this->repository->find($id);

        if (!$organization)
        {
            throw new \Exception('organization not found.');
        }

        $organization->setDescription($newDescription);

        $this->repository->modify($organization);
    }

}