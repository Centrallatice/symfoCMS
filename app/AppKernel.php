<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Finder\Finder;
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new AdminBundle\AdminBundle(),
            new HomeBundle\HomeBundle(),
            new PageBundle\PageBundle(),
            new KMS\FroalaEditorBundle\KMSFroalaEditorBundle(),
            new ArticleBundle\ArticleBundle(),
            new ModuleBundle\ModuleBundle(),
            new MenuBundle\MenuBundle(),
            new TemplateBundle\TemplateBundle(),
            new Symplify\ModularRouting\SymplifyModularRoutingBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Vich\UploaderBundle\VichUploaderBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }
        
        
        $searchPath = __DIR__.'/../src/ModuleBundle/CustomModules/';
        $finder     = new Finder();
        $finder->files()->in($searchPath)->name('*Bundle.php');
        
        foreach ($finder as $file) {
            $path       = substr($file->getRealpath(), strlen($searchPath) -7,-4);
            $parts      = explode('\\', $path);
            $class      = array_pop($parts);
            $namespace  = implode('\\', $parts);
            $class      = "ModuleBundle\CustomModules\\".$namespace.'\\'.$class;
            
            if(!in_array($class, $bundles)):
                $bundles[]  = new $class();
            endif;
        }
        
        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
