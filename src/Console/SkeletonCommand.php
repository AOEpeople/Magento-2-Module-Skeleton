<?php

namespace Aoe\Skeleton\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SkeletonCommand
 *
 * @category Api
 * @package  Aoe\Skeleton\Console
 * @author   AOE Magento Team <team-magento@aoe.com>
 * @license  none none
 * @link     www.aoe.com
 */
class SkeletonCommand extends Command
{
    const NAME_ARGUMENT = "name";

    const NAME_OPTION = "option";

    /**
     * @param InputInterface  $input  Input
     * @param OutputInterface $output Output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        $name = $input->getArgument(self::NAME_ARGUMENT);
        /** @noinspection PhpUnusedLocalVariableInspection */
        $option = $input->getOption(self::NAME_OPTION);
        $output->writeln("Welcome to AOE's Skeleton " . $name);
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $description = "Option functionality";
        $mode = InputOption::VALUE_NONE;

        $this->setName("aoe:skeleton");
        $this->setDescription("This is a simple Console Command");

        $this->setDefinition(
            [
                new InputArgument(self::NAME_ARGUMENT, InputArgument::OPTIONAL, "Name"),
                new InputOption(self::NAME_OPTION, "-a", $mode, $description),
            ]
        );

        parent::configure();
    }
}