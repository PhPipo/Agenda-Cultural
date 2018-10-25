<?php

namespace App\Messenger\Organization;

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

    }

}