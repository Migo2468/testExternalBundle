<?php
declare(strict_types=1);

namespace Migo2468\TestExternal\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DictateStructureCommand
 * @package Migo2468\TestExternal\Command
 */
class DictateStructureCommand extends Command
{
    /** @var string */
    private $controller;
    /** @var string */
    private $repository;
    /** @var string */
    private $factory;

    /**
     * DictateStructureCommand constructor.
     * @param string $controller
     * @param string $repository
     * @param string $factory
     */
    public function __construct(
        string $controller,
        string $repository,
        string $factory
    )
    {
        parent::__construct();

        $this->controller = $controller;
        $this->repository = $repository;
        $this->factory    = $factory;
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('migo2468:dictate-structure')
            ->setDescription('Verifies application development structure');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Dictated' . PHP_EOL);
        $output->write($this->controller . PHP_EOL);
        $output->write($this->repository . PHP_EOL);
        $output->write($this->factory . PHP_EOL);
    }
}