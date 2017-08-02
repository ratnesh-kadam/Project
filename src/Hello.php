<?php
namespace Migration;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
//use League\Csv\Reader;

class Hello extends Command
{
    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('app:create-user')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a new user.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to create a user...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
	$filename = '/home/ratnesh/lampstack/apache2/htdocs/Project/catalog_product.csv';
	if (file_exists($filename)){
		$csv = \League\Csv\Reader::createFromPath($filename);
		$headers = $csv->fetchOne();

		//get 2 rows starting from the 1st row
		$res = $csv->setOffset(1)->setLimit(3)->fetchAssoc();
		foreach($res as $r)
			print_r($r); //returns the CSV document as a string
	}
    }
}
?>
