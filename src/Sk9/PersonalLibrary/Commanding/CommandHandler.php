<?php

namespace Sk9\PersonalLibrary\Commanding;


use Sk9\PersonalLibrary\Commands\Command;

interface CommandHandler {

    public function handle(Command $command);
} 