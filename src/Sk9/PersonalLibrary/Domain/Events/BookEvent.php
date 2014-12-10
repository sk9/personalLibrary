<?php

namespace Sk9\PersonalLibrary\Domain\Events;


abstract class BookEvent
{

    public $bookId;

    public function __construct($bookId)
    {
        $this->bookId = $bookId;
    }
} 