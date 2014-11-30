<?php

namespace Sk9\PersonalLibrary\Commanding;


use PhpSpec\Exception\Exception;

class CommandTranslator
{

    /**
     * @param \Sk9\PersonalLibrary\Commands\Command $command
     */
    public function toCommandHandler($command)
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
