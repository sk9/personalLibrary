<?php

namespace Sk9\PersonalLibrary\Commanding;
use Sk9\PersonalLibrary\Commands\Command;

class CommandBus {

    protected $commandTranslator;

    function __construct(CommandTranslator $commandTranslator)
    {
        $this->commandTranslator = $commandTranslator;
    }

    public function execute(Command $command){
        $handler = $this->commandTranslator->toCommandHandler($command);
        return $handler->handle($command);
    }
} 