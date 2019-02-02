<?php
declare(strict_types=1);

namespace Migo2468\TestExternal;

use Migo2468\TestExternal\DependencyInjection\TestExternalExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class TestExternalBundle
 * @package Migo2468\TestExternal
 */
class TestExternalBundle extends Bundle
{
    /**
     * @return TestExternalExtension|null|\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new TestExternalExtension();
        }

        return $this->extension;
    }
}