<?php

namespace Sk9\PersonalLibrary\Domain\CommandHandlers;

use PhpSpec\Exception\Exception;
use Sk9\PersonalLibrary\Domain\Commands\CommandInterface;
use Sk9\PersonalLibrary\Domain\Commands\CreateBookCommand;
use Sk9\PersonalLibrary\Domain\Entities\Book;

class CreateBookCommandHandler implements CommandHandlerInterface
{

    public function handle(CommandInterface $command)
    {
        $book = null;

        try {
            if ($command instanceof CreateBookCommand) {
                $book = Book::createBook($command);
            }
        } catch (Exception $ex) {
            throw new Exception('Command ' . get_class($command) . ' could no\'t be instantiated
                or is no\'t of type CreateBookCommand');
        }

        return $book;
    }
}
