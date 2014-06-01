<?php

namespace Sk9\PersonalLibrary\Domain;

class Book
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
     * @var int number of $pages
     */
    private $pages;

    /**
     * @var string $link to amazon
     * where you can actually get more information's about this book
     */
    private $link;

    /**
     * @param string $title the book
     */
    public function __construct($title, $author, $pages, $link)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->link = $link;
    }

    /**
     * @return string title of the book
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
       return $this->author;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function getAmazonLink()
    {
        return $this->link;
    }
}
