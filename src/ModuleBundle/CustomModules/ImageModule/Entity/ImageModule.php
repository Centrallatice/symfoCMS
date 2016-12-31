<?php

namespace ModuleBundle\CustomModules\ImageModule\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageModule
 *
 * @ORM\Table(name="Image_module")
 * @ORM\Entity(repositoryClass="ModuleBundle\CustomModules\ImageModuleRepository\ImageModuleRepository")
 */
class ImageModule extends Module
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


    /**
     * Set url
     *
     * @param string $url
     *
     * @return BannerModule
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    public function getType(){
        return 'Image';
    }
}
