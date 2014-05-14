<?php

namespace Sk9\PersonalLibrary;

class Book
{
    /**
     * @var string $title of the book
     */
    private $title;

    /**
     * @param string $title the book
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * @return string title of the book
     */
    public function getTitle()
    {
        return $this->title;
    }
}

