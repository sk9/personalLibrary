<?php

namespace Sk9\PersonalLibrary\Commanding;


use Sk9\PersonalLibrary\Commands\CommandInterface;

interface CommandHandlerInterface
{

    /**
     * @return \Sk9\PersonalLibrary\Domain\Book|null
     */
    public function handle(CommandInterface $command);
}
