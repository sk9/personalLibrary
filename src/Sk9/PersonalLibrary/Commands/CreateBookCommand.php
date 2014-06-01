<?php

namespace Sk9\PersonalLibrary\Commands;


class CreateBookCommand {
    /**
     * @var string $title of the book
     */
    private $title;

    /**
     * @var string $author of the book
     */
    private $author;

    function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

}