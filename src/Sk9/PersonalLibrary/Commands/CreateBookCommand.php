<?php

namespace Sk9\PersonalLibrary\Commands;


class CreateBookCommand implements CommandInterface
{
    /**
     * @var string $title of the book
     */
    private $title;

    /**
     * @var string $author of the book
     */
    private $author;

    /**
     * @var int number of $pages of the book has
     */
    private $pages;

    /**
     * @var string A $link to amazon to buy this book
     */
    private $link;

    function __construct($author, $title, $pages, $link)
    {
        $this->author = $author;
        $this->title = $title;
        $this->pages = $pages;
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

}