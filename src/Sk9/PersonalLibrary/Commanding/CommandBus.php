<?php

namespace Sk9\PersonalLibrary\Commanding;

use Sk9\PersonalLibrary\Commands\CommandInterface;

class CommandBus
{

    protected $commandTranslator;

    function __construct(CommandTranslator $commandTranslator)
    {
        $this->commandTranslator = $commandTranslator;
    }

    public function execute(CommandInterface $command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);

        return $handler->handle($command);
    }
}
