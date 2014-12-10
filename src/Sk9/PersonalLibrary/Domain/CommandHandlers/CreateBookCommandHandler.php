<?php

namespace Sk9\PersonalLibrary\Domain\CommandHandlers;

use Sk9\PersonalLibrary\Domain\Commands\CreateBookCommand;
use Sk9\PersonalLibrary\Domain\Entities\Book;

class CreateBookCommandHandler extends \Broadway\CommandHandling\CommandHandler
{

    /**
     * A new book aggregate root is created.
     */
    protected function handleCreateBookCommand(CreateBookCommand $command)
    {
        $book = Book::createBook($command);
    }
}
