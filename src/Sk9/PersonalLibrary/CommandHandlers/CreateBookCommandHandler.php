<?php
/**
 * personalLibrary.
 * User: sebastian
 */

namespace Sk9\PersonalLibrary\CommandHandlers;


use PhpSpec\Exception\Exception;
use Sk9\PersonalLibrary\Commanding\CommandHandler;
use Sk9\PersonalLibrary\Commands\Command;
use Sk9\PersonalLibrary\Commands\CreateBookCommand;
use Sk9\PersonalLibrary\Domain\Book;

class CreateBookCommandHandler implements CommandHandler {

    public function handle(Command $command)
    {
        $book = null;

        try{
            if($command instanceof CreateBookCommand){
                $book = Book::createBook($command);
            }
        }catch(Exception $ex){
            throw new Exception('Command '.get_class($command) . ' could no\'t be instantiated
                or is no\'t of type CreateBookCommand');
        }

        return $book;
    }
}