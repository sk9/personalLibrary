<?php
/**
 * personalLibrary.
 * User: sebastian
 */

namespace Sk9\PersonalLibrary\CommandHandlers;


use Sk9\PersonalLibrary\Commanding\CommandHandler;

class CreateBookCommandHandler implements CommandHandler {

    public function handle()
    {
        var_dump('Book is almost created');
    }
}