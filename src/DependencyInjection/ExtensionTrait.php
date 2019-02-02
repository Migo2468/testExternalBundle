<?php
declare(strict_types=1);

namespace Migo2468\TestExternal\DependencyInjection;

/**
 * Trait ExtensionTrait
 * @package Migo2468\TestExternal\DependencyInjection
 */
trait ExtensionTrait
{
    private $configRoot = 'migo2468';
    private $configChild = 'test_external';
    private $configChildController = 'controller';
    private $configChildRepository = 'repository';
    private $configChildFactory = 'factory';
}