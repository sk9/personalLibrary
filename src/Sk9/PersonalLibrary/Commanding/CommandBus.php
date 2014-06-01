<?php

namespace Sk9\PersonalLibrary\Commanding;


class CommandBus {

    protected $commandTranslator;

    function __construct(CommandTranslator $commandTranslator)
    {
        $this->commandTranslator = $commandTranslator;
    }

    public function execute($command){
        $handler = $this->commandTranslator->toCommandHandler($command);
        $handler->handle();
    }
} 