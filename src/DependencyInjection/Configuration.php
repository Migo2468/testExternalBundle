<?php
declare(strict_types=1);

namespace Migo2468\TestExternal\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/***
 * Class Configuration
 * @package Migo2468\TestExternal\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    use ExtensionTrait;

    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root($this->configRoot);

        $rootNode
            ->children()
            ->arrayNode($this->configChild)
            ->addDefaultsIfNotSet()
            ->children()
            ->scalarNode($this->configChildController)
            ->cannotBeEmpty()
            ->defaultValue('src\Controller')
            ->end()
            ->scalarNode($this->configChildRepository)
            ->cannotBeEmpty()
            ->defaultValue('src\Repository')
            ->end()
            ->scalarNode($this->configChildFactory)
            ->cannotBeEmpty()
            ->defaultValue('src\Factory')
            ->end()
            ->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}