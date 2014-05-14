<?php

namespace spec\Sk9\PersonalLibrary;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BookSpec extends ObjectBehavior
{
    function let()
    {
        $title = 'A Book Title';
        $this->beConstructedWith($title);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Sk9\PersonalLibrary\Book');
    }

    function it_should_return_the_title()
    {

        $this->getTitle()->shouldReturn('A Book Title');
    }
}
