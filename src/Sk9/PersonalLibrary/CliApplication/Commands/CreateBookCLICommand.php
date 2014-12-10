<?php

namespace Sk9\PersonalLibrary\CliApplication\Commands;

use Broadway\CommandHandling\SimpleCommandBus;
use Broadway\UuidGenerator\Rfc4122\Version4Generator;
use Sk9\PersonalLibrary\Domain\Commands\CreateBookCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateBookCLICommand extends Command
{

    private $commandBus;
    private $generator;

    function __construct(SimpleCommandBus $commandBus, Version4Generator $generator)
    {
        $this->commandBus = $commandBus;
        $this->generator = $generator;
        parent::__construct();
    }

    protected function configure()
    {
        $this
          ->setName('library:createBook')
          ->setDescription('Create a new book for the library')
          ->addArgument(
            'title',
            InputArgument::REQUIRED,
            'Title of the book'
          )
          ->addArgument(
            'author',
            InputArgument::REQUIRED,
            'The author name of the book'
          )
          ->addArgument(
            'pages',
            InputArgument::OPTIONAL,
            'The number of pages the book has'
          )
          ->addArgument(
            'link',
            InputArgument::OPTIONAL,
            'A link to amazon to buy this book'
          );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $title = $input->getArgument('title');
        $author = $input->getArgument('author');
        $pages = $input->getArgument('pages');
        $link = $input->getArgument('link');

        $command = new CreateBookCommand($this->generator->generate(), $author, $title, $pages, $link);

        $this->commandBus->dispatch($command);
    }
}
