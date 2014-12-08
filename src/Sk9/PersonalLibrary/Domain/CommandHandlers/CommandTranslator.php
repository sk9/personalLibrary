<?php

namespace Sk9\PersonalLibrary\Domain\CommandHandlers;

use PhpSpec\Exception\Exception;
use Sk9\PersonalLibrary\Domain\Commands\CommandInterface;

class CommandTranslator
{

    /**
     * @param \Sk9\PersonalLibrary\Domain\Commands\CommandInterface $command
     */
    public function toCommandHandler(CommandInterface $command)
    {
        $handler = str_replace('Command', 'CommandHandler', get_class($command));

        if (!class_exists($handler)) {
            $msg = "CommandHandler {$handler} does not exists";
            throw new Exception($msg);
        }

        //different handlers will be later handled by the DI ccontainer
        //therefore they have to be registered in the
        return new $handler;
    }
}
