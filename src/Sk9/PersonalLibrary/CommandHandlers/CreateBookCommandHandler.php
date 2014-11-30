<?php
/**
 * personalLibrary.
 * User: sebastian
 */

namespace Sk9\PersonalLibrary\CommandHandlers;


use PhpSpec\Exception\Exception;
use Sk9\PersonalLibrary\Commanding\CommandHandlerInterface;
use Sk9\PersonalLibrary\Commands\CommandInterface;
use Sk9\PersonalLibrary\Commands\CreateBookCommand;
use Sk9\PersonalLibrary\Domain\Book;

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
