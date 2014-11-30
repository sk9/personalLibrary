<?php

namespace Sk9\PersonalLibrary\Domain;

use Prophecy\Exception\InvalidArgumentException;

class Isbn
{
    public static $validationPattern = '/((978[\--– ])?[0-9][0-9\--– ]{10}[\--– ][0-9xX])|((978)?[0-9]{9}[0-9Xx])/';
    private $isbn = null;

    public function __construct($isbn)
    {
        if (!self::isValidIsbn($isbn)) {
            throw new InvalidArgumentException('Invalid ISBN Number given.');
        }

        $this->isbn = $isbn;
    }

    public function isValidIsbn($isbnNumber)
    {
        $res = preg_match($this::$validationPattern, $isbnNumber);

        return $res === 1 ? true : false;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
}
