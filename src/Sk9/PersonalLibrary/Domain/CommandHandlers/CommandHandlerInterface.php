<?php

namespace Sk9\PersonalLibrary\Domain\CommandHandlers;


use Sk9\PersonalLibrary\Domain\Commands\CommandInterface;

interface CommandHandlerInterface
{

    /**
     * @return \Sk9\PersonalLibrary\Domain\Entities\Book|null
     */
    public function handle(CommandInterface $command);
}
