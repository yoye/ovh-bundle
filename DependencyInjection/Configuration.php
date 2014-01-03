<?php

namespace Betacie\Bundle\OvhBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('betacie_ovh');

        $rootNode
            ->children()
                ->scalarNode('application_key')->end()
                ->scalarNode('application_secret')->end()
                ->scalarNode('consumer_key')->end()
            ->end()
        ;

        return $treeBuilder;
    }

}
