<?php
declare(strict_types=1);

namespace Migo2468\TestExternal\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class TestExternalExtension
 * @package Migo2468\TestExternal\DependencyInjection
 */
class TestExternalExtension extends Extension
{
    use ExtensionTrait;

    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter(
            $this->configRoot.'.'.$this->configChild.'.'.$this->configChildController,
            $config[$this->configChild][$this->configChildController]
        );
        $container->setParameter(
            $this->configRoot.'.'.$this->configChild.'.'.$this->configChildFactory,
            $config[$this->configChild][$this->configChildFactory]
        );
        $container->setParameter(
            $this->configRoot.'.'.$this->configChild.'.'.$this->configChildRepository,
            $config[$this->configChild][$this->configChildRepository]
        );

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->configRoot;
    }
}