<?php

namespace Sk9\PersonalLibrary\Domain\Commands;


abstract class BookCommand
{

    public $bookId;

    public function __construct($bookId)
    {
        $this->bookId = $bookId;
    }
} 