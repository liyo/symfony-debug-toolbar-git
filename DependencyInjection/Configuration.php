<?php

namespace Kendrick\SymfonyDebugToolbarGit\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Kendrick\SymfonyDebugToolbarGit\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('kendrick_symfony_debug_toolbar_git');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->scalarNode('repository_commit_url')->defaultValue('')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
