<?php

namespace spec\Sk9\PersonalLibrary;

use PhpSpec\ObjectBehavior;

class BookSpec extends ObjectBehavior
{
    function let()
    {
        $title = 'A Book Title';
        $author = 'Authorname';
        $pages = 520;
        $link = 'http://www.amazon.de';
        $this->beConstructedWith($title, $author, $pages, $link);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Sk9\PersonalLibrary\Book');
    }

    function it_should_return_the_title()
    {
        $this->getTitle()->shouldReturn('A Book Title');
    }

    function it_should_return_the_author()
    {
        $this->getAuthor()->shouldReturn('Authorname');
    }

    function it_should_return_the_overall_number_of_pages()
    {
        $this->getPages()->shouldReturn(520);
    }

    function it_contains_a_link_to_the_amazon_page()
    {
        $this->getAmazonLink()->shouldReturn('http://www.amazon.de');
    }
}
