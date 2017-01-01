<?php

namespace ModuleBundle\Routing;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Finder\Finder;

class AdvancedLoader extends Loader
{
    public function load($resource, $type = null)
    {
        $collection = new RouteCollection();
        
        $searchPath = __DIR__.'/../CustomModules/';
        $finder     = new Finder();
        $finder->files()->in($searchPath)->name('*Bundle.php');
        
        foreach ($finder as $file) {
            $resource = '@ModuleBundle/CustomModules/'.$file->getRelativePath().'/Resources/config/routing.yml';
            $type = 'yaml';
            $importedRoutes = $this->import($resource, $type);
            $collection->addCollection($importedRoutes);
        }
        return $collection;
    }

    public function supports($resource, $type = null)
    {
        return 'advanced_extra' === $type;
    }
}