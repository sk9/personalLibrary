<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 31.05.14
 * Time: 00:10
 */

namespace Sk9\PersonalLibrary;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

namespace Sk9\PersonalLibrary\Cli;

class CreateBookCommand extends Command {

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



        $output->writeln('Book Created');
    }
}
