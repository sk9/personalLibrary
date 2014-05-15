<?php

namespace spec\Sk9\PersonalLibrary;

use PhpSpec\ObjectBehavior;

class IsbnSpec extends ObjectBehavior
{

    const VALID_ISBN = '978-0132350884';
    const INVALID_ISBN = '444XXX33333';

    function let()
    {
        $this->beConstructedWith($this::VALID_ISBN);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Sk9\PersonalLibrary\Isbn');
    }

    function it_should_be_a_valida_isbn_number()
    {
        $this->shouldBeValidIsbn($this::VALID_ISBN);
    }

    function it_has_a_valid_isbn()
    {
        $this->getIsbn()->shouldReturn($this::VALID_ISBN);
    }

    function it_throws_an_exception_when_initialized_with_invalid_isdbn()
    {
        $this->shouldThrow('\InvalidArgumentException')->during__construct($this::INVALID_ISBN);
    }
}
