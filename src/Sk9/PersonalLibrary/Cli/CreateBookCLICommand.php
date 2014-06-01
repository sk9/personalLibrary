<?php

namespace Sk9\PersonalLibrary\Cli;

use Sk9\PersonalLibrary\Commanding\CommandBus;
use Sk9\PersonalLibrary\Commands\CreateBookCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateBookCLICommand extends Command {

    private $commandBus;

    function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('libray:createBook')
            ->setDescription('Create a new book for the library')
            ->addArgument(
                'title',
                InputArgument::REQUIRED,
                'Title of the book')
            ->addArgument(
                'author',
                InputArgument::REQUIRED,
                'The author name of the book'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $title = $input->getArgument('title');
        $author= $input->getArgument('author');

        $command = new CreateBookCommand($author,$title);

        $response = $this->commandBus->execute($command);

        $output->writeln($response);
        $output->writeln('Book Created');
    }
}
