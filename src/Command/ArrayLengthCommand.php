<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class ArrayLengthCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:array-length';

    protected function configure(): void
    {
        $this
            // configure an argument
            ->addArgument('arrayLength', InputArgument::REQUIRED, 'Array Length')
            // ...
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))

        //create array
        $array = array();

        //pushing random elements in array
        for ($i=0;$i<$input->getArgument('arrayLength');$i++){
            array_push($array,rand(1,999));
        };

        //priting the results
        $output->writeln('En Büyük Sayı : ' . max($array) . ' ' . 'En Küçük Sayı : ' . min($array));

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}