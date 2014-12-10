<?php

namespace Sk9\PersonalLibrary\Domain\Entities;

use Broadway\EventSourcing\EventSourcedAggregateRoot;
use Sk9\PersonalLibrary\Domain\Commands\CreateBookCommand;
use Sk9\PersonalLibrary\Domain\Events\BookWasCreated;

class Book extends EventSourcedAggregateRoot
{


    private $bookId;

    /**
     * @var string $title of the book
     */
    private $title;

    /**
     * @var string $author of the book
     */
    private $author;

    /**
     * @var int number of $pages
     */
    private $pages;

    /**
     * @var string $link to amazon
     * where you can actually get more information's about this book
     */
    private $link;


    /**
     * Factory method to create an invitation.
     */
    public static function createBook(CreateBookCommand $command)
    {
        $book = new Book();
        $book->bookId = $command->bookId;
        $book->author = $command->author;
        $book->title = $command->title;
        $book->pages = $command->pages;
        $book->link = $command->link;
        $book->apply(new BookWasCreated($command));

        return $book;
    }

    /**
     * Every aggregate root will expose its id.
     *
     * {@inheritDoc}
     */
    public function getAggregateRootId()
    {
        return $this->bookId;
    }
}
