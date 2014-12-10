<?php

namespace Sk9\PersonalLibrary\Domain\Commands;

class CreateBookCommand extends BookCommand
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

    function __construct($bookId, $author, $title, $pages, $link)
    {
        parent::__construct($bookId);
        $this->author = $author;
        $this->title = $title;
        $this->pages = $pages;
        $this->link = $link;
    }

}
