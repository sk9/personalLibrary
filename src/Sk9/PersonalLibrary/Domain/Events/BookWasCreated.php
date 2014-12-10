<?php

namespace Sk9\PersonalLibrary\Domain\Events;

use Sk9\PersonalLibrary\Domain\Commands\CreateBookCommand;

class BookWasCreated extends BookEvent
{

    /**
     * @var string $title of the book
     */
    public $title;

    /**
     * @var string $author of the book
     */
    public $author;

    /**
     * @var int number of $pages of the book has
     */
    public $pages;

    /**
     * @var string A $link to amazon to buy this book
     */
    public $link;

    public function __construct(CreateBookCommand $command)
    {
        parent::__construct($command->bookId);
        $this->title = $command->title;
        $this->author = $command->author;
        $this->pages = $command->pages;
        $this->link = $command->link;
    }

}