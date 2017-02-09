<?php

namespace TomekWlod\Geocoder\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('tomekwlod_geocoder');
//        $rootNode
//            ->children()
//                ->scalarNode('baseUrl')
//                    ->isRequired()
//                ->end()
//            ->end()
//        ;
        
        return $treeBuilder;
    }
}