<?php

namespace Sk9\PersonalLibrary\CliApplication\Commands;

use Sk9\PersonalLibrary\Domain\CommandHandlers\CommandBus;
use Sk9\PersonalLibrary\Domain\Commands\CreateBookCommand;
use Sk9\PersonalLibrary\Domain\Entities\Book;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateBookCLICommand extends Command
{

    private $commandBus;

    function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
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

        $command = new CreateBookCommand($author, $title, $pages, $link);

        $response = $this->commandBus->execute($command);

        // for testing only
        if ($response instanceof Book) {
            $output->writeln('Book Created');
        }
    }
}
